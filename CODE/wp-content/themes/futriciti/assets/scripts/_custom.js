/**
 * Created by aliannieves on 11/17/16.
 * Modified by Jenrry on 01/23/2017
 */
jQuery(".player0").YTPlayer();
/*jQuery(".player0").on('YTPReady', function(){
    jQuery('.landing-banner-bg').addClass('animation-off');
    setTimeout(function() {
        jQuery(".player0").YTPPlay();
    }, 1);
});*/

jQuery(".player").YTPlayer();
jQuery(document).ready(function($){

    //variables
    var $document			= $(document);
    var $window 			= $(window);
    var $body				= $('body');
    var wave_static_src     = $('.waves').attr('src');

    $window.on('load', function(){
        $('.loading_wrapper').addClass('loading_wrapper_closed');
    });

    show_wave();

    function show_wave(){
        if($window.width() < 768) {
            var static_src = $('.waves').data('srcm');
            $('.waves').attr('src', static_src);
        }else{
            $('.waves').attr('src', wave_static_src);
        }
    }
    $window.resize(function(){
        show_wave();
    });

    if(!isMobile.any){
        $window.scroll(function(){
            header_background();
        });
    }else{
        header_background();
    }

    $(".jump-to a").click(function(e){
        e.preventDefault();

        var target = $(this).attr('href');
        var scrollPositition = $(target).offset();

        $("html, body").animate({ scrollTop: scrollPositition.top - 100 }, 1000);
    });


   $body.click(function(e){
        //e.preventDefault();
        var $target = $(e.target);

        if((!$target.hasClass('form-box') && !$target.parents('.form-box').length) || $target.hasClass('close-form-x')) {
            $(".form-box").removeClass('is-open');
        }

        if(e.target.className === 'super-footer-title' || $(e.target).parents('.open-form').length ) {
            $(".form-box").addClass('is-open');
        }

    });


    /*
    * Function to add an extra class to the body tag for style purpose on scroll
    * */
    function header_background() {
        if(!isMobile.any) {
            if ($window.scrollTop() > 10) {
                $body.addClass('temp-menu-bg');
            }
            else {
                if($window.width() > 768){
                    $body.removeClass('temp-menu-bg');
                }
            }
        }else{
            $body.addClass('temp-menu-bg');
        }
    }//End of header_background()

    /* ------------- isViewPort function  (detect if the element X is inside viewPort )----------------*/
    jQuery.fn.extend({
        isInViewPort: function(offset) {
            const $w = jQuery(window);
            const $this = jQuery(this);

            if ( !offset ) offset=0;

            const viewPortTop = $w.scrollTop();
            const viewPortBottom = viewPortTop + $w.height() + offset;

            const eTop = $this.offset().top;
            const eBotom = eTop + $this.height();
            return (
                eTop < viewPortBottom //The top of the element is INSIDE (less than) the viewPort bottom limit
                &&
                eBotom > viewPortTop // the element isnt outside of the viewport.
            );
        }
    });
    /* ------------- End of isViewPort function  ----------------*/

    $(window).scroll(function () {
        if($(".logo-center").isInViewPort(-150)){
            $(".logo-center").addClass('center-logo-appear');
        }else{
            $(".logo-center").removeClass('center-logo-appear');
        }

        if($(".animated-btn a").isInViewPort(-200)){
            $(".animated-btn a").addClass("is-animated");
        }else{
            $(".animated-btn a").removeClass("is-animated");
        }

        if(!isMobile.any) {
            if($(".waves").isInViewPort(-50)){
                $(".waves").addClass("waves-appearing");
            }else{
                $(".waves").removeClass("waves-appearing");
            }
        }else{
            $(".waves").addClass("waves-appearing");
        }


        if($('#colophon').isInViewPort(-70)){
            $('#colophon .footer-wrapper').addClass('open-footer');
            $('#colophon .footer-wrapper .footer-box').addClass('open-footer-box');
        }else{
            $('#colophon .footer-wrapper').removeClass('open-footer');
            $('#colophon .footer-wrapper .footer-box').removeClass('open-footer-box');
        }
    });

    /********************* Animation Script *******************************/
    var controller = new ScrollMagic.Controller();

    new ScrollMagic.Scene({triggerElement: ".trigger-what", offset: -100})
        .setClassToggle(".line-box-holder .super-line", "animate-line") // add class toggle
        .addTo(controller);


    new ScrollMagic.Scene({triggerElement: ".trigger-second-text"})
        .setClassToggle(".line-box-holder-2 .super-line", "animate-left-line") // add class toggle
        .addTo(controller);


    new ScrollMagic.Scene({triggerElement: ".owl-carousel"})
        .setClassToggle(".line-box-holder-3 .super-line", "animate-left-line-2") // add class toggle
        .addTo(controller);


    if(!isMobile.any) {
        /*var videoAnimation = new ScrollMagic.Scene({
            triggerElement: ".trigger-what",
            duration: 600,
            offset: 100
        }).setPin("#video", {pushFollowers: false})
            .setTween("#video", 4, {transform: 'translateY(20px)', ease: Linear.easeNone})
            .addTo(controller);*/


        /*var markLeftAnimation = new TimelineMax()
            .add([
                TweenMax.fromTo("#what-left-water-mark", 4,
                    {transform: 'translateY(0)', opacity: 0.10, ease: Linear.easeNone},
                    {transform: 'translateY(150px)', opacity: 0.60, ease: Linear.easeNone})
            ]);*/

        /*var mark1Animation = new ScrollMagic.Scene({
            triggerElement: ".trigger-what",
            duration: 600,
            offset: 100
        }).setPin("#what-left-water-mark", {pushFollowers: false})
            .setTween(markLeftAnimation)
            .addTo(controller);

        var whatCenterAnimation = new TimelineMax()
            .add([
                TweenMax.fromTo(".what-center-box", 3,
                    {transform: 'translateY(0)'},
                    {transform: 'translateY(100px)', ease: Linear.easeNone})
            ]);
        var ImageCenterAnimation = new ScrollMagic.Scene({
            triggerElement: ".trigger-what",
            duration: 300,
            offset: 300
        }).setPin(".what-center-box", {pushFollowers: false})
            .setTween(".whatCenterAnimation")
            .addTo(controller);*/


        /*var whatCenterText = new TimelineMax()
            .add([
                TweenMax.staggerFromTo([
                        ".what-right-content h2",
                        ".what-right-content p"
                    ], 2,
                    {bottom: -50},
                    {bottom: 0, ease: Linear.easeNone}, 1)
            ]);
        var LeftWhatCenterAnimation = new ScrollMagic.Scene({
            triggerElement: ".top-angle",
            duration: 500,
            offset: 100
        }).setTween(whatCenterText)
            .addTo(controller);*/

/*        var whatCenterTextXs = new TimelineMax()
            .add([
                TweenMax.staggerFromTo([
                        ".what-right-content-xs h2",
                        ".what-right-content-xs p"
                    ], 2,
                    {bottom: -50},
                    {bottom: 0, ease: Linear.easeNone}, 1)
            ]);
        var LeftWhatCenterXsAnimation = new ScrollMagic.Scene({
            triggerElement: ".what-center-box",
            duration: 500,
            offset: 100
        }).setTween(whatCenterTextXs)
            .addTo(controller);*/


        /*var LeftWhatTextAnimation = new ScrollMagic.Scene({
            triggerElement: ".trigger-what",
            duration: 700,
            offset: 100
        }).setPin('.what-right-text-box')
            .addTo(controller);*/


        var howFirstText = new TimelineMax()
            .add([
                TweenMax.staggerFromTo([".how-first-title", ".how-first-text", ".first-variable", ".second-variable"], 1,
                    {bottom: -10},
                    {bottom: 0, ease: Linear.easeNone}, 1)
            ]);
        var howFirstTextAnimation = new ScrollMagic.Scene({
            triggerElement: ".trigger-how",
            duration: 300,
            offset: -300
        }).setTween(howFirstText)
            .addTo(controller);


        var howBigText = new TimelineMax()
            .add([
                TweenMax.fromTo('.big-title', 1,
                    {bottom: -30},
                    {bottom: 0, ease: Linear.easeNone})
            ]);
        var howBigTextAnimation = new ScrollMagic.Scene({
            triggerElement: ".trigger-big-text",
            duration: 400,
            offset: -200
        }).setTween(howBigText)
            .addTo(controller);


        var howSecondContent = new TimelineMax()
            .add([
                TweenMax.staggerFromTo([
                        ".how-second-content-box h2",
                        ".how-second-content-box p"
                    ], 2,
                    {bottom: -20},
                    {bottom: 0, ease: Linear.easeNone}, 1)
            ]);
        var howSecondContentAnimation = new ScrollMagic.Scene({
            triggerElement: ".trigger-second-text",
            duration: 250,
            offset: -70
        }).setTween(howSecondContent)
            .addTo(controller);


        /*var howWaterMarkFade = new TimelineMax()
            .add([
                TweenMax.fromTo(".how-water-mark", 2,
                    {opacity: 0},
                    {opacity: 0.25, ease: Linear.easeNone}, 1)
            ]);
        var howWaterMarkFadeAnimation = new ScrollMagic.Scene({
            triggerElement: ".trigger-second-text",
            duration: 300,
            offset: 100
        }).setTween(howWaterMarkFade)
            .addTo(controller);

        var howWaterMark = new TimelineMax()
            .add([
                TweenMax.fromTo(".how-water-mark", 2,
                    {top: -200},
                    {top: 0, ease: Linear.easeNone}, 1)
            ]);
        var howWaterMarkAnimation = new ScrollMagic.Scene({
            triggerElement: ".trigger-second-mark",
            duration: 300,
            offset: 100
        }).setTween(howWaterMark)
            .addTo(controller);*/

    }//End of IF to stop animations on mobile

    /* Founder Script     */
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items:1,
        margin:30,
        stagePadding:30,
        smartSpeed:450,
        autoplay: true,
        loop:true
    });
    /* End Founder Script */


    if(!isMobile.any) {
        var whoSecondContent = new TimelineMax()
            .add([
                TweenMax.staggerFromTo([
                        ".who-box-container h2",
                        ".who-box-container p"
                    ], 2,
                    {bottom: -50},
                    {bottom: 0, ease: Linear.easeNone}, 1)
            ]);

        var whoSecondContentAnimation = new ScrollMagic.Scene({
            triggerElement: ".owl-carousel",
            duration: 500,
            offset: -100
        }).setTween(whoSecondContent)
            .addTo(controller);
    }

    new ScrollMagic.Scene({triggerElement: ".trigger-second-text"})
        .setClassToggle(".line-box-holder-2 .super-line", "animate-left-line") // add class toggle
        .addTo(controller);


    new ScrollMagic.Scene({triggerElement: ".owl-carousel"})
        .setClassToggle(".line-box-holder-3 .super-line", "animate-left-line-2") // add class toggle
        .addTo(controller);

    var move_line = $('.who-box-container').width();
    $('.line-box-holder-3').width(move_line + 70);

    $(window).resize(function(){
        var move_line = $('.who-box-container').width();
        $('.line-box-holder-3').width(move_line + 70);
    });


    $('.founder-open').on('click', function(){
        $('.site-header').css('position', 'absolute');
    });

    $('.close').on('click', function(){
        $('.site-header').css('position', 'fixed');
    });

});