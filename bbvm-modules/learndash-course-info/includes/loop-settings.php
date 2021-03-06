<?php
/**
 * Render the Loop Settings for LearnDash Course Info Module.
 *
 * @link https://bbvapormodules.com
 *
 * @package BB Vapor Modules
 * @since 2.0.0
 */

FLBuilderModel::default_settings(
	$settings,
	array(
		'post_type' => 'sfwd-courses',
	)
);
?>
<div id="fl-builder-settings-section-source" class="fl-loop-data-source-select fl-builder-settings-section">
	<table class="fl-form-table">
	<?php
	FLBuilder::render_settings_field(
		'user_id',
		array(
			'type'   => 'suggest',
			'label'  => __( 'User', 'bb-vapor-modules-pro' ),
			'action' => 'fl_as_users', // Search posts.
			'data'   => 'users',
			'limit'  => 1,
		),
		$settings
	);
	FLBuilder::render_settings_field(
		'orderby',
		array(
			'type'    => 'select',
			'label'   => __( 'Order By', 'bb-vapor-modules-pro' ),
			'default' => 'name',
			'options' => array(
				'none'     => __( 'None', 'bb-vapor-modules-pro' ),
				'id'       => __( 'ID', 'bb-vapor-modules-pro' ),
				'author'   => __( 'Author', 'bb-vapor-modules-pro' ),
				'title'    => __( 'Title', 'bb-vapor-modules-pro' ),
				'name'     => __( 'Name', 'bb-vapor-modules-pro' ),
				'date'     => __( 'Date', 'bb-vapor-modules-pro' ),
				'modified' => __( 'Modified', 'bb-vapor-modules-pro' ),

			),
		),
		$settings
	);

	FLBuilder::render_settings_field(
		'order',
		array(
			'type'    => 'select',
			'label'   => __( 'Order', 'bb-vapor-modules-pro' ),
			'default' => 'ASC',
			'options' => array(
				'ASC'  => __( 'A-Z', 'bb-vapor-modules-pro' ),
				'DESC' => __( 'Z-A', 'bb-vapor-modules-pro' ),
			),
		),
		$settings
	);
	?>
	</table>
</div>
