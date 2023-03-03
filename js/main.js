var $root = $('html, body');
$('a.scroll-link[href^="#"]').click(function () {
    var href = $.attr(this, 'href');

    $root.animate({
        scrollTop: $(href).offset().top
    }, 500, function () {
        window.location.hash = href;
    });

    return false;
});



$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 800) {
        $("#navBar").removeClass("sticky-top").addClass("fixed-top");
    } else {
        $("#navBar").removeClass("fixed-top").addClass("sticky-top");
        $("#navBar").hide().slideDown(600);
        $("#navBar").css("background-color", "#030B13");
        $("#navBar").css("box-shadow", "#00000040 0px 14px 18px, #00000038 0px 10px 10px");
    }
});

