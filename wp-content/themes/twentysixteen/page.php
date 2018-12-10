<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<?php
	$uri = edd_get_option( 'purchase_page', false );

	if( get_permalink( $uri ) == "http://localhost:81/webre/checkout/" ) { 
?>
	
	<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page-download' );

		endwhile;
		?>

<?php
	} else { 
?>

	<div class="col-sm-9 col-md-9 col-lg-9">

		<?php custom_breadcrumbs(); ?>

		<main id="main" class="site-main" role="main">
			<div class="page">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

				endwhile;
				?>
			</div>

		</main>

	</div>

	<?php get_sidebar(); ?>
<?php
	}
?>
<?php get_footer(); ?>
