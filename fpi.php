<?php
/**
 * Plugin Name: FPI
 * Plugin URI: https://fpilab.org
 * Description: Fishery Performance Indicators
 * Version: 1.0
 * Author: John Tucker
 * Author URI: https://fpilab.org
 */

  function fpi_create_post_type_indicator() {
    $labels = array(
     'name' => __( 'FPI Indicators', 'fpi' ),
     'singular_name' => __( 'FPI Indicator', 'fpi' ),
     'add_new' => __( 'Add New' , 'fpi' ),
     'add_new_item' => __( 'Add New FPI Indicator' , 'fpi' ),
     'edit_item' =>  __( 'Edit FPI Indicator' , 'fpi' ),
     'new_item' => __( 'New FPI Indicator' , 'fpi' ),
     'view_item' => __('View FPI Indicator', 'fpi'),
     'search_items' => __('Search FPI Indicators', 'fpi'),
     'not_found' =>  __('No FPI Indicators found', 'fpi'),
     'not_found_in_trash' => __('No FPI Indicators found in Trash', 'fpi'),
    );
    register_post_type( 'fpi_indicator',
      array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-list-view',
      )
    );
    if( function_exists( 'register_field_group' ) ) {
    	register_field_group(array (
    		'id' => 'acf_fpi_indicator',
    		'key' => 'acf_fpi_indicator',
    		'title' => 'FPI Indicator',
    		'fields' => array (
          array (
    				'key' => 'field_fpi_indicator_import_id',
    				'label' => 'Import Id',
    				'name' => 'import_id',
    				'type' => 'number',
    				'instructions' => 'The unique import id; used for matching.',
    				'required' => 1,
    				'default_value' => '',
    				'placeholder' => '',
    				'prepend' => '',
    				'append' => '',
    				'min' => '',
    				'max' => '',
    				'step' => '',
    			),
    			array (
    				'key' => 'field_fpi_indicator_name',
    				'label' => 'Name',
    				'name' => 'name',
    				'type' => 'text',
    				'instructions' => 'User-friendly name of the fishery.',
    				'required' => 1,
    				'default_value' => '',
    				'placeholder' => '',
    				'prepend' => '',
    				'append' => '',
    				'formatting' => 'none',
    				'maxlength' => '',
    			),
    			array (
    				'key' => 'field_fpi_indicator_species',
    				'label' => 'Species',
    				'name' => 'species',
    				'type' => 'text',
    				'instructions' => 'Related species.',
    				'required' => 1,
    				'default_value' => '',
    				'placeholder' => '',
    				'prepend' => '',
    				'append' => '',
    				'formatting' => 'none',
    				'maxlength' => '',
    			),
    			array (
    				'key' => 'field_fpi_indicator_image',
    				'label' => 'Image',
    				'name' => 'image',
    				'type' => 'image',
    				'instructions' => '300px by 200px image representing fishery.',
    				'required' => 1,
    				'save_format' => 'url',
    				'preview_size' => 'thumbnail',
    				'library' => 'all',
    			),
                array (
    				'key' => 'field_fpi_indicator_year',
    				'label' => 'Year',
    				'name' => 'year',
    				'type' => 'number',
    				'instructions' => 'Year.',
    				'required' => 1,
    				'default_value' => '',
    				'placeholder' => '',
    				'prepend' => '',
    				'append' => '',
    				'min' => '',
    				'max' => '',
    				'step' => '',
    			),
    			array (
    				'key' => 'field_fpi_indicator_latitide',
    				'label' => 'Latitude',
    				'name' => 'latitude',
    				'type' => 'number',
    				'instructions' => 'Latitude (+/- 90) representing fishery.',
    				'required' => 1,
    				'default_value' => '',
    				'placeholder' => '',
    				'prepend' => '',
    				'append' => '',
    				'min' => '-90',
    				'max' => 90,
    				'step' => '',
    			),
    			array (
    				'key' => 'field_fpi_indicator_longitude',
    				'label' => 'Longitude',
    				'name' => 'longitude',
    				'type' => 'number',
    				'instructions' => 'Longitude (+/- 180) representing fishery.',
    				'required' => 1,
    				'default_value' => '',
    				'placeholder' => '',
    				'prepend' => '',
    				'append' => '',
    				'min' => '-180',
    				'max' => 180,
    				'step' => '',
    			),
    			array (
    				'key' => 'field_fpi_indicator_ecological',
    				'label' => 'Ecological',
    				'name' => 'ecological',
    				'type' => 'number',
    				'instructions' => 'Ecological indicator (0-5) of the fishery.',
    				'required' => 1,
    				'default_value' => '',
    				'placeholder' => '',
    				'prepend' => '',
    				'append' => '',
    				'min' => 0,
    				'max' => 5,
    				'step' => '',
    			),
    			array (
    				'key' => 'field_fpi_indicator_economic',
    				'label' => 'Economic',
    				'name' => 'economic',
    				'type' => 'number',
    				'instructions' => 'Economic indicator (0-5) of the fishery.',
    				'required' => 1,
    				'default_value' => '',
    				'placeholder' => '',
    				'prepend' => '',
    				'append' => '',
    				'min' => 0,
    				'max' => 5,
    				'step' => '',
    			),
    			array (
    				'key' => 'field_fpi_indicator_community',
    				'label' => 'Community',
    				'name' => 'community',
    				'type' => 'number',
    				'instructions' => 'Community indicator (0-5) of the fishery.',
    				'required' => 1,
    				'default_value' => '',
    				'placeholder' => '',
    				'prepend' => '',
    				'append' => '',
    				'min' => 0,
    				'max' => 5,
    				'step' => '',
    			),
                array (
    				'key' => 'field_fpi_indicator_description',
    				'label' => 'Description',
    				'name' => 'description',
    				'type' => 'wysiwyg',
    				'default_value' => '',
    				'toolbar' => 'full',
    				'media_upload' => 'no',
    			),
                array (
                    'key' => 'field_fpi_indicator_custom',
                    'label' => 'Custom',
                    'name' => 'custom',
                    'type' => 'wysiwyg',
                    'default_value' => '',
                    'toolbar' => 'full',
                    'media_upload' => 'yes',
                ),
    		),
    		'location' => array (
    			array (
    				array (
    					'param' => 'post_type',
    					'operator' => '==',
    					'value' => 'fpi_indicator',
    					'order_no' => 0,
    					'group_no' => 0,
    				),
    			),
    		),
    		'options' => array (
    			'position' => 'normal',
    			'layout' => 'no_box',
    			'hide_on_screen' => array (
    				0 => 'permalink',
    				1 => 'the_content',
    				2 => 'excerpt',
    				3 => 'discussion',
    				4 => 'comments',
    				5 => 'revisions',
    				6 => 'slug',
    				7 => 'author',
    				8 => 'format',
    				9 => 'featured_image',
    				10 => 'categories',
    				11 => 'tags',
    				12 => 'send-trackbacks',
    			),
    		),
    		'menu_order' => 0,
    	));
    }
  }

  function fpi_single_template($single) {
    global $post;
	$plugin_dir_path = plugin_dir_path( __FILE__ );
    if ( $post->post_type == 'fpi_indicator' ) {
        if ( file_exists( $plugin_dir_path . 'fpi-indicator.php' ) ) {
            return $plugin_dir_path . 'fpi-indicator.php';
        }
    }
    return $single;
  }

  function fpi_page_template($single) {
    global $post;
	$plugin_dir_path = plugin_dir_path( __FILE__ );
    if ( $post->post_name == 'data' ) {
        if ( file_exists( $plugin_dir_path . 'fpi-listing.php' ) ) {
            return $plugin_dir_path . 'fpi-listing.php';
        }
    }
    return $single;
  }

  add_action( 'init', 'fpi_create_post_type_indicator' );
  add_filter( 'single_template', 'fpi_single_template');
  add_filter( 'page_template', 'fpi_page_template');
