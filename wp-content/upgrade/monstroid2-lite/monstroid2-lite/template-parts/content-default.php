<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Monstroid2
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'posts-list__item card' ); ?>>

	<?php $utility       = monstroid2_lite_utility()->utility;
	$blog_featured_image = monstroid2_lite_get_mod( 'blog_featured_image', true );
	$size                = monstroid2_lite_post_thumbnail_size( array( 'class_prefix' => 'post-thumbnail--' ) );
	?>

	<?php if ( 'small' === $blog_featured_image && has_post_thumbnail() ) : ?>
		<figure class="post-thumbnail">
			<?php $utility->media->get_image( array(
				'size'        => $size['size'],
				'mobile_size' => $size['size'],
				'class'       => 'post-thumbnail__link ' . $size['class'],
				'html'        => '<a href="%1$s" %2$s><img class="post-thumbnail__img wp-post-image" src="%3$s" alt="%4$s" %5$s></a>',
				'placeholder' => false,
				'echo'        => true,
			) );
			?>
		</figure><!-- .post-thumbnail -->
	<?php endif; ?>

	<div class="post-list__item-content">
		<?php if ( 'small' === $blog_featured_image ) :
			get_template_part( 'template-parts/content-entry-meta-loop' );
		endif; ?>

		<header class="entry-header">
			<?php monstroid2_lite_sticky_label(); ?>

			<?php $title_html = ( is_single() ) ? '<h3 %1$s>%4$s</h3>' : '<h4 %1$s><a href="%2$s" rel="bookmark">%4$s</a></h4>';

			$utility->attributes->get_title( array(
				'class' => 'entry-title',
				'html'  => $title_html,
				'echo'  => true,
			) );
			?>
		</header><!-- .entry-header -->

		<?php if ( 'small' !== $blog_featured_image ) : ?>
			<figure class="post-thumbnail">
				<?php $utility->media->get_image( array(
					'size'        => $size['size'],
					'class'       => 'post-thumbnail__link ' . $size['class'],
					'html'        => '<a href="%1$s" %2$s><img class="post-thumbnail__img wp-post-image" src="%3$s" alt="%4$s" %5$s></a>',
					'placeholder' => false,
					'echo'        => true,
				) );
				?>
			</figure><!-- .post-thumbnail -->
		<?php endif; ?>

		<div class="entry-content">
			<?php $blog_content = monstroid2_lite_get_mod( 'blog_posts_content', true );
			$length             = ( 'full' === $blog_content ) ? 0 : 55;
			$content_visible    = ( 'none' !== $blog_content ) ? true : false;
			$content_type       = ( 'full' !== $blog_content ) ? 'post_excerpt' : 'post_content';

			$utility->attributes->get_content( array(
				'visible'      => $content_visible,
				'length'       => $length,
				'content_type' => $content_type,
				'echo'         => true,
			) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php if ( 'small' !== $blog_featured_image ) :
				get_template_part( 'template-parts/content-entry-meta-loop' );
			endif; ?>



			<?php $btn_text = monstroid2_lite_get_mod( 'blog_read_more_text', true );
			$btn_visible    = $btn_text ? true : false;

			$utility->attributes->get_button( array(
				'visible' => $btn_visible,
				'class'   => 'link',
				'text'    => $btn_text,
				'icon'    => '<i class="linearicon linearicon-arrow-right"></i>',
				'html'    => '<a href="%1$s" %3$s><span class="link__text">%4$s</span>%5$s</a>',
				'echo'    => true,
			) );
			?>
		</footer><!-- .entry-footer -->
	</div><!-- .post-list__item-content -->

</article><!-- #post-## -->