<?php
if ( ! defined( 'ABSPATH' ) ) exit;

    $trigger .= <<<HEREDOC
	<script>
	jQuery(document).ready(function()
	{	
 	   jQuery('.modal-trigger').modalplate();
	});
	</script>

HEREDOC;
?>