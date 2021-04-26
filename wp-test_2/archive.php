<?php get_header(); ?>

<div class="firstview topics-firstview">
    <div class="firstview__content">
        <h1 class="firstview__catchcopy">特集一覧</h1>
        <p class="firstview__ss-txt">Topics List</p>
    </div>
</div>

<div class="topics topics-archive">
    <div class="topics-inner">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="topics__item">
                    <div class="topics__item-img">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="topics__item-content">
                        <h2 class="topics__item-ttl"><?php the_title(); ?></h2>
                    </div>
                </a>
        <?php endwhile;
        endif; ?>
    </div>
</div>


<?php get_footer(); ?>