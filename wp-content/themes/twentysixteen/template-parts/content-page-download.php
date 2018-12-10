<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<header class="pricing-hero page-header text-center">
	<div class="container">
		<?php custom_breadcrumbs(); ?>
		<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>		
	</div>
</header>

<div class="container">
	<div id="primary" class="content-area">
		<div class="page-content">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php
					the_content();
				?>
			</article><!-- #post-## -->
		</div>
	</div>
</div>
