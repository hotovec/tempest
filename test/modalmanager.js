/**
 * Created by hotovec on 1.5.2014.
 */

$(function () {
    console.log("init");



    $('#actShowOverlay').click(function() {
        $('.pt-page-2').addClass('pt-page-current');
        $('.pt-page-2').addClass('pt-page-moveFromBottom');
        //$('.pt-page-2').css('overflow','auto');
    });

    $('#actShowScrollableOverlay').click(function() {
        $('.pt-page-3').addClass('pt-page-current');
        $('.pt-page-3').addClass('pt-page-moveFromBottom');
    });


    // open
    $('#actShowPage').click(function() {
        PageTransitions.showSinglePage();
        //PageTransitions.test();

    });
    // close
    $('#actCloseMedialib').click(function() {
        PageTransitions.closeCurrentPage();
        //$('.pt-page-1').addClass('pt-page-moveToBottom');
        //$('.pt-page-1').removeClass('pt-page-current');
    });






    //$('.pt-page-1').addClass('pt-page-delay100');
    //$('.pt-page-1').addClass('pt-page-moveToBottom');

    //$('body').css('overflow','hidden');

});