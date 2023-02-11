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
    if (scroll >= 300) {
        $("#navBar").removeClass("sticky-top").addClass("fixed-top");
    } else {
        $("#navBar").removeClass("fixed-top").addClass("sticky-top");
        $('#navBar').hide().fadeIn(500);
    }
});
