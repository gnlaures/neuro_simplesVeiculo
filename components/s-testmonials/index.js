const sTestmonials__swiper = new Swiper('.s-testmonials__swiper', {
    // Optional parameters
    loop: true,
    slidesPerView: 1,
    // If we need pagination
    pagination: {
        el: '.s-testmonials__swiper .swiper-pagination',
        clickable: true,
    },
    // Navigation arrows
    navigation: {
        nextEl: '.s-testmonials__swiper .swiper-button-next',
        prevEl: '.s-testmonials__swiper .swiper-button-prev',
    },
    // resposnive
    breakpoints: {
        // when window width is >= 320px
        940: {
            slidesPerView: 2,
        },
    }
});









