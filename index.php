<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package GoAyurveda
 */

get_header(); ?>
<div class="content">
					
                <section class="main-column">
                    
    <?php
if (have_posts()) :
	while(have_posts()) :
			the_post();
				 ?>
				 <article class="slide">
			<h2><a href=" <?php the_permalink() ?>"><?php the_title(); ?></a></h2>

<p><?php the_content(); ?></p>
</article>  
<?php
endwhile;
endif;
		?>
  
           </section>  
				
    
	</div><!-- #content -->

<?php
get_sidebar();
get_footer(); ?>
