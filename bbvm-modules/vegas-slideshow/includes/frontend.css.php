<?php
/**
 * Vegas Slideshow Module.
 *
 * @link https://bbvapormodules.com
 *
 * @package BB Vapor Modules
 * @since 1.3.0
 */

?>
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-vegas-slideshow-for-beaverbuilder {
	background: #<?php echo esc_html( $settings->slideshow_background_color ); ?>;
	position: relative;
}
<?php
FLBuilderCSS::dimension_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'slideshow_padding',
		'selector'     => ".fl-node-$id .fl-bbvm-vegas-slideshow-for-beaverbuilder",
		'unit'         => 'px',
		'props'        => array(
			'padding-top'    => 'slideshow_padding_top',
			'padding-right'  => 'slideshow_padding_right',
			'padding-bottom' => 'slideshow_padding_bottom',
			'padding-left'   => 'slideshow_padding_left',
		),
	)
);
?>
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-vegas-slideshow-for-beaverbuilder .slideshow-item {
	width: 100%;
}
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-vegas-slideshow-for-beaverbuilder .slideshow-meta {
	bottom: 22px;
	position: absolute;
	left: 60px;
	z-index: 1000;
	width: calc( 100% - 120px );
}
<?php if ( 'yes' === $settings->arrows_hover ) : ?>
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-vegas-slideshow-for-beaverbuilder:hover .arrow-left,
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-vegas-slideshow-for-beaverbuilder:hover .arrow-right {
	display: block;
}
<?php endif; ?>
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-vegas-slideshow-for-beaverbuilder .slideshow-meta:hover {

}
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-vegas-slideshow-for-beaverbuilder .meta-wrapper {
	display: flex;
	align-items: center;
	flex-wrap: wrap;
}
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-vegas-slideshow-for-beaverbuilder .arrow-left {
	display: <?php echo 'yes' === $settings->arrows_hover ? 'none' : 'block'; ?>;
	font-size: 20px;
	line-height: 1;
	font-weight: 900;
	font-family: "Font Awesome 5 Free";
	color: #<?php echo esc_html( $settings->arrow_color ); ?>;
	left: 10px;
	top: calc(50% - 20px);
	position: absolute;
	z-index: 1000;
	cursor: pointer;
	padding: 10px;
	border-radius: 50%;
	background: #<?php echo esc_html( $settings->arrow_background_color ); ?>;
}
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-vegas-slideshow-for-beaverbuilder .arrow-right {
	display: <?php echo 'yes' === $settings->arrows_hover ? 'none' : 'block'; ?>;
	font-size: 20px;
	line-height: 1;
	font-weight: 900;
	color: #<?php echo esc_html( $settings->arrow_color ); ?>;
	right: 10px;
	top: calc(50% - 20px);
	position: absolute;
	z-index: 1000;
	cursor: pointer;
	padding: 10px;
	border-radius: 50%;
	background: #<?php echo esc_html( $settings->arrow_background_color ); ?>;
}
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-vegas-slideshow-for-beaverbuilder .bullets {
	text-align: center;
	padding-top: 20px;
	padding-bottom: 20px;
}
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-vegas-slideshow-for-beaverbuilder .bullets .bullet {
	display: inline-block;
	width: 20px;
	height: 20px;
	border-radius: 100%;
	background: #<?php echo esc_html( $settings->bullet_color ); ?>;
	margin-right: 5px;
	cursor: pointer;
}
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-vegas-slideshow-for-beaverbuilder .bullets .bullet.active {
	background: #<?php echo esc_html( $settings->bullet_active_color ); ?>;
}
<?php
if ( 'yes' === $settings->show_overlay ) :
	$show_overlay_color = BBVapor_Modules_Pro::get_color( $settings->show_overlay_color );
	?>
	.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-vegas-slideshow-for-beaverbuilder .vegas-wrapper:before {
		content: '';
		display: block;
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		<?php if ( 'background' === $settings->overlay_type ) : ?>
		background: <?php echo esc_html( $show_overlay_color ); ?>;
		<?php endif; ?>
		<?php if ( 'gradient' === $settings->overlay_type ) : ?>
		background-image: <?php echo FLBuilderColor::gradient( $settings->show_overlay_gradient ); // phpcs:ignore ?>;
		<?php endif; ?>
	}
	<?php
