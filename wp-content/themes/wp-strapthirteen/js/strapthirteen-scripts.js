/* StrapThirteen Scroll Top Script - Copyright: WP Strap Code - 2013 wpstrapcode.com. License: GPL3 */
jQuery(document).ready(function($){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 50) {
            $('.backToTop').fadeIn('slow');
        } else {
            $('.backToTop').fadeOut('slow');
        }
    });
    $('.backToTop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 500);
        return false;
    });
});

/* myCarousel */
!function ($) { $(function(){ $('#myCarousel').carousel() }) }(window.jQuery)