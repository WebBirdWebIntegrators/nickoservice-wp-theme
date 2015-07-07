<?php ?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,700italic,800italic,400,300,700,800' rel='stylesheet' type='text/css'>
	
	<!-- Start Favicon -->
	<?php if( get_field('field_552f91819f538', 'option') ) { ?>
		<link rel="shortcut icon" href="<?php echo get_field('field_552f91819f538', 'option'); ?>" type="image/x-icon">
		<link rel="icon" href="<?php echo get_field('field_552f91819f538', 'option'); ?>" type="image/x-icon">
	<?php } else { ?>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon-webbird.ico" type="image/x-icon">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon-webbird.ico" type="image/x-icon">
	<?php } ?>
	<!-- End Favicon -->
	
	<!-- Google Site Verification -->
	<?php if( get_field('wb_54fc5f58c3898', 'option') ) :
		$google_html_tag_id = get_field('wb_54fc5f58c3898', 'option');
		echo '<meta name="google-site-verification" content="' . $google_html_tag_id . '" />';
	endif; ?>
	
	<!-- Start Global Code -->
	<?php if( get_field('field_552fa3edb21a1', 'option') === 'active' ) :
		echo get_field('field_552fa43fb21a2', 'option');
	endif; ?>
	<!-- End Global Code -->
	
	<!-- Start Page Code -->
	<?php if( get_field('field_552fa3edb21a1') === 'active' ) :
		echo get_field('field_552fa43fb21a2');
	endif; ?>
	<!-- End Page Code -->
	
	<!-- Start Google Corporate Contacts Code -->
	<?php if( is_front_page() ) : ?>
		<?php the_field('field_552fa9010a4f8', 'option'); ?>
	<?php endif; ?>
	<!-- End Google Corporate Contacts Code -->
	
	<?php wp_head(); ?>	
</head>

<body <?php body_class(); ?>>

