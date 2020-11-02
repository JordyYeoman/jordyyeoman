<?php
/**
 * Single post partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>


<a href="<?php echo the_permalink(); ?>" style="color:black;">
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="post-image-container">
	<?php echo get_the_post_thumbnail( $post->ID, 'large post-image bg-white' ); ?>
	</div>
		<div class="post-details-container">
		<div class="post-details">
		

			<div class="post-stats"><?php the_time('F j, Y'); ?></div>
			<?php the_title( '<h4 class="entry-title">', '</h4>' ); ?>

			

			<div class="entry-content">

		<!-- <//?php the_content(); ?> -->

				<?php
					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
							'after'  => '</div>',
						)
					);
					?>

			</div><!-- .entry-content -->
				<!--
				<footer class="entry-footer">

				<//?php understrap_entry_footer(); ?>

				</footer> .entry-footer -->
			
			</div>
			</div>
</article><!-- #post-## -->
</a>
