<?php

/*
 * Customizer settings
 */
function web_sphere_customize_register( $wp_customize ) {

	// Add new Contacts info section
	$wp_customize->add_section( 'site_contact_info', array(
		'title'      => __( 'Контактная информация', 'web_sphere' ),
		'priority'   => 30,
		'panel'      => '',
	) );

	// Phone
	$wp_customize->add_setting( 'site_phone', array(
		'default'   => '',
		'transport' => 'refresh',
	) );
	$wp_customize->add_control( 'site_phone', array(
		'label'    => __( 'Телефон', 'web_sphere' ),
		'section'  => 'site_contact_info',
		'type'     => 'text',
	) );

	// Email
	$wp_customize->add_setting( 'site_email', array(
		'default'   => '',
		'transport' => 'refresh',
	) );
	$wp_customize->add_control( 'site_email', array(
		'label'    => __( 'Email', 'web_sphere' ),
		'section'  => 'site_contact_info',
		'type'     => 'text',
	) );

    // Add Social section
    $wp_customize->add_section( 'social_links', array(
        'title'      => __( 'Ссылки на социальные сети', 'web_sphere' ),
        'priority'   => 30,
        'panel'      => '',
    ) );

	// telegram
	$wp_customize->add_setting( 'site_social_telegram', array(
		'default'   => '',
		'transport' => 'refresh',
	) );
	$wp_customize->add_control( 'site_social_telegram', array(
		'label'    => __( 'Telegram', 'web_sphere' ),
		'section'  => 'social_links',
		'type'     => 'url',
	) );

	// whatsapp
	$wp_customize->add_setting( 'site_social_whatsapp', array(
		'default'   => '',
		'transport' => 'refresh',
	) );
	$wp_customize->add_control( 'site_social_whatsapp', array(
		'label'    => __( 'Whatsapp', 'web_sphere' ),
		'section'  => 'social_links',
		'type'     => 'url',
	) );

	// vk
	$wp_customize->add_setting( 'site_social_vk', array(
		'default'   => '',
		'transport' => 'refresh',
	) );
	$wp_customize->add_control( 'site_social_vk', array(
		'label'    => __( 'VK', 'web_sphere' ),
		'section'  => 'social_links',
		'type'     => 'url',
	) );

	// max
	$wp_customize->add_setting( 'site_social_max', array(
		'default'   => '',
		'transport' => 'refresh',
	) );
	$wp_customize->add_control( 'site_social_max', array(
		'label'    => __( 'Max', 'web_sphere' ),
		'section'  => 'social_links',
		'type'     => 'url',
	) );


}
add_action( 'customize_register', 'web_sphere_customize_register' );

function web_sphere_customizer_settings( $wp_customize ) {
	// Delete settings
	$sections_to_remove = array(
		'colors',
		'background_image'
	);

	foreach ( $sections_to_remove as $section ) {
		$wp_customize->remove_section( $section );
	}
}
add_action( 'customize_register', 'web_sphere_customizer_settings', 20 );

