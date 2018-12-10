<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div class="col-md-4 col-sm-6">
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
			<!--<span class="label label-default pull-right">Deal</span>-->
		</div>
	</article><!-- #post-## -->
</div>