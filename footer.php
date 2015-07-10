<div id="footer">
	<?php
		if( is_page_template( 'page_no_sidebar_cta.php' ) || is_page_template( 'page_contact.php' ) ) { ?>

		<?php } else { ?>
			<div class="fb1">
				<div class="cntr">
					<div class="call-to-action">
						<div class="call-to-action-container">
							<div class="cartoon">
								<?php
									if( get_field('field_55144b5fb1562') ) {
										$get_image = get_field('field_55144b5fb1562');
										$size = 'large';
										$alt = $get_image['alt'];
										$image = $get_image['sizes'][ $size ];
									} else {
										$get_image = get_field('field_55144b5fb1562', 'option');
										$size = 'large';
										$alt = $get_image['alt'];
										$image = $get_image['sizes'][ $size ];
									}
								?>
								<img src="<?php echo $image ?>" alt="<?php echo $alt ?>"/>
							</div>
							<?php echo do_shortcode('[webbird-call-to-action]'); ?>
						</div>
					</div>
					<div class="col2">
						<div class="suppliers">
							<?php if( have_rows('field_5511940926130') ) : ?>
								<ul>
									<?php while ( have_rows('field_5511940926130') ) : the_row(); ?>
										<?php
											$get_image = get_sub_field('field_55147afd92f02');
											$size = 'large';
											$alt = $get_image['alt'];
											$image = $get_image['sizes'][ $size ];
										?>
										<li>
											<?php if( get_sub_field('field_55405f3d4e49e') ) :
												echo '<a href="' . get_sub_field('field_55405f3d4e49e') . '">';
											endif; ?>
												<img src="<?php echo $image ?>" alt="<?php echo $alt ?>"/>
											<?php if( get_sub_field('field_55405f3d4e49e') ) :
												echo '</a>';
											endif; ?>
										</li>
									<?php endwhile; ?>
								</ul>
								<?php else : ?>
								<ul>
									<?php while ( have_rows('field_5511940926130', 'option') ) : the_row(); ?>
										<?php
											$get_image = get_sub_field('field_55147afd92f02', 'option');
											$size = 'large';
											$alt = $get_image['alt'];
											$image = $get_image['sizes'][ $size ];
										?>
										<li>
											<?php if( get_sub_field('field_55405f3d4e49e') ) :
												echo '<a href="' . get_sub_field('field_55405f3d4e49e') . '">';
											endif; ?>
												<img src="<?php echo $image ?>" alt="<?php echo $alt ?>"/>
											<?php if( get_sub_field('field_55405f3d4e49e') ) :
												echo '</a>';
											endif; ?>
										</li>
									<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	<div class="fb2">
		<div class="cntr">
			<ul>
				<li class="intro">
					<h3><img src="<?php echo get_template_directory_uri(); ?>/img/logo-nicko-service-white.svg" alt="Nicko Service"></h3>
					<?php echo get_field('field_545c901a03dae', 'option'); ?>
				</li>
				<li class="aanbod">
					<h3>Aanbod</h3>
					<?php {
						$header_mnav = array(
							'theme_location'  => 'footer-nav',
							'menu'            => 'footer-nav',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => '',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => '',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => ''
						);
						wp_nav_menu( $header_mnav ); }
					?>
				</li>
				<li>
					<?php dynamic_sidebar( 'sidebar2' ); ?>
				</li>
				<li>
					<?php dynamic_sidebar( 'sidebar3' ); ?>
				</li>
			</ul>
		</div>
	</div>
	<div class="fb3">
		<div class="cntr">
			<div class="social-media">
				<ul class="social">

					<!-- Facebook button -->
					<?php if( get_field('wb_545c945b914e2','option') ) : ?>
						<li>
							<a href="<?php the_field('wb_545c945b914e2','option'); ?>" target="_blank">
								<i class="fa fa-facebook"></i>
							</a>
						</li>
					<?php endif; ?>

					<!-- Twitter button -->
					<?php if( get_field('wb_545c932b4c1e4','option') ) : ?>
						<li class="twitter">
							<a href="<?php the_field('wb_545c932b4c1e4','option'); ?>" target="_blank">
								<i class="fa fa-twitter"></i>
							</a>
						</li>
					<?php endif; ?>

					<!-- Linked button -->
					<?php if( get_field('wb_545c94a6c6bdc','option') ) : ?>
						<li>
							<a href="<?php the_field('wb_545c94a6c6bdc','option'); ?>" target="_blank">
								<i class="fa fa-linkedin"></i>
							</a>
						</li>
					<?php endif; ?>

					<!-- Google+ button -->
					<?php if( get_field('wb_54fc529402a0b','option') ): ?>
						<li class="twitter">
							<a href="https://plus.google.com/<?php the_field('wb_54fc529402a0b','option'); ?>" target="_blank" rel="publisher">
								<i class="fa fa-google-plus"></i>
							</a>
						</li>
					<?php endif; ?>

					<!-- Instagram button -->
					<?php if( get_field('wb_545c94bcc6bdd','option') ): ?>
						<li>
							<a href="<?php the_field('wb_545c94bcc6bdd','option'); ?>" target="_blank">
								<i class="fa fa-instagram"></i>
							</a>
						</li>
					<?php endif; ?>

					<!-- Pinterest button -->
					<?php if( get_field('wb_545c94ebc6bde','option') ): ?>
						<li>
							<a href="<?php the_field('wb_545c94ebc6bde','option'); ?>" target="_blank">
								<i class="fa fa-pinterest"></i>
							</a>
						</li>
					<?php endif; ?>

					<!-- YouTube button -->
					<?php if( get_field('wb_545c94fdc6bdf','option')  ): ?>
						<li>
							<a href="<?php the_field('wb_545c94fdc6bdf','option'); ?>" target="_blank">
								<i class="fa fa-youtube"></i>
							</a>
						</li>
					<?php endif; ?>

					<!-- Vimeo button -->
					<?php if( get_field('wb_545c9510c6be0','option') ): ?>
						<li>
							<a href="<?php the_field('wb_545c9510c6be0','option'); ?>" target="_blank">
								<i class="fa fa-vimeo-square"></i>
							</a>
						</li>
					<?php endif; ?>
				</ul>
			</div>
			<div class="copyrights">
				<?php {
					$all_rights_reserved = '&copy;' . date("Y") . ' - Alle rechten voorbehouden';
					$footer_copyrights = array(
						'theme_location'  => 'footer-copyrights',
						'menu'            => 'footer-copyrights',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => '',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => '',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s"><li>' . $all_rights_reserved . '</li>%3$s</ul>',
						'depth'           => 0,
						'walker'          => ''
					);
					wp_nav_menu( $footer_copyrights ); }
				?>
				<p class="webdesign"><a href="http://fushia.be" target="_blank">Webdesign by Fushia</a></p>
			</div>
		</div>
	</div>
</div>

<!-- Start Google Analytics implementation -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61264638-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- End Google Analytics implementation -->

</div>

<!-- Custom Body Code -->
<?php
	if( get_field('wbts__custom_body_code__code', 'option') ) {
		echo get_field('wbts__custom_body_code__code', 'option');
	}
?>

<?php wp_footer(); ?>

</body></html>
