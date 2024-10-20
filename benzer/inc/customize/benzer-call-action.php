<?php
function benzer_call_action_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Call Action Section Panel
	=========================================*/
	
	// Button Icon // 
	$wp_customize->add_setting(
    	'call_action_button2_icon',
    	array(
	        'default'			=> __('fa-bell','benzer'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_html',
		)
	);	
	
	$wp_customize->add_control( 
		'call_action_button2_icon',
		array(
		    'label'   => __('Icon','benzer'),
		    'section' => 'call_action_content',
			'type'           => 'text',
			'priority'  => 9
		)  
	);
	
	// Button Title
	$wp_customize->add_setting(
    	'call_action_button_title',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_html',
			'transport'         => $selective_refresh,
		)
	);	
	
	$wp_customize->add_control( 
		'call_action_button_title',
		array(
		    'label'   => __('Button Title','benzer'),
		    'section' => 'call_action_content',
			'type'           => 'text',
			'priority'  => 9
		)  
	);
}
add_action( 'customize_register', 'benzer_call_action_setting' );



// Call to action selective refresh
function benzer_home_cta_section_partials( $wp_customize ){
	
	//call_action_button_title
	$wp_customize->selective_refresh->add_partial( 'call_action_button_title', array(
		'selector'            => '.call-to-action-four .cta-info .call-title',
		'settings'            => 'call_action_button_title',
		'render_callback'  => 'benzer_call_action_button_title_render_callback',
	) );
	}

add_action( 'customize_register', 'benzer_home_cta_section_partials' );

// call_action_button_title
function benzer_call_action_button_title_render_callback() {
	return get_theme_mod( 'call_action_button_title' );
}
