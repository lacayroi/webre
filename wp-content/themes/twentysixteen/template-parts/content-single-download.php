<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article class="main-item" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="download-header text-center">
		<div class="container">
			<?php the_title( '<h1 class="download-title" itemprop="name">', '</h1>' ); ?>
			<div class="download-description" itemprop="description"><?php the_excerpt(); ?></div>
		</div>
	</header>
	
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="download-details panel panel-default">
					<div class="panel-body">
						
						<div class="download-thumbnail">
							<?php echo get_the_post_thumbnail( $post_id, 'full' ); ?>
						</div>
						
						<div class="entry-content">
							<?php
								the_content();
							?>
						</div><!-- .entry-content -->
						
						<div class="rating" style="overflow: hidden;padding-top: 15px;">
							<?php if(function_exists("kk_star_ratings")) : echo kk_star_ratings($pid); endif; ?>
						</div>
						
						<?php if(has_tag()) { ?>
							<div class="tags">
								<i class="fa fa-tags" aria-hidden="true"></i><?php the_tags( '<strong>Từ khóa:</strong> ', ' , ', '<br />' ); ?> 
							</div>
						<?php } ?>
						
						<?php 
							$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
						?>
						<div id="crestashareiconincontent" class="cresta-share-icon first_style">
							<div class="sbutton crestaShadow facebook-cresta-share" id="facebook-cresta-c"><a rel="nofollow" href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" title="Share to Facebook" onclick="window.open(this.href,'targetWindow','toolbars=0,location=0,status=0,menubar=0,scrollbars=1,resizable=1,width=640,height=320,left=200,top=200');return false;"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
							<div class="sbutton crestaShadow googleplus-cresta-share" id="googleplus-cresta-c"><a rel="nofollow" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" title="Share to Google Plus" onclick="window.open(this.href,'targetWindow','toolbars=0,location=0,status=0,menubar=0,scrollbars=1,resizable=1,width=640,height=320,left=200,top=200');return false;"><i class="fa fa-google-plus" aria-hidden="true"></i></a></div>
							<div class="sbutton crestaShadow linkedin-cresta-share" id="linkedin-cresta-c"><a rel="nofollow" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>&amp;source=<?php echo get_site_url(); ?>" title="Share to LinkedIn" onclick="window.open(this.href,'targetWindow','toolbars=0,location=0,status=0,menubar=0,scrollbars=1,resizable=1,width=640,height=320,left=200,top=200');return false;"><i class="fa fa-linkedin" aria-hidden="true"></i></a></div>
							<div class="sbutton crestaShadow pinterest-cresta-share" id="pinterest-cresta-c"><a rel="nofollow" href="https://pinterest.com/pin/create/bookmarklet/?url=<?php the_permalink(); ?>&amp;media=<?php echo $image[0]; ?>&amp;description=<?php the_excerpt(); ?>" title="Share to Pinterest" onclick="window.open(this.href,'targetWindow','toolbars=0,location=0,status=0,menubar=0,scrollbars=1,resizable=1,width=640,height=320,left=200,top=200');return false;"><i class="fa fa-pinterest" aria-hidden="true"></i></a></div>
							<div class="sbutton crestaShadow print-cresta-share" id="print-cresta-c"><a rel="nofollow" href="#" title="Print this page" onclick="window.print();"><i class="fa fa-print" aria-hidden="true"></i></a></div>
							<div style="clear: both;"></div>
						</div>
							
						<div class="clearfix"></div>
						
						<div class="comment-article">
							<div id="fb-root"></div>
							<script>(function(d, s, id) {
							  var js, fjs = d.getElementsByTagName(s)[0];
							  if (d.getElementById(id)) return;
							  js = d.createElement(s); js.id = id;
							  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.1';
							  fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));</script>
							<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="5"></div>
						</div><!-- comment -->
						
					</div>
				</div>
			</div>
			
			<!-- widget -->
			<div class="col-md-4">
				<div class="row main-actions">
					<div class="col-sm-12 join-to-download">
						<div class="edd_download_buy_button">
							<?php echo edd_get_purchase_link( array( 'download_id' => get_the_ID() ) ); ?>
						</div>
					</div>
					<div class="col-sm-12 live-demo">
						<a class="btn btn-block btn-default btn-lg" href="<?php the_field ( 'edd_live_demo' ); ?>"><i class="fa fa-eye"></i> Live Preview</a>
					</div>
				</div>
				<?php if ( get_field ( 'edd_document' ) || get_field ( 'edd_support' ) ) : ?>
					<div class="secondary-button-group">
						<p><a href="<?php the_field ( 'edd_document' ); ?>" class="btn btn-lg btn-block btn-default"><i class="fa fa-comments"></i> Documentation</a></p>
						<p><a href="<?php the_field ( 'edd_support' ); ?>" class="btn btn-lg btn-block btn-default"><i class="fa fa-comments"></i> Get Support</a></p>
					</div>
				<?php endif; ?>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default download-meta">
					<ul class="list-group">
						<li class="list-group-item"><strong>Version</strong> <span class="pull-right"><?php the_field ( 'edd_version' ); ?></span></li>
						<li class="list-group-item"><strong>Latest Updated</strong> <span class="pull-right"><?php the_field ( 'edd_latest_updated' ); ?></span> </li>
						<li class="list-group-item"><strong>Requirements</strong> <span class="pull-right"><?php the_field ( 'edd_requirements' ); ?></span> </li>
						<li class="list-group-item"><strong>Columns</strong> <span class="pull-right"><?php the_field ( 'edd_columns' ); ?></span> </li>
						<li class="list-group-item"><strong>Layout</strong> <span class="pull-right"><?php the_field ( 'edd_layout' ); ?></span> </li>
						<?php
							$taxonomy = 'download_category'; 
							$terms = get_terms( $taxonomy );  
   
							foreach ( $terms as $term ) :  
								echo '<li class="list-group-item"><strong>Category</strong> <a class="pull-right"href="'. esc_attr( get_term_link( $term, $taxonomy ) ).'" title="'.$term->name.'">'.$term->name.'</a></li>';  
							endforeach;  
						?>
					</ul>
				</div>
			</div>
			<!-- end -->
			
	</div><!-- .container -->

