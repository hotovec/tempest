

$(function () {


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


// offcanavas setup

    // random colors
    $(".random-color").each(function (index, value) {
        //console.log('div' + index + ':' + $(this).attr('id'));
        var c = Math.ceil(Math.random() * 100);
        if (c > 50) {
            $(this).addClass("random-color-1");
        } else {
            $(this).addClass("random-color-2");
        }
    });




});

