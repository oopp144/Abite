<?php
/**
 * General Customizer options
 *
 * @package Izo
 */

$wp_customize->add_panel(
	'izo_general_panel',
	array(
		'title'         => esc_html__( 'General settings', 'izo' ),
		'priority'      => 1,
	)
); 

/**
 * Colors
 */
$wp_customize->add_setting(
	'accent_color',
	array(
		'default'           => '#ea285e',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'accent_color',
		array(
			'label'         	=> esc_html__( 'Accent color', 'izo' ),
			'section'       	=> 'colors',
			'settings'      	=> 'accent_color',
		)
	)
);

$wp_customize->add_setting(
	'general_color_options_info',
	array(
		'sanitize_callback' => 'esc_html',
		'priority'			=> 19
	)
);
$wp_customize->add_control( new Izo_Info( $wp_customize, 'general_color_options_info',
	array(
		'label'    => '<span class="panel-info-toggle">i</span>' . wp_kses_post( __( 'These are just the general color options. You will find color options for various theme elements in their specific Customizer sections. <strong>Please note</strong>: buttons have their own color settings under General Settings > Buttons.', 'izo' ) ),
		'section'  => 'colors',
	)
) );

/**
 * Buttons
 */
$wp_customize->add_section(
	'izo_buttons',
	array(
		'title'         => esc_html__( 'Buttons', 'izo' ),
		'panel'			=> 'izo_general_panel'
	)
);
$wp_customize->add_setting(
	'global_button_background',
	array(
		'default'           => '#ea285e',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'global_button_background',
		array(
			'label'         	=> esc_html__( 'Button background color', 'izo' ),
			'section'       	=> 'izo_buttons',
			'settings'      	=> 'global_button_background',
		)
	)
);

$wp_customize->add_setting(
	'global_button_color',
	array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'global_button_color',
		array(
			'label'         	=> esc_html__( 'Button color', 'izo' ),
			'section'       	=> 'izo_buttons',
			'settings'      	=> 'global_button_color',
		)
	)
);

$wp_customize->add_setting(
	'global_button_background_hover',
	array(
		'default'           => '#b6113f',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'global_button_background_hover',
		array(
			'label'         	=> esc_html__( 'Button background color (hover)', 'izo' ),
			'section'       	=> 'izo_buttons',
			'settings'      	=> 'global_button_background_hover',
		)
	)
);

$wp_customize->add_setting(
	'global_button_color_hover',
	array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'global_button_color_hover',
		array(
			'label'         	=> esc_html__( 'Button color (hover)', 'izo' ),
			'section'       	=> 'izo_buttons',
			'settings'      	=> 'global_button_color_hover',
		)
	)
);

$wp_customize->add_setting(
	'global_button_padding_tb',
	array(
		'default'           => 14,
		'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	'global_button_padding_tb',
	array(
		'label' 			=> esc_html__( 'Top/bottom padding [px]', 'izo' ),
		'section' 			=> 'izo_buttons',
		'type' 				=> 'number',
	)
);

$wp_customize->add_setting(
	'global_button_padding_lr',
	array(
		'default'           => 26,
		'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	'global_button_padding_lr',
	array(
		'label' 			=> esc_html__( 'Left/right padding [px]', 'izo' ),
		'section' 			=> 'izo_buttons',
		'type' 				=> 'number',
	)
);

$wp_customize->add_setting(
	'global_button_border_radius',
	array(
		'default'           => 0,
		'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	'global_button_border_radius',
	array(
		'label' 			=> esc_html__( 'Border radius [px]', 'izo' ),
		'section' 			=> 'izo_buttons',
		'type' 				=> 'number',
	)
);

$wp_customize->add_setting(
	'global_button_font_size',
	array(
		'default'           => 16,
		'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	'global_button_font_size',
	array(
		'label' 			=> esc_html__( 'Font size [px]', 'izo' ),
		'section' 			=> 'izo_buttons',
		'type' 				=> 'number',
	)
);