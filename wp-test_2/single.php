<?php get_header(); ?>

<div class="topics-firstview firstview">
    <div class="firstview__content">
        <h2 class="firstview__catchcopy">特集</h2>
        <p class="firstview__ss-txt">Topics</p>
        <a href="<?php echo get_category_link(16); ?>" class="firstview__btn">特集一覧ページへ</a>
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