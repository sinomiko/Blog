= WP StrapThirteen =

* WP Strap Code, http://www.wpstrapcode.com/

== Copyright & License ==
WP StrapThirteen, Copyright 2013 WP Strap Code - WPStrapCode.com
http://www.gnu.org/licenses/gpl-3.0.html
WP StrapThirteen is distributed under the terms of the GNU GPL

Bootstrap - Copyright 2012 Twitter, Inc
http://www.apache.org/licenses/LICENSE-2.0
Licensed under the Apache License v2.0 

Icon Fonts: Genericons - http://genericons.com/ 
Copyright: Automattic, automattic.com
Distributed under the terms of the GNU GPL
/fonts/LICENSE.txt

== ABOUT StrapThirteen ==

Requires at least:	3.6.0
Tested up to:		3.6.0
Stable tag:			1.0.8

WP StrapThirteen is a Twenty Thirteen child theme and therefore will not work unless the parent theme is present in the same directory
i.e. wp-content/themes/

The idea behind this child theme is to bring some Bootstrap love to the original theme, make some minor adjustments and offer options
in styling your site without touching a single line of code and still retain the power, look and functionality of the Twenty Thirteen
theme.

WP StrapThirteen adds the Bootstrap carousel, a boxed look with the option to switch back to default TwentyThirteen wide look, 
excerpt mode on blog feed with option to switch to back to full content as well as the option to define the excerpt length just to name a few. 

More options and features will be added as and when requested or if there's a need for theme.

== Upgrade Notice ==
Being a child theme upgrades to this theme will be very minimal - upgrading to the latest version of the parent theme will almost certainly
fix any issues and/or bugs. Should the issue/bug originate from this theme then an update will be made available immediately and the process
of upgrading/updating is exactly the same as for the parent theme.

== Limitation ==
inc/nav-menu-walker.php is a work in progress (see below) - we are planing to introduce a secondary Bootstrap powered menu to the theme very soon.

== TODO List ==
Add a secondary menu powered by Bootstrap - work in progress - Atleast @Version 1.1.x
Add option for scroll to top - work in progress: Milestone - Atleast @Version 1.1.x - Accomplished @Version 1.0.8
Add Showcase widget area above the home content - work in progress: Milestone - Atleast @Version 1.2.x
Add Custom Recent Posts Widgets for use with the Showcase widget are and standard sidebar - work in progress: Milestone - Atleast @Version 1.2.x
Add option to change menu placement - above or below slider when active: Milestone - Atleast @Version 1.1.x - Accomplished @Version 1.0.8
Add Genericon social links icons - Placement is under consideration: Milestone - Atleast @Version 1.1.x.
Any other suggestions that are not plugin territory are welcome for consideration and integration.

== Explanations ==
The logic behind hiding the header is so that when the slider is enabled it acts as a replacement of the header - this way the site header does not
look over populated.

The change from hiding the header sitewide is so that the site header section does not look so empty when viewing internal pages where the slider is 
not visible. As of version 1.0.8 selecting hide header will only effect the Front Page and the header will continue to show on all internal pages.

You as the owner of the site know best how you want your site to look on the front page and on internal pages - if for any reason at all, the above
changes are not to your satisfaction you are more than welcome to make suggestions by way of feedback on improving the theme. Any suggestions we deem
worthy of inclusion we will do so and those we deem not to be for everyone's consumption we will suggest ways for you to intergrate them in to your site.

Please do take a moment to rate the theme at http://wordpress.org/support/view/theme-reviews/wp-strapthirteen - all support is very much appreciated. 

== Changelog ==

= 1.0.8 =
* Added scroll to top function as per above TODO List
* Added option to switch menu position: above or below slider - as per above TODO List
* Changed option to hide header on Front Page only when Slider is enabled - see above

= 1.0.7 =
* Fixed bug that caused the site to appear in the left pane of the customizer
* Minor CSS adjustments

= 1.0.6 =
* Fixed menubar searchform bug
* Added option to hide menubar searchform

= 1.0.5 =
* Switched to using home.php and content-home.php for better home page control 

= 1.0.4 =
* Fixed bug with Gallery not showing when Post Format Gallery not used and blog feed set to excerpts.
* Added support for responsive header.
* Added full width page template.
* Some minor CSS adjustment.

= 1.0.3 =
* Fixed: Bug on background color not applying to front end on activation

= 1.0.2 =
* Minor code adjustment to default values
* Added license and copyright for Genericons
* Added license and copyright for Bootstrap
* Removed unused scripts till future requirements - see TODO list.

= 1.0.1 =
* Added theme url
* Fixed the non toggling small menu bug

* Nothing yet - initial release.

== Frequently Asked Questions ==

* None Yet