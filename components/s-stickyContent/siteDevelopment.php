<section class="s-stickyContent --reverse s-siteDevelopment" id="sites">
    <div class="u-container">
        <div class="s-stickyContent__col --infos">
            <div class="c-defaultContentStyle">
                <h3 class="subtitle">criação de sites em segundos</h3>
                <br>
                <h2>Tenha um site completo e personalizado para a sua revenda de veículos</h2>
                <br>
                <p>Com a integração automática do estoque, um design responsivo e a inclusão de scripts personalizados, você terá uma apresentação profissional dos seus veículos, interação com os visitantes e a obtenção de dados valiosos para o sucesso do seu negócio.</p>
            </div>
            <?php $cCallToAction = array(
                'modifiers' => '',
                'link' => '#portfolio',
                'link_modifiers' => 'js-scrollLink"',
                'caption' => 'Veja alguns projetos',
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
                            'title' => 'Personalização dos modelos',
                            'text' => 'O sistema permite a personalização dos modelos de página do site. Você pode escolher entre diferentes modelos pré-definidos e personalizá-los de acordo com a identidade visual da sua empresa. Isso inclui a seleção de cores, layouts, logos entre outros elementos visuais.',
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
                            'title' => 'Site completo para a revenda de veículos',
                            'text' => 'Tenha um site completo dedicado à sua revenda de veículos. Esse site servirá como uma vitrine virtual para os seus veículos, proporcionando aos visitantes uma experiência de navegação agradável e informativa.',
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
                            'title' => 'Site totalmente responsivo',
                            'text' => 'O site criado pela Simples Veículo é totalmente responsivo, ou seja, se adapta automaticamente a diferentes dispositivos e tamanhos de tela, como desktops, laptops, tablets e smartphones. Isso garante uma experiência de navegação otimizada, independentemente do dispositivo utilizado pelos visitantes.',
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
                            'title' => 'Integração automática do estoque',
                            'text' => 'Tenha integração automática do estoque de veículos cadastrados no sistema com o site. Isso significa que todas as informações relevantes dos veículos, como fotos, descrições e preços, serão atualizadas automaticamente no site, sem a necessidade de atualização manual.',
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
                            'title' => 'Inclusão de scripts personalizados',
                            'text' => 'O módulo permite a inclusão de scripts personalizados no site, como Pixel do Facebook, Google Analytics, Tagmanager, simulador de financiamentos e outros. Isso possibilita a integração de ferramentas de análise, marketing e funcionalidades extras conforme suas necessidades específicas.',
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
                            'title' => 'Propostas e contatos direto do site',
                            'text' => 'O site permite que os visitantes façam propostas de compra diretamente através do site. Além disso, também disponibiliza uma forma de contato direto para que os interessados possam entrar em contato com a sua loja.',
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
</section>