

$(function () {

    // $('#modal-content-delete').modal('show');

    // replace this by something advanced
    $('#searchOptionsButton').click(function(event) {
        var obj = $('.search-tags--options');
        if(obj.hasClass('hide')) {
            obj.removeClass('hide');
        } else {
            obj.addClass('hide');
        }
    });

    // enable tooltip everywher
    $("[data-toggle=tooltip]").tooltip();

    $('#addPreset').click(function () {
        var newItemCount = $('#MyPillbox ul li').length + 1;
        $('#MyPillbox ul').pillbox('addItem', 'Item ' + newItemCount, 'Item ' + newItemCount );
    });

// offcanavas setup
    $(".offcanavas-menu-left").offcanvas({ toggle: false, disableScrolling: true, canvas: 'body' });
    $(".offcanavas-menu-right").offcanvas({ toggle: false, disableScrolling: false, canvas: 'body' });
    $(".offcanavas-menu-bottom").offcanvas({ toggle: false, disableScrolling: false });
    $(".offcanavas-menu-bottom").offcanvas({ toggle: false, disableScrolling: false });


    // page transitions

    var currentPage = 0;
    var lastPage = 0;

    // random colors
    //$(".random-color").each()
    $(".random-color").each(function (index, value) {
        //console.log('div' + index + ':' + $(this).attr('id'));
        var c = Math.ceil(Math.random() * 100);
        if (c > 50) {
            $(this).addClass("random-color-1");
        } else {
            $(this).addClass("random-color-2");
        }
    });

    /*$(".ptgo").on('click', function () {

     var el = $(this);

     var currentAnimation = el.data('animation');
     var currentOpenPage = el.data('page') - 1; // fix zero start
     var currentDir = el.data('direction');

     if (currentDir === -1) {
     currentAnimation++;
     // currentOpenPage = lastPage;
     }

     if (currentPage === currentOpenPage) {
     return;
     }

     PageTransitions.nextPage({animation: currentAnimation, showPage: currentOpenPage});
     //console.log(">" + currentPage + "[" + lastPage + "] > " + currentOpenPage);
     currentPage = currentOpenPage;
     });

     // open content management
     //PageTransitions.nextPage({animation: 21, showPage: 1});*/

    //$(".quee-first")


});

