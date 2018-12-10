<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>			
		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container">
				<div class="footer-widgets">
					<div class="row">
						<div class="col-md-2 col-sm-6">
							<strong>Products</strong>
							<?php
								wp_nav_menu( array(
									'menu' 			=> 'products',
									'menu_class'    => 'list-unstyled',
								 ) );
							?>
						</div>
						<div class="col-md-2 col-sm-6">
							<strong>Support</strong>
							<?php
								wp_nav_menu( array(
									'menu' 			=> 'support',
									'menu_class'    => 'list-unstyled',
								 ) );
							?>
						</div>
						<div class="col-md-2 col-sm-6">
							<strong>Info</strong>
							<?php
								wp_nav_menu( array(
									'menu' 			=> 'info',
									'menu_class'    => 'list-unstyled',
								 ) );
							?>
						</div>
						<div class="col-md-2 col-sm-6">
							<strong>Our Network</strong>
							<?php
								wp_nav_menu( array(
									'menu' 			=> 'our-network',
									'menu_class'    => 'list-unstyled',
								 ) );
							?>
						</div>
						<div class="col-md-4 col-sm-12">
							<div class="subscribe-form subscribe-block">
								<strong>Subscribe for More</strong>
								<p class="form-description">By clicking Subscribe, you agree to our Terms, Data Policy and Cookie Policy. We won’t spam you.</p>
								<form novalidate="" target="_blank" class="validate" name="mc-embedded-subscribe-form" id="mc-embedded-subscribe-form" accept-charset="utf-8">
									<div class="input-group">
									<input type="text" placeholder="Your Email" id="email" name="email" value="" class="form-control placeholder" autocomplete="off">
									<input type="hidden" name="list" value="7kJdKIOdI7o3UKlNkqXlrg">
									<span class="input-group-btn">
										<button type="submit" class="btn btn-primary" id="mc-embedded-subscribe" name="subscribe">Subscribe</button>
									</span>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="site-info">
					<div class="col-md-6 col-sm-6 text-left">
						<ul class="list-unstyled footer-menu">
							<li><a href="https://www.designwall.com/terms/">Terms &amp; License</a></li>
							<li><a href="https://www.designwall.com/privacy-policy/">Privacy Policy</a></li>
						</ul>
						Copyright &copy; 2018 by <a href="https://www.designwall.com" rel="designer">DesignWall</a>. All Rights Reserved.
					</div>

					<div class="col-md-6 col-sm-6 text-right">
						<ul class="list-inline footer-social">
							<li><a href="https://www.facebook.com/" target="_blank" rel="nofollow"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></a></li>
							<li><a href="https://twitter.com/" target="_blank" rel="nofollow"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></a></li>
							<li><a href="https://plus.google.com/" target="_blank" rel="nofollow"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-google-plus fa-stack-1x fa-inverse"></i></span></a></li>
							<li><a href="https://www.youtube.com/user/" target="_blank" rel="nofollow"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-youtube fa-stack-1x fa-inverse"></i></span></a></li>
							<li><a href="https://dribbble.com/" target="_blank" rel="nofollow"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-dribbble fa-stack-1x fa-inverse"></i></span></a></li>
							<li><a href="https://github.com/" target="_blank" rel="nofollow"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-github fa-stack-1x fa-inverse"></i></span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer><!-- footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
