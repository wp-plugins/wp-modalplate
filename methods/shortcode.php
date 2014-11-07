<?php
if ( ! defined( 'ABSPATH' ) ) exit;

    $atts = shortcode_atts(array('title' => ''), $atts);
    $title = $atts['title'];

    $output .= <<<HEREDOC
	<div class="modalplate" data-modal-id="modal-example">
    	<div class="modalplate-title-bar">
     	   <a href="#" class="close">Close</a>
    	    <h5>{$title}</h5>
    	</div>
    	<div class="modalplate-content">
    	    {$content}
   	 </div>
	</div>

HEREDOC;
