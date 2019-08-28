var Page = (function() {
	var config = {
		$bookBlock : $( '#bb-bookblock' ),
		$navNext : $( '#bb-nav-next' ),
		$navPrev : $( '#bb-nav-prev' ),
		$navFirst : $( '#bb-nav-first' ),
		$navmark : $( '#head-nav' ),
	},
	current = 0,
	pages = {1:"concept",2:"menu",5:"info",6:"book",7:"news"};

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