<?php
/**
 * The template part for displaying results in search pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	    <div class="col-md-3 blog-temp">
	      <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?> " style="background-image:url('<?php the_post_thumbnail_url('full'); ?>')" class="slide-featured-image"></a>
	      <br/>
	      <p class="catagorie-tag">
	         <?php the_category(' '); ?>
	      </p>
	      <p class="temp-date">
	        <?php echo get_the_date( 'm.d.y' ); ?>
	      </p>
	      
	      <?php the_title( sprintf( '<p class="temp-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></p>' ); ?>


	    </div>
		<!-- ./blog-temp -->


	


</div><!-- #post-## -->

