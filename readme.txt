=== WP Modalplate ===

Contributors: jamesdbruner
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=SMN9R273TEEY8
Tags: wp modalplate, modalplate, modal window, modal
Requires at least: 3.5
Tested up to: 4.0
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A quick and simple plugin for producing responsive modals

== Description ==

WP Modalplate is possibly the easiest and cleanest way to add responsive modals to your website!  To see an example you can go to <a href="http://modalplate.jamesdbruner.com">modalplate.jamesdbruner.com</a> and take a look.

<h4>How to use it</h4>

There are two shortcodes here and you need to use both.  Here's an example of how to use these shortcodes together:

`
[modalplate_trigger]Example Button[/modalplate_trigger]
[modalplate title="Example Title"]Example content[/modalplate]
`

**NOTE FOR THEME DEVELOPERS:** This plugin makes use of both *wp_head()* and *wp_footer()* so if your theme is missing either you may experience issues using this plugin.

Special thanks to <a href="https://twitter.com/chrishumboldt">@chrishumboldt</a> for creating the original <a href="http://getwebplate.com/plugins/modalplate">Modalplate plugin</a>.  Check out <a href="http://getwebplate.com/">WebPlate</a> to see more of his awesome work. 

== Installation ==

1.   Upload `wp-modalplate.zip` to the `/wp-content/plugins/` directory
2.   Activate the plugin through the 'Plugins' menu in WordPress
3.   Use the shortcodes [modalplate_trigger][/modalplate_trigger] and [modalplate][/modalplate] in the page/post you want

== Screenshots ==

1. Example

== Frequently Asked Questions ==

None so far...

== Changelog ==

<h4>Version 1.0</h4>

* Initial commit

== Upgrade notice ==

Nothing thus far