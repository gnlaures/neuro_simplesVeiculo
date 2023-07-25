$(document).ready(function() {
    function checkScroll() {
        var scrollAmount = $(window).scrollTop();
        var lNav = $('.l-nav');

        if (scrollAmount > 0) {
            lNav.addClass('js-scrolled');
        } else {
            lNav.removeClass('js-scrolled');
        }
    }
    $(window).on('scroll load', function() {
        checkScroll();
    });
});

$('.l-nav__hamburguer .c-hamburguer').on('click', function() {
    $('.l-navMobile').addClass('is-active');
    $('.l-navMobile .c-hamburguer').addClass('is-active');
})
$('.l-navMobile .c-hamburguer').on('click', function() {
    $('.l-navMobile').removeClass('is-active');
    $('.l-nav__hamburguer .c-hamburguer').removeClass('is-active');
})
$('.js-closeNavMobile').on('click', function() {
    $('.l-navMobile').removeClass('is-active');
    $('.l-nav__hamburguer .c-hamburguer').removeClass('is-active');
    $('.l-navMobile .c-hamburguer').addClass('is-active');
});