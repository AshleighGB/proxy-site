<?php
/*******************************************************************
* Glype is copyright and trademark 2007-2014 UpsideOut, Inc. d/b/a Glype
* and/or its licensors, successors and assigners. All rights reserved.
*
* Use of Glype is subject to the terms of the Software License Agreement.
* http://www.glype.com/license.php
********************************************************************
* This theme configuration file allows easy customization of the
* theme without editing the HTML templates.
*******************************************************************
* Theme: Simple
* Author: Glype
* Website: http://www.glype.com/
******************************************************************/

/*****************************************************************
* Themes can use "theme replacements". These are HTML tags of the format
* <!--[tag_name]--> in the template files. To automatically replace
* these placeholders with other text, use the $themeReplace array.
*  e.g.
* <!--[tag_name]--> will be replaced with the value of $themeReplace['tag_name']
******************************************************************/

// Website name
$themeReplace['site_name'] = 'My SSL Proxy - Browse Sites anonymously!';
$themeReplace['warning_box'] = 'sites that should not require a proxy server will be blocked by administrators, only use our server for sites that your ISP blocks. repeated attempts to gain access to these sites will be met with an ip ban.';
// Meta description
$themeReplace['meta_description'] = <<<OUT
SSL Proxy. Blocked and restricted with content filters at your school or office? Wondering how to safely access your favorite sites? You are in the right place.
OUT;

// Meta keywords (separate with comma)
$themeReplace['meta_keywords'] = <<<OUT

OUT;

// Proxy description text
$themeReplace['description'] = <<<OUT
   <p class="lead"><b>What is a proxy?</b> It's a service that fetches web pages requested by users, attempts to modify all references to other resources within those web pages to preserve its users' anonymity, then forwards the pages to its users.
<br><b>How does it benefit users?</b> It allows them to view web pages from locations that they otherwise may not be able to due to firewalls and other filtering systems between them and the resource they are attempting to view. It also allows a degree of anonymity - in most cases the web server will not be able to identify the proxy user, it will see the proxy itself as the user.
<br><b>Who needs to use it?</b> Anyone whose access to a web resource they want to view is blocked by a filter. This may be in a workplace where a blacklist prevents access to sites like Facebook and YouTube, or a school or university with stringent filters in place preventing social networking. Anyone who requires anonymous browsing of sites, where for example logged IP addresses may prevent further access to special offers. And finally, with URL encryption enabled, anyone who wants to ensure that third party logging of visited sites doesn't give away their secrets.</p>
OUT;

// Ad location above the form on the index page
$themeReplace['index_above_form'] = <<<OUT

OUT;

// Ad location below the form on the index page
$themeReplace['index_below_form'] = <<<OUT
<p>This proxy is hosted on a secure server, therefore traffic between the proxy and you is encrypted and secure. However traffic between the requested website and the proxy only offers the same security level as the site. A totally secure transfer is only available when browsing secure sites.</p>
OUT;

// Ad location on proxied pages below the url mini-form
$themeReplace['proxied'] = <<<OUT

OUT;
