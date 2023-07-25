<?php
    $siteConfig = [
        'company' => 'Simples Veiculo',
        'title' => 'Simpels Veiculo',
        'title_spacer' => ' | ',
        'keywords' => 'front end, boilerplate, css, html, js, scss, smacss, bem, gulp, node',
        'description' => 'Boilerplate Front-end',
        'base_folder' => 'boilerplate',
        'body_class' => '',
        'active_page' => 'pages/error.php',
        'author' => '@gnlaureano',
        'creator' => '@gnlaureano',
        'language' => 'pt-br',
        'publisher' => '@gnlaureano',
        'url' => 'https://www.urldosite.dominio/',
        'theme_color' => '#112c69',
        'mask_icon_color' => '#112c69',
        'tile_color' => '#112c69',
        'min_viewport_width' => '400',
        'scale_min' => '1',
        'scale_max' => '1.5',
        'scalable' => 'yes',
    ];

    $pageRender = [
        'local' => explode('/', $_SERVER['REQUEST_URI']),
        'public_html' => explode($siteConfig['base_folder'], $_SERVER['REQUEST_URI'])
    ];

    switch ($pageRender['local'][1]) {
        case '' :
        case 'home' :
            $siteConfig['active_page'] = 'pages/home.php';
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'Página Inicial';
            $siteConfig['body_class'] = 'p-home';
            break;

        // inner
        case 'about' :
            $siteConfig['active_page'] = 'pages/about.php';
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'Sobre';
            $siteConfig['body_class'] = 'p-inner p-about';
            break;
        case 'contact' :
            $siteConfig['active_page'] = 'pages/contact.php';
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'Sobre';
            $siteConfig['body_class'] = 'p-inner p-about';
            break;
        case 'plans' :
            $siteConfig['active_page'] = 'pages/plans.php';
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'Sobre';
            $siteConfig['body_class'] = 'p-inner p-about';
            break;
        case 'terms' :
            $siteConfig['active_page'] = 'pages/terms.php';
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'Sobre';
            $siteConfig['body_class'] = 'p-inner p-about';
            break;
        case 'blog' :
            $siteConfig['active_page'] = 'pages/blog.php';
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'Sobre';
            $siteConfig['body_class'] = 'p-inner p-about';
            break;
        case 'blogPost' :
            $siteConfig['active_page'] = 'pages/blogPost.php';
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'Sobre';
            $siteConfig['body_class'] = 'p-inner p-about';
            break;

        // 404
        default :
            $siteConfig['active_page'] = 'pages/error.php';
            $siteConfig['title'] = $siteConfig['title'].$siteConfig['title_spacer'].'Erro';
            $siteConfig['body_class'] = 'p-inner p-error';
            break;
    }
?>