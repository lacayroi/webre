<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<?php
	if( get_post_type( get_the_ID() ) == "download" ) { 
?>
	<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single-download' );

			// End of the loop.
		endwhile;
	?>
<?php
	} else if( get_post_type( get_the_ID() ) == "post" ) {
		$categories = get_the_category();
		if($categories[0]->term_id == '4') {
?>
	
	<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single-services' );

			// End of the loop.
		endwhile;
	?>
	
<?php
	} else {
?>

	<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );

			// End of the loop.
		endwhile;
	?>
	
<?php
	}
	}
?>

<?php get_footer(); ?>