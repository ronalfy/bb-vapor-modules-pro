.fl-node-<?php echo $id; ?> #soliloquy-container-<?php echo $settings->slider; ?> {
	opacity: 1;
}
<?php if ( 'yes' === $settings->show_arrows ): ?>
.fl-node-<?php echo $id; ?> #soliloquy-container-<?php echo $settings->slider; ?> .soliloquy-controls-direction {
	display: block !important;
}
.fl-node-<?php echo $id; ?> #soliloquy-container-<?php echo $settings->slider; ?> .soliloquy-prev {
	opacity: 1 !important;
}
.fl-node-<?php echo $id; ?> #soliloquy-container-<?php echo $settings->slider; ?> .soliloquy-next {
	opacity: 1 !important;
}
<?php endif; ?>
<?php if ( ! empty( $settings->max_height ) && 0 != $settings->max_height ): ?>
.fl-node-<?php echo $id; ?> #soliloquy-container-<?php echo $settings->slider; ?> .soliloquy-image {
	max-height: <?php echo $settings->max_height; ?>px;
}
<?php endif; ?>
<?php if ( ! empty( $settings->max_width ) && 0 != $settings->max_width ): ?>
.fl-node-<?php echo $id; ?> #soliloquy-container-<?php echo $settings->slider; ?> {
	max-width: <?php echo $settings->max_width; ?>px !important;
}
<?php endif; ?>
<?php if ( ! empty( $settings->arrow_background ) ): ?>
.fl-node-<?php echo $id; ?> #soliloquy-container-<?php echo $settings->slider; ?> .soliloquy-prev,
.fl-node-<?php echo $id; ?> #soliloquy-container-<?php echo $settings->slider; ?> .soliloquy-next {
	background-color: #<?php echo $settings->arrow_background; ?>;
}
<?php endif; ?>
<?php if ( 'yes' === $settings->hide_pager ): ?>
.fl-node-<?php echo $id; ?> #soliloquy-container-<?php echo $settings->slider; ?> .soliloquy-pager {
	display: none !important;
}
<?php endif; ?>
<?php if ( 'yes' === $settings->hide_caption ): ?>
.fl-node-<?php echo $id; ?> #soliloquy-container-<?php echo $settings->slider; ?> .soliloquy-caption {
	display: none !important;
}
<?php endif; ?>
<?php
if ( ! empty( $settings->caption_background ) ):
$caption_background = isset( $settings->caption_background ) ? esc_attr( $settings->caption_background ) : '000000';
if( 6 === strlen( $caption_background ) ) {
	$caption_background = '#' . $caption_background;
}
?>
.fl-node-<?php echo $id; ?> #soliloquy-container-<?php echo $settings->slider; ?> .soliloquy-caption .soliloquy-caption-inside {
	background: <?php echo $caption_background; ?> !important;
}
<?php endif; ?>
<?php if ( ! empty( $settings->caption_text_background ) ): ?>
.fl-node-<?php echo $id; ?> #soliloquy-container-<?php echo $settings->slider; ?> .soliloquy-caption .soliloquy-caption-inside {
	color: #<?php echo $settings->caption_text_background; ?>;
}
<?php endif; ?>
<?php
FLBuilderCSS::typography_field_rule( array(
	'settings'	=> $settings,
	'setting_name' 	=> 'caption_typography',
	'selector' 	=> ".fl-node-$id #soliloquy-container-{$settings->slider} .soliloquy-caption .soliloquy-caption-inside",
) );