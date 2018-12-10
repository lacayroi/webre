<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<?php
	if( get_post_type( get_the_ID() ) == "download" ) { 
?>

	<?php if ( have_posts() ) : ?>
		
		<header class="page-header text-center">
			<div class="container">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</div>
		</header>

		<div class="container">
			<div id="primary" class="content-area">
				<div class="download-grid">
					<?php
						// Start the Loop.
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'download' );

						// End the loop.
						endwhile;

						// Previous/next page navigation.
						if ( $wp_query->max_num_pages > 1 )  { hr_pagenavi(); };

					// If no content, include the "No posts found" template.
					else :
						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
				</div>
			</div>
		</div>

<?php
	} else if( get_post_type( get_the_ID() ) == "post" ) {
	$categories = get_the_category();
	if($categories[0]->term_id == '4') {
?>

		<?php if ( have_posts() ) : ?>
		
		<header class="page-header text-center">
			<div class="container">
				<?php custom_breadcrumbs(); ?>
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</div>
		</header>

		<div class="container">
			<div id="primary" class="content-area">
				<div class="download-grid">
					<?php
						// Start the Loop.
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'services' );

						// End the loop.
						endwhile;

						// Previous/next page navigation.
						if ( $wp_query->max_num_pages > 1 )  { hr_pagenavi(); };

					// If no content, include the "No posts found" template.
					else :
						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
				</div>
			</div>
		</div>
		<div class="site-blurbs" style="margin: 72px 0;border-top: 1px solid #e8e8e8;">
			<div class="container text-center">
				<header class="section-header">
					<h3 class="section-title">How it works?</h3>
					<p class="section-description">A simple, safe, and secure way to connect with our WordPress geniuses to get your work done.</p>
				</header>
				<div class="row">
					<div class="col-md-4">
						<div class="blurb">
							<i class="pe-7s-cart"></i>
							<h4>1. Order the services</h4>
							<p>Choose the services that you want our geniuses to help you with. If you have a specific question, simply send us an inquiry and we’d love to elaborate until you have confidence in the fact you can trust us.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="blurb">
							<i class="pe-7s-loop"></i>
							<h4>2. We will stand beside you</h4>
							<p>Our geniuses will complete the job within the agreed turnaround time, and continue working on the agreed upon number of revisions, because work more than likely will have to be revised until it’s perfect.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="blurb">
							<i class="pe-7s-like2"></i>
							<h4>3. Approve job</h4>
							<p>Once you're happy with the work, just approve of the job; then our geniuses will deliver all of the content so that all you have to do is sit back and appreciate it. It almost sounds too easy, but trust us, it isn't.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	<?php
		} else { 
	?>

		<?php if ( have_posts() ) : ?>
			
		<header class="page-header text-center">
			<div class="container">
				<?php custom_breadcrumbs(); ?>
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</div>
		</header>

		<div class="container">
			<div class="row row-eq-height">
				<div id="primary-wrap col-md-8">
					<div id="primary" class="content-area">
						<?php
							// Start the Loop.
							while ( have_posts() ) : the_post();

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', get_post_format() );

							// End the loop.
							endwhile;

							// Previous/next page navigation.
							if ( $wp_query->max_num_pages > 1 )  { hr_pagenavi(); };

						// If no content, include the "No posts found" template.
						else :
							get_template_part( 'template-parts/content', 'none' );

						endif;
						?>
					</div>
				</div>
				<div class="secondary-wrap col-md-4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>

	<?php
			}
		}
	?>

<?php get_footer(); ?>