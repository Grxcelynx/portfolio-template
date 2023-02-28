<?php
/**
 * Perfection Portfolio Theme Customizer
 *
 * @package Perfection_Portfolio
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function perfection_portfolio_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'perfection_portfolio_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'perfection_portfolio_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'perfection_portfolio_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function perfection_portfolio_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function perfection_portfolio_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function perfection_portfolio_customize_preview_js() {
	wp_enqueue_script( 'perfection_portfolio-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'perfection_portfolio_customize_preview_js' );

/////////////////////////////
// CUSTOM COLORS
/////////////////////////////
function perfection_portfolio_customize_navcolor_register( $wp_customize ){
    $wp_customize->add_setting( 'customize_navcolor' , array(
        'default'     => "#000000",
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'customize_navcolor', array(
        'label'        => __( 'Navbar Background Color', 'perfection_portfolio' ),
        'section'    => 'colors',
    ) ) );
}
add_action( 'customize_register', 'perfection_portfolio_customize_navcolor_register' );

////////////////////////////////////////
////////////////////////////////////////
////////////////////////////////////////

function perfection_portfolio_customize_navtext_register( $wp_customize ){
    $wp_customize->add_setting( 'customize_navtext_color' , array(
        'default'     => "#000000",
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'customize_navtext_color', array(
        'label'        => __( 'Navbar Text Color', 'perfection_portfolio' ),
        'section'    => 'colors',
    ) ) );
}
add_action( 'customize_register', 'perfection_portfolio_customize_navtext_register' );

////////////////////////////////////////
////////////////////////////////////////
////////////////////////////////////////


function perfection_portfolio_customize_navhov_register( $wp_customize ){
    $wp_customize->add_setting( 'customize_navhov_color' , array(
        'default'     => "#000000",
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'customize_navhov_color', array(
        'label'        => __( 'Navbar Menu Item Hover Color', 'perfection_portfolio' ),
        'section'    => 'colors',
    ) ) );
}
add_action( 'customize_register', 'perfection_portfolio_customize_navhov_register' );

/////////////////////////////////////////
////////////////////////////////////////
////////////////////////////////////////

function perfection_portfolio_customize_mobilenav_register( $wp_customize ){
    $wp_customize->add_setting( 'customize_navmobile_color' , array(
        'default'     => "#000000",
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'customize_navmobile_color', array(
        'label'        => __( 'Navbar Mobile Menu Background Color', 'perfection_portfolio' ),
        'section'    => 'colors',
    ) ) );
}
add_action( 'customize_register', 'perfection_portfolio_customize_mobilenav_register' );

////////////////////////////////////////
////////////////////////////////////////
////////////////////////////////////////

function perfection_portfolio_customize_burgermenu_register( $wp_customize ){
    $wp_customize->add_setting( 'customize_burgermenu_color' , array(
        'default'     => "#000000",
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'customize_burgermenu_color', array(
        'label'        => __( 'Navbar Mobile Menu Button Color', 'perfection_portfolio' ),
        'section'    => 'colors',
    ) ) );
}
add_action( 'customize_register', 'perfection_portfolio_customize_burgermenu_register' );
