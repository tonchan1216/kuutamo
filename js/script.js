var Page = (function() {

	var config = {
		$bookBlock : $( '#bb-bookblock' ),
		$navNext : $( '#bb-nav-next' ),
		$navPrev : $( '#bb-nav-prev' ),
		$navFirst : $( '#bb-nav-first' ),
		$navmark : $( '#head-nav' ),
	},
	pages = {"concept":1,"menu":2,"info":6,"access":7,"news":8},
	init = function() {
		config.$bookBlock.bookblock( {
			speed : 800,
			shadowSides : 0.8,
			shadowFlip : 0.7
		} );
		initEvents();
	},
	initEvents = function() {

		var $slides = config.$bookBlock.children();
		var $nav = config.$navmark.find( 'li' );

					// add navigation events
					config.$navNext.on( 'click touchstart', function() {
						config.$bookBlock.bookblock( 'next' );
						return false;
					} );

					config.$navPrev.on( 'click touchstart', function() {
						config.$bookBlock.bookblock( 'prev' );
						return false;
					} );

					$.each(pages, function(i,val) {
						$(".nav-"+i).children('a').on( 'click touchstart', function( event ) {
							config.$bookBlock.bookblock( 'jump', val);
							return false;
						} );
					} );
					
					// add swipe events
					$slides.on( {
						'swipeleft' : function( event ) {
							config.$bookBlock.bookblock( 'next' );
							return false;
						},
						'swiperight' : function( event ) {
							config.$bookBlock.bookblock( 'prev' );
							return false;
						}
					} );

					// add keyboard events
					$( document ).keydown( function(e) {
						var keyCode = e.keyCode || e.which,
						arrow = {
							left : 37,
							up : 38,
							right : 39,
							down : 40
						};

						switch (keyCode) {
							case arrow.left:
							config.$bookBlock.bookblock( 'prev' );
							break;
							case arrow.right:
							config.$bookBlock.bookblock( 'next' );
							break;
						}
					} );
				};

				return { init : init };

			})();