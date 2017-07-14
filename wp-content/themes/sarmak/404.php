<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<br><br><br><br>
<div class="container">
  <div class="row">


			 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyseventeen' ); ?></h1>
				</header><!-- .page-header -->
				
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyseventeen' ); ?></p>
                  </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><?php get_search_form(); ?></div>
				

			
			

</div>
<br><br>
</div>
<?php get_footer();
