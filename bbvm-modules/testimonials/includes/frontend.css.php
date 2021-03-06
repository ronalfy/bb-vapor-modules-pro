<?php
/**
 * Testimonials Module.
 *
 * @link https://bbvapormodules.com
 *
 * @package BB Vapor Modules
 * @since 1.3.0
 */

?>
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-testimonials-cards {
	display: flex;
	justify-content: space-between;
	flex-wrap: wrap;
	text-align: center;
}
.fl-node-<?php echo esc_html( $id ); ?> .owl-nav {
	position: absolute;
	top: calc(50% - 44px);
	width: 100%;
}
.fl-node-<?php echo esc_html( $id ); ?> .owl-prev {
	position: absolute;
	left: 0;
}
.fl-node-<?php echo esc_html( $id ); ?> .owl-dots .owl-dot span {
	background: #<?php echo esc_html( $settings->nav_bullets_color ); ?>;
}
.fl-node-<?php echo esc_html( $id ); ?> .owl-dots .owl-dot.active span {
	background: #<?php echo esc_html( $settings->nav_bullets_active_color ); ?>;
}
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-testimonials-card {
	box-sizing: border-box;
	background: #<?php echo esc_html( $settings->card_background ); ?>;
}
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-testimonials-card:hover {
	background: #<?php echo esc_html( $settings->card_background_hover ); ?>;
}
<?php
FLBuilderCSS::rule(
	array(
		'selector' => ".fl-node-$id .fl-bbvm-testimonials-card",
		'media'    => 'default', // Optional. Can be `default`, `medium`, `responsive` or a custom statement.
		'props'    => array(
			'width' => $settings->card_width . '%',
		),
	)
);
FLBuilderCSS::rule(
	array(
		'selector' => ".fl-node-$id .fl-bbvm-testimonials-card",
		'media'    => 'medium', // Optional. Can be `default`, `medium`, `responsive` or a custom statement.
		'props'    => array(
			'width' => $settings->card_width_medium . '%',
		),
	)
);
FLBuilderCSS::rule(
	array(
		'selector' => ".fl-node-$id .fl-bbvm-testimonials-card",
		'media'    => 'responsive', // Optional. Can be `default`, `medium`, `responsive` or a custom statement.
		'props'    => array(
			'width' => $settings->card_width_responsive . '%',
		),
	)
);
FLBuilderCSS::dimension_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'card_padding',
		'selector'     => ".fl-node-$id .fl-bbvm-testimonials-card",
		'unit'         => 'px',
		'props'        => array(
			'padding-top'    => 'card_padding_top',
			'padding-right'  => 'card_padding_right',
			'padding-bottom' => 'card_padding_bottom',
			'padding-left'   => 'card_padding_left',
		),
	)
);
FLBuilderCSS::dimension_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'card_margin',
		'selector'     => ".fl-node-$id .fl-bbvm-testimonials-card",
		'unit'         => 'px',
		'props'        => array(
			'margin-top'    => 'card_margin_top',
			'margin-right'  => 'card_margin_right',
			'margin-bottom' => 'card_margin_bottom',
			'margin-left'   => 'card_margin_left',
		),
	)
);
?>
.fl-node-<?php echo esc_html( $id ); ?> .is-placeholder {
	background: transparent !important;
	padding: 0 !important;
	margin: 0 !important;
}
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-testimonials-card-img img,
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-testimonials-list-img img {
	width: <?php echo absint( $settings->photo_size ); ?>px;
	height: <?php echo absint( $settings->photo_size ); ?>px;
	min-width: <?php echo absint( $settings->photo_size ); ?>px;
	min-height: <?php echo absint( $settings->photo_size ); ?>px;
}
<?php
if ( 'circle' === $settings->photo_appearance ) :
	?>
	.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-testimonials-card-img img,
	.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-testimonials-list-img img {
		border-radius: 100%;
	}
	<?php
