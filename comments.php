<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">


	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'koicoffee' ); ?></p>
	<?php endif; ?>

	<?php
		
		$fields = array(
			
			'author' =>
				'<input id="author" name="author" type="text" placeholder="Name*" class="form-control" value="' . esc_attr( $commenter['comment_author'] ) . '" required="required" />',
				
			'email' =>
				'<input id="email" name="email" style="margin:10px" placeholder="Email*"  class="form-control" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" required="required" />',
				
			'url' =>
				'<input id="url" name="url" class="form-control" placeholder="URL"  type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" /></div> </div>'
				
		);
		
		$args = array (
			'class_submit' => 'btn form-submit-btn',
			'comment_field' =>
				'<div class="form-group"><div class="form-in"><textarea id="comment" placeholder="Your Comment Here" class="form-control" name="comment" rows="4" required="required"></textarea></p></div> <div class="form-in-sub">',
			'fields' => apply_filters( 'comment_form_default_fields', $fields )
			
		);
		
		comment_form($args);
	?>
	
	
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				$comments_number = get_comments_number();
				if ( 1 === $comments_number ) {
					/* translators: %s: post title */
					printf( _x( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'koicoffee' ), get_the_title() );
				} 
			?>
		</h2>
		
		<br/>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'short_ping'  => true,
					'max_debt' => 3,
					'per_page' => 5,
					'avatar_size' => 'none',
				) );
			?>
		</ol><!-- .comment-list -->

		<?php the_comments_navigation(); ?>

	<?php endif; // Check for have_comments(). ?>

</div><!-- .comments-area -->
