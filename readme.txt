=== CSS Page Ancestors ===
Contributors: giannisg
Tags: css, class, ancestor, ancestors, father, body, body_class, pages, pages
Tested up to: 4.8.3
Requires at least: 3.3
Requires PHP: 5.6
Stable tag: 0.95
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add ancestors classes in your body_class to CSS control ALL the anchestors of your page.

== Description ==
*Please, keep in mind that THIS IS IN BETA. I'm relying to your feedback, positive or with suggestions, to release it out of beta*

This plugin will give you the extra class you need in your <body>  tag of ALL (and not just one) of the anchestors of a page in Wordpress.

This way you will be able to color a certain section of a site, based on the root's ancestor - no matter how deep is the page (Wordpress does this only for the direct father of a page)

Also, the printed class names are ancestor-[slug] and ancestor-id-[id]. This way, you can use it with your page slug (very conviniate if you move sites between instalations where id can change) and id (useful if you use a non-latin site, and slug can't be used in css)

-

So, let's imagine you have this tree of pages on your site:

* Home
* Clients
	* Web
		* EShops
		* Portfolio
	* Print
* Contact 

Let's see this scenario: You want all the pages under 'Clients' to have a red background. Now, it's easy to do that - but only for the 'Web', and 'Print' pages because Wordpress gives you only the fathers in the body classes - in this case, the id of 'Clients'. 'Eshops' and 'Portfolio' can also have a red background, but you will have to add a new class in your css with the id of 'Web' at your css. And, if you add pages under 'Eshops', same thing, you will have to add a new class in your css file with the id of 'Eshops' page. So, all this is easy if you do it yourself - but if you handle the site to an editor, that knows only to create content - you will have to add the class in the CSS every time someone adds a level to all this.

With this plugin **all the ancestors of a page, no matter the depth** will be *in your body as class names* - as a slug, and as an id. And you want all the pages under 'Clients' to have a red background you just add to your css .achestor-clients {background:red;} in your css,  and you are done - no matter the level the final page is under.  

Finaly, the  order is with top ancestor first (in our example, Portfolio page will have "ancestor-clients ancestor-web") - this way, it's simpler in CSS to overwrite the -clients class with the -web attributes.

There is no writing on the database, or other change on the site, so, even if something goes wrong, just de-activate the plugin, and you'll be fine.

== Installation ==

1. Upload the plugin files to the '/wp-content/plugins/plugin-name' directory, or install the plugin through the WordPress plugins screen directly.

2. Activate the plugin through the 'Plugins' screen in WordPress

3. The new classes will be automatically added to your body (IF your theme is provided with the body_class() function)




== Frequently Asked Questions ==

= Why did you build it? =

I needed to CSS transform a sub-sub-page beased on his ancestors. Now, my body has the classes i need.

= I've installed it, but nothing happens! = 

There's no new menu, or any other change you should look for. Normally, the new classes should have been added automatically to your body. You can check it pressing 'Ctrl+U' in your site (this will ofcourse work only if you check a page with two or more ancestors)

= Help, my site is ruinned! =

Oh, that's too bad - it did work fine for me :( Nevertheless, let's make your site work again: go to your plugins page, and deactivate my plugin. Things should go back to normal, no harm done.


== Screenshots ==
1. That's what you expect to see in view source of your page


== Changelog ==
= 0.95 =
Removed the manual installation of the plugin, and converted it to a filter, so the users won't touch their theme. (Thanks Wordpress Plugin Directory Team for the tip!)


= 0.9 =
Beta release.

= 0.8 =
Added the anchestor-id-[id] css class, for non-latin page slugs

= 0.1 =
Hey, i have an idea! What if... :)