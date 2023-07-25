$(document).ready(function() {
    $('.c-tabs__head a').on('click', function(e) {
        e.preventDefault();
        var target = $(this).attr('href');

        $('.c-tabs__head a').removeClass('is-active');
        $(this).addClass('is-active');

        $('.c-tabs__hero__content').addClass('u-dnone');
        $(target).removeClass('u-dnone');
    });
});