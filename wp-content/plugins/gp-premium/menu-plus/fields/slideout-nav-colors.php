<?php
/**
 * This file handles the customizer fields for the slideout navigation colors.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // No direct access, please.
}

if ( ! function_exists( 'generate_register_slideout_nav_colors' ) ) {
	add_action('generate_customize_after_primary_navigation', 'generate_register_slideout_nav_colors', 1000);

	/**
	 * Register the slideout navigation color fields.
	 */
	function generate_register_slideout_nav_colors()
	{
		if ( ! class_exists('GeneratePress_Customize_Field') ) {
			return;
		}

		$color_defaults = generate_get_color_defaults();

		$menu_hover_selectors = '.slideout-navigation .main-nav ul li:not([class*="current-menu-"]):hover > a, .slideout-navigation .main-nav ul li:not([class*="current-menu-"]):focus > a, .slideout-navigation .main-nav ul li.sfHover:not([class*="current-menu-"]) > a, .slideout-navigation .menu-bar-item:hover > a, .slideout-navigation .menu-bar-item.sfHover > a';
		$menu_current_selectors = '.slideout-navigation .main-nav ul li[class*="current-menu-"] > a';
		$text_selectors = '.slideout-navigation .main-nav ul li a, .slideout-navigation .menu-toggle, .slideout-navigation button.menu-toggle:hover, .slideout-navigation button.menu-toggle:focus, .slideout-navigation .mobile-bar-items a, .slideout-navigation .mobile-bar-items a:hover, .slideout-navigation .mobile-bar-items a:focus, .slideout-navigation .menu-bar-items';
		$submenu_hover_selectors = '.slideout-navigation .main-nav ul ul li:not([class*="current-menu-"]):hover > a, .slideout-navigation .main-nav ul ul li:not([class*="current-menu-"]):focus > a, .slideout-navigation .main-nav ul ul li.sfHover:not([class*="current-menu-"]) > a';
		$submenu_current_selectors = '.slideout-navigation .main-nav ul ul li[class*="current-menu-"] > a';

		GeneratePress_Customize_Field::add_title(
			'generate_slideout_navigation_colors_title',
			array(
				'section' => 'generate_colors_section',
				'title' => __( 'Off Canvas Panel', 'gp-premium' ),
				'choices' => array(
					'toggleId' => 'slideout-navigation-colors',
				),
			)
		);

		// Navigation background group.
		GeneratePress_Customize_Field::add_color_field_group(
			'slideout_navigation_background',
			'generate_colors_section',
			'slideout-navigation-colors',
			array(
				'generate_settings[slideout_background_color]' => array(
					'default_value' => $color_defaults['slideout_background_color'],
					'label' => __( 'Navigation Background', 'gp-premium' ),
					'tooltip' => __( 'Choose Initial Color', 'gp-premium' ),
					'element' => '.slideout-navigation',
					'property' => 'background-color',
					'hide_label' => false,
				),
				'generate_settings[slideout_background_hover_color]' => array(
					'default_value' => $color_defaults['slideout_background_hover_color'],
					'label' => __( 'Navigation Background Hover', 'gp-premium' ),
					'tooltip' => __( 'Choose Hover Color', 'gp-premium' ),
					'element' => $menu_hover_selectors,
					'property' => 'background-color',
					'hide_label' => true,
				),
				'generate_settings[slideout_background_current_color]' => array(
					'default_value' => $color_defaults['slideout_background_current_color'],
					'label' => __( 'Navigation Background Current', 'gp-premium' ),
					'tooltip' => __( 'Choose Current Color', 'gp-premium' ),
					'element' => $menu_current_selectors,
					'property' => 'background-color',
					'hide_label' => true,
				),
			)
		);

		// Navigation text group.
		GeneratePress_Customize_Field::add_color_field_group(
			'slideout_navigation_text',
			'generate_colors_section',
			'slideout-navigation-colors',
			array(
				'generate_settings[slideout_text_color]' => array(
					'default_value' => $color_defaults['slideout_text_color'],
					'label' => __( 'Navigation Text', 'gp-premium' ),
					'tooltip' => __( 'Choose Initial Color', 'gp-premium' ),
					'element' => $text_selectors,
					'property' => 'color',
					'hide_label' => false,
				),
				'generate_settings[slideout_text_hover_color]' => array(
					'default_value' => $color_defaults['slideout_text_hover_color'],
					'label' => __( 'Navigation Text Hover', 'gp-premium' ),
					'tooltip' => __( 'Choose Hover Color', 'gp-premium' ),
					'element' => $menu_hover_selectors,
					'property' => 'color',
					'hide_label' => true,
				),
				'generate_settings[slideout_text_current_color]' => array(
					'default_value' => $color_defaults['slideout_text_current_color'],
					'label' => __( 'Navigation Text Current', 'gp-premium' ),
					'tooltip' => __( 'Choose Current Color', 'gp-premium' ),
					'element' => $menu_current_selectors,
					'property' => 'color',
					'hide_label' => true,
				),
			)
		);

		// Sub-Menu background group.
		GeneratePress_Customize_Field::add_color_field_group(
			'slideout_navigation_submenu_background',
			'generate_colors_section',
			'slideout-navigation-colors',
			array(
				'generate_settings[slideout_submenu_background_color]' => array(
					'default_value' => $color_defaults['slideout_submenu_background_color'],
					'label' => __( 'Sub-Menu Background', 'gp-premium' ),
					'tooltip' => __( 'Choose Initial Color', 'gp-premium' ),
					'element' => '.slideout-navigation ul ul',
					'property' => 'background-color',
					'hide_label' => false,
				),
				'generate_settings[slideout_submenu_background_hover_color]' => array(
					'default_value' => $color_defaults['slideout_submenu_background_hover_color'],
					'label' => __( 'Sub-Menu Background Hover', 'gp-premium' ),
					'tooltip' => __( 'Choose Hover Color', 'gp-premium' ),
					'element' => $submenu_hover_selectors,
					'property' => 'background-color',
					'hide_label' => true,
				),
				'generate_settings[slideout_submenu_background_current_color]' => array(
					'default_value' => $color_defaults['slideout_submenu_background_current_color'],
					'label' => __( 'Sub-Menu Background Current', 'gp-premium' ),
					'tooltip' => __( 'Choose Current Color', 'gp-premium' ),
					'element' => $submenu_current_selectors,
					'property' => 'background-color',
					'hide_label' => true,
				),
			)
		);

		// Sub-Menu text group.
		GeneratePress_Customize_Field::add_color_field_group(
			'slideout_navigation_submenu_text',
			'generate_colors_section',
			'slideout-navigation-colors',
			array(
				'generate_settings[slideout_submenu_text_color]' => array(
					'default_value' => $color_defaults['slideout_submenu_text_color'],
					'label' => __( 'Sub-Menu Text', 'gp-premium' ),
					'tooltip' => __( 'Choose Initial Color', 'gp-premium' ),
					'element' => '.slideout-navigation .main-nav ul ul li a',
					'property' => 'color',
					'hide_label' => false,
				),
				'generate_settings[slideout_submenu_text_hover_color]' => array(
					'default_value' => $color_defaults['slideout_submenu_text_hover_color'],
					'label' => __( 'Sub-Menu Text Hover', 'gp-premium' ),
					'tooltip' => __( 'Choose Hover Color', 'gp-premium' ),
					'element' => $submenu_hover_selectors,
					'property' => 'color',
					'hide_label' => true,
				),
				'generate_settings[slideout_submenu_text_current_color]' => array(
					'default_value' => $color_defaults['slideout_submenu_text_current_color'],
					'label' => __( 'Sub-Menu Text Current', 'gp-premium' ),
					'tooltip' => __( 'Choose Current Color', 'gp-premium' ),
					'element' => $submenu_current_selectors,
					'property' => 'color',
					'hide_label' => true,
				),
			)
		);
	}
}
