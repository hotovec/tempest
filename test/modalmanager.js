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
    $("[data-toggle='page-open']").click(function () {
        var el = $(this);
        var targetPage = null;
        if (targetPage = el.data('page-target')) {

            var animationType = 1; // default
            if (animationType = el.data("animation")) {
                console.log("custom anim:" + animationType)
            }
            LayerTransitions.showSinglePage(animationType, targetPage);
        }
    });

    // assign close layer to elements
    $("[data-toggle='page-close']").click(function () {
        var el = $(this);
        LayerTransitions.closeLastPage();
    });

    // assign ESC to close elements
    $(document).keyup(function(e) {
        // todo - check history if we can close
        // todo - check changes on layers and get warnings
        if (e.keyCode == 27) { LayerTransitions.closeLastPage(); }   // esc
    });

    /// offcanavas

    $("[data-toggle='offcanavas-open']").click(function() {
      LayerTransitions.showOffcanvas();
    });



});