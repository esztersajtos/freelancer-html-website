<?php
/**
 * Cegesnyelvtanfolyam functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Cegesnyelvtanfolyam
 */

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5c8a7a8dd7b17',
	'title' => 'Főcím mezők',
	'fields' => array(
		array(
			'key' => 'field_5c8a7a9b0ce3a',
			'label' => 'Főcím',
			'name' => 'focim',
			'type' => 'text',
			'instructions' => 'Slideshow alatti cím',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Angol és spanyol nyelvtanfolyamok',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5c8a7ab50ce3b',
			'label' => 'Alcím',
			'name' => 'alcim',
			'type' => 'text',
			'instructions' => 'Slideshow alatti kisbetűs szöveg',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Egyéni és kiscsoportos vállalati tanfolyamok, magánórák',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '33',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'left',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5c90c48613b2f',
	'title' => 'Kapcsolat',
	'fields' => array(
		array(
			'key' => 'field_5c90c48becd6a',
			'label' => 'Ajánlatkérés menete',
			'name' => 'ajanlatkeres_menete',
			'type' => 'wysiwyg',
			'instructions' => 'Ajánlatkérés magyarázata',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Ajánlatkérés menete',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5c90c50291ca8',
			'label' => 'Lábléc szöveg',
			'name' => 'lablec_szoveg',
			'type' => 'textarea',
			'instructions' => 'Lábléc szövege',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Lábléc szövege',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
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

acf_add_local_field_group(array(
	'key' => 'group_5c8a7b5f5b31e',
	'title' => 'Welcome mezők',
	'fields' => array(
		array(
			'key' => 'field_5c8a7ba9a45b1',
			'label' => 'Welcome cím',
			'name' => 'welcome_cim',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Hatékony, kiscsoportos angol és spanyol tanfolyamok az Ön cégénél.',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5c8a7bc3a45b2',
			'label' => 'Welcome leírás',
			'name' => 'welcome_leiras',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5c8a7bf362bac',
			'label' => 'Welcome kép',
			'name' => 'welcome_kep',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'full',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '33',
			),
		),
	),
	'menu_order' => 1,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'left',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5c8a7ce87b3d7',
	'title' => 'Rólam',
	'fields' => array(
		array(
			'key' => 'field_5c8a7cee793ef',
			'label' => 'Rólam cím bal',
			'name' => 'rolam_cim_bal',
			'type' => 'wysiwyg',
			'instructions' => 'Bal oldali szövegterület',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5c8a7d40793f0',
			'label' => 'Rólam cím jobb oldal',
			'name' => 'rolam_cim_jobb',
			'type' => 'wysiwyg',
			'instructions' => 'Rólam szekció jobb oldali szöveg',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '33',
			),
		),
	),
	'menu_order' => 3,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;

