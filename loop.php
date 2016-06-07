<?php
	global $multipage;

	// Loop through posts
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
?>
	<section id="post-<?php the_ID(); ?>" <?php post_class( 'latest-post cf' ); ?>>
		<?php sds_featured_image(); ?>

		<section class="post-title-wrap cf <?php echo ( has_post_thumbnail() ) ? 'post-title-wrap-featured-image' : 'post-title-wrap-no-image'; ?>">
			<h1 class="post-title page-title"><?php the_title(); ?></h1>
			<p class="latest-post-date"><?php the_time( 'F j, Y' ); ?></p>
		</section>

		<?php the_content(); ?>

		<section class="clear"></section>

		<?php edit_post_link( __( 'Edit Post', 'epic' ) ); // Allow logged in users to edit ?>

		<?php if ( $multipage ) : ?>
			<section class="single-post-navigation single-post-pagination wp-link-pages">
				<?php wp_link_pages(); ?>
			</section>
		<?php endif; ?>
	</section>

	<section class="after-posts-widgets <?php echo ( is_active_sidebar( 'after-posts-sidebar' ) ) ? 'after-posts-widgets-active' : false; ?>">
		<?php sds_after_posts_sidebar(); ?>
	</section>

	<footer class="post-footer">
		<?php if ( $post->post_type !== 'attachment' ) : // Post Meta Data (tags, categories, etc...) ?>
			<section class="post-meta">
				<?php sds_post_meta(); ?>
			</section>
		<?php endif ?>

		<?php sds_single_post_navigation(); ?>
	</footer>
<?php
		endwhile;
	endif;
?>
