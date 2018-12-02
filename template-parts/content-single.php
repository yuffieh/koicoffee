<?php
/**
 * The template part for displaying single posts
 *
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-11 blog-post">
				<div class="centered">
			        <p class="blog-cat">
			          <?php the_category(' '); ?>
			        </p>
			        <?php the_title( '<h3 class="blog-title">', '</h3>' ); ?>
			        <p>
			          written by <?php echo get_the_author(); ?>  | <?php echo get_the_date( 'M d, Y' ); ?> 
			        </p>
			        <br/>
				</div>
			<!-- ./centered-->
				<div class="blog-content">
					<?php
						the_content();
					?>
				</div>
				<!-- ./blog-content -->
			</div>
			<!-- ./blog-post -->
		</div>
		<!-- ./row -->
	</div>
	<!-- ./container-fluid -->
	<hr>

</div><!-- #post-## -->

