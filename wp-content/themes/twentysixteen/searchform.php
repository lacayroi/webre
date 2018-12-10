<?php
/**
 * Template for displaying search forms in Twenty Sixteen
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="sr-only">
		<span class="sr-only">Search for:</span>
	</label>
		<input type="search" class="form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentysixteen' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<input type="submit" class="sr-only" value="Search">
</form>

<!--<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="sr-only">
		<span class="sr-only">Search for:</span>
	</label>
	<input type="search" class="form-control" placeholder="Search …" value="" name="s">
<input type="submit" class="sr-only" value="Search">
</form>-->
