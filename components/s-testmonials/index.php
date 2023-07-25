<section class="s-testmonials" id="testmonials">
    <div class="c-shapeDivider --top">
        <img src="media/shapeDividers/shape_5.svg">
    </div>
    <div class="u-container">
        <div class="c-defaultContentStyle --center">
            <h3 class="subtitle">Experiências reais de clientes satisfeitos</h3>
            <br>
            <h2>Descubra como nossa plataforma ajudou revendedores de veículos a alcançarem o sucesso</h2>
        </div>

        <div class="s-testmonials__swiper c-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <?php $cCardTestmonials = array('modifiers' => '');
                    include('components/c-cardTestmonials/index.php'); ?>
                </div>
                <div class="swiper-slide">
                    <?php $cCardTestmonials = array('modifiers' => '');
                    include('components/c-cardTestmonials/index.php'); ?>
                </div>
                <div class="swiper-slide">
                    <?php $cCardTestmonials = array('modifiers' => '');
                    include('components/c-cardTestmonials/index.php'); ?>
                </div>
                <div class="swiper-slide">
                    <?php $cCardTestmonials = array('modifiers' => '');
                    include('components/c-cardTestmonials/index.php'); ?>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <div class="c-shapeDivider --bottom">
        <img src="media/shapeDividers/shape_5.svg">
    </div>
</section>