<?php
// Background Color
$background_color = isset( $settings->overlay_background_color ) ? esc_attr( $settings->overlay_background_color ) : 'FFFFFF';
if( 6 === strlen( $background_color ) ) {
	$background_color = '#' . $background_color;
}

// Text Color
$text_color = isset( $settings->overlay_text_color ) ? esc_attr( $settings->overlay_text_color ) : '000000';
if( 6 === strlen( $text_color ) ) {
	$text_color = '#' . $text_color;
}

// Padding
$padding_dimensions = isset( $settings->overlay_padding_top ) ? $settings->overlay_padding_top : false;
$padding = 0;
if ( false !== $padding_dimensions ) {
	$padding = sprintf( '%dpx %dpx %dpx %dpx', $settings->overlay_padding_top, $settings->overlay_padding_right, $settings->overlay_padding_bottom, $settings->overlay_padding_left );
}
?>
@keyframes mediaron-fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}
@keyframes mediaron-slide-up-horizontal-bottom {
    from { bottom: -1000px; }
    to   { bottom: 0; }
}
@keyframes mediaron-slide-down-horizontal-top {
    from { top: -1000px; }
    to   { top: 0; }
}
@keyframes mediaron-slide-up-horizontal-bottom {
    from { bottom: -1000px; }
    to   { bottom: 0; }
}
@keyframes mediaron-slide-down-horizontal-bottom {
    from { top: -1000px; bottom: 200% }
    to   { top: inherit; bottom: 0; }
}
@keyframes mediaron-slide-down-horizontal-top {
    from { top: -1000px; }
    to   { top: 0; }
}
@keyframes mediaron-slide-up-horizontal-top {
    from { bottom: -10000px; top: 200%; }
    to   { bottom: inherit; top: 0; }
}
@keyframes mediaron-slide-left {
    from { left: -10000px; }
    to   { left: 0 }
}
@keyframes mediaron-slide-right-top {
    from { right: -10000px; left: 100%; top: 0; }
    to   { left: 0; right: inherit; top: 0; }
}
@keyframes mediaron-slide-right-bottom {
    from { right: -10000px; left: 100%; bottom: 0; }
    to   { bottom: 0; right: inherit; }
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo {
	position: relative;
	overflow: hidden;
	max-width: <?php echo absint( $settings->max_width ); ?>px;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo-for-beaverbuilder a {
	display: inline-block;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo * {
	color: <?php echo $text_color; ?> !important;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo figure {
	position: relative;
	display: inline-block;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.horizontal {
	position: relative;
	box-sizing: border-box;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.horizontal figcaption p {
	padding: 0;
	margin: 0;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.horizontal .hover-only {
	opacity: 0;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.horizontal.regular:hover .hover-only {
	opacity: 1;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.horizontal.fade:hover .hover-only {
	-webkit-animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	-moz-animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	-ms-animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	-o-animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	opacity: 1;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.horizontal.fade figcaption:not(.hover-only) {
	-webkit-animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	-moz-animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	-ms-animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	-o-animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	opacity: 1;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.horizontal figcaption.top {
	background-color: <?php echo $background_color; ?>;
	color: <?php echo $text_color; ?>;
	position: absolute;
	width: 100%;
	top: 0;
	left: 0;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.horizontal:hover figcaption.top {
	background-color: <?php echo $background_color; ?>;
	color: <?php echo $text_color; ?>;
	position: absolute;
	width: 100%;
	top: 0;
	left: 0;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.horizontal.slideleft figcaption.top:not(.hover-only) {
	background-color: <?php echo $background_color; ?>;
	color: <?php echo $text_color; ?>;
	position: absolute;
	width: 100%;
	left: -10000px;
	opacity: 1;
	-webkit-animation: mediaron-slide-left <?php echo absint( $settings->animation_duration ); ?>s;
	-moz-animation: mediaron-slide-left <?php echo absint( $settings->animation_duration ); ?>s;
	-ms-animation: mediaron-slide-left <?php echo absint( $settings->animation_duration ); ?>s;
	-o-animation: mediaron-slide-left <?php echo absint( $settings->animation_duration ); ?>s;
	animation: mediaron-slide-left <?php echo absint( $settings->animation_duration ); ?>s;
	top: 0;
	left: 0;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.horizontal.slideleft:hover figcaption.top {
	background-color: <?php echo $background_color; ?>;
	color: <?php echo $text_color; ?>;
	position: absolute;
	width: 100%;
	left: -10000px;
	opacity: 1;
	-webkit-animation: mediaron-slide-left <?php echo absint( $settings->animation_duration ); ?>s;
	-moz-animation: mediaron-slide-left <?php echo absint( $settings->animation_duration ); ?>s;
	-ms-animation: mediaron-slide-left <?php echo absint( $settings->animation_duration ); ?>s;
	-o-animation: mediaron-slide-left <?php echo absint( $settings->animation_duration ); ?>s;
	animation: mediaron-slide-left <?php echo absint( $settings->animation_duration ); ?>s;
	top: 0;
	left: 0;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.horizontal.slideright figcaption.top:not(.hover-only) {
	background-color: <?php echo $background_color; ?>;
	color: <?php echo $text_color; ?>;
	position: absolute;
	width: 100%;
	right: -10000px;
	top: 0;
	opacity: 1;
	left: 100%;
	-webkit-animation: mediaron-slide-right-top <?php echo absint( $settings->animation_duration ); ?>s;
	-moz-animation: mediaron-slide-right-top <?php echo absint( $settings->animation_duration ); ?>s;
	-ms-animation: mediaron-slide-right-top <?php echo absint( $settings->animation_duration ); ?>s;
	-o-animation: mediaron-slide-right-top <?php echo absint( $settings->animation_duration ); ?>s;
	animation: mediaron-slide-right-top <?php echo absint( $settings->animation_duration ); ?>s;
	left: 0;
	top: 0;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.horizontal.slideright:hover figcaption.top {
	background-color: <?php echo $background_color; ?>;
	color: <?php echo $text_color; ?>;
	position: absolute;
	width: 100%;
	right: -10000px;
	opacity: 1;
	top: 0;
	left: 100%;
	-webkit-animation: mediaron-slide-right-top <?php echo absint( $settings->animation_duration ); ?>s;
	-moz-animation: mediaron-slide-right-top <?php echo absint( $settings->animation_duration ); ?>s;
	-ms-animation: mediaron-slide-right-top <?php echo absint( $settings->animation_duration ); ?>s;
	-o-animation: mediaron-slide-right-top <?php echo absint( $settings->animation_duration ); ?>s;
	animation: mediaron-slide-right-top <?php echo absint( $settings->animation_duration ); ?>s;
	left: 0;
	top: 0;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.horizontal.hover-only.fade figcaption.top:not(.hover-only) {
	background-color: <?php echo $background_color; ?>;
	color: <?php echo $text_color; ?>;
	position: absolute;
	width: 100%;
	opacity: 0;
	top: 0;
	left: 0;
	-webkit-animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	-moz-animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	-ms-animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	-o-animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	opacity: 1;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.horizontal.middle figure {
	position: relative;
	display: flex;
	align-items: center;
	justify-content: center;
	text-align: center;
	object-fit: cover;
	width: 100%;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.horizontal.middle figure img {
	width: 100%;
	object-fit: cover;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.horizontal.middle figcaption {
	background-color: <?php echo $background_color; ?>;
	color: <?php echo $text_color; ?>;
	position: absolute;
	width: 100%;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.horizontal.middle:hover figcaption {
	background-color: <?php echo $background_color; ?>;
	color: <?php echo $text_color; ?>;
	position: absolute;
	width: 100%;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.horizontal.middle.fade figcaption:not(.hover-only) {
	background-color: <?php echo $background_color; ?>;
	color: <?php echo $text_color; ?>;
	position: absolute;
	width: 100%;
	opacity: 0;
	-webkit-animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	-moz-animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	-ms-animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	-o-animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	opacity: 1;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.horizontal.middle.slideup:hover figcaption {
	background-color: <?php echo $background_color; ?>;
	color: <?php echo $text_color; ?>;
	position: absolute;
	width: 100%;
	opacity: 0;
	-webkit-animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	-moz-animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	-ms-animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	-o-animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	opacity: 1;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.horizontal.bottom figcaption.bottom {
	background-color: <?php echo $background_color; ?>;
	color: <?php echo $text_color; ?>;
	position: absolute;
	width: 100%;
	bottom: 0;
	left: 0;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.horizontal.fade figcaption.bottom:not(.hover-only) {
	background-color: <?php echo $background_color; ?>;
	color: <?php echo $text_color; ?>;
	position: absolute;
	width: 100%;
	bottom: 0;
	left: 0;
	opacity: 0;
	-webkit-animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	-moz-animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	-ms-animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	-o-animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	opacity: 1;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.horizontal.slideup figcaption.bottom:not(.hover-only) {
	background-color: <?php echo $background_color; ?>;
	color: <?php echo $text_color; ?>;
	position: absolute;
	width: 100%;
	left: 0;
	opacity: 1;
	-webkit-animation: mediaron-slide-up-horizontal-bottom <?php echo absint( $settings->animation_duration ); ?>s;
	-moz-animation: mediaron-slide-up-horizontal-bottom <?php echo absint( $settings->animation_duration ); ?>s;
	-ms-animation: mediaron-slide-up-horizontal-bottom <?php echo absint( $settings->animation_duration ); ?>s;
	-o-animation: mediaron-slide-up-horizontal-bottom <?php echo absint( $settings->animation_duration ); ?>s;
	animation: mediaron-slide-up-horizontal-bottom <?php echo absint( $settings->animation_duration ); ?>s;
	bottom: 0;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.horizontal.slideup:hover figcaption.bottom {
	background-color: <?php echo $background_color; ?>;
	color: <?php echo $text_color; ?>;
	position: absolute;
	width: 100%;
	left: 0;
	opacity: 1;
	-webkit-animation: mediaron-slide-up-horizontal-bottom <?php echo absint( $settings->animation_duration ); ?>s;
	-moz-animation: mediaron-slide-up-horizontal-bottom <?php echo absint( $settings->animation_duration ); ?>s;
	-ms-animation: mediaron-slide-up-horizontal-bottom <?php echo absint( $settings->animation_duration ); ?>s;
	-o-animation: mediaron-slide-up-horizontal-bottom <?php echo absint( $settings->animation_duration ); ?>s;
	animation: mediaron-slide-up-horizontal-bottom <?php echo absint( $settings->animation_duration ); ?>s;
	bottom: 0;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.horizontal.bottom.slidedown figcaption.bottom:not(.hover-only) {
	background-color: <?php echo $background_color; ?>;
	color: <?php echo $text_color; ?>;
	position: absolute;
	width: 100%;
	left: 0;
	top: -2000px;
	bottom: 100%;
	-webkit-animation: mediaron-slide-down-horizontal-bottom <?php echo absint( $settings->animation_duration ); ?>s;
	-moz-animation: mediaron-slide-down-horizontal-bottom <?php echo absint( $settings->animation_duration ); ?>s;
	-ms-animation: mediaron-slide-down-horizontal-bottom <?php echo absint( $settings->animation_duration ); ?>s;
	-o-animation: mediaron-slide-down-horizontal-bottom <?php echo absint( $settings->animation_duration ); ?>s;
	animation: mediaron-slide-down-horizontal-bottom <?php echo absint( $settings->animation_duration ); ?>s;
	opacity: 1;
	top: inherit;
	bottom: 0;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.horizontal.bottom.slidedown:hover figcaption.bottom {
	background-color: <?php echo $background_color; ?>;
	color: <?php echo $text_color; ?>;
	position: absolute;
	width: 100%;
	left: 0;
	top: -2000px;
	bottom: 100%;
	-webkit-animation: mediaron-slide-down-horizontal-bottom <?php echo absint( $settings->animation_duration ); ?>s;
	-moz-animation: mediaron-slide-down-horizontal-bottom <?php echo absint( $settings->animation_duration ); ?>s;
	-ms-animation: mediaron-slide-down-horizontal-bottom <?php echo absint( $settings->animation_duration ); ?>s;
	-o-animation: mediaron-slide-down-horizontal-bottom <?php echo absint( $settings->animation_duration ); ?>s;
	animation: mediaron-slide-down-horizontal-bottom <?php echo absint( $settings->animation_duration ); ?>s;
	opacity: 1;
	top: inherit;
	bottom: 0;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.horizontal.bottom.slideleft figcaption.bottom:not(.hover-only) {
	background-color: <?php echo $background_color; ?>;
	color: <?php echo $text_color; ?>;
	position: absolute;
	width: 100%;
	left: -10000px;
	opacity: 1;
	-webkit-animation: mediaron-slide-left <?php echo absint( $settings->animation_duration ); ?>s;
	-moz-animation: mediaron-slide-left <?php echo absint( $settings->animation_duration ); ?>s;
	-ms-animation: mediaron-slide-left <?php echo absint( $settings->animation_duration ); ?>s;
	-o-animation: mediaron-slide-left <?php echo absint( $settings->animation_duration ); ?>s;
	animation: mediaron-slide-left <?php echo absint( $settings->animation_duration ); ?>s;
	opacity: 1;
	left: 0;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.horizontal.bottom.slideleft:hover figcaption.bottom {
	background-color: <?php echo $background_color; ?>;
	color: <?php echo $text_color; ?>;
	position: absolute;
	width: 100%;
	left: -10000px;
	opacity: 1;
	-webkit-animation: mediaron-slide-left <?php echo absint( $settings->animation_duration ); ?>s;
	-moz-animation: mediaron-slide-left <?php echo absint( $settings->animation_duration ); ?>s;
	-ms-animation: mediaron-slide-left <?php echo absint( $settings->animation_duration ); ?>s;
	-o-animation: mediaron-slide-left <?php echo absint( $settings->animation_duration ); ?>s;
	animation: mediaron-slide-left <?php echo absint( $settings->animation_duration ); ?>s;
	opacity: 1;
	left: 0;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.horizontal.bottom.slideright figcaption.bottom:not(.hover-only) {
	background-color: <?php echo $background_color; ?>;
	color: <?php echo $text_color; ?>;
	position: absolute;
	width: 100%;
	right: -10000px;
	opacity: 1;
	-webkit-animation: mediaron-slide-right-bottom <?php echo absint( $settings->animation_duration ); ?>s;
	-moz-animation: mediaron-slide-right-bottom <?php echo absint( $settings->animation_duration ); ?>s;
	-ms-animation: mediaron-slide-right-bottom <?php echo absint( $settings->animation_duration ); ?>s;
	-o-animation: mediaron-slide-right-bottom <?php echo absint( $settings->animation_duration ); ?>s;
	animation: mediaron-slide-right-bottom <?php echo absint( $settings->animation_duration ); ?>s;
	opacity: 1;
	right: inherit;
	left: 0;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.horizontal.bottom.slideright:hover figcaption.bottom {
	background-color: <?php echo $background_color; ?>;
	color: <?php echo $text_color; ?>;
	position: absolute;
	width: 100%;
	right: -10000px;
	opacity: 1;
	-webkit-animation: mediaron-slide-right-bottom <?php echo absint( $settings->animation_duration ); ?>s;
	-moz-animation: mediaron-slide-right-bottom <?php echo absint( $settings->animation_duration ); ?>s;
	-ms-animation: mediaron-slide-right-bottom <?php echo absint( $settings->animation_duration ); ?>s;
	-o-animation: mediaron-slide-right-bottom <?php echo absint( $settings->animation_duration ); ?>s;
	animation: mediaron-slide-right-bottom <?php echo absint( $settings->animation_duration ); ?>s;
	opacity: 1;
	right: inherit;
	left: 0;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.horizontal.top.slideup figcaption.top:not(.hover-only) {
	background-color: <?php echo $background_color; ?>;
	color: <?php echo $text_color; ?>;
	position: absolute;
	width: 100%;
	left: 0;
	bottom: -1000px;
	top: 100%;
	opacity: 0;
	-webkit-animation: mediaron-slide-up-horizontal-top <?php echo absint( $settings->animation_duration ); ?>s;
	-moz-animation: mediaron-slide-up-horizontal-top <?php echo absint( $settings->animation_duration ); ?>s;
	-ms-animation: mediaron-slide-up-horizontal-top <?php echo absint( $settings->animation_duration ); ?>s;
	-o-animation: mediaron-slide-up-horizontal-top <?php echo absint( $settings->animation_duration ); ?>s;
	animation: mediaron-slide-up-horizontal-top <?php echo absint( $settings->animation_duration ); ?>s;
	bottom: inherit;
	opacity: 1;
	top: 0;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.horizontal.top.slideup:hover figcaption.top {
	background-color: <?php echo $background_color; ?>;
	color: <?php echo $text_color; ?>;
	position: absolute;
	width: 100%;
	bottom: -1000px;
	top: 100%;
	left: 0;
	opacity: 0;
	-webkit-animation: mediaron-slide-up-horizontal-top <?php echo absint( $settings->animation_duration ); ?>s;
	-moz-animation: mediaron-slide-up-horizontal-top <?php echo absint( $settings->animation_duration ); ?>s;
	-ms-animation: mediaron-slide-up-horizontal-top <?php echo absint( $settings->animation_duration ); ?>s;
	-o-animation: mediaron-slide-up-horizontal-top <?php echo absint( $settings->animation_duration ); ?>s;
	animation: mediaron-slide-up-horizontal-top <?php echo absint( $settings->animation_duration ); ?>s;
	bottom: inherit;
	opacity: 1;
	top: 0;
}
fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.horizontal.top.slidedown figcaption.top:not(.hover-only) {
	background-color: <?php echo $background_color; ?>;
	color: <?php echo $text_color; ?>;
	position: absolute;
	width: 100%;
	left: 0;
	bottom: -1000px;
	opacity: 0;
	-webkit-animation: mediaron-slide-down-horizontal-top <?php echo absint( $settings->animation_duration ); ?>s;
	-moz-animation: mediaron-slide-down-horizontal-top <?php echo absint( $settings->animation_duration ); ?>s;
	-ms-animation: mediaron-slide-down-horizontal-top <?php echo absint( $settings->animation_duration ); ?>s;
	-o-animation: mediaron-slide-down-horizontal-top <?php echo absint( $settings->animation_duration ); ?>s;
	animation: mediaron-slide-down-horizontal-top <?php echo absint( $settings->animation_duration ); ?>s;
	bottom: inherit;
	opacity: 1;
	top: 0;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.horizontal.top.slidedown:hover figcaption.top {
	background-color: <?php echo $background_color; ?>;
	color: <?php echo $text_color; ?>;
	position: absolute;
	width: 100%;
	bottom: -1000px;
	left: 0;
	opacity: 0;
	-webkit-animation: mediaron-slide-down-horizontal-top <?php echo absint( $settings->animation_duration ); ?>s;
	-moz-animation: mediaron-slide-down-horizontal-top <?php echo absint( $settings->animation_duration ); ?>s;
	-ms-animation: mediaron-slide-down-horizontal-top <?php echo absint( $settings->animation_duration ); ?>s;
	-o-animation: mediaron-slide-down-horizontal-top <?php echo absint( $settings->animation_duration ); ?>s;
	animation: mediaron-slide-down-horizontal-top <?php echo absint( $settings->animation_duration ); ?>s;
	bottom: inherit;
	opacity: 1;
	top: 0;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.full figcaption {
	display: flex;
	align-items: center;
	justify-content: center;
	position: absolute;
	background-color: <?php echo $background_color; ?>;
	color: <?php echo $text_color; ?>;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.full .hover-only {
	opacity: 0;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.full.regular:hover .hover-only {
	opacity: 1;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.full.fade figcaption:not(.hover-only) {
	display: flex;
	align-items: center;
	justify-content: center;
	position: absolute;
	background-color: <?php echo $background_color; ?>;
	color: <?php echo $text_color; ?>;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	opacity: 0;
	-webkit-animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	-moz-animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	-ms-animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	-o-animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	opacity: 1;
}
.fl-node-<?php echo $id; ?> .fl-mediaron-overlay-photo.full.fade:hover .hover-only {
	display: flex;
	align-items: center;
	justify-content: center;
	position: absolute;
	background-color: <?php echo $background_color; ?>;
	color: <?php echo $text_color; ?>;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	opacity: 0;
	-webkit-animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	-moz-animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	-ms-animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	-o-animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	animation: mediaron-fadein <?php echo absint( $settings->animation_duration ); ?>s;
	opacity: 1;
}

<?php
FLBuilderCSS::dimension_field_rule( array(
	'settings'	=> $settings,
	'setting_name' 	=> 'overlay_padding',
	'selector' 	=> ".fl-node-$id .fl-mediaron-overlay-text",
	'unit'		=> 'px',
	'props'		=> array(
		'padding-top' 	 => 'overlay_padding_top',
		'padding-right'  => 'overlay_padding_right',
		'padding-bottom' => 'overlay_padding_bottom',
		'padding-left' 	 => 'overlay_padding_left',
	),
) );
FLBuilderCSS::typography_field_rule( array(
	'settings'	=> $settings,
	'setting_name' 	=> 'overlay_typography',
	'selector' 	=> ".fl-node-$id .fl-mediaron-overlay-text",
) );