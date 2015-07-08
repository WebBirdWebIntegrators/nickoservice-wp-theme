<?php get_header(); ?>

<div id="body">
	<div class="b1">
		<div class="cntr">
			<div class="content archive">
				<?php if ( function_exists('yoast_breadcrumb') ) {
					if( is_front_page() ) {
						yoast_breadcrumb('<p id="breadcrumbs" style="display:none">','</p>');
					} else {
						yoast_breadcrumb('<p id="breadcrumbs">','</p>');
					}
				} ?>
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<div <?php post_class() ?>>
							<?php if ( has_post_thumbnail() ) : ?>
								<div class="featured-image">
									<a href="<?php echo get_the_permalink(); ?>">
										<?php the_post_thumbnail('thumbnail'); ?>
									</a>
								</div>
							<?php endif; ?>
							<div class="content">
								<h2>
									<a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
									</a>
								</h2>
								<div class="date-author">
									<?php the_time('l d F Y') ?>
								</div>
								<?php the_excerpt(); ?>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<?php if( get_field('field_552fb0b78c6c1') === 'disabled' ) { ?>
			<?php } else { ?>
				<div class="sidebar">
					<?php dynamic_sidebar( 'sidebar5' ); ?>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
