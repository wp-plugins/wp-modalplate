<?php
if ( ! defined( 'ABSPATH' ) ) exit;

global $post;
if ( has_shortcode( $post->post_content, 'modalplate' ) ) {

    wp_register_script('modalplate', plugins_url('../js/modalplate.min.js',__FILE__), array('jquery'), null, 0 );
    wp_register_script('modalplate-init', plugins_url('../js/modalplate.init.js',__FILE__), array('jquery'), null, 0 );
    wp_register_style('modalplate-min', plugins_url('../css/modalplate.css', __FILE__), '', null, 'all');

    wp_enqueue_script('modalplate');
    wp_enqueue_script('modalplate-init');
    wp_enqueue_style('modalplate-min');

}