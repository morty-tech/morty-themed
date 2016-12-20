<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		if ( is_sticky() && is_home() ) :
			echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
		endif;
	?>
	<header class="entry-header">
		<?php
			if ( 'post' === get_post_type() ) :
				echo '<div class="entry-meta">';
					if ( is_single() ) :
						twentyseventeen_posted_on();
					else :
						echo twentyseventeen_time_link();
						twentyseventeen_edit_link();
					endif;
				echo '</div><!-- .entry-meta -->';
			endif;

			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
		?>
	</header><!-- .entry-header -->

	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
			</a>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
				get_the_title()
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( is_single() ) : ?>

		<div class="entry-supplements">
			<div class="entry-supplemental-section entry-supplemental-section__no-border">
				<div class="supplemental-heading">Read More About..</div>

				<?php echo get_the_tag_list('<ul class="tags-list"><li>','</li><li>','</li></ul>'); ?>

			</div>

			<div class="entry-supplemental-section">
					<div class="supplemental-heading">Share The Love!</div>
					<ul class="button-list">
						<li><a
							href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url( get_permalink() ); ?>"
							target="_blank"
							class="btn btn-primary-outline"><i class="fa fa-facebook"></i> Facebook</a></li>
						<li><a
							href="https://twitter.com/intent/tweet?text=<?php echo esc_url( the_title() ); ?>&url=<?php echo esc_url( get_permalink() ); ?>&via=HiMorty"
							target="_blank"
							class="btn btn-primary-outline"><i class="fa fa-twitter"></i> Twitter</a></li>
						<li><a
							href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo esc_url( get_permalink() ); ?>&amp;title=<?php echo esc_url( the_title() ); ?>&amp;summary=<?php echo esc_url( get_permalink() ); ?>"
							target="_blank"
							class="btn btn-primary-outline"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
						<li><a
							href="mailto:?subject=<?php echo esc_url( the_title() ); ?>&amp;body=<?php echo esc_url( get_permalink() ); ?>"
							class="btn btn-primary-outline"><i class="fa fa-envelope"></i> Email</a></li>
					</ul>
			</div>

			<?php
			$categories = get_the_category();
			$category_id = count($categories) > 0 ? $categories[0]->cat_ID : null;
			$recent_posts = get_posts( array(
				'posts_per_page'      => 3,
				'post_status'         => 'publish',
				'exclude'							=> get_the_ID(),
				'category' 						=> $category_id
			));

			echo '<div class="entry-supplemental-section"><div class="items"><div class="items-heading">You might also like..</div><div class="items-row">';

			foreach ( $recent_posts as $post ) : setup_postdata( $post );
				get_template_part( 'template-parts/post/content-card-small', get_post_format($post) );
			endforeach;
			wp_reset_postdata();

			echo '</div></div></div>';
			?>

		</div>

	<?php endif; ?>

</article><!-- #post-## -->
