<?php
class BBVapor_Restaurant_Menu_Category extends FLBuilderModule {
	public function __construct()
	{
		parent::__construct(array(
			'name'            => __( 'Restaurant Category', 'bb-vapor-modules-pro' ),
			'description'     => __( 'Add menu category for a restaurant', 'bb-vapor-modules-pro' ),
			'category'        => __( 'Restaurant', 'bb-vapor-modules-pro' ),
			'group'           => __( 'MediaRon Modules', 'bb-vapor-modules-pro' ),
			'dir'             => BBVAPOR_PRO_BEAVER_BUILDER_DIR . 'bbvm-modules/restaurant-menu-category/',
			'url'             => BBVAPOR_PRO_BEAVER_BUILDER_URL . 'bbvm-modules/restaurant-menu-category/',
			'editor_export'   => true, // Defaults to true and can be omitted.
			'enabled'         => true, // Defaults to true and can be omitted.
			'partial_refresh' => false, // Defaults to false and can be omitted.
		));

	}
}
FLBuilder::register_module('BBVapor_Restaurant_Menu_Category', array(
	'general'       => array( // Tab
		'title'         => __('General', 'bb-vapor-modules-pro'), // Tab title
		'sections'      => array( // Tab Sections
			'general'       => array( // Section
				'title'         => __('Restaurant Menu', 'bb-vapor-modules-pro'), // Section Title
				'fields' => array(
					'menu_item_category'    => array( // Section Fields
						'type'         => 'text',
						'label'        => __( 'Category name', 'bb-vapor-modules-pro' ),
					),
					'menu_item_category_description'    => array( // Section Fields
						'type'         => 'text',
						'label'        => __( 'Category description or leave blank for no description', 'bb-vapor-modules-pro' ),
					),
				)
			),
		)
	),
	'typography' => array(
		'title' => __( 'Typography', 'mediaron-bb-module' ),
		'sections' => array(
			'general' => array(
				'title'         => __('Typography', 'bb-vapor-modules-pro'), // Section Title
				'fields' => array(
					'category_typography' => array(
						'type' => 'typography',
						'label' => __( 'Category Typography', 'bb-vapor-modules-pro' ),
						'preview'    => array(
							'type'	    => 'css',
							'selector'  => '.mediaron-restaurant-menu-items-heading',
						),
					),
					'category_description_typography' => array(
						'type' => 'typography',
						'label' => __( 'Category Description Typography', 'bb-vapor-modules-pro' ),
						'preview'    => array(
							'type'	    => 'css',
							'selector'  => '.mediaron-restaurant-menu-items-description',
						),
					),
				)
			)
		)
	),
	'spacing' => array(
		'title' => __( 'Spacing', 'mediaron-bb-module' ),
		'sections' => array(
			'general' => array(
				'title'         => __('Spacing', 'bb-vapor-modules-pro'), // Section Title
				'fields' => array(
					'category_padding' => array(
						'type' => 'dimension',
						'label' => __( 'Category Padding', 'bb-vapor-modules-pro' ),
						'responsive'  => true,
					),
					'category_description_padding' => array(
						'type' => 'dimension',
						'label' => __( 'Category Description Padding', 'bb-vapor-modules-pro' ),
						'responsive'  => true,
					),
				)
			)
		)
	),
	'separators' => array(
		'title' => __( 'Separators', 'mediaron-bb-module' ),
		'sections' => array(
			'general' => array(
				'title'         => __('Separators', 'bb-vapor-modules-pro'), // Section Title
				'fields' => array(
					'category_separator'         => array(
						'type'          => 'select',
						'label'         => __('Select category separator', 'bb-vapor-modules-pro'),
						'options'       => array(
							'none'       => __( 'None', 'bb-vapor-modules-pro' ),
							'line'       => __( 'line', 'bb-vapor-modules-pro' ),
							'image'      => __( 'image', 'bb-vapor-modules-pro' ),
						),
						'toggle' => array(
							'line' => array(
								'fields'     => array( 'category_separator_line', 'category_separator_line_height', 'category_separator_line_color', 'category_seperator_margin' ),
							),
							'image' => array(
								'fields' => array( 'category_separator_line_image', 'category_separator_line_height', 'category_seperator_margin' ),
							)
						)
					),
					'category_separator_line'         => array(
						'type'          => 'select',
						'label'         => __('Line type', 'bb-vapor-modules-pro'),
						'options'       => array(
							'single'       => __( 'Single line', 'bb-vapor-modules-pro' ),
							'double'      => __( 'Double line', 'bb-vapor-modules-pro' ),
						),
					),
					'category_separator_line_color' => array(
						'type' => 'color',
						'label' => __( 'Category line color', 'bb-vapor-modules-pro' ),
					),
					'category_separator_line_image'    => array(
						'type' => 'photo',
						'label' => __( 'Line background image', 'bb-vapor-modules-pro' ),
					),
					'category_separator_line_height'  => array(
						'type'        => 'unit',
						'label'       => __( 'Line height', 'bb-vapor-modules-pro' ),
						'description' => 'px',
						'default'     => '1',
					),
					'category_seperator_margin'   => array(
						'type' => 'dimension',
						'label' => __( 'Margin', 'bb-vapor-modules-pro' ),
					),
				),
			)
		)
	)
) );
