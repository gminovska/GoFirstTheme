

<?php
/**
 * Template name: Full width template
 */

get_header(); ?>
<div class="content">
    <!-- <div id="image-container">
				<img src="<?php bloginfo('template_url') ?>/img/herbs-spices.jpg" alt="Indian spices">

        </div>
					 -->
                <section class="full_width">
									<?php get_template_part( 'template-parts/content-page', get_post_format() ); ?>

    <?php
if (have_posts()) :
	while(have_posts()) :
			the_post();
				 ?>
				 <article class="slide">
			<!--<h2><a href=" <?php the_permalink() ?>"><?php the_title(); ?></a></h2>-->

<p><?php the_content(); ?></p>
</article>
<?php
endwhile;
endif;
		?>


                </section>

	</div><!-- #content -->

<?php

get_footer(); ?>
