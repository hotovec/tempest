/**
 * Created by hotovec on 1.5.2014.
 */

$(function () {

    console.log("init");

    /*tOut = '';
    for ( var i =1 ; i<=67; i++) {
        tOut = tOut + '<button data-toggle="page-open" data-animation="' + i +'" data-page-target=".pt-page-1">Anim ' +i+ '</button>';
    }
    console.log(tOut);*/


    // init Layer transitions

    // asign layer transitions to elements
    $("[data-layer='open']").click(function () {
        var el = $(this);
        var targetPage = null;
        if (targetPage = el.data('layer-target')) {

            var animationType = 1; // default
            if (animationType = el.data("animation")) {
                console.log("custom anim:" + animationType)
            }
            LayerTransitions.showSinglePage(animationType, targetPage);
        }
    });

    $("[data-layer='transition']").click(function () {
        var el = $(this);
        var targetPage = null;
        if (targetPage = el.data('layer-target')) {

            var animationType = 1; // default
            if (animationType = el.data("animation")) {
                console.log("custom anim:" + animationType)
            }
            LayerTransitions.nextPage(animationType, targetPage);
        }
    });

    // assign close layer to elements
    $("[data-layer='dimmis']").click(function () {
        var el = $(this);
        LayerTransitions.closeLastPage();
    });

    $("[data-layer='dimmis-all']").click(function () {
        var el = $(this);
        LayerTransitions.closeAllPages();
    });


    // manage transition before page reload
    // this is fake for pages with refresh
    // rough and proto

    $("a[data-reload-transition]").click(function(e) {
        e.preventDefault();
        var el = $(this);
        var animationType = 1; // default
        window.setTimeout(function() {
            window.location.href = el.attr("href");;
        }, 100);

        LayerTransitions.showSinglePage(animationType, ".m-reload");
    });


    // assign ESC to close elements
    $(document).keyup(function(e) {
        // todo - check history if we can close
        // todo - check changes on layers and get warnings
        if (e.keyCode == 27) {
            if(LayerTransitions.isOffcanavas()) { // esc
                console.log("close offcanavas");
                LayerTransitions.closeOffcanavas();
            } else {

                if(LayerTransitions.isOpenedAnyPage()) {
                    console.log("close page");
                    LayerTransitions.closeLastPage();
                }

            }
        }
    });

    /// offcanavas

    // traverse thru offcanvas elements and add clasess

    $("[data-offcanavas-pane]").each( function() {
        var el = $(this);
        var tmpPane = null;
        var ocPaneClass = '';
        if (tmpPane = el.data('offcanavas-pane')) {
            switch(tmpPane) {
                case 'left':
                    ocPaneClass = 'oc-layer-left';
                    break;
                case 'right':
                    ocPaneClass = 'oc-layer-right';
                    break;
                case 'top':
                    ocPaneClass = 'oc-layer-top';
                    break;
                case 'bottom':
                    ocPaneClass = 'oc-layer-bottom';
                    break;
            }
        }

        el.addClass(ocPaneClass);
    });


    // assign offcanavas open

    $("[data-layer='offcanavas']").click(function() {
        var el = $(this);

        var offcanavasTarget = null;
        var offcanavasTargetPane = null;
        var offcanvasTargetSelector;

        // check dependencies
        // check if target is declared
        var err = false;
        if (offcanvasTargetSelector = el.data('offcanavas-target')) {

            // check if target exist
            offcanavasTarget = $(offcanvasTargetSelector);
            if (offcanavasTarget.length) {

                //check which pane will target use (left, right, bottom, top)
                if (offcanavasTargetPane = offcanavasTarget.data('offcanavas-pane')) {

                    console.log("target width:" + offcanavasTarget.width());
                    //LayerTransitions.showOffcanvas("left");

                    console.log("show offcanvas: " + offcanvasTargetSelector + " in " +offcanavasTargetPane);
                    LayerTransitions.showOffcanvas(offcanavasTarget, offcanavasTargetPane);

                } else {
                    err = true;
                    console.warn('target has no offcanavas pane defined');
                }

            } else {
                err = true;
                console.warn('not defined target for data-offcanavas-target="' + offcanvasTargetSelector + '"');
            }

        } else {
            err = true;
            console.warn('not defined "data-offcanavas-target"');
        }

        if(err) {
            return;
        }

    });




});
