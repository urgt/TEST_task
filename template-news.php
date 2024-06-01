<?php

/*
Template Name: Новости
*/


get_header();?>

<div class="news_wrapper">
    <h1>Новости</h1>
<main class="container">
    <?php
    $news_query = new WP_Query(array(
        'post_type' => 'news',
        'posts_per_page' => 10, 
    ));

    if ($news_query->have_posts()) : 
        while ($news_query->have_posts()) : $news_query->the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                <?php endif; ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                
            </article>
        <?php endwhile;
        wp_reset_postdata(); 
    else : ?>
        <p><?php _e('Новостей не найдено.', 'test-task'); ?></p>
    <?php endif; ?>
</main>


</div>


<?php
get_footer();