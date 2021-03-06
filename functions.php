<?php
	/*
		Add shortcodes fromt this child theme to the Avia layout builder inherited from Enfold
	*/

	function avia_include_shortcode_template($paths) {
		$template_url = get_stylesheet_directory();
		array_unshift($paths, $template_url.'/shortcodes/');

		return $paths;
	}
	add_filter('avia_load_shortcodes', 'avia_include_shortcode_template', 15, 1);


	//set builder mode to debug
	function builder_set_debug(){
		return "debug";
	}
	add_action('avia_builder_mode', "builder_set_debug");
