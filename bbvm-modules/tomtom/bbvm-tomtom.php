<?php // phpcs:ignore
class BBVapor_TomTom extends FLBuilderModule {
	/**
	 * Class Constructor.
	 */
	public function __construct() {
		parent::__construct(
			array(
				'name'            => __( 'TomTom Map', 'bb-vapor-modules-pro' ),
				'description'     => __( 'TomTom Map', 'bb-vapor-modules-pro' ),
				'category'        => __( 'Base', 'bb-vapor-modules-pro' ),
				'group'           => apply_filters( 'bbvm_whitelabel_category', __( 'Vapor', 'bb-vapor-modules-pro' ) ),
				'dir'             => BBVAPOR_PRO_BEAVER_BUILDER_DIR . 'bbvm-modules/tomtom/',
				'url'             => BBVAPOR_PRO_BEAVER_BUILDER_URL . 'bbvm-modules/tomtom/',
				'editor_export'   => true, // Defaults to true and can be omitted.
				'enabled'         => true, // Defaults to true and can be omitted.
				'partial_refresh' => false, // Defaults to false and can be omitted.
			)
		);
		$tomtom_api_key = get_option( 'bbvm_tomtom', '' );
		if ( ! empty( $tomtom_api_key ) ) {
			$this->add_js(
				'bbvm-tom-tom',
				BBVAPOR_PRO_BEAVER_BUILDER_URL . 'bbvm-modules/tomtom/tomtom-sdk/maps-web.min.js',
				array( 'jquery' ),
				'5.0.0',
				false
			);
			$this->add_css(
				'bbvm-tom-tom',
				BBVAPOR_PRO_BEAVER_BUILDER_URL . 'bbvm-modules/tomtom/tomtom-sdk/maps.css',
				array(),
				'5.0.0',
				'all'
			);
		}
	}
}
$tomtom_api_key = get_option( 'bbvm_tomtom', '' );
$notice         = '';
if ( empty( $tomtom_api_key ) ) {
	$notice = sprintf( /* translators: %s is the Admin URL to TomTom API Key entry */
		__( '<strong>A TomTom API Key is necessary to show the TomTom Map. Enter your API Key in the <a href="%s" target="_blank" rel="noopener">TomTom Settings</a>.</strong>', 'bb-vapor-modules-pro' ),
		esc_url( admin_url( 'options-general.php?page=bb-vapor-modules-pro&tab=tab-tomtom' ) )
	);
}
FLBuilder::register_settings_form(
	'bbvm_tomtom_markers',
	array(
		'title' => __( 'Add Marker', 'bb-vapor-modules-pro' ),
		'tabs'  => array(
			'general' => array(
				'title'    => __( 'Marker', 'bb-vapor-modules-pro' ),
				'sections' => array(
					'general' => array(
						'title'  => __( 'Enter a Marker', 'bb-vapor-modules-pro' ),
						'fields' => array(
							'marker_name' => array(
								'type'  => 'text',
								'label' => __( 'Marker Name', 'bb-vapor-modules-pro' ),
							),
							'latitude'    => array(
								'type'  => 'text',
								'label' => __( 'Latitude', 'bb-vapor-modules-pro' ),
							),
							'longitude'   => array(
								'type'  => 'text',
								'label' => __( 'Longitude', 'bb-vapor-modules-pro' ),
							),
							'marker_icon' => array(
								'type'        => 'photo',
								'label'       => __( 'Marker Icon', 'bb-vapor-modules-pro' ),
								'show_remove' => true,
								'description' => __( 'Square images are recommended', 'bb-vapor-modules-pro' ),
							),
							'show_info'   => array(
								'type'    => 'select',
								'label'   => __( 'Show Info Window', 'bb-vapor-modules-pro' ),
								'options' => array(
									'no'  => __( 'No', 'bb-vapor-modules-pro' ),
									'yes' => __( 'Yes', 'bb-vapor-modules-pro' ),
								),
								'default' => 'yes',
								'toggle'  => array(
									'yes' => array(
										'tabs' => array(
											'info',
										),
									),
								),
							),
						),
					),
				),
			),
			'info'    => array(
				'title'    => __( 'Info Window', 'bb-vapor-modules-pro' ),
				'sections' => array(
					'general' => array(
						'title'  => __( 'Marker Information', 'bb-vapor-modules-pro' ),
						'fields' => array(
							'location_name' => array(
								'type'  => 'text',
								'label' => __( 'Location Name', 'bb-vapor-modules-pro' ),
							),
							'location'      => array(
								'type'  => 'textarea',
								'label' => __( 'Location', 'bb-vapor-modules-pro' ),
							),
							'phone'         => array(
								'type'  => 'text',
								'label' => __( 'Phone Number', 'bb-vapor-modules-pro' ),
							),
							'show_link'     => array(
								'type'    => 'select',
								'label'   => __( 'Show Link?', 'bb-vapor-modules-pro' ),
								'options' => array(
									'no'  => __( 'No', 'bb-vapor-modules-pro' ),
									'yes' => __( 'Yes', 'bb-vapor-modules-pro' ),
								),
								'toggle'  => array(
									'yes' => array(
										'fields' => array(
											'link_text',
											'link_url',
										),
									),
								),
							),
							'link_text'     => array(
								'type'  => 'text',
								'label' => __( 'Link Text', 'bb-vapor-modules-pro' ),
							),
							'link_url'      => array(
								'type'          => 'link',
								'label'         => __( 'URL', 'bb-vapor-modules-pro' ),
								'show_target'   => true,
								'show_nofollow' => true,
							),
						),
					),
				),
			),
		),
	)
);
/**
 * Register the module and its form settings.
 */
