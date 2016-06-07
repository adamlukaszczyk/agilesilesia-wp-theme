<?php
	global $multipage;

	// Loop through posts
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
?>
	<section id="post-<?php the_ID(); ?>" <?php post_class( 'latest-post cf' ); ?>>
		<?php sds_featured_image(); ?>

		<?php the_content(); ?>

		<section class="clear"></section>

		<?php edit_post_link( __( 'Edit Page', 'epic' ) ); // Allow logged in users to edit ?>

		<?php if ( $multipage ) : ?>
			<section class="single-post-navigation single-post-pagination wp-link-pages">
				<?php wp_link_pages(); ?>
			</section>
		<?php endif; ?>
	</section>
<?php
		endwhile;
	endif;
?>