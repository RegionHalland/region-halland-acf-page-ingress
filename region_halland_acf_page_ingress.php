<?php

	/**
	 * @package Region Halland ACF Page Ingress
	 */
	/*
	Plugin Name: Region Halland ACF Page Ingress
	Description: ACF-fält för ingress högst upp på en sida
	Version: 1.2.0
	Author: Roland Hydén
	License: GPL-3.0
	Text Domain: regionhalland
	*/

	// Anropa function om ACF är installerad
	add_action('acf/init', 'my_acf_add_page_ingress_field_groups');

	// Function för att lägga till "field groups"
	function my_acf_add_page_ingress_field_groups() {

		if (function_exists('acf_add_local_field_group')):

			acf_add_local_field_group(array(
			    'key' => 'group_1000107',
			    'title' => ' ',
			    'fields' => array(
			        0 => array(
			        	'key' => 'field_1000118',
			            'label' => __('Navigation', 'regionhalland'),
			            'name' => 'name_1000119',
			            'type' => 'text',
			            'instructions' => __('Skriv din navigations-text här', 'regionhalland'),
			            'required' => 0,
			            'conditional_logic' => 0,
			            'wrapper' => array(
			                'width' => '',
			                'class' => '',
			                'id' => '',
			            ),
			            'default_value' => '',
			            'placeholder' => '',
			            'prepend' => '',
			            'append' => '',
			            'maxlength' => '',
			        ),
			        1 => array(
			        	'key' => 'field_1000108',
			            'label' => __('Ingress', 'regionhalland'),
			            'name' => 'name_1000109',
			            'type' => 'textarea',
			            'instructions' => __('Skriv din ingress här', 'regionhalland'),
			            'required' => 0,
			            'conditional_logic' => 0,
			            'wrapper' => array(
			                'width' => '',
			                'class' => '',
			                'id' => '',
			            ),
			            'default_value' => '',
			            'placeholder' => '',
			            'prepend' => '',
			            'append' => '',
			            'maxlength' => '',
			        ),
			    ),
			    'location' => array(
			        0 => array(
			            0 => array(
			                'param' => 'post_type',
			                'operator' => '==',
			                'value' => 'page',
			            ),
			        )
			    ),
			    'menu_order' => 0,
			    'position' => 'normal',
			    'style' => 'default',
			    'label_placement' => 'top',
			    'instruction_placement' => 'label',
			    'hide_on_screen' => '',
			    'active' => 1,
			    'description' => '',
			));

		endif;
	
	}

	// Anropa metod för att lägga till js-fil
	add_action('admin_enqueue_scripts', 'my_enqueue_for_ingress');

	// Metod för att lägga till js-fil
	function my_enqueue_for_ingress($hook) {
		wp_enqueue_script('my_custom_script', plugin_dir_url(__FILE__) . '/js/ingress.js');
	}

	// Returnera ingress
	function get_region_halland_acf_page_ingress($id = 0) {
		if ($id == 0) {
			return get_field('name_1000109');	
		} else {
			return get_field('name_1000109', $id);	
		}
	}

	// Returnera navigation text
	function get_region_halland_acf_page_navigation_text($id) {
		return get_field('name_1000119', $id);	
	}
	
	// Metod som anropas när pluginen aktiveras
	function region_halland_acf_page_ingress_activate() {
		// Ingenting just nu...
	}

	// Metod som anropas när pluginen avaktiveras
	function region_halland_acf_page_ingress_deactivate() {
		// Ingenting just nu...
	}
	
	// Vilken metod som ska anropas när pluginen aktiveras
	register_activation_hook( __FILE__, 'region_halland_acf_page_ingress_activate');

	// Vilken metod som ska anropas när pluginen avaktiveras
	register_deactivation_hook( __FILE__, 'region_halland_acf_page_ingress_deactivate');

?>