<?php get_header(); ?>

<div class="menu tab" id="menu">
    <span class="menu__line--top"></span>
    <span class="menu__line--middle"></span>
    <span class="menu__line--bottom"></span>
</div>

<nav class="header__nav--sp tab" id="header__nav--sp">
    <ul class="header-nav__ul--sp">
        <li class="header-nav__list--sp"><a href="archive.html">Topics</a></li>
        <li class="header-nav__list--sp"><a href="archive-styles.html">Style</a></li>
        <li class="header-nav__list--sp"><a href="page-about.html">About</a></li>
        <li class="header-nav__list--sp header__logo"><a href="page-about.html">Tecool</a></li>
    </ul>
</nav>
<div class="topics-firstview firstview">
    <div class="firstview__content">
        <h2 class="firstview__catchcopy">特集</h2>
        <p class="firstview__ss-txt">Topics</p>
        <a href="archive.html" class="firstview__btn">特集一覧ページへ</a>
    </div>
</div>


<main class="single-main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="container">
                <h1><?php the_title(); ?></h1>
                <?php the_post_thumbnail(); ?>
                <?php the_content(); ?>
            </div>
    <?php endwhile;
    endif; ?>
</main>




<?php get_footer(); ?>