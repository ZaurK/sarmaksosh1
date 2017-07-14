<?php
/**
 * The template for displaying about pages
 Template Name: About
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

<div class="container">
    
    <div class="row">
	    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">

            <div class="widget-body about">
                <aside  class="widget-area widget" role="complementary">
                    <ul class="list-option">
					<li class="page_item page-item-90"><a href="/about">О нас</a></li>
                        <?php
                            wp_list_pages( array(
                                'child_of' => 38,
                                'depth' => 8,
                                'title_li' => null,
								'sort_column' =>'menu_order'
                            ) );
                        ?>
                    </ul>
                </aside>
            </div>
      

		</div>
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">

		   
		   <?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		   
        </div>
    </div>
</div>

<?php get_footer();
