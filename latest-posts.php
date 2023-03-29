<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
);
$query = new WP_Query($args);
if ($query->have_posts()) :
    while ($query->have_posts()) :
        $query->the_post();
?>
<div class="post">
    <?php if (has_post_thumbnail()) : ?>
        <div class="post-thumbnail">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <?php the_post_thumbnail(); ?>
            </a>
        </div>
    <?php endif; ?>
    <div class="post-content">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="post-meta"><?php the_date(); ?></div>
        <div class="post-excerpt"><?php the_excerpt(); ?></div>
    </div>
</div>
<?php
    endwhile;
endif;
wp_reset_postdata();
?>