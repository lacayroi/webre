<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div class="site-hero">
		<div class="container">
			<h1 class="site-tagline">Welcome to DesignWall</h1>
			<p class="site-description">We are a WordPress development company devoted to develop professional WordPress themes and plugins. We also provide WordPress customization services and a collection of knowledge relating to WordPress: Learning Materials, Community, and Support.</p>
			<div class="site-cta-btn">
				<a href="#two" class="learn-more btn btn-lg btn-primary smooth-scroll">Learn More</a>
			</div>
			<section class="home text-center section-welcome section-inverse" style="">

			</section>
		</div>
	</div>
	
	<div class="site-blurbs" id="two">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-4">
					<div class="blurb">
						<a href="#"><i class="pe-7s-portfolio"></i></a>
						<h4>World-Class Quality Products</h4>
						<p class="blurb-desc">We’re craftsmen of amazing themes which are responsive and easy to use. Our plugins are used by professional WordPress developers throughout the world.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="blurb">
						<a href="#"><i class="pe-7s-tools"></i></a>
						<h4>Professional WordPress Services</h4>
						<p class="blurb-desc">Want to have a feature or function on your WordPress website but don't know where to begin? Take relax with your family and let us do the hard work for you.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="blurb">
						<a href="#"><i class="pe-7s-help2"></i></a>
						<h4>Reliable Support</h4>
						<p class="blurb-desc">We recognize that although the internet has a tremendous amount of resources, that that’s not the same thing as having a person who’s ready and willing to be of service.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- start themes -->
	<div class="section site-latest-download latest-themes" id="three">
		<div class="container">
			<div class="section-header">
				<h2 class="text-center section-title">WordPress Themes</h2>
				<p class="heading-byline text-center">Professional WordPress! templates covering a wide range of categories.
					<br> Visit our <a href="<?php echo site_url(); ?>/giao-dien/" title="wp products">Designwall! Showcase</a> for more.</p>
				<div class="closed-title"></div>
			</div>
			<div class="download-grid">
				<div class="row">
					<div class="owl-carousel-bk">
						<?php
							$args = array(
								'post_type' 		=>	'download',
								'posts_per_page' 	=>	6,
								'orderby '			=>	'ID',
								'order'				=>	'DESC'
							);
							$r = new WP_Query($args);
							if ($r->have_posts()) {
							while ( $r->have_posts() ) : $r->the_post(); 
						?>
							<!-- start loop -->
							<div class="item col-md-4">
								<article id="post-<?php the_ID(); ?>" class="type-download">
									<div class="download-thumbnail">
										<a href="<?php echo get_permalink( $post->ID ); ?>">
											<?php if (has_post_thumbnail( $post->ID ) ): ?>
												<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'download-post-thumbnail' ); ?>
													<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
											<?php endif; ?>
										</a>
										<?php if ( get_field ( 'edd_hot_badge' ) ) : ?><span class="label label-default pull-right hot">hot </span><?php endif; ?>
										<?php if ( get_field ( 'edd_free_badge' ) ) : ?><span class="label label-default pull-right free">free </span><?php endif; ?>
									</div>

									<div class="download-info">
										<a href="<?php echo get_permalink( $post->ID ); ?>" rel="bookmark" class="download-title"><?php the_title(); ?></a>

										<p><a href="<?php the_field ( 'edd_live_demo' ); ?>" class="btn btn-default btn-sm btn-block"><i class="fa fa-eye"></i> Live Demo</a></p>

									</div>
								</article>
							</div><!-- end loop -->
						<?php
							endwhile;
							}
						?>
					</div>
				</div>
			</div>

			<div class="row browse-more-product">
				<div class="col-md-4 col-md-offset-4"><a href="<?php echo site_url(); ?>/giao-dien/" class="btn btn-primary btn-block btn-lg">Browse More Themes</a></div>
			</div>
		</div>
	</div>
	<!-- end themes -->
	
	<!-- services -->
	<div class="section latest-services" id="four">
		<div class="container">
			<div class="section-header">
				<h2 class="text-center section-title">WordPress Services</h2>
			</div>
			<div class="download-grid">
				<div class="row">
					<div class="owl-carousel-bk">
						<?php
							$args = array(
								'post_type' 		=>	'post',
								'category__in' 		=> array( 4 ),
								'posts_per_page' 	=>	6,
								'orderby '			=>	'ID',
								'order'				=>	'DESC'
							);
							$r = new WP_Query($args);
							if ($r->have_posts()) {
							while ( $r->have_posts() ) : $r->the_post(); 
						?>
							<!-- start loop -->
							<div class="item col-md-4">
								<article id="post-<?php the_ID(); ?>" class="type-download">
									<div class="download-thumbnail">
										<a href="<?php echo get_permalink( $post->ID ); ?>">
											<?php if (has_post_thumbnail( $post->ID ) ): ?>
												<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'download-post-thumbnail' ); ?>
													<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
											<?php endif; ?>
										</a>
									</div>

									<div class="download-info">
										<a href="<?php echo get_permalink( $post->ID ); ?>" rel="bookmark" class="download-title"><?php the_title(); ?></a>

										<p><a href="<?php echo get_permalink( $post->ID ); ?>" class="btn btn-default btn-sm btn-block">Detail</a></p>

									</div>
								</article>
							</div><!-- end loop -->
						<?php
							endwhile;
							}
						?>
					</div>
				</div>
			</div>

			<div class="row browse-more-product">
				<div class="col-md-4 col-md-offset-4"><a href="<?php echo site_url(); ?>/dich-cu/" class="btn btn-primary btn-block btn-lg">Browse More Services</a></div>
			</div>
		</div>
	</div>
	<!-- end services -->
	
	<div id="dw-testimonials" class="section site-latest-download dw-testimonials">
		<div class="container">
			<div class="section-header">
				<h2 class="text-center section-title">Testimonials</h2>
				<p class="text-center section-intro"></p>
				<div class="closed-title"></div>
			</div>
			<div class="section-content testimonial-section">
				<div class="testimonial-image text-center">
					<div class="image-item active" data-quote="quote-1">
						<img src="https://www.designwall.com/wp-content/themes/dw-base/assets/img/testimonials/designbold-hungdinh.jpg" width="100" height="100">
					</div>
					<div class="image-item" data-quote="quote-2">
						<img src="https://www.designwall.com/wp-content/themes/dw-base/assets/img/testimonials/cloud-living-tung-tran-about-page.jpg" width="100" height="100">
					</div>
					<div class="image-item" data-quote="quote-3">
						<img src="https://www.designwall.com/wp-content/themes/dw-base/assets/img/testimonials/ben-johnson-square.jpg" width="100" height="100">
					</div>
					<div class="image-item" data-quote="quote-4">
						<img src="https://www.designwall.com/wp-content/themes/dw-base/assets/img/testimonials/trang-hannah-tanktop.jpg" width="100" height="100">
					</div>
				</div>
				<div class="testimonial-quote">
					<div class="quote-item text-center active" data-quote="quote-1">
						<p class="quote-text">Absolutely amazing customer support! The DesignWall team has always been very responsive and helpful to my tickets. Thanks a lot!</p>
						<strong>Hung Dinh - CEO of <a href="#">DesignBold</a></strong>
					</div>
					<div class="quote-item text-center" data-quote="quote-2">
						<p class="quote-text">I'm a big fan of the DesignWall team! Their themes are fast, responsive and visually beautiful. Customer support is always there when I need them too. Highly recommended!</p>
						<strong>Tung Tran - Founder of <a href="#">CloudLiving</a></strong>
					</div>
					<div class="quote-item text-center" data-quote="quote-3">
						<p class="quote-text">I'm soooo happy to finally have found DW Question & Answer after wasting time on dozen of mediocre plugins. It's just very good and has all the functionality that I need. </p>
						<strong>Ben Johnson</a> - CEO of <a href="#">WePC</a></strong>
					</div>
					<div class="quote-item text-center" data-quote="quote-4">
						<p class="quote-text">I can't be happier with the Wordpress migration service. It's a big technical challenge for someone like me but the DW team took load of my shoulder. They've done the job perfectly in less than 48 hours! </p>
						<strong>Hannah Do</a> - Blogger at <a href="#">TrangHannah.com</a></strong>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="site-cta">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="cta-content">
					<h2>Create Your WordPress Site Today</h2>
					<p class="lead">Get your site up and running in little to no time, with the premium DesignWall Theme for WordPress</p>
						<div class="site-cta-btn">
							<a href="<?php echo site_url(); ?>/pricing/" target="_blank" class="btn btn-sm btn-warning btn-shadow">Sign Up Today</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
