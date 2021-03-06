<?php //phpcs:ignore
/**
 * Advanced Headings Module
 *
 * @link https://bbvapormodules.com
 *
 * @package BB Vapor Modules
 * @since 1.3.0
 */

/**
 * Advanced Heading module.
 *
 * @package BB Vapor Modules
 */
class BBVapor_Advanced_Headings_Module extends FLBuilderModule {
	/**
	 * Initialize Advanced Headings.
	 */
	public function __construct() {
		parent::__construct(
			array(
				'name'            => __( 'Advanced Headings', 'bb-vapor-modules-pro' ),
				'description'     => __( 'Advanced Headings for Beaver Builder', 'bb-vapor-modules-pro' ),
				'category'        => __( 'Base', 'bb-vapor-modules-pro' ),
				'group'           => apply_filters( 'bbvm_whitelabel_category', __( 'Vapor', 'bb-vapor-modules-pro' ) ),
				'dir'             => BBVAPOR_PRO_BEAVER_BUILDER_DIR . '/bbvm-modules/advanced-headings/',
				'url'             => BBVAPOR_PRO_BEAVER_BUILDER_URL . 'bbvm-modules/advanced-headings/',
				'editor_export'   => true, // Defaults to true and can be omitted.
				'enabled'         => true, // Defaults to true and can be omitted.
				'partial_refresh' => false, // Defaults to false and can be omitted.
			)
		);
	}
}
FLBuilder::register_settings_form(
	'bbvm_variable_headlines_advanced',
	array(
		'title' => __( 'Add Headline Text', 'bb-vapor-modules-pro' ),
		'tabs'  => array(
			'general' => array(
				'title'    => __( 'General', 'bb-vapor-modules-pro' ),
				'sections' => array(
					'general' => array(
						'title'  => __( 'Add Headline Text', 'bb-vapor-modules-pro' ),
						'fields' => array(
							'headline'            => array(
								'type'    => 'text',
								'label'   => __( 'Headline Text', 'bb-vapor-modules' ),
								'default' => '',
							),
							'headline_color'      => array(
								'type'       => 'color',
								'label'      => __( 'Headline Color', 'bb-vapor-modules' ),
								'show_reset' => true,
							),
							'headline_display'    => array(
								'type'    => 'select',
								'label'   => __( 'Headline Display', 'bb-vapor-modules-pro' ),
								'default' => 'inline',
								'options' => array(
									'inline' => __( 'Inline', 'bb-vapor-modules-pro' ),
									'block'  => __( 'Block', 'bb-vapor-modules-pro' ),
								),
							),
							'headline_typography' => array(
								'type'       => 'typography',
								'label'      => __( 'Headline Typography', 'bb-vapor-modules' ),
								'responsive' => true,
							),
						),
					),
				),
			),
		),
	)
);
FLBuilder::register_module(
	'BBVapor_Advanced_Headings_Module',
	array(
		'general'     => array(
			'title'    => __( 'General', 'bb-vapor-modules-pro' ),
			'sections' => array(
				'general' => array(
					'title'  => __( 'Headings', 'bb-vapor-modules-pro' ),
					'fields' => array(
						'headline_tag'         => array(
							'type'    => 'select',
							'label'   => __( 'Heading Tag', 'bb-vapor-modules-pro' ),
							'options' => array(
								'h1' => 'H1',
								'h2' => 'H2',
								'h3' => 'H3',
								'h4' => 'H4',
								'h5' => 'H5',
								'h6' => 'H6',
							),
							'default' => 'h2',
						),
						'headline_link'        => array(
							'type'       => 'link',
							'label'      => __( 'Headline Link', 'bb-vapor-modules-pro' ),
							'show_reset' => true,
							'preview'    => array(),
						),
						'headline_select'      => array(
							'type'    => 'select',
							'label'   => __( 'Headline Style', 'bb-vapor-modules-pro' ),
							'options' => array(
								'normal'   => __( 'Normal', 'bb-vapor-modules-pro' ),
								'variable' => __( 'Variable', 'bb-vapor-modules-pro' ),
							),
							'toggle'  => array(
								'variable' => array(
									'fields' => array(
										'headlines',
										'variable_align',
									),
								),
								'normal'   => array(
									'fields' => array(
										'headline',
										'headline_typography',
										'headline_color',
									),
								),
							),
							'default' => 'normal',
						),
						'headline_description' => array(
							'type'    => 'select',
							'label'   => __( 'Enable Headline Description', 'bb-vapor-modules-pro' ),
							'options' => array(
								'no'  => __( 'No', 'bb-vapor-modules-pro' ),
								'yes' => __( 'Yes', 'bb-vapor-modules-pro' ),
							),
							'toggle'  => array(
								'yes' => array(
									'tabs' => array(
										'description',
									),
								),
							),
							'default' => 'no',
						),
						'headline_separator'   => array(
							'type'    => 'select',
							'label'   => __( 'Enable Headline Separators', 'bb-vapor-modules-pro' ),
							'options' => array(
								'no'  => __( 'No', 'bb-vapor-modules-pro' ),
								'yes' => __( 'Yes', 'bb-vapor-modules-pro' ),
							),
							'toggle'  => array(
								'yes' => array(
									'tabs' => array(
										'separator',
									),
								),
							),
							'default' => 'no',
						),
						'headline'             => array(
							'type'    => 'text',
							'label'   => __( 'Enter Your Headline', 'bb-vapor-modules-pro' ),
							'preview' => array(
								'type'     => 'text',
								'selector' => '.bbvm-advanced-headline span',
							),
						),
						'headlines'            => array(
							'type'         => 'form',
							'form'         => 'bbvm_variable_headlines_advanced',
							'label'        => __( 'Heading', 'bb-vapor-modules-pro' ),
							'multiple'     => true,
							'preview_text' => 'headline',
						),
						'headline_style'       => array(
							'type'    => 'select',
							'label'   => __( 'Headline Style', 'bb-vapor-modules-pro' ),
							'options' => array(
								'inline' => __( 'Inline Block', 'bb-vapor-modules-pro' ),
								'block'  => __( 'Full Width', 'bb-vapor-modules-pro' ),
							),
							'default' => 'inline',
						),
						'headline_align'       => array(
							'type'    => 'align',
							'label'   => __( 'Headline Alignment', 'bb-vapor-modules-pro' ),
							'help'    => __( 'Headline style must be full width.', 'bb-vapor-modules-pro' ),
							'default' => 'left',
							'preview' => array(
								'type'     => 'css',
								'selector' => '.bbvm-advanced-headline',
								'property' => 'text-align',
							),
						),
						'headline_color'       => array(
							'type'       => 'color',
							'label'      => __( 'Headline Color', 'bb-vapor-modules-pro' ),
							'show_reset' => true,
							'show_alpha' => true,
							'default'    => '000000',
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.bbvm-advanced-headline span',
								'property' => 'color',
							),
						),
						'headline_padding'     => array(
							'type'       => 'dimension',
							'label'      => __( 'Headline Padding', 'bb-vapor-modules-pro' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.bbvm-advanced-headline',
								'property' => 'padding',
								'unit'     => 'px',
							),
						),
						'headline_margin'      => array(
							'type'       => 'dimension',
							'label'      => __( 'Headline Margin', 'bb-vapor-modules-pro' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.bbvm-advanced-headline',
								'property' => 'margin',
								'unit'     => 'px',
							),
						),
						'headline_typography'  => array(
							'type'       => 'typography',
							'label'      => __( 'Headline Typography', 'bb-vapor-modules-pro' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.bbvm-advanced-headline span',
							),
						),
					),
				),
			),
		),
		'description' => array(
			'title'    => __( 'Description', 'bb-vapor-modules-pro' ),
			'sections' => array(
				'description' => array(
					'title'  => __( 'Description', 'bb-vapor-modules-pro' ),
					'fields' => array(
						'description'            => array(
							'type'    => 'editor',
							'label'   => __( 'Heading Description', 'bb-vapor-modules-pro' ),
							'preview' => array(
								'type'     => 'text',
								'selector' => '.description',
							),
						),
						'description_color'      => array(
							'type'       => 'color',
							'label'      => __( 'Description Text Color', 'bb-vapor-modules-pro' ),
							'show_reset' => true,
							'show_alpha' => true,
							'default'    => '000000',
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.description',
								'property' => 'color',
							),
						),
						'description_typography' => array(
							'type'    => 'typography',
							'label'   => __( 'Description Typography', 'bb-vapor-modules-pro' ),
							'preview' => array(
								'type'     => 'css',
								'selector' => '.description',
							),
						),
					),
				),
			),
		),
		'separator'   => array(
			'title'    => __( 'Separator', 'bb-vapor-modules-pro' ),
			'sections' => array(
				'description' => array(
					'title'  => __( 'Separator', 'bb-vapor-modules-pro' ),
					'fields' => array(
						'separator_type'          => array(
							'type'    => 'select',
							'label'   => __( 'Separator Type', 'bb-vapor-modules-pro' ),
							'options' => array(
								'line'         => __( 'Simple Line', 'bb-vapor-modules-pro' ),
								'line_radius'  => __( 'Line With Radius' ),
								'line_icon'    => __( 'Line With Icon', 'bb-vapor-modules-pro' ),
								'line_photo'   => __( 'Line With Photo', 'bb-vapor-modules-pro' ),
								'line_content' => __( 'Line With Content', 'bb-vapor-modules-pro' ),
								'photo'        => __( 'Background Image', 'bb-vapor-modules-pro' ),
							),
							'toggle'  => array(
								'line'         => array(
									'fields' => array(
										'line_type',
										'line_color',
										'line_height',
									),
								),
								'line_radius'  => array(
									'fields' => array(
										'line_color',
										'line_height',
										'line_radius',
									),
								),
								'line_icon'    => array(
									'fields' => array(
										'line_color',
										'line_height',
										'icon',
										'icon_size',
										'icon_style',
										'icon_color',
										'icon_background_color',
									),
								),
								'line_photo'   => array(
									'fields' => array(
										'style_photo',
										'line_height',
										'photo_style',
										'photo_size',
										'line_color',
									),
								),
								'line_content' => array(
									'fields' => array(
										'line_color',
										'line_content',
										'line_content_typography',
										'line_height',
										'line_content_color',
									),
								),
								'photo'        => array(
									'fields' => array(
										'background_photo',
										'line_height',
									),
								),
							),
							'default' => 'line',
						),
						'style_photo'             => array(
							'type'  => 'photo',
							'label' => __( 'Select a photo', 'bb-vapor-modules-pro' ),
						),
						'photo_style'             => array(
							'type'    => 'select',
							'label'   => __( 'Select a photo style', 'bb-vapor-modules-pro' ),
							'options' => array(
								'simple'   => __( 'Simple', 'bb-vapor-modules-pro' ),
								'square'   => __( 'Square', 'bb-vapor-modules-pro' ),
								'circular' => __( 'Circular', 'bb-vapor-modules-pro' ),
							),
						),
						'photo_size'              => array(
							'type'        => 'unit',
							'label'       => __( 'Enter a photo size', 'bb-vapor-modules-pro' ),
							'responsive'  => true,
							'description' => 'px',
							'default'     => '50',
							'preview'     => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector'  => '.fl-bbvm-advanced-separator-icon img',
										'property'  => 'height',
										'important' => true,
										'unit'      => 'px',
									),
									array(
										'selector'  => '.fl-bbvm-advanced-separator-icon img',
										'property'  => 'width',
										'unit'      => 'px',
										'important' => true,
									),
								),
							),
						),
						'background_photo'        => array(
							'type'  => 'photo',
							'label' => __( 'Background Photo', 'bb-vapor-modules-pro' ),
						),
						'line_content'            => array(
							'type'    => 'text',
							'label'   => __( 'Separator Content', 'bb-vapor-modules-pro' ),
							'default' => '***',
							'preview' => array(
								'type'     => 'text',
								'selector' => '.line-content',
							),
						),
						'line_content_color'      => array(
							'type'       => 'color',
							'label'      => __( 'Content Color', 'bb-vapor-modules-pro' ),
							'default'    => '000000',
							'show_reset' => true,
							'show_alpha' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector'  => '.line-content',
										'property'  => 'color',
										'important' => true,
									),
								),
							),
						),
						'line_content_typography' => array(
							'type'       => 'typography',
							'label'      => __( 'Separator Content Typography', 'bb-vapor-modules-pro' ),
							'responsive' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.line-content',
									),
								),
							),
						),
						'line_height'             => array(
							'type'        => 'unit',
							'label'       => __( 'Height of Separator', 'bb-vapor-modules-pro' ),
							'default'     => '2',
							'description' => 'px',
							'preview'     => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector'  => '.bbvm-advanced-headline:after',
										'property'  => 'border-bottom-width',
										'unit'      => 'px',
										'important' => true,
									),
									array(
										'selector'  => '.fl-bbvm-advanced-separator-line',
										'property'  => 'height',
										'unit'      => 'px',
										'important' => true,
									),
								),
							),
						),
						'icon'                    => array(
							'type'  => 'icon',
							'label' => __( 'Enter an icon', 'bb-vapor-modules-pro' ),
						),
						'icon_size'               => array(
							'type'    => 'unit',
							'label'   => __( 'Enter an icon size', 'bb-vapor-modules-pro' ),
							'default' => '24',
							'preview' => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector'  => '.fl-bbvm-advanced-separator-icon i',
										'property'  => 'font-size',
										'unit'      => 'px',
										'important' => true,
									),
								),
							),
						),
						'icon_style'              => array(
							'type'    => 'select',
							'label'   => __( 'Select an icon style', 'bb-vapor-modules-pro' ),
							'options' => array(
								'simple'   => __( 'Simple', 'bb-vapor-modules-pro' ),
								'square'   => __( 'Square', 'bb-vapor-modules-pro' ),
								'circular' => __( 'Circular', 'bb-vapor-modules-pro' ),
							),
						),
						'icon_color'              => array(
							'type'       => 'color',
							'label'      => __( 'Enter an icon color', 'bb-vapor-modules-pro' ),
							'default'    => '000000',
							'show_reset' => true,
							'show_alpha' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector'  => '.fl-bbvm-advanced-separator-icon i',
										'property'  => 'color',
										'important' => true,
									),
								),
							),
						),
						'icon_background_color'   => array(
							'type'       => 'color',
							'label'      => __( 'Enter a background color', 'bb-vapor-modules-pro' ),
							'default'    => 'FFFFFF',
							'show_reset' => true,
							'show_alpha' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector'  => '.fl-bbvm-advanced-separator-icon',
										'property'  => 'background-color',
										'important' => true,
									),
								),
							),
						),
						'line_radius'             => array(
							'type'    => 'unit',
							'label'   => __( 'Radius of Separator', 'bb-vapor-modules-pro' ),
							'default' => '5',
							'preview' => array(
								'type'     => 'css',
								'selector' => '.bbvm-advanced-headline:after',
								'property' => 'border-radius',
								'unit'     => 'px',
							),
						),
						'line_type'               => array(
							'type'    => 'select',
							'label'   => __( 'Line Type', 'bb-vapor-modules-pro' ),
							'options' => array(
								'solid'  => __( 'Solid', 'bb-vapor-modules-pro' ),
								'dashed' => __( 'Dashed', 'bb-vapor-modules-pro' ),
								'dotted' => __( 'Dotted', 'bb-vapor-modules-pro' ),
								'double' => __( 'Double', 'bb-vapor-modules-pro' ),
							),
							'default' => 'solid',
						),
						'line_color'              => array(
							'type'       => 'color',
							'label'      => __( 'Line Color', 'bb-vapor-modules-pro' ),
							'show_reset' => true,
							'show_alpha' => true,
							'default'    => '000000',
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector'  => '.bbvm-advanced-headline:after',
										'property'  => 'border-bottom-color',
										'important' => true,
									),
									array(
										'selector'  => '.fl-bbvm-advanced-separator-line',
										'property'  => 'background-color',
										'important' => true,
									),
								),
							),
						),
					),
				),
			),
		),
	)
);
