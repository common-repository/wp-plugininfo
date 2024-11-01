<?php
/*
Plugin Name: WP-pluginInfo
Plugin URI: http://fusi0n.org/category/wp-plugininfo
Description: Creates a WordPress shortcode to fetch plugin information
Version: 1.0
Author: Pier-Luc Petitclerc
Author URI: http://fusi0n.org
Text Domain: plugininfo
License: GPL
*/

class WP_PluginInfo {

  private $template;

  /**
   * PHP5 Class Constructor. Registers Shortcodes with WordPress
   * @param null
   * @return void
   * @access public
   * @since 1.0
   * @author Pier-Luc Petitclerc <pL@fusi0n.org>
   */
  public function __construct() {
    add_shortcode('pi', array($this, 'wppi_shortcode'));
    add_shortcode('plugininfo', array($this, 'wppi_shortcode'));
  }

  /**
   * Parses content for shortcode and substitutes accordingly
   * @param array $attr Shortcode Attributes
   * @param string $content Content between [shortcode] and [/shortcode]
   * @param string $code Shortcode used
   * @return string Content with shortcode substituted.
   * @access public
   * @since 1.0
   * @author Pier-Luc Petitclerc <pL@fusi0n.org>
   */
  public function wppi_shortcode($attr, $content=null, $code) {
    $output = array();
    include ABSPATH.'wp-admin/includes/plugin.php';
    if (!empty($attr)) {
      foreach ($attr as $plugin) {
        $pluginData = get_plugins('/'.$plugin);
        if (empty($pluginData)) { $pluginData = get_plugins('/'.$plugin.'/'.$plugin); }
        foreach ($pluginData as $data) { $output[] = $this->wppi_format($data, $content); }
      }
    }
    else {
      $activePlugins = (array)get_option('active_plugins', array());
      //$pluginData = get_plugins();
      foreach ($activePlugins as $plugin) {
        $p = substr($plugin, 0, strpos($plugin, '/'));
        $pluginData = get_plugins('/'.$p);
        foreach ($pluginData as $data) { $output[] = $this->wppi_format($data, $content); }
      }
    }
    return implode('', $output);
  }

  /**
   * Template-enabled rendering of plugin info
   * @param array $data The get_plugins() array
   * @return string The substituted format
   * @access private
   * @since 1.0
   * @author Pier-Luc Petitclerc <pL@fusi0n.org>
   */
  private function wppi_format($data, $tpl=null) {
    if (!empty($tpl)) { $this->template = $tpl; }
    else {
      if (empty($this->template)) {
        $this->template = file_get_contents(dirname(__FILE__).'/template.php');
      }
    }

    $format = array('%plugin_url%'  => $data['PluginURI'],
                    '%name%'        => $data['Name'],
                    '%version%'     => str_replace(',', '.', $data['Version']),
                    '%author%'      => $data['Author'],
                    '%author_url%'  => $data['AuthorURI'],
                    '%description%' => strip_tags($data['Description']),
                    '%extend_url%'  => 'http://wordpress.org/extend/plugins/'.str_replace(' ', '-', strtolower($data['Name'])).'/'
                    );
    return str_replace(array_keys($format), array_values($format), $this->template);
  }
}
$wppi = new WP_PluginInfo();