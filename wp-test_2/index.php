<?php get_header(); ?>
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
                            <?php the_title(); ?>
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
        <?php
        $posts = new WP_Query(
            array(
                'post_type' => 'styles',
                'posts_per_page' => 6
            )
        );
        if (have_posts()) : while ($posts->have_posts()) : $posts->the_post();
        ?>
                <!-- サブループ開始 -->
                <a href="<?php the_permalink(); ?>" class="styles-wrap__item">
                    <?php the_post_thumbnail(); ?>
                </a>
        <?php endwhile;
        endif; ?>
    </div>
    <a href="<?php echo get_post_type_archive_link('styles'); ?>" class="styles-btn">Styles一覧ページへ</a>
</div>

<div class="about">
    <div class="about__inner">
        <div class="about__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/about.png" alt="">
        </div>
        <div class="about__content">
            <p class="about__content-subttl">Make your World</p>
            <h2 class="about__content-ttl">個性が出せる<br>世界に</h2>
            <p class="about__content-txt"><span class="new-line">ここにはAboutのテキストが入る予定です。ここにはAboutのテキストが入る予定です。ここにはAboutのテキストが入る予定です。ここにはAboutのテキストが入る予定です。</span>ここにはAboutのテキストが入る予定です。ここにはAboutのテキストが入る予定です。</p>
            <a href="<?php echo home_url("about"); ?>" class="about-btn">Aboutページへ</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>