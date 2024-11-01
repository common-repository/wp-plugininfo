=== WP-pluginInfo ===
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=pL%40fusi0n%2eorg&lc=CA&item_name=Pier%2dLuc%20Petitclerc%20%2d%20Code%20Support&currency_code=CAD&bn=PP%2dDonationsBF%3abtn_donate_SM%2egif%3aNonHostedGuest
Tags: plugin,plugins,list,shortcode
Requires at least: 2.5
Tested up to: 3.0.1
Stable tag: 1.0
Author: Pier-Luc Petitclerc
Author URI: https://fusi0n.org

WP-pluginInfo allows you to use a shortcode to list information about your activated plugins.

== Description ==

WP-pluginInfo allows you to use a shortcode to list information about your activated plugins.

Valid shortcode syntax:

* [plugininfo /]: Lists all activated plugin using markup in WP-pluginInfo's template.php
* [plugininfo]<p><a href="%plugin_url%" target="_blank">%name%</a> version %version% by <a href="%author_url%" target="_blank">%author%</a>: %description%</p>[/pi]: Lists all activated plugin using the markup between shortcode.
* [plugininfo wp-plugininfo /]: Lists information about specified plugin (in this case, wp-plugininfo). Separate items with space.

Keep in mind there are two shortcodes that do the same thing: [pi] and [plugininfo].

If you like this plugin, please consider [giving your honest rating](http://wordpress.org/extend/plugins/wp-plugininfo/), blogging/tweeting about it or [donating](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=pL%40fusi0n%2eorg&lc=CA&item_name=Pier%2dLuc%20Petitclerc%20%2d%20Code%20Support&currency_code=CAD&bn=PP%2dDonationsBF%3abtn_donate_SM%2egif%3aNonHostedGuest).
Thank you!

== Installation ==

* Use WordPress’ builtin plugin installation system located in your WordPress admin panel, labeled as the "Add New" options in the "Plugins" menu to upload the zip file you downloaded.
* Extract the zip file and upload the resulting "wp-plugininfo" folder on your server under `wp-content/plugins/`.

All you need to do after that is navigate to your blog’s administration panel, go in the plugins section and enable WP-pluginInfo.

Then simply insert the shortcode [plugininfo], [plugin] or [pi] to list all plugins and/or [plugininfo slug=], [plugin slug=] or [pi slug=] in a post or page.

For more information, see the ["Installing Plugins" article on the WordPress Codex](http://codex.wordpress.org/Managing_Plugins#Installing_Plugins).

== Frequently Asked Questions ==

= Any technical requirements? =

* You will need PHP5. PHP4 has been [officially discontinued since August 8 2008](http://www.php.net/archive/2007.php#2007-07-13-1). If this plugin gives you PHP errors (T_STATIC, T_OLD_FUNCTION), you should strongly consider upgrading your PHP installation.
* You will also need at least WordPress 2.5 since WP-pluginInfo is using WordPress' [ShortCode API](http://codex.wordpress.org/Shortcode_API).

= Markup Variables =

Here are the available markup variables and their README equivalencies.

* %plugin_url%: Plugin URI
* %name%: Plugin Name
* %version%: Version
* %author%: Author
* %author_url%: Author URI
* %description%: : Description (stripped of HTML for security)
* %extend_url%: An automagic guess at the WordPress Extend plugin URL


= Available Shortcodes =

Valid shortcode syntax:

* [plugininfo /]: Lists all activated plugin using markup in WP-pluginInfo's template.php
* [plugininfo]<p><a href="%plugin_url%" target="_blank">%name%</a> version %version% by <a href="%author_url%" target="_blank">%author%</a>: %description%</p>[/pi]: Lists all activated plugin using the markup between shortcode.
* [plugininfo wp-plugininfo /]: Lists information about specified plugin (in this case, wp-plugininfo). Separate items with space.

Keep in mind there are two shortcodes that do the same thing: [pi] and [plugininfo].

== ChangeLog ==

= 1.0 =

* Initial release
