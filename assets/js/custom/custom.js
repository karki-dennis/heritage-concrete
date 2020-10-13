jQuery(document).ready(function ($) {
     $("#primary-menu").find(".menu-item-has-children > a").append('<i class="arrow"></i>');
     $(".menu-item-has-children .arrow").on("click", function (i) {
        i.preventDefault();
        $(this).toggleClass("open");
        $(this).parent().parent().children("ul.sub-menu").slideToggle();
    })

    $(".hamburger").click(function(){
        $(this).toggleClass("is-active");
        $(".off-canvas-wrapper").toggleClass("off-canvas-wrapper--active");
    });

     //banner slider
    $(".home-banner__slider").slick({
        dots: false,
        arrows: false,
        /*autoplay: true,*/
    });
});
