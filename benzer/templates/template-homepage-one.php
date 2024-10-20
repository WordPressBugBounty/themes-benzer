<?php 
/**
Template Name: Homepage One
*/
get_header();

	get_template_part('sections/benzer','slider');
	get_template_part('sections/benzer','service');	
	get_template_part('sections/specia','features');
	get_template_part('sections/benzer','portfolio');	
	get_template_part('sections/benzer','call-action');	
	get_template_part('sections/specia','blog');
	
get_footer();
