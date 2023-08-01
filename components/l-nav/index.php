<nav class="l-nav">
    <div class="l-nav__brand">
        <?php
        $cBrand = array("modifiers" => "", "style" => "", "href" => "home");
        include('components/c-brand/index.php');
        ?>
    </div>
    <div class="l-nav__hero">
        <div class="l-nav__menu">
            <ul>
                <li><a href="#sistema" class="js-scrollLink">Sistema Para Lojas de Veículo</a></li>
                <li><a href="#sites" class="js-scrollLink">Sites Para Lojas de Veículo</a></li>
                <li><a href="#plans" class="js-scrollLink">Planos e Preços</a></li>
            </ul>
        </div>
        <div class="c-spacer --v --a"></div>
        <div class="l-nav__cta">
            <a href="#" class="c-btn --primary --stroke --l">
                <div class="c-btn__hero">
                    <div class="c-btn__caption">Login</div>
                </div>
            </a>
            <a href="#" class="c-btn --primary --l">
                <div class="c-btn__hero">
                    <div class="c-btn__caption">Cadastre-se</div>
                </div>
            </a>
        </div>
        <div class="c-spacer --v --b"></div>
        <div class="l-nav__hamburguer">
            <?php $cHamburguer = array('modifiers' => '');
            include('components/c-hamburguer/index.php'); ?>
        </div>
    </div>
</nav>

<div class="l-navMobile">
    <div class="l-navMobile__mask js-closeNavMobile"></div>
    <div class="l-navMobile__content --right">
        <?php $cHamburguer = array('modifiers' => 'is-active --white');
        include('components/c-hamburguer/index.php'); ?>
        <div class="l-navMobile__content__hero">
            <div class="l-navMobile__widget --sitemap">
                <?php include('components/c-sitemap/index.php');?>
            </div>
        </div>
    </div>
</div>