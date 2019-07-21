var elements = document.getElementsByClassName('bbvm-content-scroller-content');
var arrayLength = elements.length;
var sticky = new Waypoint.Sticky({
  element: jQuery('#content-scroller')[0],
})
for (var i = 0; i < arrayLength; i++) {
    var waypoint = new Waypoint({
	element: elements[i],
	handler: function(direction) {
		jQuery( '.bbvm-content-scroller-bg video').remove();
		var element = this.element;
		var color = element.getAttribute( 'data-color' );
		var background =  element.getAttribute( 'data-background' );
		var video = jQuery.trim(element.getAttribute('data-video'));
		jQuery( '.bbvm-content-scroller-item-wrapper' ).css( 'backgroundColor', color );
		jQuery( '.bbvm-content-scroller-bg' ).css( 'background-image',"url(" + background + ")" );

		if ( '' !== video ) {
			var video = '<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">';
			video += '<source src="' + element.getAttribute( 'data-video' )+ '" type="video/mp4">';
			video += '</video>';
			jQuery( '.bbvm-content-scroller-bg' ).append( video );
			jQuery( '.bbvm-content-scroller-bg' ).css( 'background-image','none' );
		}

		if(jQuery(window).scrollTop() + jQuery(window).height() == jQuery(document).height()) {
			jQuery('.fl-bbvm-content-scroller-for-beaverbuilder').hide();
			jQuery('.fl-bbvm-content-scroller-responsive-for-beaverbuilder').show();
		} else {
			jQuery('.fl-bbvm-content-scroller-for-beaverbuilder').show();
			jQuery('.fl-bbvm-content-scroller-responsive-for-beaverbuilder').hide();
		}
	}
	});

}
