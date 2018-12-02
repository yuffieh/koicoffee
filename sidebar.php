<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<div class="container">
		<div class="row">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>
	</div>
<?php endif; ?>
