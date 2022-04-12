<?php

/**
 *
 * @package hello-world
 *
 * Plugin Name: InstaWP Github Integration Demo 
 * Plugin URI: https://instawp.io
 * Description: A plugin to greet the visitors or just another test plugin to be honest.
 * Version: 1.0.111
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

class HelloWorld_Plugin {

	/*
	 * Consructors are magical functions
	 * They are executed when you instantiate a object.
	 * It initializes our object.
	 * Call your function inside Consrtuctor to execute immediately.
	 * Use $this for the reference of an object
	 */

	function __construct() {
		// executes our congratulations function.
		$this->congratulations();
	}

	// Congratulations function

	function congratulations() {

		echo "<!-- 1.0.2 Congratulations, you have just learned basics OOP and Plugin Development using Object Oriented Programming.-->";

	}

}


// check if our class exists
if(class_exists('HelloWorld_Plugin')) {
	// instantiate the class.
	$hellWorld_plugin = new HelloWorld_Plugin();
}
