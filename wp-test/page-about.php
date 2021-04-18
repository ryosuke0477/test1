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

<div class="about-firstview">
    <div class="about-firstview__img">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about.png" alt="">
    </div>
    <div class="about-firstview__content">
        <h2 class="about-firstview__content-ttl"><?php the_title(); ?></h2>
        <p>Tecoolの簡単な説明文章がここにはたくさん入る予定です。Tecoolの簡単な説明文章がここにはたくさん入る予定です。Tecoolの簡単な説明文章がここにはたくさん入る予定です。Tecoolの簡単な説明文章がここにはたくさん入る予定です。Tecoolの簡単な説明文章がここにはたくさん入る予定です。</p>
        <p class="about-firstview__content-txt">since2000</p>
    </div>
</div>

<div class="about-inner">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h2 class="about-inner__ttl"><?php the_title(); ?></h2>
            <div class="about-inner__item">
                <div class="about-inner__item-txt">
                    <?php the_content(); ?>
                </div>
                <div class="about-inner__item-img">
                    <?php the_post_thumbnail(); ?>
                </div>
            </div>
    <?php endwhile;
    endif; ?>
</div>



<?php get_footer(); ?>