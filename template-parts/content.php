<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kyle_Westaway_-_Minimal
 */

?>

<div class="container">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php if( is_single() ) { ?>
				<?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' )); ?>
			<?php } else { ?>
				<a href="<?php echo get_permalink( $post->ID ); ?>" rel="bookmark"><?php the_post_thumbnail('full', array( 'class' => 'img-responsive' )); ?></a>	
			<?php } ?>

		<header class="entry-header">

			<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink( $post->ID ) ) . '" rel="bookmark">', '</a></h2>' );
			}

			if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php echo get_avatar( get_the_author_meta( 'ID' ), '120', $default, $alt, array( 'class' => 'img-responsive img-circle' ) ); ?> <em>by</em> <span class="entry-author" itemprop="author" itemscope="" itemtype="http://schema.org/Person"><a href="<?php the_author_url(); ?>" class="entry-author-link" itemprop="url" rel="author"><span class="entry-author-name" itemprop="name"><?php the_author(); ?></span></a> · <?php the_date(); ?></span>
			</div><!-- .entry-meta -->
			<?php
			endif; ?>
		</header><!-- .entry-header -->


		<?php if ( is_single() ) : ?>
		<div class="entry-content">
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'kyle-westaway-minimal' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kyle-westaway-minimal' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
		<?php endif; ?>

		<footer class="entry-footer">
			<?php // kyle_westaway_minimal_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->
</div>
