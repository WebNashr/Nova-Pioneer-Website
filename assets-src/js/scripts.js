
// start document.ready
$(document).ready(function() {

    // 01. 



    // 02. 



    // 03. 



    // 04. 



    // 05. 



    // 04. kill level 1 menu links
    $(".menu > .menu-item > a").attr('href', '#');
    $(".menu > .menu-item > a").attr('onClick', 'return false');
    console.log("01. level 1 menu links killed. them and some well-deserving kittens!");



    // 05. keep the level 1 menu link style while hovering on its sub-menu
    $(".sub-menu").hover(function(){
        $(this).prev("a").toggleClass("sub-menu-hovered");
        console.log("02. a sub-menu was just opened!");
        return false;
    });



    // 03. search modal box control
    $(function() {
        $(".open-search").click(function(){
            $(".modal").toggleClass("modal-search show");
            $("body").toggleClass("modal-open");
            console.log("03. a search modal box was just opened!");
            return false;
        });
    });



    // 03. menu "modal" box control
    $(function() {
        $(".open-menu").click(function(){
            $(".modal").toggleClass("modal-menu show");
            $("body").toggleClass("modal-open");
            console.log("04. small screen menu was just opened!");
            return false;
        });
    });



    // 03. close "modal" box
    $(function() {
        $(".modal-control.close").click(function(){
            $(".modal").removeClass("modal-menu modal-search show");
            $("body").toggleClass("modal-open");
            console.log("04. a modal box was just closed!");
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