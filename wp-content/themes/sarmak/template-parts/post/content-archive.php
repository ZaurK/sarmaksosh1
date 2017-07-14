<?php
/**
 * Template part for displaying archive
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nazrangazprom
 */

?>

<article id="post-<?php the_ID(); ?>" class="news-block category category-news flexable-container">
    <div class="post-container sh-group" style="display:flex">
        <div class="post-left-side" style="display:flex;">
            <?php
                $image = "/wp-content/assets/header-mini.png.png";
                if (get_the_post_thumbnail_url($post->ID, 'thumbnail')) {
                    $image = get_the_post_thumbnail_url($post->ID, 'thumbnail');
                } ?>
            <div class="post-meta-thumb">
                <a href="<?php echo esc_url( get_permalink()); ?>">
                    <img src="<?php echo $image; ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                        alt="<?php get_the_title($post->ID); ?>" title="<?php get_the_title($post->ID); ?>">
                </a>
            </div>
        </div>
        <div class="post-right-side">
            <p class="datetime x-x" style="margin-bottom:5px;"><?php the_time('j F Y'); ?></p>
            <?php the_title( sprintf( '<h2 class="post-title x"><a href="%s" rel="bookmark" class="default-link text-decoration">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
            <div class="post-content" style="font-size:15px;">
                <?php echo the_excerpt(); ?>
            </div>
            <div class="block-footer" style="text-align: right;margin-right: 20px;">
                <a class="btn awesome-btn" href="<?php echo esc_url(get_permalink()); ?>"><span>Читать далее</span></a>
            </div>
        </div>
    </div>
</article>
