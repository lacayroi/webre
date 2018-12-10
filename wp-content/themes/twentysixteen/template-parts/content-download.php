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
			<?php if ( get_field ( 'edd_hot_badge' ) ) : ?><span class="label label-default pull-right hot">hot </span><?php endif; ?>
			<?php if ( get_field ( 'edd_free_badge' ) ) : ?><span class="label label-default pull-right free">free </span><?php endif; ?>
		</div>

		<div class="download-info">
			<a href="<?php echo get_permalink( $post->ID ); ?>" rel="bookmark" class="download-title"><?php the_title(); ?></a>
			<p><a href="<?php the_field ( 'edd_live_demo' ); ?>" class="btn btn-default btn-sm btn-block"><i class="fa fa-eye"></i> Live Demo</a></p>
		</div>
		
	</article><!-- #post-## -->
</div>