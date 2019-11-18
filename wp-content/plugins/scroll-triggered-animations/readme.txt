=== Scroll Triggered Animations - Animate your site ===
Contributors: aaronj1998, davros20
Tags: animation, css, jQuery, animate, scroll, page, animations
Requires at least: 1.0.0
Tested up to: 5.2
Stable tag: 2.1.1

A highly customisable, yet user friendly interface for applying animations on scroll. 

== Description ==
Scroll Triggered Animations is a highly customisable, yet user-friendly interface for implementing CSS animations on scroll throughout your WordPress website. 

Whether you’re a highly-skilled web guru, a content editor or you’ve absolutely no knowledge of web development, we’ve made the scroll animation process easy! Activate this plugin on any theme and follow the instructions to animate your website within minutes.

<h3>Plugin Features</h3>
<ul>
<li>Animate anything on scroll - Easiest way within Wordpress to implement animations on scroll. Animate any element of your choice.</li>
<li>25+ preset animations - 25+ Preset animations available out of the box. No need to touch any code - just simply add the CSS class and watch the magic happen!</li>
<li>Advanced animations - Option to make your own CSS animations tailored to your website and branding. We make the script and you write the CSS.</li>

</ul>


== Installation ==
<h4>PHP 5.6 or greater is recommended before installation</h4>

<ol>
<li>Navigate to the plugins menu.</li>
<li>Search for 'Scroll Triggered Animations'</li>
<li>Click 'Install Now' followed by 'Activate'</li>
<li>You'll now be able to configure your animations under Settings > Scroll Triggered Animations</li>
</ol>

== Frequently Asked Questions ==

= How to add animations on scroll? = 

<ol>
<li>Simply install the plugin from the WordPress directory.</li>

<li>Navigate in your admin toolbar to ‘Scroll Triggered Animations’ under the settings tab.</li>

<li>You’ll find a list of all the default animations which are available out of the box. Simply add any of these classes to your html elements and watch the power of javascript and CSS before your eyes!</li>
</ol>

 = How do I use my own CSS animations with advanced animations? = 

The advanced animations tab is for those of you who want that customisability factor. You can animate items on a global scope using your own CSS.

Your first step, is to activate the element you want to animate. You can activate any element by class, id or tag.

The plugin seeks out these items on the frontend of your site and adds the class ‘scroll-triggered’ as it enters your screens dimensions. This gives you the ability to target the element before and after it has entered your screen’s dimensions.

You're CSS could look something like this:

<code>.button { opacity:0; transform:translateY(10px); transition:all .5s; }</code>
<code>.button.scroll-triggered { opacity:1; transform:translateY(0); }</code>

Just remember to use the transition property to define how long you would like the animation to last.

Find out more <a href="https://www.toastplugins.co.uk/how-to-add-animations-to-your-wordpress-website/" target="_blank">here</a>

 = Why aren't my animations working? = 
This could be a number of reasons. The most common issue for this is javascript being broken on your site. Check for a fatal error in the console and if you can't resolve the issue do not hesitate to contact us via the <a href="https://wordpress.org/support/plugin/scroll-triggered-animations/" target="_blank">support forum</a>. 

== Changelog ==

= 2.1.1 =
*Number of bug fixes and compatibility changes.

= 2.1.0 =
*Number of bug fixes
*Christmas styling

= 2.0.1 =
* Number of bug fixes
* Added more premium features

= 2.0.0 =
* Added ability to control speed on default animations
* Added ability to control delays on default animations
* Disable default animations
* Premium features now available
* Added more animations to the default animation list.

== Upgrade Notice ==

= 2.0.0 =
Version 2.0.0 contains a major release update. Please ensure you have a backup of your site before updating. Some features from your current version have been removed in the latest patch.
