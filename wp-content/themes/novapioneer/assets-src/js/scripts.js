// start document.ready
$(document).ready(function() {

    // 01.
     
    $(function() {

    });

    
    // 02. show/hide serch form overlay
	$(".search-toggle").click(function(){
        $(".header-search fieldset").toggleClass("open");
        $(".header-search input[type='text']").toggleClass("open");
        $(".header-search input[type='submit']").toggleClass("open");
        $(".header-search .search-icon").toggleClass("open");
        $(".header-search .search-toggle-icon").toggleClass("open");
        // $(".header-search fieldset").toggleClass("open");
        console.log("switch!!!");
        return false;
    });


    // 03. select-country
    $(function() {
        $(".select-country").click(function(){
            $(".country").toggleClass("show");
            $(".country").toggleClass("hide");
            console.log("switch!!!");
            return false;
        });
    });


    // 04. modal toggle
    $(function() {
        $(".modal-toggle").click(function(){
            $(".modal").toggleClass("modal-show");
            $("body").toggleClass("modal-show");
            console.log("switch!!!");
            return false;
        });
    });


    // 05. faqs
    $(function() {
        $(".toggle-list li").click(function(){
            $(this).toggleClass("show");
            return false;
        });
    });


    // 05. faqs
    $(function() {
        var headerHeight = $('.page-header').outerHeight();
        $('.trigger-offset').css("margin-top", parseInt(headerHeight) + "px");
    });


    // 06. sticky header
    $('.trigger').waypoint(function (direction) {
        if(direction == 'down') {
            $('.header-section-main').addClass('stuck');
            $('.menu-item-main').addClass('stuck');
            $('.header-logo').addClass('stuck');
            $('.school-name').addClass('stuck');
            $('.page-header').addClass('stuck');
        }
        if(direction == 'up') {
            $('.header-section-main').removeClass('stuck');
            $('.menu-item-main').removeClass('stuck');
            $('.header-logo').removeClass('stuck');
            $('.school-name').removeClass('stuck');
            $('.page-header').removeClass('stuck');
        }
    },
    {
        offset: '72.5%'
    });


});
// end document.ready



