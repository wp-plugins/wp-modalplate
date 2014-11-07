<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
/*
Plugin Name: WP Modalplate
Plugin URI: http://jamesdbruner.com
Description:A simple to use modal window plugin originally created by <a target="_blank" href="https://github.com/chrishumboldt/Modalplate">Chris Humboldt</a> see there original <a href="http://getwebplate.com/plugins/modalplate">here</a>.
Author: James Bruner
Version: 1.0.0
Author URI: http://jamesdbruner.com

  Copyright 2014  James Bruner  (email : jamesdbruner@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

class modalplate{

	// Constructor for the class.
	public function __construct() {

    add_action( 'admin_init', array( $this, 'require_3_5' ) );
    add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) ); 
    add_shortcode( 'modalplate', array( $this, 'modalplate' ) );
    add_shortcode( 'modalplate_trigger', array( $this, 'modalplate_trigger' ) );
    add_filter( 'plugin_action_links_'. plugin_basename( __FILE__ ), array( $this, 'help_link' ) );
       
    }

    //Require version 3.5+
    public function require_3_5() {
	include_once('methods/version.php');
    }

    //Register Script
    public function enqueue_scripts() {
	include_once('methods/enqueue.php');
    }

    //Modal Content Shortcode
    public function modalplate($atts, $content = null){
	include_once('methods/shortcode.php');
	return $output;
    }

    //Modal Trigger Shortcode
    public function modalplate_trigger($atts, $content = null){
	include_once('methods/trigger.php');
	return '<a href="#" class="modal-trigger" data-modal-open="modal-example">' . $content . '</a>';
    }

    //Add Help Link
    public function help_link($links){
	$settings_link = '<a href="http://wordpress.org/plugins/wp-modalplate/installation/">Help</a>';
  	array_push( $links, $settings_link );
  	return $links;
    } 

}
// Instantiate the class.
$modalplate = new modalplate();