var Page = (function() {
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