endif;
?>
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-testimonials-card-img i,
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-testimonials-list-img i {
	color: #<?php echo esc_html( $settings->icon_color ); ?>;
	font-size: <?php echo absint( $settings->icon_size ); ?>px;
}
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-testimonials-card-rating i,
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-testimonials-list-rating i {
	color: #<?php echo esc_html( $settings->rating_color ); ?>;
	font-size: <?php echo absint( $settings->rating_size ); ?>px !important;
}
<?php
FLBuilderCSS::typography_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'testimonial_name_typography',
		'selector'     => ".fl-node-$id .fl-bbvm-testimonials-card-name, .fl-node-$id .fl-bbvm-testimonials-list-name",
	)
);
FLBuilderCSS::typography_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'testimonial_title_typography',
		'selector'     => ".fl-node-$id .fl-bbvm-testimonials-card-title, .fl-node-$id .fl-bbvm-testimonials-list-title",
	)
);
FLBuilderCSS::typography_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'testimonial_content_typography',
		'selector'     => ".fl-node-$id .fl-bbvm-testimonials-card-content, .fl-node-$id .fl-bbvm-testimonials-list-content",
	)
);
FLBuilderCSS::dimension_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'testimonial_name_padding',
		'selector'     => ".fl-node-$id .fl-bbvm-testimonials-card-name, .fl-node-$id .fl-bbvm-testimonials-list-name",
		'unit'         => 'px',
		'props'        => array(
			'padding-top'    => 'testimonial_name_padding_top',
			'padding-right'  => 'testimonial_name_padding_right',
			'padding-bottom' => 'testimonial_name_padding_bottom',
			'padding-left'   => 'testimonial_name_padding_left',
		),
	)
);
FLBuilderCSS::dimension_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'testimonial_title_padding',
		'selector'     => ".fl-node-$id .fl-bbvm-testimonials-card-title, .fl-node-$id .fl-bbvm-testimonials-list-title",
		'unit'         => 'px',
		'props'        => array(
			'padding-top'    => 'testimonial_title_padding_top',
			'padding-right'  => 'testimonial_title_padding_right',
			'padding-bottom' => 'testimonial_title_padding_bottom',
			'padding-left'   => 'testimonial_title_padding_left',
		),
	)
);
FLBuilderCSS::dimension_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'testimonial_content_padding',
		'selector'     => ".fl-node-$id .fl-bbvm-testimonials-card-content, .fl-node-$id .fl-bbvm-testimonials-list-content",
		'unit'         => 'px',
		'props'        => array(
			'padding-top'    => 'testimonial_content_padding_top',
			'padding-right'  => 'testimonial_content_padding_right',
			'padding-bottom' => 'testimonial_content_padding_bottom',
			'padding-left'   => 'testimonial_content_padding_left',
		),
	)
);
?>
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-testimonials-card-content,
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-testimonials-list-content {
	color: #<?php echo esc_html( $settings->testimonial_content_color ); ?>;
}
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-testimonials-card-name,
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-testimonials-list-name {
	color: #<?php echo esc_html( $settings->testimonial_name_color ); ?>;
}
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-testimonials-card-title,
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-testimonials-list-title {
	color: #<?php echo esc_html( $settings->testimonial_title_color ); ?>;
}
<?php
// List Content.
?>
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-testimonials {
	overflow: hidden;
	box-shadow: <?php echo FLBuilderColor::shadow( $settings->list_shadow ); // phpcs:ignore ?>;
	display: flex;
	margin-bottom: <?php echo absint( $settings->list_margin_bottom ); ?>px;
}
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-testimonials-list-left {

	text-align: center;
	padding: 20px;
	background: #<?php echo esc_html( $settings->left_area_background ); ?>;
}
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-testimonials-list-right {
	flex: 1 1 20em;
	padding: 20px;
	background: #<?php echo esc_html( $settings->right_area_background ); ?>;
}
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-testimonials {
	border-style: solid;
	border-color: #<?php echo esc_html( $settings->list_border_color ); ?>;
}
<?php
if ( '0' !== $settings->left_border ) :
	?>
	.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-testimonials .fl-bbvm-testimonials-list-left {
		border-right: <?php echo absint( $settings->left_border ); ?>px solid #<?php echo esc_html( $settings->left_border_color ); ?>;
	}
<?php endif; ?>
<?php
FLBuilderCSS::dimension_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'left_area_padding',
		'selector'     => ".fl-node-$id .fl-bbvm-testimonials-list-left",
		'unit'         => 'px',
		'props'        => array(
			'padding-top'    => 'left_area_padding_top',
			'padding-right'  => 'left_area_padding_right',
			'padding-bottom' => 'left_area_padding_bottom',
			'padding-left'   => 'left_area_padding_left',
		),
	)
);
FLBuilderCSS::dimension_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'right_area_padding',
		'selector'     => ".fl-node-$id .fl-bbvm-testimonials-list-right",
		'unit'         => 'px',
		'props'        => array(
			'padding-top'    => 'right_area_padding_top',
			'padding-right'  => 'right_area_padding_right',
			'padding-bottom' => 'right_area_padding_bottom',
			'padding-left'   => 'right_area_padding_left',
		),
	)
);
FLBuilderCSS::dimension_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'list_border',
		'selector'     => ".fl-node-$id .fl-bbvm-testimonials",
		'unit'         => 'px',
		'props'        => array(
			'border-top-width'    => 'list_border_top',
			'border-right-width'  => 'list_border_right',
			'border-bottom-width' => 'list_border_bottom',
			'border-left-width'   => 'list_border_left',
		),
	)
);
FLBuilderCSS::dimension_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'list_border_radius',
		'selector'     => ".fl-node-$id .fl-bbvm-testimonials",
		'unit'         => 'px',
		'props'        => array(
			'border-top-left-radius'     => 'list_border_radius_top',
			'border-top-right-radius'    => 'list_border_radius_right',
			'border-bottom-left-radius'  => 'list_border_radius_bottom',
			'border-bottom-right-radius' => 'list_border_radius_left',
		),
	)
);

// Carousel.
?>
.fl-node-<?php echo esc_html( $id ); ?> .owl-carousel .fl-bbvm-testimonials-card {
	width: 100%;
	text-align: center;
}
.fl-node-<?php echo esc_html( $id ); ?> .owl-carousel .fl-bbvm-testimonials-card-img {
	display: inline-block;
}
.fl-node-<?php echo esc_html( $id ); ?> .owl-prev,
.fl-node-<?php echo esc_html( $id ); ?> .owl-next {
	float: left;
}
.fl-node-<?php echo esc_html( $id ); ?> .owl-next  {
	float: right;
}
.fl-node-<?php echo esc_html( $id ); ?> .owl-prev i,
.fl-node-<?php echo esc_html( $id ); ?> .owl-next i{
	font-size: 24px;
	color: #<?php echo esc_html( $settings->nav_color ); ?>;
}
.fl-node-<?php echo esc_html( $id ); ?> .owl-theme .owl-nav [class*=owl-]:hover {
	background: transparent;
}
