<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<div class="entry-meta">
			<?php 
				$author_id=$post->post_author;
				echo the_author_meta( 'display_name' , $author_id ); 
			?> - <time class="updated" datetime="<?php the_time(get_option('date_format')); ?>"><?php the_time(get_option('date_format')); ?></time> - <i class="fa fa-comments"></i><a href="<?php the_permalink() ?>" data-disqus-identifier="134241 https://www.designwall.com/?p=134241"><?php echo get_comments_number($post->ID); ?> Comment</a>
		</div>
	</header>
	
	<div class="entry-thumbnail">
		<a href="<?php echo get_permalink( $post->ID ); ?>">
			<?php if (has_post_thumbnail( $post->ID ) ): ?>
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'cat-post-thumbnail' ); ?>
					<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
			<?php endif; ?>
		</a>
	</div>
	
	<div class="entry-content">
		<?php the_excerpt(); ?>
		<a href="<?php echo get_permalink( $post->ID ); ?>" class="more-link">Continue</a></p>
	</div>
</article><!-- #post-## -->