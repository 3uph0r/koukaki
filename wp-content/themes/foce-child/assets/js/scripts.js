jQuery(document).ready(function ($) {
  $(window).on("scroll", function () {
    let scrollTop = $(window).scrollTop();
    $(".hero-title").css("transform", `translateY(${scrollTop * 0.5}px)`);
    $(".hero-video").css("transform", `translateY(${scrollTop * 0.2}px)`);
  });
});
