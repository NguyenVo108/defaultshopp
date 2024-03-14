<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package markito
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
		<?php
		// You can start editing here -- including this comment!
		if ( have_comments() ) :
			?>

			<ul>
				<?php 
					wp_list_comments( 
						array(
							'style'      => 'ul',
							'short_ping' => true,
							'callback'    => 'markito_comment_list',
						)
					);  
				?>
			</ul> 

		<?php
		the_comments_navigation();

		//If comments are closed and there are comments, let's leave a little note, shall we?

		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'markito' ); ?></p>
			<?php
		endif;
	endif; // Check for have_comments().
?>
<?php
//Declare Vars
$comment_send = 'Post Comment';
$comment_reply = 'Add New Comment';
$comment_reply_to = 'Reply';

$comment_author = 'Name';
$comment_email = 'Enter Your Email';
$comment_body = 'Your Comment';
$comment_url = 'Website';
$comment_cookies_1 = ' By commenting you accept the';
$comment_cookies_2 = ' Privacy Policy';

$comment_before = 'Registration is not required.';

$comment_cancel = 'Cancel Reply';

//Array 
$comments_args = array(
  //Define Fields
  'fields' => array(
     //Author field
     'author' => '<div class="row"><div class="col-lg-6"> <div class="form-group"> <input id="author" class="form-control" name="author" aria-required="true" placeholder="' . esc_attr($comment_author ).'"></input></div></div>',
     //Email Field
     'email' => '<div class="col-lg-6"> <div class="form-group"> <input id="email" class="form-control" name="email" placeholder="' . esc_attr($comment_email) .'"></input></div></div></div>',
     //URL Field
     'url' => '<div class="row"><div class="col-lg-12"> <div class="form-group"> <input id="url" class="form-control" name="url" placeholder="' . esc_url($comment_url ).'"></input></div></div></div>',
     //Cookies
     'cookies' => '<input type="checkbox" required>' . esc_html($comment_cookies_1) . '<a href="' . esc_url(get_privacy_policy_url() ). '">' . esc_html($comment_cookies_2 ). '</a>',
  ),
  // Change the title of send button
  'label_submit' => __( 'Post Comment','markito' ),
  // Change the title of the reply section
  'title_reply' => __( 'Add New Comment','markito' ),
  // Change the title of the reply section
  'title_reply_to' => __( 'Reply','markito' ),
  //Cancel Reply Text
  'cancel_reply_link' => __( 'Cancel Reply','markito' ),
  // Redefine your own textarea (the comment body).
  'comment_field' => '<div class="row"><div class="col-lg-12"><br /><textarea class="form-control" rows="5" id="comment" placeholder="' . esc_attr($comment_body) .'"></textarea></div></div>',
  //Message Before Comment
  'comment_notes_before' => __( 'Registration is n\'t required.','markito' ),
  // Remove "Text or HTML to be displayed after the set of comment fields".
  'comment_notes_after' => '',
  //Submit Button ID
  'id_submit' => __( 'comment-submit','markito'  ),
);

comment_form( $comments_args ); ?>