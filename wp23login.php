<?php
/*
Plugin Name: WordPress 2.3 Login
Plugin URI: http://www.willen.net/wp23login
Description: Since the WordPress 2.3 login-form is the sleekest of all WordPress versions, this plugin brings back the WordPress 2.3 User Loginbox.
Version: 0.9.8
Author: Paul Willen
Author URI: http://www.willen.net
License: License: GPLv2 or later


This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

add_action('login_head', 'childtheme_custom_login');

function childtheme_custom_login() {
	echo '<link rel="stylesheet" type="text/css" href="' . PluginUrl()  . '/customlogin.css" />';
}

function PluginUrl() {

        //Try to use WP API if possible, introduced in WP 2.6
        if (function_exists('plugins_url')) return trailingslashit(plugins_url(basename(dirname(__FILE__))));

        //Try to find manually... can't work if wp-content was renamed or is redirected
        $path = dirname(__FILE__);
        $path = str_replace("\\","/",$path);
        $path = trailingslashit(get_bloginfo('wpurl')) . trailingslashit(substr($path,strpos($path,"wp-content/")));
        return $path;
    }


?>