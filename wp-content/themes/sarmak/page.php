<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php

$args = array(
	'depth'        => 0,
	'show_date'    => '',
	'date_format'  => get_option('date_format'),
	'child_of'     => 0,
	'exclude'      => '',
	'exclude_tree' => '',
	'include'      => '',
	'title_li'     => __('Pages'),
	'echo'         => 1,
	'authors'      => '',
	'sort_column'  => 'menu_order',
	'sort_order'   => 'ASC',
	'link_before'  => '',
	'link_after'   => '',
	'meta_key'     => '',
	'meta_value'   => '',
	'number'       => '',
	'offset'       => '',
	'walker'       => '',
	'menu_class'   => 'nav_list',
	'container_id' => 'nav_list_first',
	'theme_location' => 'secondary',
	'post_type'    => 'page', // из функции get_pages()
); 
?>

<hr>
<div class="container margin-bot48">

<div class="col-md-3"><?php echo wp_nav_menu($args) ?></div>

<div class="col-md-7">

    <div class="row">
	    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->
</div>
</div>
</div>
<div class="col-md-2">
	<?php 
        echo do_shortcode('[bvi text="Версия для слабовидящих"]');
    ?>
	<br>
	<a href="http://www.constitution.ru/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/img/4.jpg"></a><br><br>
	<a href="http://pravo.fso.gov.ru/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/img/5.jpg"></a><br><br>
	<a href="http://www.gosuslugi.ru/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/img/6.jpg"></a><br><br>
	<a href="http://минобрнауки.рф/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/img/7.jpg"></a><br><br>
	<a href="http://ege.edu.ru/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/img/8.jpg"></a><br><br>
	<a href="http://gia.edu.ru/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/img/9.jpg"></a><br><br>
	
	<a href="http://www.edu.ru/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/img/10.jpg"></a><br><br>
	<a href="http://странамолодых.рф/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/img/11.jpg"></a><br><br>
	<a href="http://персональныеданные.дети/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/img/12.jpg"></a><br><br>
	<a href="http://www.edukbr.ru/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/img/13.jpg"></a><br><br>
	<a href="http://www.edu07.ru/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/img/14.jpg"></a><br><br>
	
	<a href="http://www.kbrcde.ru/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/img/15.jpg"></a><br><br>
	<a href="http://www.olymp07.ru/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/img/16.jpg"></a><br><br>
	</div>	
    </div><!-- /.container -->
<?php get_footer();
