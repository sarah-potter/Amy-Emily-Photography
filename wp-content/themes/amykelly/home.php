<?php
/**
 * @package Coraline
 * @since Coraline 1.0
 */

get_header(); ?>

<div id="homepage-content">
	<div id="giant-hexagons">
		<img id="hexagon-1" src="/wp-content/themes/amykelly/images/hexagon-1.png">
		
		<div id="hexagon-2"> 
			<img  src="/wp-content/themes/amykelly/images/hexagon-2.png">
					<span class="sarah">
						<p>Hope is the thing with feathers <br/>
						that perches in the soul - <br />
						and sings the tunes without the words - <br />
						 and never stops at all.<br/>
						-Emily Dickinson</p>
					</span>
					
					
					<!--
<div class="booger">
						Hope is the thing with feathers <br/>
						that perches in the soul - <br />
						and sings the tunes without the words - <br />
						 and never stops at all.<br/>
						-Emily Dickinson
				
					</div>
-->
	</div>
		
		<img id="hexagon-3" src="/wp-content/themes/amykelly/images/hexagon-3.png">
		
		<img class="arrow" src="/wp-content/themes/amykelly/images/arrow.png">
		<img class="book" src="/wp-content/themes/amykelly/images/Book-Page-Overlay.png">
	
	</div> <!-- for giant-hexagons -->
	
<div id="content" role="main">

<div id="recent-post-container">				
	<h3 class="recent-post-widget-title"><?php _e( 'Most Recent Posts', 'coraline' ); ?></h3>		
		
		<TD onMouseOver="this.bgColor='#00CC00'" onMouseOut="this.bgColor='#009900'" bgColor=#009900>
		
		<ul>
			<?php
				$recent_entries = new WP_Query();
				$recent_entries->query( 'order=DESC&posts_per_page=9' );
				while ($recent_entries->have_posts()) : $recent_entries->the_post();
				?>	
		<li id="recent-post-list-item">
	<?php
	$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
	?>		
	
	<span class="new-wrapper">
		<div class="hexagon hexagon1">
			<div class="hexagon-in1">
				<div class="hexagon-in2" style="background: url(<?php echo $src[0]; ?> ) !important;" >
					
				<a href="<?php the_permalink() ?>"><?php the_title() ?></a> 
				</div>
				</span>
			</div>
		</div>	
	</li><?php endwhile; ?>
	</ul>	
	<img class="emily-quote" src="/wp-content/themes/amykelly/images/Emily-Dickinson-Quote.png">
	
	<div id="static-mini-hexagons">
			<img id="static1" src="/wp-content/themes/amykelly/images/Greyish_Hexagon.png" width="180px">
			<img id="static2" src="/wp-content/themes/amykelly/images/Navy_Dots_Hexagon.png" width="180px">
			<img id="static3" src="/wp-content/themes/amykelly/images/Peach_Hexagon.png" width="180px">
			<img id="static4" src="/wp-content/themes/amykelly/images/Grey_Dots_Hexagon.png" width="178px">
			<img id="static5" src="/wp-content/themes/amykelly/images/Create_Design_Inspire_Hexagon.png" width="180px">
	</div>



</div>
</div>

<?php get_footer(); ?>