FLBuilder::register_module(
	'BBVapor_TomTom',
	array(
		'markers' => array(
			'title'       => __( 'Markers', 'bb-vapor-modules-pro' ),
			'description' => $notice,
			'sections'    => array(
				'markers' => array(
					'title'  => __( 'Markers', 'bb-vapor-modules-pro' ),
					'fields' => array(
						'markers' => array(
							'type'         => 'form',
							'label'        => __( 'Marker', 'bb-vapor-modules-pro' ),
							'form'         => 'bbvm_tomtom_markers',
							'multiple'     => true,
							'preview_text' => 'marker_name',
						),
					),
				),
			),
		),
		'options' => array(
			'title'    => __( 'Options', 'bb-vapor-modules-pro' ),
			'sections' => array(
				'center'   => array(
					'title'  => __( 'Center View', 'bb-vapor-modules-pro' ),
					'fields' => array(
						'latitude'   => array(
							'type'    => 'text',
							'label'   => __( 'Latitude', 'bb-vapor-modules-pro' ),
							'default' => '-96.5681667',
						),
						'longitude'  => array(
							'type'    => 'text',
							'label'   => __( 'Longitude', 'bb-vapor-modules-pro' ),
							'default' => '41.1963831',
						),
						'zoom_level' => array(
							'type'    => 'unit',
							'label'   => __( 'Zoom Level', 'bb-vapor-modules-pro' ),
							'slider'  => array(
								'min'  => 1,
								'max'  => 20,
								'step' => 1,
							),
							'default' => 5,
						),
					),
				),
				'controls' => array(
					'title'  => __( 'Controls', 'bb-vapor-modules-pro' ),
					'fields' => array(
						'pan_zoom'    => array(
							'type'    => 'select',
							'label'   => __( 'Allow Pan and Zoom?', 'bb-vapor-modules-pro' ),
							'options' => array(
								'no'  => __( 'No', 'bb-vapor-modules-pro' ),
								'yes' => __( 'Yes', 'bb-vapor-modules-pro' ),
							),
							'default' => 'yes',
						),
						'geolocation' => array(
							'type'    => 'select',
							'label'   => __( 'Allow Geolocation?', 'bb-vapor-modules-pro' ),
							'options' => array(
								'no'  => __( 'No', 'bb-vapor-modules-pro' ),
								'yes' => __( 'Yes', 'bb-vapor-modules-pro' ),
							),
							'default' => 'yes',
						),
						'mode'        => array(
							'type'    => 'select',
							'label'   => __( 'Map Mode', 'bb-vapor-modules-pro' ),
							'options' => array(
								'light' => __( 'Light', 'bb-vapor-modules-pro' ),
								'dark'  => __( 'Dark', 'bb-vapor-modules-pro' ),
							),
							'default' => 'yes',
						),
					),
				),
			),
		),
		'styles'  => array(
			'title'    => __( 'Styles', 'bb-vapor-modules-pro' ),
			'sections' => array(
				'styles' => array(
					'title'  => __( 'Styles', 'bb-vapor-modules-pro' ),
					'fields' => array(
						'button_alignment'  => array(
							'type'    => 'align',
							'label'   => __( 'Button Alignment', 'bb-vapor-modules-pro' ),
							'default' => 'center',
							'preview' => array(
								'type'     => 'css',
								'selector' => '.fl-bbvm-button-for-beaverbuilder-wrapper',
								'property' => 'text-align',
							),
						),
						'button_padding'    => array(
							'type'       => 'dimension',
							'label'      => __( 'Button Padding', 'bb-vapor-modules-pro' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.fl-bbvm-button-for-beaverbuilder.bbvm-button',
								'property' => 'padding',
								'unit'     => 'px',
							),
						),
						'button_typography' => array(
							'type'       => 'typography',
							'label'      => __( 'Button Typography', 'bb-vapor-modules-pro' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.fl-bbvm-button-for-beaverbuilder.bbvm-button',
							),
						),
						'button_margin'     => array(
							'type'       => 'dimension',
							'label'      => __( 'Button Margin', 'bb-vapor-modules-pro' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.fl-bbvm-button-for-beaverbuilder.bbvm-button',
								'property' => 'margin',
								'unit'     => 'px',
							),
						),
						'button_radius'     => array(
							'type'       => 'dimension',
							'label'      => __( 'Button Radius', 'bb-vapor-modules-pro' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.fl-bbvm-button-for-beaverbuilder.bbvm-button',
								'property' => 'border-radius',
								'unit'     => 'px',
							),
						),
						'button_min_width'  => array(
							'type'        => 'unit',
							'label'       => __( 'Button Min Width', 'bb-vapor-modules-pro' ),
							'default'     => '0',
							'responsive'  => true,
							'description' => 'px',
							'preview'     => array(
								'type'     => 'css',
								'selector' => '.fl-bbvm-button-for-beaverbuilder.bbvm-button',
								'property' => 'min-width',
								'unit'     => 'px',
							),
						),
					),
				),
			),
		),
	)
);
