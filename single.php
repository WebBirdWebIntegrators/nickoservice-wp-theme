<?php get_header(); ?>

<div id="body">
	<div class="b1">
		<div class="cntr">
			<div class="content">
				<?php if ( function_exists('yoast_breadcrumb') ) {
					if( is_front_page() ) {
						yoast_breadcrumb('<p id="breadcrumbs" style="display:none">','</p>');
					} else {
						yoast_breadcrumb('<p id="breadcrumbs">','</p>');
					}
				} ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<h1><?php the_title(); ?></h1>
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="featured-image">
							<?php the_post_thumbnail('large'); ?>
						</div>
					<?php endif; ?>

					<?php if ( get_field('wb_54fed95149291') ) : ?>
						<div class="introduction">
							<?php the_field('wb_54fed95149291'); ?>
						</div>
					<?php endif; ?>

					<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
					<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					<?php get_template_part( 'templates-parts/acf-gallery' ) ?>
					<?php comments_template(); ?>
				</div>
				<?php endwhile; endif; ?>
				<?php edit_post_link( __('Edit this entry', 'eagle') , '<div class="post-edit">', '</div>'); ?>
				<?php paginate_comments_links() ?>
			</div>
			<?php if( get_field('field_552fb0b78c6c1') === 'disabled' ) { ?>
			<?php } else { ?>
				<div class="sidebar">
					<?php dynamic_sidebar( 'sidebar1' ); ?>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