endif;
FLBuilderCSS::rule(
	array(
		'selector' => ".fl-node-$id .fl-bbvm-vegas-slideshow-for-beaverbuilder .slideshow-item, .fl-node-$id .fl-bbvm-vegas-slideshow-for-beaverbuilder .slideshow-item .vegas",
		'media'    => 'default', // Optional. Can be `default`, `medium`, `responsive` or a custom statement.
		'props'    => array(
			'min-height' => $settings->min_height . 'px !important',
			'max-height' => $settings->min_height . 'px !important',
			'height'     => $settings->min_height . 'px !important',
		),
	)
);
FLBuilderCSS::rule(
	array(
		'selector' => ".fl-node-$id .fl-bbvm-vegas-slideshow-for-beaverbuilder .slideshow-item, .fl-node-$id .fl-bbvm-vegas-slideshow-for-beaverbuilder .slideshow-item .vegas",
		'media'    => 'medium', // Optional. Can be `default`, `medium`, `responsive` or a custom statement.
		'props'    => array(
			'min-height' => $settings->min_height_medium . 'px !important',
			'max-height' => $settings->min_height_medium . 'px !important',
			'height'     => $settings->min_height_medium . 'px !important',
		),
	)
);
FLBuilderCSS::rule(
	array(
		'selector' => ".fl-node-$id .fl-bbvm-vegas-slideshow-for-beaverbuilder .slideshow-item, .fl-node-$id .fl-bbvm-vegas-slideshow-for-beaverbuilder .slideshow-item .vegas",
		'media'    => 'responsive', // Optional. Can be `default`, `medium`, `responsive` or a custom statement.
		'props'    => array(
			'min-height' => $settings->min_height_responsive . 'px !important',
			'max-height' => $settings->min_height_responsive . 'px !important',
			'height'     => $settings->min_height_responsive . 'px !important',
		),
	)
);
// CAPTIONS.
FLBuilderCSS::dimension_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'caption_padding',
		'selector'     => ".fl-node-$id .fl-bbvm-vegas-slideshow-for-beaverbuilder .caption",
		'unit'         => 'px',
		'props'        => array(
			'padding-top'    => 'caption_padding_top',
			'padding-right'  => 'caption_padding_right',
			'padding-bottom' => 'caption_padding_bottom',
			'padding-left'   => 'caption_padding_left',
		),
	)
);
FLBuilderCSS::typography_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'caption_typography',
		'selector'     => ".fl-node-$id .fl-bbvm-vegas-slideshow-for-beaverbuilder .caption",
	)
);
FLBuilderCSS::dimension_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'caption_border',
		'selector'     => ".fl-node-$id .fl-bbvm-vegas-slideshow-for-beaverbuilder .caption",
		'unit'         => 'px',
		'props'        => array(
			'border-top-width'    => 'caption_border_top',
			'border-right-width'  => 'caption_border_right',
			'border-bottom-width' => 'caption_border_bottom',
			'border-left-width'   => 'caption_border_left',
		),
	)
);
$caption_background = BBVapor_Modules_Pro::get_color( $settings->caption_background );
?>
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-vegas-slideshow-for-beaverbuilder .caption {
	background: <?php echo esc_html( $caption_background ); ?>;
	position: relative;
	box-sizing: border-box;
	margin-right: 120px;
	width: 100%;
	color: #<?php echo esc_html( $settings->caption_text_color ); ?>;
	border-color: #<?php echo esc_html( $settings->caption_border_color ); ?>;
	border-style: solid;
}
<?php
// Sub-CAPTIONS.
FLBuilderCSS::typography_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'subcaption_typography',
		'selector'     => ".fl-node-$id .fl-bbvm-vegas-slideshow-for-beaverbuilder .sub-caption",
	)
);
$subcaption_text_color = BBVapor_Modules_Pro::get_color( $settings->subcaption_text_color );
?>
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-vegas-slideshow-for-beaverbuilder .sub-caption {
	padding-top: 20px;
	width: 50%;
	color: <?php echo esc_html( $subcaption_text_color ); ?>;
}
<?php
// Link.
FLBuilderCSS::typography_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'link_typography',
		'selector'     => ".fl-node-$id .fl-bbvm-vegas-slideshow-for-beaverbuilder .link",
	)
);
$link_color = BBVapor_Modules_Pro::get_color( $settings->link_color );
?>
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-vegas-slideshow-for-beaverbuilder .link {
	padding-top: 20px;
	width: 50%;
	text-align: right;
	color: <?php echo esc_html( $link_color ); ?>;
}
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-vegas-slideshow-for-beaverbuilder .link a {
	color: <?php echo esc_html( $link_color ); ?>;
}
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-vegas-slideshow-for-beaverbuilder .link a:hover {
	color: <?php echo esc_html( $link_color ); ?>;
}
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-vegas-slideshow-for-beaverbuilder .link a:visited {
	color: <?php echo esc_html( $link_color ); ?>;
}
@media only screen and (max-width: 768px) {
	.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-vegas-slideshow-for-beaverbuilder .link {
		width: 100%;
		text-align: left;
	}
	.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-vegas-slideshow-for-beaverbuilder .sub-caption {
		width: 100%;
	}
	.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-vegas-slideshow-for-beaverbuilder .slideshow-meta {
		left: 20px;
		width: calc(100% - 40px);
	}
}
