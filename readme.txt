=== WP Mobile Detect ===
Contributors: professor44
Donate link: http://jes.se.com/
Tags: mobile, responsive, 
Requires at least: 2.8.4
Tested up to: 3.4
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

WP Mobile Detect by Jesse Friedman creates an easy way for the User Admin to control when content is shown or hid based on visitor device
== Description ==

One of the hardest parts of building Responsive WordPress themes is maintaining responsive integrity after the site goes live. User Admins can have limited coding abilities which can prevent them from maintaining responsiveness in themes. WP Mobile Detect aims to make it extremely easy for anyone to wrap content in the editor with shortcodes which will hide content based on visitor device at the server level.

No longer do we need to rely on display:none; or other techniques to hide content for mobile devices. Instead we can replace content with alternatives. When a full-size infographic in your post is unknowingly displayed on a visitors phone we can consider that an Non-user initiated download. In other words that visitor had no idea what they were getting into and you possibly just choked their bandwidth. 

WP Mobile detect gives you the ability to wrap that infographic in a [notdevice][/notdevice] shortcode so at the server level WordPress will decide to show that content only if the user is NOT on a phone or tablet. Alternatively you can wrap a link and corresponding text to that info graphic in a [device][/device] shortcode as a way for the visitor to consume that content if they so choose.

This plugin is based on the <a href="http://code.google.com/p/php-mobile-detect/" target="_blank">PHP Mobile Detect class</a>

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload the `wp-mobile-detect` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Start using the shortcodes in your content

== Frequently Asked Questions ==

= What shortcodes are available with this plugin =

* [phone]Put content here that you only want displayed on Phones NOT Tablets or Desktops[/phone] 
* [tab]Put content here that you only want displayed on Tablets NOT Phones or Desktops[/tab]
* [device]Put content here that you only want displayed on Phones OR Tablets NOT Desktops[/device]
* [notphone]Put content here that you only want displayed on Tablets OR Desktops NOT Phones[/notphone]
* [nottab]Put content here that you only want displayed on Phones OR Desktops NOT Tablets[/nottab]
* [notdevice]Put content here that you only want displayed on Desktops NOT Phones OR Tablets[/notdevice]

= Are you planning on adding more shortcodes in the future? =

Yes I plan on adding shortcodes for 
* Android Only
* iOS Only 
* Mobile Browsers
* And More

If you want to see some rate and comment on this plugin

= What about functions? =

For now I've only made shortcodes but you can either call the do shortcode function in your theme or write your own functions.  In future releases functions will come with all shortcodes

== Changelog ==

= 1.0.0 =

Initial release.



