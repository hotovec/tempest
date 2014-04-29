$(function () {



// enable tooltip everywher
    $("[data-toggle=tooltip]").tooltip();

// offcanavas setup
    $(".offcanavas-menu-left").offcanvas({ toggle: false, disableScrolling: true, canvas: 'body' });
    $(".offcanavas-menu-right").offcanvas({ toggle: false, disableScrolling: false, canvas: 'body' });
    $(".offcanavas-menu-bottom").offcanvas({ toggle: false, disableScrolling: false });
    $(".offcanavas-menu-bottom").offcanvas({ toggle: false, disableScrolling: false });


    // page transitions

    var currentPage = 0;
    var lastPage = 0;

    $(".ptgo").on('click', function () {

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
    PageTransitions.nextPage({animation: 21, showPage: 1});


    $(".bobo").on('click', function(){
        console.log("click");
    });


});

