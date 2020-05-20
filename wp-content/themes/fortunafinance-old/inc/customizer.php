<?php
function podcast_theme_customizer( $wp_customize ) {

    // Logo upload
    $wp_customize->add_section( 'podcast_logo_section' , array(
	    'title'       => __( 'Logo', 'podcast' ),
	    'priority'    => 30,
	    'description' => 'Upload a logo to replace the default site name and description in the header',
	) );
	$wp_customize->add_setting( 'podcast_logo', array(
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'podcast_logo', array(
		'label'    => __( 'Logo', 'podcast' ),
		'section'  => 'podcast_logo_section',
		'settings' => 'podcast_logo',
	) ) );
    // Choose excerpt or full content on blog
    $wp_customize->add_section( 'podcast_layout_section' , array(
	    'title'       => __( 'Layout', 'podcast' ),
	    'priority'    => 30,
	    'description' => 'Change how podcast displays posts',
	) );
	$wp_customize->add_setting( 'podcast_post_content', array(
		'default'	        => 'option1',
		'sanitize_callback' => 'podcast_sanitize_index_content',
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'podcast_post_content', array(
		'label'    => __( 'Post content', 'podcast' ),
		'section'  => 'podcast_layout_section',
		'settings' => 'podcast_post_content',
		'type'     => 'radio',
		'choices'  => array(
			'option1' => 'Excerpts',
			'option2' => 'Full content',
			),
	) ) );
	// Set site name and description to be previewed in real-time
	$wp_customize->get_setting('blogname')->transport='postMessage';
	$wp_customize->get_setting('blogdescription')->transport='postMessage';
	// Enqueue scripts for real-time preview
	wp_enqueue_script( 'podcast-customizer', get_template_directory_uri() . '/js/podcast-customizer.js', array( 'jquery' ) );
 
}
add_action('customize_register', 'podcast_theme_customizer');

/**
 * Sanitizes our post content value (either excerpts or full post content).
 *
 * @since 1.7
 */
function podcast_sanitize_index_content( $content ) {
	if ( 'option2' == $content ) {
		return 'option2';
	} else {
		return 'option1';
	}
}
