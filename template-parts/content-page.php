<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package GoAyurveda
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php
//add featured image if existant
if ( has_post_thumbnail() ) { ?>
	<figure class="featured-image page-image">
				<?php the_post_thumbnail('goayurveda-page-thumb'); ?>
		</figure>

<?php }
 ?>


</article><!-- #post-## -->
