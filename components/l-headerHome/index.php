<header class="l-headerHome" id="intro">
    <div class="l-headerHome__bgVideo">
        <video src="media/videos/header.webm" muted autoplay></video>
    </div>
    <div class="u-container">
        <div class="l-headerHome__call">
            <h1>Potencialize sua loja de veículos com a Simples Veículo!</h1>
            <p>Encontre o sistema perfeito para otimizar sua loja de veículos. Controle seu negócio de forma segura, prática e simples. Totalmente online, oferece o melhor custo-benefício, recursos avançados de segurança e inclui uma plataforma de treinamento exclusiva.</p>
            <?php $cCallToAction = array(
                'modifiers' => '',
                'link' => '#overview',
                'link_modifiers' => 'js-scrollLink',
                'caption' => 'Conheca as Funcionalidades',
            );
            include('components/c-callToAction/index.php'); ?>
        </div>
        <div class="l-headerHome__scroll">
            <a href="#overview" class="js-scrollLink">
                <?php include('media/img/scrollDown.svg');?>
            </a>
        </div>
    </div>
    <div class="c-shapeDivider">
        <img src="media/shapeDividers/shape_1.svg">
    </div>
</header>

