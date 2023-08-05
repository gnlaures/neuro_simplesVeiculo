const sFullPlansAndPricing = document.querySelectorAll('.c-fullTablePlansAndPricing__content__col__title');

let sFullPlansAndPricing__maxHeight = 0;

sFullPlansAndPricing.forEach(div => {
    const height = div.clientHeight;
    if (height > sFullPlansAndPricing__maxHeight) {
        sFullPlansAndPricing__maxHeight = height;
    }
});

$('.c-fullTablePlansAndPricing__content__col__title').css('min-height', sFullPlansAndPricing__maxHeight);
$('.c-fullTablePlansAndPricing__aside').css('padding-top', sFullPlansAndPricing__maxHeight);