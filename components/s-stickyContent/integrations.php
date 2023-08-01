<section class="s-stickyContent s-integrations" id="sistema">
    <div class="u-container">
        <div class="s-stickyContent__col --infos">
            <div class="c-defaultContentStyle">
                <h3 class="subtitle">integrações com marketplaces</h3>
                <br>
                <h2>Integração dos veículos com os principais portais do Brasil</h2>
                <br>
                <p>Economize tempo e esforço ao integrar seus veículos cadastrados com os principais portais automotivos do Brasil, como Meu Carro Novo, iCarros, WebMotors, Só Carrão, entre outros. Além de famosos portais de vendas, como Mercado Livre e OLX.</p>
            </div>
            <?php include('components/c-listBrands/index.php'); ?>
            <?php $cCallToAction = array(
                'modifiers' => '',
                'link' => '#plans',
                'link_modifiers' => 'js-scrollLink"',
                'caption' => 'Conheca os Planos',
            );
            include('components/c-callToAction/index.php'); ?>
        </div>
        <div class="s-stickyContent__col --cards">
            <ul>
                <li>
                    <?php $cCardIcon = array(
                        'modifiers' => 'u-noPointerEvents',
                        'content' => array(
                            'icon' => 'media/icons/icon_caretDouble.svg',
                            'title' => 'Economia de tempo e esforço',
                            'text' => 'Não é mais necessário cadastrar manualmente os veículos em cada portal, o que resulta em economia de tempo e esforço consideráveis.',
                        ),
                        'link' => array(
                            'href' => '#',
                            'target' => '_self',
                        ),
                    );
                    include('components/c-cardIcon/index.php'); ?>
                </li>
                <li>
                    <?php $cCardIcon = array(
                        'modifiers' => 'u-noPointerEvents',
                        'content' => array(
                            'icon' => 'media/icons/icon_caretDouble.svg',
                            'title' => 'Ampla exposição dos veículos',
                            'text' => 'Obtenha maior visibilidade para seus veículos, alcançando um público mais amplo através dos principais portais automotivos do Brasil.',
                        ),
                        'link' => array(
                            'href' => '#',
                            'target' => '_self',
                        ),
                    );
                    include('components/c-cardIcon/index.php'); ?>
                </li>
                <li>
                    <?php $cCardIcon = array(
                        'modifiers' => 'u-noPointerEvents',
                        'content' => array(
                            'icon' => 'media/icons/icon_caretDouble.svg',
                            'title' => 'Atualizações rápidas e práticas',
                            'text' => 'Mantenha as informações dos veículos atualizadas de forma consistente, com atualizações rápidas e práticas no sistema que refletem nos portais.',
                        ),
                        'link' => array(
                            'href' => '#',
                            'target' => '_self',
                        ),
                    );
                    include('components/c-cardIcon/index.php'); ?>
                </li>
                <li>
                    <?php $cCardIcon = array(
                        'modifiers' => 'u-noPointerEvents',
                        'content' => array(
                            'icon' => 'media/icons/icon_caretDouble.svg',
                            'title' => 'Fácil gerenciamento das publicações',
                            'text' => 'Gerencie suas publicações de forma fácil e rápida, podendo remover os veículos dos portais assim que forem vendidos.',
                        ),
                        'link' => array(
                            'href' => '#',
                            'target' => '_self',
                        ),
                    );
                    include('components/c-cardIcon/index.php'); ?>
                </li>
                <li>
                    <?php $cCardIcon = array(
                        'modifiers' => 'u-noPointerEvents',
                        'content' => array(
                            'icon' => 'media/icons/icon_caretDouble.svg',
                            'title' => 'Integração com portais regionais',
                            'text' => 'Além dos principais portais automotivos, o sistema também oferece integração com portais regionais. Essa funcionalidade permite a divulgação dos veículos em portais específicos de determinadas regiões, alcançando o público da sua região.',
                        ),
                        'link' => array(
                            'href' => '#',
                            'target' => '_self',
                        ),
                    );
                    include('components/c-cardIcon/index.php'); ?>
                </li>


                <li>
                    <?php $cCardIcon = array(
                        'modifiers' => 'u-noPointerEvents',
                        'content' => array(
                            'icon' => 'media/icons/icon_caretDouble.svg',
                            'title' => 'Segmentação do público-alvo',
                            'text' => 'Segmentação do público-alvo de acordo com a sua localização geográfica. Isso aumenta as chances de venda, ao atingir compradores mais propensos a se interessar por veículos da sua região.',
                        ),
                        'link' => array(
                            'href' => '#',
                            'target' => '_self',
                        ),
                    );
                    include('components/c-cardIcon/index.php'); ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="c-shapeDivider">
        <img src="media/shapeDividers/shape_3.svg">
    </div>
</section>