<div id="header">
	
	<div class="hb1">
		<div class="bp1">
				<script type="text/javascript">
				    jQuery(function(){
				      jQuery("#toggle-nav").click(function () {
					  	jQuery("#toggle-nav").toggleClass("active");
				        jQuery("#mnav").slideToggle("#mnav");
				        jQuery("#fnav").slideToggle("#fnav");
				      });
				      jQuery("#toggle-contact").click(function () {
					  	jQuery("#toggle-contact").toggleClass("active");
				        jQuery("#contact").slideToggle("#contact");
				      });
				      jQuery("#toggle-search").click(function () {
					  	jQuery("#toggle-search").toggleClass("active");
				        jQuery("#search").slideToggle("#search");
				      });
				    });
				</script>
				<nav>
					<div class="nav-bar">
						<ul>
							<li>
								<i class="fa fa-bars" id="toggle-nav"></i>
							</li>
							<li>
								<div class="site-name">
									<a href="<?php echo home_url(); ?>">
										<?php bloginfo( 'name' ); ?>
									</a>
								</div>
							</li>
							<li>
								<i class="fa fa-phone" id="toggle-contact"></i>
								<i class="fa fa-search" id="toggle-search"></i>
							</li>
						</ul>
					</div>
					<div class="contact" id="contact">
						<ul>
							<?php if (get_field('field_548edd668ebcb', 'option') == 'yes') { ?>
								<?php if( get_field('field_545ceae654114','option') ): ?>
									<li class="phone">
										<a href="tel:<?php echo str_replace( ' ', '', get_field('field_545ceae654114','option') ) ?>" onclick="ga('send','event','contact','click','phone',0);"><?php _e('Bel', 'eagle') ?></a>
									</li>
								<?php endif; ?>
							<?php } elseif (get_field('field_548edd668ebcb', 'option') == 'no') { ?>
								<?php if( get_field('field_545c925d920fb','option') ): ?>
									<li class="phone">
										<a href="tel:<?php echo str_replace( ' ', '', get_field('field_545c925d920fb','option') ) ?>" onclick="ga('send','event','contact','click','phone',0);"><?php _e('Bel', 'eagle') ?></a>
									</li>
								<?php endif; ?>
							<?php } ?>
							
							<!-- Start mobile phone number -->
							<?php if( get_field('field_545ceae654114','option') ): ?>
								<?php if (get_field('field_548ede8895396', 'option') == 'yes') : ?>
									<li class="sms">
										<a href="sms:<?php echo str_replace( ' ', '', get_field('field_545ceae654114','option') ) ?>"><?php _e('SMS', 'eagle'); ?></a>
									</li>
								<?php endif ?>
							<?php endif; ?>
							<!-- End mobile phone number -->
							
							<?php if( get_field('field_545c927a920fc','option') ): ?>
								<li class="email">
									<a href="mailto:<?php the_field('field_545c927a920fc','option'); ?>" onclick="ga('send','event','contact','click','email',0);"><?php _e('Email', ''); ?></a>	
								</li>
							<?php endif; ?>
							<li>
								<a href=" http://maps.google.com/maps?daddr=<?php echo str_replace( ' ', '%20', get_field('field_545c9204920f9','option') ); ?>,<?php echo str_replace( ' ', '%20', get_field('field_545c9234920fa','option') ); ?>"><?php _e('Route', 'eagle'); ?></a>
							</li>
						</ul>
						<div class="address">
							<ul>
								<?php if( get_field('field_545c91318d1d7','option') ): ?>
									<li><?php the_field('field_545c91318d1d7','option'); ?></li>
								<?php endif; ?>
								<?php if( get_field('field_545c9204920f9','option') ): ?>
									<li><?php the_field('field_545c9204920f9','option'); ?></li>
								<?php endif; ?>
								<?php if( get_field('field_545c9234920fa','option') ): ?>
									<li><?php the_field('field_545c9234920fa','option'); ?></li>
								<?php endif; ?>
							</ul>
						</div>
					</div>
					<div class="search" id="search">
						<?php get_search_form(); ?>	
					</div>
					<?php {
						$mnav = array(
							'theme_location'  => 'header-mnav',
							'menu'            => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'mnav',
							'menu_id'         => 'mnav',
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
						wp_nav_menu( $mnav ); }
					?>
					<?php {
						$fnav = array(
							'theme_location'  => 'header-fnav',
							'menu'            => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'fnav',
							'menu_id'         => 'fnav',
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
						wp_nav_menu( $fnav ); }
					?>
				</nav>
			</div>
		<div class="bp5">
			<div class="cntr">
				<ul>
					<li class="email">
						<i class="fa fa-envelope"></i><a href="mailto:<?php echo get_field('field_545c927a920fc', 'option'); ?>" onclick="ga('send','event','contact','click','email',0);"><?php echo get_field('field_545c927a920fc', 'option'); ?></a>
					</li>
					<li class="phone">
						<i class="fa fa-phone"></i><a href="tel:<?php echo str_replace( ' ', '', get_field('field_545c925d920fb','option') ) ?>" onclick="ga('send','event','contact','click','phone',0);"><?php echo get_field('field_545c925d920fb', 'option'); ?></a>
					</li>
					<li class="menu-secondary">
						<?php {
							$fnav = array(
								'theme_location'  => 'header-fnav',
								'menu'            => '',
								'container'       => '',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'fnav',
								'menu_id'         => 'fnav',
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
							wp_nav_menu( $fnav ); }
						?>
					</li>
					<li class="language">Language</li>
					<li class="social-media">
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
					</li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="hb2">
		<div class="bp1"></div>
		<div class="bp5">
			<div class="cntr">
				<div class="logo">
					<a href="<?php echo get_home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo-nicko-service.svg" alt="Nicko Service">
					</a>
				</div>
				<div class="nav">
					<?php {
					$header_mnav = array(
						'theme_location'  => 'header-mnav',
						'menu'            => 'header-mnav',
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
				</div>
				<div class="search">
					<i class="fa fa-search"></i>
				</div>
			</div>
		</div>
	</div>
	
	<?php if( get_field('field_552f9506a5452') === 'active') { ?>
		<div class="hb3">
		<div class="cntr" id="billboard">
			<?php if( have_rows('field_548fefb1006a4') ): ?>
				<ul class="slides">
				<?php while( have_rows('field_548fefb1006a4') ): the_row(); ?>
					<li>
						<div class="img">
							<?php
								if( get_sub_field('field_548fefd8006a5') ) :
									$get_image = get_sub_field('field_548fefd8006a5');
									$size = 'large';
									$alt = $get_image['alt'];
									$image = $get_image['sizes'][ $size ];
								endif;
							?>
							<img src="<?php if( get_sub_field('field_548fefd8006a5') ) : echo $image; endif; ?>" alt="<?php if( get_sub_field('field_548fefd8006a5') ) : echo $alt; endif; ?>"/>
						</div>
						<div class="content <?php if( is_front_page() ) : echo 'home'; endif; ?> ">
							<?php if( get_sub_field('field_5512d063cf8ad') ) { ?>
								<h2><?php echo get_sub_field('field_5512d063cf8ad'); ?></h2>
							<?php } ?>
							<?php if( get_sub_field('field_5512d073cf8ae') ) : ?>
								<?php echo get_sub_field('field_5512d073cf8ae'); ?>
							<?php endif ?>
							<?php echo do_shortcode('[webbird-call-to-action title="false" text="false"]'); ?>
						</div>
					</li>
				<?php endwhile; ?>
			</ul>
			<?php else : ?>
				<ul class="slides">
					<?php while( have_rows('field_548fefb1006a4', 'option') ): the_row(); ?>
						<li>
							<div class="img">
								<?php
									if( get_sub_field('field_548fefd8006a5', 'option') ) :
										$get_image = get_sub_field('field_548fefd8006a5', 'option');
										$size = 'large';
										$alt = $get_image['alt'];
										$image = $get_image['sizes'][ $size ];
									endif;
								?>
								<img src="<?php if( get_sub_field('field_548fefd8006a5', 'option') ) : echo $image; endif; ?>" alt="<?php if( get_sub_field('field_548fefd8006a5', 'option') ) : echo $alt; endif; ?>"/>
							</div>
							<div class="content">
								<?php if( get_sub_field('field_5512d063cf8ad', 'option') ) { ?>
									<h2><?php echo get_sub_field('field_5512d063cf8ad', 'option'); ?></h2>
								<?php } ?>
								<?php if( get_sub_field('field_5512d073cf8ae', 'option') ) : ?>
									<?php echo get_sub_field('field_5512d073cf8ae', 'option'); ?>
								<?php endif ?>
								<?php echo do_shortcode('[webbird-call-to-action]'); ?>
							</div>
						</li>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
<!--
			<script type="text/javascript">
				jQuery(window).load(function() {
					jQuery('#billboard').flexslider( {
						selector: 'ul.slides > li',
						animation: "slide",
						animationSpeed: 1000,
						slideshowSpeed: 3000,
						direction: "horizontal",
						animationLoop: true,
						controlNav: false,
						directionNav: false,
						touch: true,
						useCSS: true,
						prevText: '',
						nextText: '',
						slideshow: false,
						smoothHeight: true,
					} );
				} );
			</script>
-->
			
		</div>
	</div>
	<?php } ?>
	
	<?php if( have_rows('field_551485d420169') ): ?>
		<div class="hb4">
			<div class="cntr">
				<ul>
			    <?php while ( have_rows('field_551485d420169') ) : the_row(); ?>
			        <li>
			        	<a href="<?php echo get_sub_field('field_5514865c2016d'); ?>" class="link">
				        	<?php
								$get_image = get_sub_field('field_551485fe2016a');
								$size = 'large';
								$alt = $get_image['alt'];
								$image = $get_image['sizes'][ $size ];
							?>
							<img src="<?php echo $image; ?>" alt="<?php echo $alt; ?>"/>
							<h3>
								<?php echo get_sub_field('field_5514861b2016b'); ?>
							</h3>
			        	</a>
						<div class="excerpt">
							<?php echo get_sub_field('field_5514863e2016c'); ?>
						</div>
					</li>
			    <?php endwhile; ?>
				</ul>
			</div>
		</div>
		<?php else :
		
		   echo '';
		
		endif;
	?>
</div>	

<div class="main">