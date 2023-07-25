$(document).ready(function() {
    function scrollToSection(target) {
        var targetOffset = $(target).offset().top;

        $('html, body').animate({
            scrollTop: targetOffset - 70
        }, 1000);
    }

    var hash = window.location.hash;

    if (hash && $(hash).length) {
        scrollToSection(hash);
    }

    $('.js-scrollLink').on('click', function (e) {
        e.preventDefault();
        var target = $(this).attr('href');
        var targetOffset = $(target).offset().top;
        $('html, body').animate({
            scrollTop: targetOffset - 50
        }, 750);
    });
});