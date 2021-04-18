<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WordPress テスト</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/reset.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Noto+Serif+JP:wght@500&family=Shippori+Mincho&display=swap" rel="stylesheet">
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <header class="header">
        <a href="<?php home_url(); ?>" class="header__logo">Tecool</a>
        <nav class="header-nav pc">
            <ul class="header-nav__ul">
                <li class="header-nav__list"><a href="archive.html">Topics</a></li>
                <li class="header-nav__list"><a href="archive-styles.html">Style</a></li>
                <li class="header-nav__list"><a href="<?php echo home_url("about"); ?>">About</a></li>
            </ul>
        </nav>
    </header>