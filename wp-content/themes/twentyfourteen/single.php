<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<div id="post-content-area" class="post-content-area">
		<div id="content" class="post-content" role="main">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();?>

					
					<div class="single-post-title"><?php the_title();?> </div>
	<div class="single-post-text"><p>
	<?php the_content(); ?></p></div>
	
	
</div><!-- #content -->				
			
				<?php	
				endwhile;
			?>
		<div class="sidebar">
	<aside>
	
	<?php

	$tags = wp_get_post_tags($post->ID);  
      
    if ($tags) {  
    $tag_ids = array();  
    foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;  
    $args=array(  
    'tag__in' => $tag_ids,  
    'post__not_in' => array($post->ID),  
    'posts_per_page'=>4, // Number of related posts to display.  
    'caller_get_posts'=>1  
    );  
      
   $the_query  = new wp_query( $args );  
	

while ( $the_query->have_posts() ) : $the_query->the_post();?>
	<?php $post_counter++; ?>
	<div id="related-post"> 
	 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
	<div class="related-post-thumbnail">
    <?php the_post_thumbnail( 'related-post-thumbnail',array('class' => 'post-thumbnail-img' )) ;?>
    </div>
	</a>
	<div> <p class="related-post-title"><?php the_title();?></p> </div>
	
	</div>
	<?php endwhile; } ?>

	</aside>
	</div>
	</div>
	
<?php

get_footer();
