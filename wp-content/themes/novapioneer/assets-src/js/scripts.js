
// start document.ready
$(document).ready(function() {

    // 01. menu toggle
    // $(".modal-check-label").click(function(){
    //     $(".page-header").toggleClass("modal modal-show");
    //     $("body").toggleClass("modal-show");
    //     console.log("01. menu toggle");
    //     return false;
    // });


    // 02. search toggle
	// $(".search-toggle").click(function(){
 //        $(".header-search fieldset").toggleClass("open");
 //        $(".header-search input[type='text']").toggleClass("open");
 //        $(".header-search input[type='submit']").toggleClass("open");
 //        $(".header-search .search-icon").toggleClass("open");
 //        $(".header-search .search-toggle-icon").toggleClass("open");
 //        console.log("02. search toggle");
 //        return false;
 //    });


    // 03. search toggle on small screens
    // $(".search-toggle.search-toggle-menu").click(function(){
    //     $(".page-header").toggleClass("modal modal-show");
    //     $("body").toggleClass("modal-show");
    //     // make sure large screen toggle functionality doesn't interfere with the small screens
    //     $(".header-search fieldset").toggleClass("open");
    //     $(".header-search input[type='text']").toggleClass("open");
    //     $(".header-search input[type='submit']").toggleClass("open");
    //     $(".header-search .search-icon").toggleClass("open");
    //     $(".header-search .search-toggle-icon").toggleClass("open");
    //     console.log("03. search toggle on small screens");
    //     return false;
    // });


    // 04. select-country
    // $(".select-country").click(function(){
    //     $(".select-countries").toggleClass("show");
    //     console.log("04. select-country");
    // });

    // dropdown
    // $(".dropdown").click(function(){
    //     $(".dropdown-drop").toggleClass("show");

    // });



    // 04. cutom drop list
    // $(".drop-list-item").click(function(){
    //     $(this).siblings().removeClass("drop-list-selected").addClass(".drop-list-option");
    //     $(this).removeClass(".drop-list-option").addClass("drop-list-selected").prependTo(".drop-list-container");
    //     console.log("04. a country was just selected! just now!");
    // });


    // 04. kill level 1 menu links
    $(".menu > .menu-item > a").attr('href', '#');
    $(".menu > .menu-item > a").attr('onClick', 'return false');
    console.log("level 1 menu links killed");



    // 05. keep the level 1 menu link style while hovering on its sub-menu
    $(".sub-menu").hover(function(){
        $(this).prev("a").toggleClass("sub-menu-hovered");
        console.log("a modal box was just opened!");
        return false;
    });



    // 05. modal toggle
    // $(".modal-toggle").click(function () {
    //     if ($(this).hasClass('button-send-rsvp')) {
    //         $('#event-organiser').html( $(this).data().eventOrganizers );
    //         $('#event-title').html( $(this).data().eventName );
    //         $('#event-date').html( $(this).data().eventDate );
    //         $('#event-location').html( $(this).data().eventLocation );
    //         $('#event-id').val( $(this).data().eventId );
    //     }

    //     $(".modal").toggleClass("modal-show");
    //     $("body").toggleClass("modal-show");
    // });


    // 03. modal box control
    $(function() {
        $(".modal-control").click(function(){
            $(".modal").toggleClass("show");
            // $(".modal-control").toggleClass("show");
            $("body").toggleClass("modal-open");
            console.log("a modal box was just opened!");
            return false;
        });
    });


    // 06. faqs
    $(".toggle-list li").click(function(){
        $(this).toggleClass("show");
        console.log("06. faqs");
        return false;
    });


    // 07. trigger offset
    $(function() {
        var headerHeight = $('.page-header').outerHeight();
        $('.trigger-offset').css("margin-top", parseInt(headerHeight) + "px");
        console.log("07. trigger offset");
    });


    // 08. sticky header
    $('.trigger').waypoint(function (direction) {
        if(direction == 'down') {
            $('.header-section-main').addClass('stuck');
            $('.menu-item-main').addClass('stuck');
            $('.header-logo').addClass('stuck');
            // $('.school-name').addClass('stuck');
            $('.page-header').addClass('stuck');
            console.log("08. sticky header - unstuck");
        }
        if(direction == 'up') {
            $('.header-section-main').removeClass('stuck');
            $('.menu-item-main').removeClass('stuck');
            $('.header-logo').removeClass('stuck');
            // $('.school-name').removeClass('stuck');
            $('.page-header').removeClass('stuck');
            console.log("08. sticky header - stuck");
        }
    },
    {
        offset: '72.5%'
    });


    // 09. what's this? somebody add a comment please...
    /*
         somebody added this comment
         ================================
        to effectively scroll to top we have to account for our static
        header height.
        so our "top" is actually RealTop - StaticHeaderHeight

     */
    $('.anchor-link a[href^="#"]').on('click', function(event) {
        console.log('scroll');
        var target = $(this.getAttribute('href'));
        var headerHeight = $("#header-container").height()
        console.log(headerHeight)
        var scrollToPosition = $(target).offset().top - headerHeight;
        console.log(scrollToPosition);
        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: scrollToPosition
            }, 1000);
        }
    });


});

// 10. Full width caption animation
$(function() {
    var captionWaypoint = $('.caption').waypoint(function (direction) {
        if (direction == 'down') {
            $(this.element).addClass('slideInLeft');
            this.destroy();
        }
    },
    {
        offset: '95%'
    });
    console.log("10. Full width caption animation");
});



// 11. Animated Hero title
$(function() {
    var inview = new Waypoint.Inview({
        element: $('.animated-title')[0],

        entered: function(direction) {
            $(this.element).addClass('slideInLeft');
            console.log("11. Animated Hero title");
            this.destroy();
        }
    });
});

// end document.ready



// 12. escape modal with ESC
$(document).keydown(function(e) {
    if (e.keyCode == 27) {
        $(".modal").toggleClass("show");
        // $(".modal-control").toggleClass("show");
        $("body").toggleClass("modal-open");
    }
});





// start document.resize
$(window).resize(function(){

    // 1.
    $(function() {

    });

});
// end document.resize
