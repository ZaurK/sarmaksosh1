<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<br><br>
<div class="container">
    <div class="row">
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
	<h5>Последние записи</h5>
	  <?php $category = get_the_category(); ?>
      <?php $cat_num = $category[0]->term_id; ?>
	 <?php
if ( have_posts() ) : // если имеются записи в блоге.
  query_posts('cat='.$cat_num);   // указываем ID рубрик, которые необходимо вывести.
  while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
?>
<span><?php  the_date(); ?><br>
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br><br>
</span>
<?php 
  endwhile;  // завершаем цикл.
endif;
/* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
wp_reset_query();                
?>
<a name="button" class="text-uppercase butn" href="/category/press/news">Все записи</a>
<br><br>
	</div>
	    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
<div class="wrap single">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/post/content', get_post_format() );
					
?>


<nav class="posts-navigation">
        <div class="row">
            <div class="col-md-6 col-xs-6" >
                            <div id="older-nav" class="nav-container prev_post text-left">
                                <div class="outter-icon" style="width:10%;float:left;"><?php previous_post_link('%link', '<i class="material-icons xxl">chevron_left</i>', TRUE  );  ?></div>
                                <div class="outter-title smooth" style="width:90%;float:left;"><?php previous_post_link('%link', '%title', TRUE  );  ?></div>
							</div>
            </div>

            <div class="col-md-6 col-xs-6" >                                       
                            <div id="newer-nav" class="nav-container next_post text-right">                               
								<div class="outter-icon" style="width:10%;float:right;"><?php next_post_link( '%link', '<i class="material-icons xxl">chevron_right</i>', TRUE );  ?></div>
								 <div class="outter-title smooth" style="width:90%;float:right;"><?php next_post_link( '%link', '%title', TRUE );  ?> </div>
                            </div>
            </div>
        </div>
</nav>				
				

<?php				 
				endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
	
	
	
</div><!-- .wrap -->
</div>
</div>
</div>
<?php get_footer();
