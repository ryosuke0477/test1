<?php get_header(); ?>

<div class="firstview styles-firstview">
    <div class="firstview__content">
        <h1 class="firstview__catchcopy">Styles一覧</h1>
        <p class="firstview__ss-txt">Styles List</p>
    </div>
</div>

<div class="styles">
    <div class="styles-wrap">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="styles-wrap__item">
                    <?php the_post_thumbnail(); ?>
                </a>
        <?php endwhile;
        endif; ?>
    </div>
</div>

<?php get_footer(); ?>