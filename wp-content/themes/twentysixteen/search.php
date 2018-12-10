<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div class="col-sm-9 col-md-9 col-lg-9">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
			</header>

			<?php

			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			if ( $wp_query->max_num_pages > 1 )  { hr_pagenavi(); };

		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
