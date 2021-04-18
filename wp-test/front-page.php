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
<div class="firstview top-firstview">
    <div class="firstview__content top-firstview__content">
        <h1 class="firstview__catchcopy">呼び覚ませ</h1>
        <p class="firstview__ss-txt">2021 Spring & Summer</p>
    </div>
</div>


<div class="topics">
    <h2 class="topics-ttl">Topics</h2>
    <div class="topics-inner">
        <!-- メインループ開始 -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="topics__item">


                    <div class="topics__item-img">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="topics__item-content">
                        <h3 class="topics__item-ttl">
                            <?php $cat = get_the_category();
                            $cat = $cat[0]; {
                                echo $cat->cat_name;
                            } ?>
                        </h3>
                    </div>
                </a>
        <?php endwhile;
        endif; ?>
    </div>
</div>

<div class="styles">
    <h2 class="styles-ttl">Styles</h2>
    <div class="styles-wrap">
        <a href="single-styles.html" class="styles-wrap__item">
            <img src="img/styles-img1.png" alt="">
        </a>
        <a href="single-styles.html" class="styles-wrap__item">
            <img src="img/styles-img2.png" alt="">
        </a>
        <a href="single-styles.html" class="styles-wrap__item">
            <img src="img/styles-img3.png" alt="">
        </a>
        <a href="single-styles.html" class="styles-wrap__item">
            <img src="img/styles-img4.png" alt="">
        </a>
        <a href="single-styles.html" class="styles-wrap__item">
            <img src="img/styles-img5.png" alt="">
        </a>
        <a href="styles-single.html" class="styles-wrap__item">
            <img src="img/styles-img6.png" alt="">
        </a>
    </div>
    <a href="archive-styles.html" class="styles-btn">Styles一覧ページへ</a>
</div>

<div class="about">
    <div class="about__inner">
        <div class="about__img">
            <img src="img/about.png" alt="">
        </div>
        <div class="about__content">
            <p class="about__content-subttl">Make your World</p>
            <h2 class="about__content-ttl">個性が出せる<br>世界に</h2>
            <p class="about__content-txt"><span class="new-line">ここにはAboutのテキストが入る予定です。ここにはAboutのテキストが入る予定です。ここにはAboutのテキストが入る予定です。ここにはAboutのテキストが入る予定です。</span>ここにはAboutのテキストが入る予定です。ここにはAboutのテキストが入る予定です。</p>
            <a href="page-about.html" class="about-btn">Aboutページへ</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>