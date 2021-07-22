<?php
/*
Plugin Name: Visiegroep Content With Embed block
Author: Randalph
Version: 1.1.2
*/
function visie_groep_block_scripts() {
	wp_enqueue_script('visiegroepblock-js',
		plugin_dir_url(__FILE__) . 'visiegroepblock.js',
		array('wp-block-editor', 'wp-blocks', 'wp-editor', 'wp-api'),
		false);
}
add_action('enqueue_block_editor_assets', 'visie_groep_block_scripts');


function three_button_blocks_embed() {
	
	if ( ! function_exists ( 'acf_register_block_type' ) )
		 return;

	acf_register_block_type ( array (
		'name'			=> 'image_text_button',
		'title'			=> __( 'Visiegroep Content Block Embed' ),
		'render_template'	=> plugin_dir_path (__FILE__) . 'image-text-button.php',
		'category'		=> 'formatting',
		'icon'			=> 'admin-users',
		'mode'			=> 'auto',
		'keywords'		=> array ( 'three_button' ),
		'enqueue_style' => plugin_dir_url(__FILE__) . 'image-text-button.css'
	));
}
add_action('acf/init', 'three_button_blocks_embed' );


if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_60a38a31caa44',
	'title' => 'Button-text-image',
	'fields' => array(
		array(
			'key' => 'field_60a38a92898bb',
			'label' => '',
			'name' => 'content',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => 'vg-content',
				'id' => '',
			),
			'layout' => 'block',
			'sub_fields' => array(
				array(
					'key' => 'field_60a38aa7898bc',
					'label' => 'Header',
					'name' => 'header',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => 'vg-header',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_60a38abb898be',
					'label' => 'Text',
					'name' => 'text',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => 'vg-textarea',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => 'wpautop',
				),
				array(
					'key' => 'field_60a3915b800c7',
					'label' => 'Buttons',
					'name' => 'buttons',
					'type' => 'repeater',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => 'vg-buttons',
						'id' => '',
					),
					'collapsed' => '',
					'min' => 1,
					'max' => 3,
					'layout' => 'table',
					'button_label' => 'Toevoegen knop',
					'sub_fields' => array(
						array(
							'key' => 'field_60a3916c800c8',
							'label' => 'Link',
							'name' => 'link',
							'type' => 'post_object',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => 'vg-link',
								'id' => '',
							),
							'post_type' => array(
								0 => 'page',
							),
							'taxonomy' => '',
							'allow_null' => 0,
							'multiple' => 0,
							'return_format' => 'object',
							'ui' => 1,
						),
						array(
							'key' => 'field_60a3917f800c9',
							'label' => 'Button text',
							'name' => 'button_text',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => 'vg-button-text',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
					),
				),
				array(
					'key' => 'field_60a77208c7698',
					'label' => 'Achtergrondkleur',
					'name' => 'color-class',
					'type' => 'radio',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => 'vg-background-color',
						'id' => '',
					),
					'choices' => array(
						'white' => 'Wit',
						'grey' => 'Grijs',
						
					),
					'allow_null' => 0,
					'other_choice' => 0,
					'default_value' => 'white',
					'layout' => 'horizontal',
					'return_format' => 'value',
					'save_other_choice' => 0,
				),
				array(
					'key' => 'field_60b5e896d46a5',
					'label' => 'Embedded Video',
					'name' => 'video_embed',
					'type' => 'oembed',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => 'vg-video-embed',
						'id' => '',
					),
					'width' => '',
					'height' => '',
				),
				array(
					'key' => 'field_60a38aae898bd',
					'label' => 'Image',
					'name' => 'image',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => 'vg-image',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'medium',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array(
					'key' => 'field_60a60f2c3b110',
					'label' => 'Positie Image',
					'name' => 'positioni',
					'type' => 'radio',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => 'vg-position-image',
						'id' => '',
					),
					'choices' => array(
						'right' => 'Rechts',
						'left' => 'Links',
					),
					'allow_null' => 0,
					'other_choice' => 0,
					'default_value' => 'rechts',
					'layout' => 'horizontal',
					'return_format' => 'value',
					'save_other_choice' => 0,
				),
				
				array(
					'key' => 'field_60a771c39b831',
					'label' => 'Afbeelding bijsnijden',
					'name' => 'crop_image',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => 'vg-crop-image',
						'id' => '',
					),
					'message' => '',
					'default_value' => 0,
					'ui' => 0,
					'ui_on_text' => '',
					'ui_off_text' => '',
				),								
				
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/image-text-button',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;