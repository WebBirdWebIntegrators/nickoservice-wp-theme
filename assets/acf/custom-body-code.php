<?php

if( function_exists('acf_add_local_field_group') ):

$name_path = 'wbts__custom_body_code';

acf_add_local_field_group(array (
	'key' => 'group_' . $name_path,
	'title' => __('Custom Body Code','eagle'),
	'fields' => array (
		array (
			'key' => 'field_' . $name_path . '__code',
			'label' => false,
			'name' => $name_path . '__code',
			'type' => 'textarea',
			'instructions' => __('This code will be inserted into the body. So be careful with it as it can break the website.','eagle'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'theme-settings',
			),
		),
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
	),
	'menu_order' => 30,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
));

endif;

?>
