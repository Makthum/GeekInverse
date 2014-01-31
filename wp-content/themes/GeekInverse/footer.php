<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->
		<div class="container-fluid">
		
		
		<!--div class="row-fluid">
		<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="row-fluid">
		<div class="col-md-2">
		<button type="button" class="btn btn-default btn-circle btn-xl">#Wordpress</i></button>
		</div>
		<div class="col-md-2">
		<button type="button" class="btn btn-default btn-circle btn-xl">#Wordpress</i></button>
		</div>
		<div class="col-md-2">
		<button type="button" class="btn btn-default btn-circle btn-xl">#Wordpress</i></button>
		</div>
		<div class="col-md-2">
		<button type="button" class="btn btn-default btn-circle btn-xl">#Wordpress</i></button>
		</div>
		<div class="col-md-2">
		<button type="button" class="btn btn-default btn-circle btn-xl">#Wordpress</i></button>
		</div>
		</div>
			</div-->
			
		<div class="row site-footer">
		<div class="col-md-8">
		<div class="row">
		<div class="col-md-4 recent-post">
		Recent Posts
		<?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 5, 'format' => 'html' ) ); ?>
		</div>
		<div class="col-md-4">
		Featured Open Source
		</div>
		
		<div class="col-md-4">
		Featured Videos
		<?php
		$args = array(
			'post_type' => 'daily-video',
				'showposts'=>'1'
		);
$catquery =  new WP_Query( $args );
while($catquery->have_posts()) : $catquery->the_post();
?>

<li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
</li>
<?php endwhile; ?>

		</div>
		</div>
		</div>
		<div class="col-md-4">
		</div>

			
		</footer><!-- #colophon -->
	
	</div>
	</div><!-- #page -->
	
	<?php wp_footer(); ?>
</body>
</html>