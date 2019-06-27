<?php
// Headline block or inline
?>
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-animated-letters-for-beaverbuilder {
	position: relative;
}
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-animated-letters-for-beaverbuilder h2 {
	position: relative;
	text-align: <?php echo esc_html( $settings->alignment ); ?>;
}
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-animated-letters-for-beaverbuilder span.text-wrapper {
	position: relative;
	display: inline-block;
}
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-animated-letters-for-beaverbuilder .letter {
	display: inline-block;
	color: <?php echo esc_html( BBVapor_Modules_Pro::get_color( $settings->text_color ) ); ?>;
}
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-animated-letters-for-beaverbuilder .line {
	opacity: 0;
	position: absolute;
	left: 0;
	height: 3px;
	width: 100%;
	background-color: <?php echo esc_html( BBVapor_Modules_Pro::get_color( $settings->text_color ) ); ?>;
	transform-origin: 0 0;
}

.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-animated-letters-for-beaverbuilder .line1 { top: 0; }
.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-animated-letters-for-beaverbuilder .line2 { bottom: 0; }
<?php
FLBuilderCSS::typography_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'typography',
		'selector'     => ".fl-node-$id .fl-bbvm-animated-letters-for-beaverbuilder .letter",
	)
);
if ( 'go' === $settings->style ) {
	?>
	.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-animated-letters-for-beaverbuilder .letter {
		position: absolute;
		margin: auto;
		left: 0;
		right: 0;
		opacity: 0;
		top: calc( 50% - 30px );
	}
	.fl-node-<?php echo esc_html( $id ); ?> .fl-bbvm-animated-letters-for-beaverbuilder h2 {
		padding: 40px 0;
	}
	<?php
}
