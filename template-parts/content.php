<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package GoAyurveda
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

//enable excerpts
		if ( has_excerpt( $post->ID ) ) {
			echo '<div class="deck">';
			echo '<p>' . get_the_excerpt() . '</p>';
			echo '</div><!-- .deck -->';
		}
		//add featured image if existant
		if ( has_post_thumbnail() ) { ?>
			<figure class="featured-image">
				<a href="<?php echo esc_url(get_permalink()); ?>" rel="bookmark">
						<?php the_post_thumbnail(); ?>
					</a>
				</figure>

		<?php }

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php goayurveda_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content index-excerpt">
		<?php
		the_excerpt();

			//
			// wp_link_pages( array(
			// 	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'goayurveda' ),
			// 	'after'  => '</div>',
			// ) );
		?>
	</div><!-- .entry-content -->
<div class="continue-reading">
	<a href="<?php echo esc_url(get_permalink()); ?>" rel="bookmark">
		<?php
		printf(
			wp_kses( __( 'Read more %s', 'goayurveda' ), array( 'span' => array( 'class' => array() ) ) ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		);
		 ?>
	</a>
</div>

	<!-- <footer class="entry-footer">
		<?php goayurveda_entry_footer(); ?>
	</footer>--><!-- .entry-footer -->
</article><!-- #post-## -->
