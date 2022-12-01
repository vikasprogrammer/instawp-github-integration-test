<?php

/**
 *
 * @package hello-world
 *
 * Plugin Name: InstaWP Hello World Demo
 * Plugin URI: https://instawp.io
 * Description: A plugin to greet the visitors or just another test plugin to be honest.
 * Version: 1.2.2
 * Author: Vikas Singhal
 * Author URI: https://instawp.io
 * License: GPLv2 or later
 * Text Domain: hello-world
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * GitHub Plugin URI: vikasprogrammer/instwp-github-integration-test
 */

if(!defined('ABSPATH')) {
	die; // Die if accessed directly.
}


/**
 * HelloWorld_Plugin Class
 *
 * @class HelloWorld_Plugin
 */


add_action('admin_menu', 'hello_world_admin_menu');
function hello_world_admin_menu() {
  add_menu_page(
        'Hello World',// page title
        'Hello World',// menu title
        'manage_options',// capability
        'hello-world',// menu slug
        'display_hello_world_page' // callback function
    );
}

function display_hello_world_page() {
  echo '<h1>Hello World. This is a new change.123</h1>';
}
