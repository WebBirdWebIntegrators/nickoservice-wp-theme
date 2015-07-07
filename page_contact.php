<?php
	//Template Name: Contact
?>

<?php get_header(); ?>

<div id="body">
	<div class="b1">
		<div class="cntr">
			<div class="content">
				<?php if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('<p id="breadcrumbs">','</p>');
				} ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="post contact" id="post-<?php the_ID(); ?>">
					<h1><?php the_title(); ?></h1>	
					<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
					<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					<?php get_template_part( 'templates-parts/acf-gallery' ) ?>
				</div>
				<?php endwhile; endif; ?>
				<?php edit_post_link( __('Edit this entry', 'eagle') , '<div class="post-edit">', '</div>'); ?>
			</div>
			<?php if( get_field('field_552fb0b78c6c1') === 'disabled' ) { ?>
			<?php } else { ?>
				<div class="sidebar light">
					<?php gravity_form(
						6, 
						$display_title = true, 
						$display_description = true, 
						$display_inactive = false, 
						$field_values = null, 
						$ajax = true, 
						$tabindex = 1 ); 
					?>
				</div>
			<?php } ?>
		</div>
	</div>
	
	<div class="b2">
		<div class="cntr">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2496.706206936523!2d4.5128563999999995!3d51.26131849999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c40787ef50d21d%3A0xf1fab62d7812202!2sWezelsebaan+4%2C+2900+Schoten!5e0!3m2!1snl!2sbe!4v1427434445991" width="600" height="400" frameborder="0" style="border:0"></iframe>
		</div>
	</div>
	
</div>

<?php get_footer(); ?>