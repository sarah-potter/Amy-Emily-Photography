<div id="blog-left-bg">
<?php
/**
 * @package Coraline
 * @since Coraline 1.0
 */

get_header(); ?>
</div>

<div id="content-container" class="single-post">
	
	<div id="content" role="main">
	
	
		<div id="blog-id">
			<hr />
			<hr />
			<img id="emily-headshot" src="/wp-content/themes/amykelly/images/amy-emily-headshot.png" width="205px">
			<img id="emily-signature" src="/wp-content/themes/amykelly/images/amy-signature.png" width="120px">	
			<h2>Hello and welcome to my blog!</h2>
			<p class="about">I'm Amy Emily and I'm a New England + Destination Wedding Photographer based in Boston, MA. I'm satisfied in the moments where i've kicked off my heels, grabbed a 
	cup of coffee, and laughed till my sides hurt. </p>
	<p class="about">I adore telling the charming and ever-so amazing stories of life. I hope I can be a part 
	of yours.  Look around, share in the joy of others, and remember your story is beautiful.</p>
			<hr />
			<img id="sketch" src="/wp-content/themes/amykelly/images/sketch.jpg" width="143px">
			<hr />
		</div>

	<?php if ( have_posts() ) while ( have_posts() ) : the_post();

			$format = get_post_format();

			if ( false == $format)
				$format = 'standard'; ?>

		
		<div id="blog-post">
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php if ( 'standard' != $format ) : ?>
				<a class="entry-format" href="<?php echo esc_url( get_post_format_link( get_post_format() ) ); ?>" title="<?php echo esc_attr( sprintf( __( 'All %s posts', 'coraline' ), get_post_format_string( get_post_format() ) ) ); ?>"><?php echo get_post_format_string( get_post_format() ); ?></a>
			<?php endif; ?>
		<img id="lines" src="/wp-content/themes/amykelly/images/lines.png">

			<?php the_title( '<h1 class="blog-post-title">', '</h1>' ); ?>

			<?php if ( 'standard' == $format ) : ?>
				<div class="entry-meta">
					<?php coraline_posted_on(); coraline_posted_by(); ?>
					<?php edit_post_link( __( 'Edit', 'coraline' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
				</div><!-- .entry-meta -->
			<?php endif; ?>

			<div class="entry-content">
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'coraline' ), 'after' => '</div>' ) ); ?>
			</div><!-- .entry-content -->
			
			<div id="custom-meta-links">
				<a class="sd-content" href="#header">Back to top</a>
				<a class="sd-content" href="/contact">Contact Me</a>
			</div>
			
			
			<div class="entry-info">
			
			<?php if ( 'standard' != $format ) : ?>
				<p class="format-entry-meta">
					<?php coraline_posted_on(); coraline_posted_by(); ?>
					<span class="comments-link"><?php comments_popup_link( __( '&rarr; Leave a comment', 'coraline' ), __( '&rarr; 1 Comment', 'coraline' ), __( '&rarr; % Comments', 'coraline' ) ); ?></span>
				</p>
			<?php endif; ?>
			
			
			<?php edit_post_link( __( 'Edit', 'coraline' ), '<span class="edit-link">', '</span>' ); ?>
			</div><!-- .entry-info -->
		</div><!-- #post-## -->
		
		
		
		<hr />
		<div id="nav-above" class="navigation">
			<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '<<', 'Previous post link', 'coraline' ) . '</span> %title' ); ?></div>
			<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '>>', 'Next post link', 'coraline' ) . '</span>' ); ?></div>
		</div><!-- #nav-above -->
		
		
		<div id="nav-below" class="navigation">
			<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '<<', 'Previous post link', 'coraline' ) . '</span> %title' ); ?></div>
			<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '>>', 'Next post link', 'coraline' ) . '</span>' ); ?></div>
		</div><!-- #nav-below -->

	<hr />
		<?php comments_template(); ?>

	<?php endwhile; // end of the loop. ?>
</div>
</div><!-- #content -->
</div><!-- #content-container -->

</div><!-- #blog-post -->


<?php get_sidebar(); ?>
<div id="post-cal">
	<?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) : ?>
	<div id="second" class="widget-area">
		<ul class="xoxo">
			<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
		</ul>
	</div><!-- #second .widget-area -->
<?php endif; ?>
	</div>

<?php get_footer(); ?>