</article><!-- #post-## -->

<div id="related-download" class="related-download">
	<div class="container">
		<h3>Related Products</h3>
			<div class="download-grid">
				<div class="row">
				<?php
					$categories = get_terms( array( 'taxonomy' => 'download_category' ) );
					foreach( $categories as $cat ) :
						$args=array(
							'post_type'			=>	'download',
							'showposts'     	=> 3,
							'post__not_in' 		=> array( $post->ID ),
							'tax_query'     	=> array(
								  array(
									  'taxonomy' => 'download_category',
									  'terms'    => array( $cat->term_id ),
									  'field'   => 'term_id'
								  
							 ),
							),
						);
						$r = new WP_Query($args);
						if ($r->have_posts()) {
						while ( $r->have_posts() ) : $r->the_post(); 
					?>
				
					<div class="col-sm-4">
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="download-thumbnail">
								<a href="<?php echo get_permalink( $post->ID ); ?>">
									<?php echo get_the_post_thumbnail( $post_id, 'full' ); ?>
									<?php if ( get_field ( 'edd_hot_badge' ) ) : ?><span class="label label-default pull-right hot">hot </span><?php endif; ?>
									<?php if ( get_field ( 'edd_free_badge' ) ) : ?><span class="label label-default pull-right free">free </span><?php endif; ?>
								</a>
							</div>

							<div class="download-info">
								<a href="<?php echo get_permalink( $post->ID ); ?>" rel="bookmark" class="download-title"><?php the_title(); ?></a>

								<p><a href="<?php the_field ( 'edd_live_demo' ); ?>" class="btn btn-default btn-sm btn-block"><i class="fa fa-eye"></i> Live Demo</a></p>
							</div>
						</article>
					</div>
				<?php
					endwhile;
					}
				wp_reset_query();
			endforeach; 
			?>		
			</div><!-- .row -->
		</div><!-- .download-grid -->
	</div>
</div>