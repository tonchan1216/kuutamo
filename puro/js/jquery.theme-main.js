/**
 * Main theme Javascript.
 */

jQuery( document ).ready( function ($) {

    // Substitute any retina images.
    var pixelRatio = !!window.devicePixelRatio ? window.devicePixelRatio : 1;
    if( pixelRatio > 1 ) {
        $('img[data-retina-image]').each(function(){
            var $$ = $(this);
            $$.attr('src', $$.data('retina-image'));

            // If the width attribute isn't set, then lets scale to 50%
            if( typeof $$.attr('width') == 'undefined' ) {
                $$.load( function(){
                    var size = [$$.width(), $$.height()];
                    $$.width(size[0]/2);
                    $$.height(size[1]/2);
                } );
            }
        })
    }

    // Setup FitVids for entry content, panels and WooCommerce. Ignore Tableau.
    if ( typeof $.fn.fitVids !== 'undefined' ) {
        $( '.entry-content, .entry-content .panel, .woocommerce #main' ).fitVids( { ignore: '.tableauViz' } );
    };

    // This this is a touch device. We detect this through ontouchstart, msMaxTouchPoints and MaxTouchPoints.
    if( 'ontouchstart' in document.documentElement || window.navigator.msMaxTouchPoints || window.navigator.MaxTouchPoints ) {
        $('body').removeClass('no-touch');
    }
    if ( !$( 'body' ).hasClass( 'no-touch' ) ) {
        if ( /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream ) {
            $( 'body' ).css( 'cursor', 'pointer' );
        }
        $( '.site-navigation').find('.menu-item-has-children > a' ).each( function() {
            $( this ).click( function(e){
                var link = $(this);
                e.stopPropagation();
                link.parent().addClass( 'touch-drop' );

                if( link.hasClass( 'hover' ) ) {
                    link.unbind( 'click' );
                } else {
                    link.addClass( 'hover' );
                    e.preventDefault();
                }

                $( '.site-navigation > .menu-item-has-children:not(.touch-drop) > a' ).click( function() {
                    link.removeClass('hover').parent().removeClass('touch-drop');
                } );

                $( document ).click( function() {
                    link.removeClass( 'hover' ).parent().removeClass( 'touch-drop' );
                } );

            } );
        } );
    }       
    
});