/**
 * Main theme Javascript - (c) Greg Priday, freely distributable under the terms of the GPL 2.0 license.
 */

jQuery( document ).ready( function ($) {

    // Substitute any retina images
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

    // Setup fitvids for entry content and panels
    if(typeof $.fn.fitVids != 'undefined') {
        $('.entry-content, .entry-content .panel' ).fitVids();
    }       
    
});


