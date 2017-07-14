<?php
/**
 * Template part for displaying page content in news.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package 
 */

?>

<div class="col-md-4 col-sm-6 col-xs-12 ">



<article id="post-<?php the_ID(); ?>" class="<?php the_ID(); ?> newsblock post type-post status-publish format-standard has-post-thumbnail hentry category-hot_news">
    <div class="post-inner news-inner">
	<?php
                $image = "/wp-content/assets/header-mini.png";
                if (get_the_post_thumbnail_url($post->ID, 'large')) {
                    $image = get_the_post_thumbnail_url($post->ID, 'large');
                } ?>
        <div class="post-image div-primary text-center" style="background-color:#eee;">
            <div class="post-thumbnail_back backgrounded-post-image" style="background-image: url(<?php echo $image; ?>)"></div>								
        </div>
		<div class="news-body">
            <div class="news-body_inner" style="height:102px;">
				<?php the_title( sprintf( '<p class="post-title"><a href="%s" rel="bookmark" class="default-link text-decoration">', esc_url( get_permalink() ) ), '</a></p>' ); ?>
            <div class="entry-summary">
                <p class="datetime"><?php the_time('j F Y'); ?></p>
            </div>
            </div>       
        </div>
        
</article>
</div>


