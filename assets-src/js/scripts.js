// var standalone = window.navigator.standalone,
//     userAgent = window.navigator.userAgent.toLowerCase(),
//     safari = /safari/.test( userAgent ),
//     ios = /iphone|ipod|ipad/.test( userAgent );
// if( ios ) {
//     document.getElementsByTagName('body')[0].className+=' ios'
// };


// start document.ready
(function ($) {
    $(document).ready(function () {
        console.log('one ready')


        // 01. kill level 1 menu links
        $(".menu > .menu-item > a").attr('href', '#');
        $(".menu > .menu-item > a").attr('onClick', 'return false');
        console.log("01. level 1 menu links killed. them and some well-deserving kittens!");


        // 02. keep the level 1 menu link style while hovering on its sub-menu
        $(".sub-menu").hover(function () {
            $(this).prev("a").toggleClass("sub-menu-hovered");
            console.log("02. a sub-menu was just opened!");
            return false;
        });


        // 03. search modal box control
        $(function () {
            $(".open-search").click(function () {
                $(".modal").toggleClass("modal-search show");
                $("body").toggleClass("modal-open");
                $("#hfc-frame").toggleClass("hfc-frame hide");
                console.log("03. a search modal box was just opened!");
                return false;
            });
        });


        // 04. menu "modal" box control
        $(function () {
            $(".open-menu").click(function () {
                $(".modal").toggleClass("modal-menu show");
                $("body").toggleClass("modal-open");
                $("#hfc-frame").toggleClass("hfc-frame hide");
                console.log("04. small screen menu was just opened!");
                return false;
            });
        });


        // 05. close "modal" box
        $(function () {
            $(".modal-control.close").click(function () {
                $(".modal").removeClass("modal-menu modal-search show");
                $("body").toggleClass("modal-open");
                $("#hfc-frame").toggleClass("hfc-frame hide");
                console.log("05. a modal box was just closed!");
                return false;
            });
        });


        // 06. faqs
        $(".toggle-list li").click(function () {
            $(this).toggleClass("show");
            console.log("06. an faqs item was just opened... or closed ;)");
            return false;
        });


        // 07. trigger offset
        $(function () {
            var headerHeight = $('.page-header').outerHeight();
            $('.trigger-offset').css("margin-top", parseInt(headerHeight) + "px");
            console.log("07. trigger offset for Waypoints");
        });


        // 08. sticky header
        $('.trigger').waypoint(function (direction) {
                if (direction == 'down') {
                    $('.header-section-main').addClass('stuck');
                    $('.menu-item-main').addClass('stuck');
                    $('.header-logo').addClass('stuck');
                    $('.page-header').addClass('stuck');
                    console.log("08. sticky header was made unstuck");
                }
                if (direction == 'up') {
                    $('.header-section-main').removeClass('stuck');
                    $('.menu-item-main').removeClass('stuck');
                    $('.header-logo').removeClass('stuck');
                    $('.page-header').removeClass('stuck');
                    console.log("08. sticky header got, er... stuck");
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
        $('.anchor-link a[href^="#"]').on('click', function (event) {
            console.log('scroll');
            var target = $(this.getAttribute('href'));
            var headerHeight = $("#header-container").height()
            console.log(headerHeight)
            var scrollToPosition = $(target).offset().top - headerHeight;
            console.log(scrollToPosition);
            if (target.length) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: scrollToPosition
                }, 1000);
            }
        });


    });
})(jQuery);
(function ($) {
// 10. Full width caption animation
    console.log(' two ready')
    $(function () {
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
    $(function () {
        var inview = new Waypoint.Inview({
            element: $('.animated-title')[0],

            entered: function (direction) {
                $(this.element).addClass('slideInLeft');
                console.log("11. Animated Hero title");
                this.destroy();
            }
        });
    });

// end document.ready


// 12. escape modal with ESC
    $(document).keydown(function (e) {
        if (e.keyCode == 27) {
            $(".modal").toggleClass("show");
            $("body").toggleClass("modal-open");
            console.log("128. you pressed ESC to close whatever modal you had open");
        }
    });


// parallax effect
    $(function () {
        $(window).enllax();
    });


// start document.resize
    $(window).resize(function () {

        // 1.
        $(function () {

        });

    });
// end document.resize
    $(document).ready(function () {
        // add blank and new href
        $(".menu-item-1315 a").attr({
            target: '_blank',
            href: 'http://novaacademies.applytojob.com/'
        });
        // capitalize words on G form
        $('.capitalize input').keyup(function () {
            console.log('yaay')
            var str = $(this).val()
            str = str.toLowerCase().replace(/^[\u00C0-\u1FFF\u2C00-\uD7FF\w]|\s[\u00C0-\u1FFF\u2C00-\uD7FF\w]/g, function (letter) {
                return letter.toUpperCase();
            });
            $(this).val(str)
        })
        // scroll up on readmore link
        var counter = 1;
        $('.read-more-trigger').click(function () {
            counter++
            console.log('scroll yes scroll')
            var offset = 75; //Offset of 20px
            if (counter % 2 === 0) {//  a whole load of nothing here
            }
            else {
                $('html, body').animate({
                    scrollTop: $('#readmoreScroll').offset().top - offset
                }, 2000);
            }
        })

        // weird things for mobile but in the end disable parallax by setting it enllax-ratio to 0;

        console.log('not yet');
        // device detection
        if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
            || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) {

            console.log('we are on mobiles');
            $(".section-hero,.parallax").data('enllax-ratio', 0);
            console.log('parallax set to  : ' + $(".section-hero,.parallax").data('enllax-ratio'));
            console.log('parallax dissabled');
        }

    })

})(jQuery);
