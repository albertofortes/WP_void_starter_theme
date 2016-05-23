<?php
/*
	@package WordPress
	@subpackage THEME NAME
*/

/**
 * Custom comments
 *
 * @see http://wpapi.com/customize-comments-template-wp_list_comments/
 *
 * @param $comment, $args, $depth
 * @return 
 */
function custom_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>

	<div class="comment" id="comment-<?php comment_ID() ?>">
		<div class="avatar">
      <?php echo get_avatar($comment,$size='50',$default='<path_to_url>' ); ?>
    </div>
    <p class="who">
    	<?php $user_name_str = substr(get_comment_author(),0, 20); ?> 
			<?php printf(__('<cite><b>%s</b></cite> <span>says:</span>'), $user_name_str) ?>
		</p>
		<p class="date">
			<?php edit_comment_link( '<i class="fa fa-edit"></i> ' . __('Editar'),'','' ) ?>
		</p>
		<?php comment_reply_link( array_merge( $args, array( 'reply_text' => '<i class=\'fa fa-mail-forward\'></i> Responder', 'depth' => $depth, 'max_depth' => $args['max_depth'] )) ) ?>
		<?php if ($comment->comment_approved == '0') : ?>
			 <div class="alert alert-warning"><?php _e('Your comment is awaiting moderation.') ?></div>
		<?php endif; ?>
		<?php comment_text() ?>
 	</div><!--comment-->

<?php
 }