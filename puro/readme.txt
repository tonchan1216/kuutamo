=== Puro ===

Contributors: Misplon
Tags: custom-menu, featured-images, fluid-layout, full-width-template, two-columns, gray, green, light, one-column, post-formats, responsive-layout, right-sidebar, rtl-language-support, sticky-post, theme-options, threaded-comments, translation-ready, white

Requires at least: 4.1
Tested up to: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Clean, crisp and lightweight. Puro is a theme for bloggers, creatives and small businesses.

== Description ==

A content focussed minimalist theme, perfect for your blog, portfolio or small business site. We've closely integrated SiteOrigin's Page Builder for responsive layouts and Meta Slider for smooth, easy to build sliders. Puro is responsive, Retina ready and fully compatible with Jetpack, Contact Form 7, Gravity Forms and WP PageNavi. Included is a .rtl CSS file for right to left languages.

== Installation ==

1. Login to your WordPress installation and go to Appearance > Themes > Add New > Upload Theme.
2. Click Choose File and browse to the theme's ZIP file on your computer. Click Install Now.
3. Click Activate to get started with your new theme right away.

== Documentation ==

[Documentation](http://purothemes.com/documentation/puro-theme/) is available on purothemes.com.

== Support ==

[Support](http://purothemes.com/support/forum/puro/) is available on purothemes.com.

== Frequently Asked Questions ==

= How do I add social icons to the footer? =

1. Puro makes use of a social icon menu system managed from Appearance > Menus. Icons are rendered by the [Font Awesome library](http://fontawesome.io/icons/). Navigate to Appearance > Menus and click the "create a new menu" link. Choose a name for your menu and click the blue "Save Menu" button. Next look at the left column and locate the “Custom Links” tab, open it and add your first network. For example if we were adding a Twitter icon for Puro Themes we'd add the following to the URL field: https://twitter.com/purothemes

2. The URL should be a link to your profile page on one of the supported networks below. The Link Text can be anything you'd like, it won't be displayed on the front end of your site.

3. Once you've added your networks, scroll down to the bottom of the page and locate the Theme Locations sub-heading under the Menu Settings heading. Locate the social icon menu location ( Social Network Icon Menu) and select it. Lastly, click the "Save Menu" button again.

Available icons:

* Behance
* CodePen
* Delicious
* deviantART
* Digg
* Dribbble
* Facebook
* Flickr
* Foursquare
* GitHub
* Google Plus
* Instagram
* LinkedIn
* Pinterest
* reddit
* SoundCloud
* StackExchange
* Stack Overflow
* Tumblr
* Twitter
* Vimeo
* Vine
* Vk
* Weibo
* WordPress.com
* Xing
* YouTube

Un-supported networks will be represented by a generic share icon.

== License ==

Puro WordPress Theme, Copyright 2014 Andrew Misplon. Puro is distributed under the terms of the GNU GPL.

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program. If not, see http://www.gnu.org/copyleft/gpl.html.

Puro WordPress Theme is derived from Underscores WordPress Theme, Copyright 2012 Automattic http://underscores.me/ Underscores WordPress Theme is distributed under the terms of the GNU GPL.

== Images ==

Screenshot Waves and Rocks image sourced from http://unsplash.com by Angelina Odemchuk licensed under CC0 1.0 Universal (CC0 1.0) (http://creativecommons.org/publicdomain/zero/1.0/).

== Bundled Resources ==

FitVids, Copyright 2013, Chris Coyier - http://css-tricks.com + Dave Rupert - http://daverupert.com
Released under the WTFPL license.

Flex Slider, Copyright 2012 WooThemes
Free to use under the GPLv2 license
Source: http://www.woothemes.com/flexslider/

Flexie, Copyright 2010 Richard Herrera
Licensed under the MIT License
Source: https://github.com/doctyper/flexie

FontAwesome by Dave Gandy 
Font released under the SIL OFL 1.1, CSS released under the MIT License.

HTML5 Shiv, Copyright 2014 Alexander Farkas (aFarkas)
Licensed under a dual license system (MIT or GPL version 2)
Source: https://github.com/aFarkas/html5shiv

Selectivizr, Copyright Keith Clark
Licensed under the MIT License
Source: https://github.com/keithclark/selectivizr

== SiteOrigin Extras ==

This theme makes use of the SiteOrigin Extras Framework contained in the folder extras/. All code is licensed under GPL 2.0 and copyright 2013 Greg Priday unless otherwise stated in the file header. 

== Changelog ==

= 1.0.7.2 =
* Removed the_archive_title and the_archive_description functions from template-tags.php. These functions are now included in the WordPress core.
* Added legacy browser support.
* Added new blog archive layouts. New layouts can be accessed from Theme > Settings > Blog > Blog Archive Layout or Page Builder Post Loop widget.

= 1.0.7.1 =
* Reduced size of teaser images.
* Updated WordPress Codex links from http to https.
* Updated Font Awesome version.
* Added Xing icon to social menus.
* Introduced allowed tags to below the comment form. WP 4.3 removes this default. Since Puro has had this as a setting since 1.0 we'll maintain it.

= 1.0.7 =
* Added theme settings for Archive Post Content and Post Excerpt Length.
* Fixed page navigation visibility problem when responsive layout enabled.
* Standardised handles for Font Awesome and FitVids. For more please see [WP Standard Handles](https://github.com/grappler/wp-standard-handles).
* Removed Sass elements. If you require the Sass files for Puro, please, don't hesitate to get in touch via [support](http://purothemes.com/support/forum/puro/).
* Premium: Fixed text color setting bug in Firefox and IE.
* Premium: Fixed enqueue issue with responsive navigation. 

= 1.0.6.1 =
* Added supporting styles for JW Player to ensure theme button styles don't change the player's buttons.
* Removed newsletter admin bar.
* Updated /languanges/puro.pot.

= 1.0.6 =
* Fixed issue with current-menu-item color CSS specificity.
* Added support for Jetpack Site Logo.
* Improved post/page heading line height on mobile.
* Updated the way Puro handles title tags. Changed to latest best practice. 
* Added a class to the footer social menu.
* Added a fallback icon to the footer social menu. Applies if a link or page is added with no matching icon.
* Updated SiteOrigin Extras Framework to latest version.
* Added reponsive layout theme setting.
* Added option to insert a copyright symbol in the footer copyright text field.
* Refactored script enqueuing.
* Added theme setting for FitVids.js.
* Updated archive template and to make use of new WordPress template tags (4.1).
* Small technical changes to bring certain functions inline with the lastest version of _s starter theme.
* Minor code adjustments to improve formatting consistency. 
* Small adjustment to textarea width.
* Added a theme settings link to the home slider documentation.
* Small adjustment to nested comment styling.
* Small fix to post meta display settings.
* Small adjustment to logo/menu allowed space.
* Added a content width adjustment based on page template selection.
* Added theme setting to change the read more text.
* Updated theme tags.
* Adjust word break for headings.
* Introduced a loop-blog template for use in the SiteOrigin Page Builder Post Loop widget.
* Added a theme setting for enqueuing scripts in the footer.
* Prefixed all media queries to ensured site width remains fixed when responsive setting not enabled. 
* Updates to Extras framework.
* Updated screenshot.
* Migrated README.md to readme.txt file in line with new .org recommendations.
* Linked footer copyright site title to home url.
* Updated /languanges/puro.pot.
* Premium: Refactored responsive menu CSS.
* Premium: Updated responsive menu JS.
* Premium: Added a share button for LinkedIn.

= 1.0.5 =
* Updated SiteOrigin Extras Framework to latest version.
* Added Theme Tour to assist with setup.
* Added video post type formatting.
* Added styling for Jetpack Subscriptions.
* Corrected ocassional bolding of sidebar search form placeholder text.
* Fixed issue with footer social icon menu not loading icons.
* Corrected ocassional pagination alignment issue.
* Updated stylsheet information to reflect new theme home page.
* Added title to footer attribution link.
* Resolved paragraph word-break bug. 
* Updated /languanges/puro.pot.

= 1.0.4 =
* Updated README.md with screenshot image license information. 

= 1.0.3 =
* Added the SiteOrigin Extras Framework.
* Added theme options.

= 1.0.2 =
* Removed further incorrect theme tags.

= 1.0.1 =
* Updated Author URI
* Removed Accessibility Ready theme tag.

= 1.0.0 =
* Initial release.