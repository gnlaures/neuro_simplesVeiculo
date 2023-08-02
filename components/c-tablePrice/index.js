$('.c-tablePrice__togglePrice span').on('click', function() {
    $('.js-c-tablePrice__togglePrice__month').removeClass('is-active');
    $('.js-c-tablePrice__togglePrice__year').removeClass('is-active');

    if ($(this).hasClass('js-c-tablePrice__togglePrice__month')) {
        $('.js-c-tablePrice__togglePrice__month').addClass('is-active');
    } else {
        $('.js-c-tablePrice__togglePrice__year').addClass('is-active');
    }
});