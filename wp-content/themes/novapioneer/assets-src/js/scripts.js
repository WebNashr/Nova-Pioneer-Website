
// start document.ready
$(document).ready(function() {

    // 01. menu toggle
    $(".modal-check-label").click(function(){
        $(".page-header").toggleClass("modal modal-show");
        $("body").toggleClass("modal-show");
        console.log("01. menu toggle");
        return false;
    });

    
    // 02. search toggle
	$(".search-toggle").click(function(){
        $(".header-search fieldset").toggleClass("open");
        $(".header-search input[type='text']").toggleClass("open");
        $(".header-search input[type='submit']").toggleClass("open");
        $(".header-search .search-icon").toggleClass("open");
        $(".header-search .search-toggle-icon").toggleClass("open");
        console.log("02. search toggle");
        return false;
    });


    // 03. search toggle on small screens
    $(".search-toggle.search-toggle-menu").click(function(){
        $(".page-header").toggleClass("modal modal-show");
        $("body").toggleClass("modal-show");
        // make sure large screen toggle functionality doesn't interfere with the small screens
        $(".header-search fieldset").toggleClass("open");
        $(".header-search input[type='text']").toggleClass("open");
        $(".header-search input[type='submit']").toggleClass("open");
        $(".header-search .search-icon").toggleClass("open");
        $(".header-search .search-toggle-icon").toggleClass("open");
        console.log("03. search toggle on small screens");
        return false;
    });


    // 04. select-country
    $(".select-country").click(function(){
        $(".country").toggleClass("show");
        $(".country").toggleClass("hide");
        console.log("04. select-country");
        return false;
    });


    // 05. modal toggle
    $(".modal-toggle").click(function(){
        $(".modal").toggleClass("modal-show");
        $("body").toggleClass("modal-show");
        console.log("05. modal toggle");
        return false;
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
            $('.school-name').addClass('stuck');
            $('.page-header').addClass('stuck');
            console.log("08. sticky header - unstuck");
        }
        if(direction == 'up') {
            $('.header-section-main').removeClass('stuck');
            $('.menu-item-main').removeClass('stuck');
            $('.header-logo').removeClass('stuck');
            $('.school-name').removeClass('stuck');
            $('.page-header').removeClass('stuck');
            console.log("08. sticky header - stuck");
        }
    },
    {
        offset: '72.5%'
    });
    
    $('.anchor-link a[href^="#"]').on('click', function(event) {
        console.log('scroll');
        var target = $(this.getAttribute('href'));
        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 1000);
        }
    });


});
// end document.ready





// start document.resize
$(window).resize(function(){

    // 1. 
    $(function() {

    });

});
// end document.resize



