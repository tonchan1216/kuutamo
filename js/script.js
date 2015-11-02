var Page = (function() {
	var config = {
		$bookBlock : $( '#bb-bookblock' ),
		$navNext : $( '#bb-nav-next' ),
		$navPrev : $( '#bb-nav-prev' ),
		$navFirst : $( '#bb-nav-first' ),
		$navmark : $( '#head-nav' ),
	},
	current = 0,
	pages = {1:"concept",2:"menu",6:"info",7:"access",8:"news"};

	function init() {
		config.$bookBlock.bookblock( {
			speed : 800,
			shadowSides : 0.8,
			shadowFlip : 0.7,
			onEndFlip : function(old, page, isLimit) {
				current = page;
				updateNavigation( isLimit );
				updateBookmark(page+1);
				return false; 
			},
		} );
		initEvents();
		config.$navPrev.hide();
	}

	function initEvents() {

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
			$(".nav-"+val).children('a').on( 'click touchstart', function( event ) {
				$(this).parent().siblings().removeClass("active");
				$(this).parent().addClass("active");
				config.$bookBlock.bookblock('jump', i);
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
	}
	function updateNavigation(isLastPage) {
		if( current === 0 ) {
			config.$navNext.show();
			config.$navPrev.hide();
		}
		else if( isLastPage ) {
			config.$navNext.hide();
			config.$navPrev.show();
		}
		else {
			config.$navNext.show();
			config.$navPrev.show();
		}
	}
	function updateBookmark(page) {
		$('#head-nav').find('li').removeClass("active");
		if (!pages[page]) {
			$(".nav-menu").addClass("active");
		}else{
			$(".nav-"+pages[page]).addClass("active");
		}
	}

	return { init : init };
})();

var Page_sp = (function() {
	var config = {
		$container : $( '#container' ),
		$bookBlock : $( '#bb-bookblock' ),
		$navNext : $( '#bb-nav-next' ),
		$navPrev : $( '#bb-nav-prev' ),
	},
	$items = config.$bookBlock.children(),
	itemsCount = $items.length,
	current = 0,
	$menuItems = config.$container.find( 'ul.menu-toc > li' ),
	$tblcontents = $( '#tblcontents' ),
	transEndEventNames = {
		'WebkitTransition': 'webkitTransitionEnd',
		'MozTransition': 'transitionend',
		'OTransition': 'oTransitionEnd',
		'msTransition': 'MSTransitionEnd',
		'transition': 'transitionend'
	},
	transEndEventName = transEndEventNames[Modernizr.prefixed('transition')],
	supportTransitions = Modernizr.csstransitions;

	function init() {
		config.$bookBlock.bookblock( {
			speed : 800,
			perspective : 2000,
			shadowSides	: 0.8,
			shadowFlip	: 0.4,
			onEndFlip : function(old, page, isLimit) {
				current = page;
				// update TOC current
				updateTOC();
				// updateNavigation
				updateNavigation( isLimit );
				// initialize jScrollPane on the content div for the new item
				setJSP( 'init' );
				// destroy jScrollPane on the content div for the old item
				setJSP( 'destroy', old );
			}
		} ),
		initEvents();
	}
	
	function initEvents() {
		// add navigation events
		config.$navNext.on( 'click', function() {
			config.$bookBlock.bookblock( 'next' );
			return false;
		} );

		config.$navPrev.on( 'click', function() {
			config.$bookBlock.bookblock( 'prev' );
			return false;
		} );
		
		// add swipe events
		$items.on( {
			'swipeleft'		: function( event ) {
				if( config.$container.data( 'opened' ) ) {
					return false;
				}
				config.$bookBlock.bookblock( 'next' );
				return false;
			},
			'swiperight'	: function( event ) {
				if( config.$container.data( 'opened' ) ) {
					return false;
				}
				config.$bookBlock.bookblock( 'prev' );
				return false;
			}
		} );

		// show table of contents
		$tblcontents.on( 'click', toggleTOC );

		// click a menu item
		$menuItems.on( 'click', function() {

			var $el = $( this ),
			idx = $el.index(),
			jump = function() {
				config.$bookBlock.bookblock('jump', idx + 1 );
			};
			
			current !== idx ? closeTOC( jump ) : closeTOC();

			return false;
			
		} );

		// reinit jScrollPane on window resize
		$( window ).on( 'debouncedresize', function() {
			// reinitialise jScrollPane on the content div
			setJSP( 'reinit' );
		} );
	}

	function setJSP( action, idx ) {
		
		var idx = idx === undefined ? current : idx,
		$content = $items.eq( idx ).children( 'div.content' ),
		apiJSP = $content.data( 'jsp' );
		
		if( action === 'init' && apiJSP === undefined ) {
			$content.jScrollPane({verticalGutter : 0, hideFocus : true });
		}
		else if( action === 'reinit' && apiJSP !== undefined ) {
			apiJSP.reinitialise();
		}
		else if( action === 'destroy' && apiJSP !== undefined ) {
			apiJSP.destroy();
		}
	}

	function updateTOC() {
		$menuItems.removeClass( 'menu-toc-current' ).eq( current ).addClass( 'menu-toc-current' );
	}

	function updateNavigation( isLastPage ) {
		
		if( current === 0 ) {
			config.$navNext.show();
			config.$navPrev.hide();
		}
		else if( isLastPage ) {
			config.$navNext.hide();
			config.$navPrev.show();
		}
		else {
			config.$navNext.show();
			config.$navPrev.show();
		}
	}

	function toggleTOC() {
		var opened = config.$container.data( 'opened' );
		opened ? closeTOC() : openTOC();
	}

	function openTOC() {
		config.$navNext.hide();
		config.$navPrev.hide();
		config.$container.addClass( 'slideRight' ).data( 'opened', true );
	}

	function closeTOC( callback ) {

		updateNavigation( current === itemsCount - 1 );
		config.$container.removeClass( 'slideRight' ).data( 'opened', false );
		if( callback ) {
			if( supportTransitions ) {
				config.$container.on( transEndEventName, function() {
					$( this ).off( transEndEventName );
					callback.call();
				} );
			}
			else {
				callback.call();
			}
		}
	}

	return { init : init };
})();