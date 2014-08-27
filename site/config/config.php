<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby.

If you have no license yet, please buy one:
http://getkirby.com/buy and support an indie developer.

You are not allowed to run a website without a valid license key.
Please read the End User License Agreement for more information:
http://getkirby.com/license

*/

c::set('license', 'put your license key here');


/*

---------------------------------------
Subfolder Setup
---------------------------------------

Kirby will automatically try to detect the subfolder

i.e. http://yourdomain.com/subfolder

This might fail depending on your server setup.
In such a case, please set the correct subfolder here.

You must also set the right url then:

c::set('url', 'http://yoururl.com/subfolder');

if you are using the .htaccess file, make sure to
set the right RewriteBase there as well:

RewriteBase /subfolder

*/

c::set('subfolder', false);


/*

---------------------------------------
Homepage Setup
---------------------------------------

By default the folder/uri for your homepage is "home".
Sometimes it makes sense to change that to make your blog
your homepage for example. Just change it here in that case.

*/

c::set('home', 'blog');


/*

---------------------------------------
Markdown Setup
---------------------------------------

You can globally switch Markdown parsing
on or off here.

To disable automatic line breaks in markdown
set markdown.breaks to false.

You can also switch between regular markdown
or markdown extra: http://michelf.com/projects/php-markdown/extra/

*/

c::set('markdown', true);
c::set('markdown.breaks', true);
c::set('markdown.extra', true);
