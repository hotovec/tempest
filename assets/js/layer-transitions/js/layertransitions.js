




/// pgtransition

var LayerTransitions = (function() {

	var $main = $( '#pt-main' ),
        $offcanavasParent = $( 'body' ),
		$pages = $main.children( 'div.pt-page' ),
		animcursor = 1,
		pagesCount = $pages.length,
		current = 0,
        isOffcanavasEnabled = false,
		isAnimating = false,
		endCurrPage = false,
		endNextPage = false,

        lastSinglePage = null,
        history = [],

		animEndEventNames = {
			'WebkitAnimation' : 'webkitAnimationEnd',
			'OAnimation' : 'oAnimationEnd',
			'msAnimation' : 'MSAnimationEnd',
			'animation' : 'animationend'
		},

		// animation end event name
		animEndEventName = animEndEventNames[ Modernizr.prefixed( 'animation' ) ],

		// support css animations
		support = Modernizr.cssanimations;
	
	function init() {

		$pages.each( function() {
			var $page = $( this );
			$page.data( 'originalClassList', $page.attr( 'class' ) );
		} );

		$pages.eq( current ).addClass( 'pt-page-main' );
		//$pages.eq( current ).addClass( 'pt-page-current' );

	}

    function showOffcanvas() {
        isOffcanavasEnabled = true;
        console.log("show offcanavas");
        $offcanavasParent.addClass('oc-visible');
        $('.oc-overlay').click(function() {
            closeOffcanavas();
        })
    }

    function isOffcanavas() {
        return isOffcanavasEnabled;
    }

    function isOpenedAnyPage() {
        if(history.length > 0) {
            return true;
        }
        return false
    }

    function closeOffcanavas() {
        isOffcanavasEnabled = false;
        $offcanavasParent.removeClass('oc-visible');
        $('.oc-overlay').click = null;
    }

    function closeLastPage() {

        if(isOffcanavasEnabled == true) {
            return;
        }

        $pageToClose = history.pop();
        console.log("close current page" + $pageToClose + $pageToClose.outClass);

        outClass = $pageToClose.outClass;

        $pageToClose.addClass( outClass ).on( animEndEventName, function() {
            $pageToClose.off( animEndEventName );
            endCurrPage = true;
            if( endCurrPage ) {
                onCloseSinglePageEndAnimation( $pageToClose );
            }
        } );
    }

    // trigger on close single page / modal
    function onCloseSinglePageEndAnimation( $page ) {

        lastSinglePage = history[history.length - 1];

        endCurrPage = false;

        // add some class to previou page? or reset this page?
        //$outpage.attr( 'class', $outpage.data( 'originalClassList' ) );

        //remove animation class
        $page.attr( 'class', $page.data( 'originalClassList' ) + ' pt-page-single' );
        console.log("history:"  + history.length);

        isAnimating = false;
    }

    // open single page / modal
    function showSinglePage(animation, $targetPage) {

        if( isAnimating ) {
            console.log("is animating");
            return false;
        }

        isAnimating = true;

        var $currPage = $($targetPage).addClass( 'pt-page-open' ),
            outClass = '', inClass = '';

        /*switch( animation ) {

            case 1:
                inClass = 'pt-page-moveFromRight';
                outClass = 'pt-page-moveToRight';
                break;
            case 2:
                inClass = 'pt-page-moveFromBottom';
                outClass = 'pt-page-moveToBottom';
                break;
            case 3:
                inClass = 'pt-page-moveFromLeft';
                outClass = 'pt-page-moveToLeft';
                break;
            case 4:
                inClass = 'pt-page-moveFromTop';
                outClass = 'pt-page-moveToTop';
                break;
            default:
                inClass = 'pt-page-moveFromBottom';
                outClass = 'pt-page-moveToBottom';
                break;
        }*/

        var animationType = getAnimationType(animation);


        $currPage.outClass = animationType.outClass;
        $currPage.inClass = animationType.inClass;

            $currPage.addClass( $currPage.inClass ).on( animEndEventName, function() {
            $currPage.off( animEndEventName );
            endCurrPage = true;
            if( endCurrPage ) {
                onSinglePageEndAnimation( $currPage );
            }
        } );

        if( !support ) {

            // fix for browsers which do not support animation
            //onEndAnimation( $currPage, $nextPage );

        }

    }

    function onSinglePageEndAnimation( $page ) {

        lastSinglePage = $page;
        history.push($page);

        endCurrPage = false;

        // add some class to previou page? or reset this page?
        //$outpage.attr( 'class', $outpage.data( 'originalClassList' ) );

        //remove animation class
        $page.attr( 'class', $page.data( 'originalClassList' ) + ' pt-page-open pt-page-single' );
        isAnimating = false;
    }

    function getAnimationType($animation) {

        var data = {};
        var inClass='pt-page-moveFromBottom';
        var outClass = 'pt-page-moveToBottom';

        switch( $animation ) {

            case 1:
                inClass = 'pt-page-moveFromRight';
                outClass = 'pt-page-moveToRight';
                break;
            case 2:
                inClass = 'pt-page-moveFromBottom';
                outClass = 'pt-page-moveToBottom';
                break;
            case 3:
                inClass = 'pt-page-moveFromLeft';
                outClass = 'pt-page-moveToLeft';
                break;
            case 4:
                inClass = 'pt-page-moveFromTop';
                outClass = 'pt-page-moveToTop';
                break;

            // next transitions are not updated
            case 5:
                outClass = 'pt-page-fade';
                inClass = 'pt-page-moveFromRight pt-page-ontop';
                break;
            case 6:
                outClass = 'pt-page-fade';
                inClass = 'pt-page-moveFromLeft pt-page-ontop';
                break;
            case 7:
                outClass = 'pt-page-fade';
                inClass = 'pt-page-moveFromBottom pt-page-ontop';
                break;
            case 8:
                outClass = 'pt-page-fade';
                inClass = 'pt-page-moveFromTop pt-page-ontop';
                break;
            case 9:
                outClass = 'pt-page-moveToLeftFade';
                inClass = 'pt-page-moveFromRightFade';
                break;
            case 10:
                outClass = 'pt-page-moveToRightFade';
                inClass = 'pt-page-moveFromLeftFade';
                break;
            case 11:
                outClass = 'pt-page-moveToTopFade';
                inClass = 'pt-page-moveFromBottomFade';
                break;
            case 12:
                outClass = 'pt-page-moveToBottomFade';
                inClass = 'pt-page-moveFromTopFade';
                break;
            case 13:
                outClass = 'pt-page-moveToLeftEasing pt-page-ontop';
                inClass = 'pt-page-moveFromRight';
                break;
            case 14:
                outClass = 'pt-page-moveToRightEasing pt-page-ontop';
                inClass = 'pt-page-moveFromLeft';
                break;
            case 15:
                outClass = 'pt-page-moveToTopEasing pt-page-ontop';
                inClass = 'pt-page-moveFromBottom';
                break;
            case 16:
                outClass = 'pt-page-moveToBottomEasing pt-page-ontop';
                inClass = 'pt-page-moveFromTop';
                break;
            case 17:
                outClass = 'pt-page-scaleDown';
                inClass = 'pt-page-moveFromRight pt-page-ontop';
                break;
            case 18:
                outClass = 'pt-page-scaleDown';
                inClass = 'pt-page-moveFromLeft pt-page-ontop';
                break;
            case 19:
                outClass = 'pt-page-scaleDown';
                inClass = 'pt-page-moveFromBottom pt-page-ontop';
                break;
            case 20:
                outClass = 'pt-page-scaleDown';
                inClass = 'pt-page-moveFromTop pt-page-ontop';
                break;
            case 21:
                outClass = 'pt-page-scaleDown';
                inClass = 'pt-page-scaleUpDown pt-page-delay300';
                break;
            case 22:
                outClass = 'pt-page-scaleDownUp';
                inClass = 'pt-page-scaleUp pt-page-delay300';
                break;
            case 23:
                outClass = 'pt-page-moveToLeft pt-page-ontop';
                inClass = 'pt-page-scaleUp';
                break;
            case 24:
                outClass = 'pt-page-moveToRight pt-page-ontop';
                inClass = 'pt-page-scaleUp';
                break;
            case 25:
                outClass = 'pt-page-moveToTop pt-page-ontop';
                inClass = 'pt-page-scaleUp';
                break;
            case 26:
                outClass = 'pt-page-moveToBottom pt-page-ontop';
                inClass = 'pt-page-scaleUp';
                break;
            case 27:
                outClass = 'pt-page-scaleDownCenter';
                inClass = 'pt-page-scaleUpCenter pt-page-delay400';
                break;
            case 28:
                outClass = 'pt-page-rotateRightSideFirst';
                inClass = 'pt-page-moveFromRight pt-page-delay200 pt-page-ontop';
                break;
            case 29:
                outClass = 'pt-page-rotateLeftSideFirst';
                inClass = 'pt-page-moveFromLeft pt-page-delay200 pt-page-ontop';
                break;
            case 30:
                outClass = 'pt-page-rotateTopSideFirst';
                inClass = 'pt-page-moveFromTop pt-page-delay200 pt-page-ontop';
                break;
            case 31:
                outClass = 'pt-page-rotateBottomSideFirst';
                inClass = 'pt-page-moveFromBottom pt-page-delay200 pt-page-ontop';
                break;
            case 32:
                outClass = 'pt-page-flipOutRight';
                inClass = 'pt-page-flipInLeft pt-page-delay500';
                break;
            case 33:
                outClass = 'pt-page-flipOutLeft';
                inClass = 'pt-page-flipInRight pt-page-delay500';
                break;
            case 34:
                outClass = 'pt-page-flipOutTop';
                inClass = 'pt-page-flipInBottom pt-page-delay500';
                break;
            case 35:
                outClass = 'pt-page-flipOutBottom';
                inClass = 'pt-page-flipInTop pt-page-delay500';
                break;
            case 36:
                outClass = 'pt-page-rotateFall pt-page-ontop';
                inClass = 'pt-page-scaleUp';
                break;
            case 37:
                outClass = 'pt-page-rotateOutNewspaper';
                inClass = 'pt-page-rotateInNewspaper pt-page-delay500';
                break;
            case 38:
                outClass = 'pt-page-rotatePushLeft';
                inClass = 'pt-page-moveFromRight';
                break;
            case 39:
                outClass = 'pt-page-rotatePushRight';
                inClass = 'pt-page-moveFromLeft';
                break;
            case 40:
                outClass = 'pt-page-rotatePushTop';
                inClass = 'pt-page-moveFromBottom';
                break;
            case 41:
                outClass = 'pt-page-rotatePushBottom';
                inClass = 'pt-page-moveFromTop';
                break;
            case 42:
                outClass = 'pt-page-rotatePushLeft';
                inClass = 'pt-page-rotatePullRight pt-page-delay180';
                break;
            case 43:
                outClass = 'pt-page-rotatePushRight';
                inClass = 'pt-page-rotatePullLeft pt-page-delay180';
                break;
            case 44:
                outClass = 'pt-page-rotatePushTop';
                inClass = 'pt-page-rotatePullBottom pt-page-delay180';
                break;
            case 45:
                outClass = 'pt-page-rotatePushBottom';
                inClass = 'pt-page-rotatePullTop pt-page-delay180';
                break;
            case 46:
                outClass = 'pt-page-rotateFoldLeft';
                inClass = 'pt-page-moveFromRightFade';
                break;
            case 47:
                outClass = 'pt-page-rotateFoldRight';
                inClass = 'pt-page-moveFromLeftFade';
                break;
            case 48:
                outClass = 'pt-page-rotateFoldTop';
                inClass = 'pt-page-moveFromBottomFade';
                break;
            case 49:
                outClass = 'pt-page-rotateFoldBottom';
                inClass = 'pt-page-moveFromTopFade';
                break;
            case 50:
                outClass = 'pt-page-moveToRightFade';
                inClass = 'pt-page-rotateUnfoldLeft';
                break;
            case 51:
                outClass = 'pt-page-moveToLeftFade';
                inClass = 'pt-page-rotateUnfoldRight';
                break;
            case 52:
                outClass = 'pt-page-moveToBottomFade';
                inClass = 'pt-page-rotateUnfoldTop';
                break;
            case 53:
                outClass = 'pt-page-moveToTopFade';
                inClass = 'pt-page-rotateUnfoldBottom';
                break;
            case 54:
                outClass = 'pt-page-rotateRoomLeftOut pt-page-ontop';
                inClass = 'pt-page-rotateRoomLeftIn';
                break;
            case 55:
                outClass = 'pt-page-rotateRoomRightOut pt-page-ontop';
                inClass = 'pt-page-rotateRoomRightIn';
                break;
            case 56:
                outClass = 'pt-page-rotateRoomTopOut pt-page-ontop';
                inClass = 'pt-page-rotateRoomTopIn';
                break;
            case 57:
                outClass = 'pt-page-rotateRoomBottomOut pt-page-ontop';
                inClass = 'pt-page-rotateRoomBottomIn';
                break;
            case 58:
                outClass = 'pt-page-rotateCubeLeftOut pt-page-ontop';
                inClass = 'pt-page-rotateCubeLeftIn';
                break;
            case 59:
                outClass = 'pt-page-rotateCubeRightOut pt-page-ontop';
                inClass = 'pt-page-rotateCubeRightIn';
                break;
            case 60:
                outClass = 'pt-page-rotateCubeTopOut pt-page-ontop';
                inClass = 'pt-page-rotateCubeTopIn';
                break;
            case 61:
                outClass = 'pt-page-rotateCubeBottomOut pt-page-ontop';
                inClass = 'pt-page-rotateCubeBottomIn';
                break;
            case 62:
                outClass = 'pt-page-rotateCarouselLeftOut pt-page-ontop';
                inClass = 'pt-page-rotateCarouselLeftIn';
                break;
            case 63:
                outClass = 'pt-page-rotateCarouselRightOut pt-page-ontop';
                inClass = 'pt-page-rotateCarouselRightIn';
                break;
            case 64:
                outClass = 'pt-page-rotateCarouselTopOut pt-page-ontop';
                inClass = 'pt-page-rotateCarouselTopIn';
                break;
            case 65:
                outClass = 'pt-page-rotateCarouselBottomOut pt-page-ontop';
                inClass = 'pt-page-rotateCarouselBottomIn';
                break;
            case 66:
                outClass = 'pt-page-rotateSidesOut';
                inClass = 'pt-page-rotateSidesIn pt-page-delay200';
                break;
            case 67:
                outClass = 'pt-page-rotateSlideOut';
                inClass = 'pt-page-rotateSlideIn';
                break;
        }

        data.inClass = inClass;
        data.outClass = outClass;

        return data;
    }



	init();

	return { 
		init : init,
        showSinglePage : showSinglePage,
        closeLastPage : closeLastPage,
        getAnimationType : getAnimationType,
        showOffcanvas: showOffcanvas,
        closeOffcanavas: closeOffcanavas,
        isOffcanavas: isOffcanavas,
        isOpenedAnyPage: isOpenedAnyPage,
	};

})();