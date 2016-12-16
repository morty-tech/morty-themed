<?php
/**
 * Template part for displaying posts with cards
 *
 * Used in Search Results and for Recent Posts in Front Page panels.
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
	<div class="card">
		<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
			<div class="post-thumbnail">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
				</a>
			</div><!-- .post-thumbnail -->
		<?php endif; ?>

		<header class="entry-header">
			<?php if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php
						echo twentyseventeen_time_link();
						twentyseventeen_edit_link();
					?>
				</div><!-- .entry-meta -->
			<?php elseif ( 'page' === get_post_type() && get_edit_post_link() ) : ?>
				<div class="entry-meta">
					<?php twentyseventeen_edit_link(); ?>
				</div><!-- .entry-meta -->
			<?php endif; ?>

			<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
	</div>
</article><!-- #post-## -->
