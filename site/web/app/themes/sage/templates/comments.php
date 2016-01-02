<?php
if (post_password_required()) {
  return;
}
?>

<section id="comments" class="comments">
  <?php if (have_comments()) : ?>
    <h2><?php printf(_nx('One response to &ldquo;%2$s&rdquo;', '%1$s responses to &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'sage'), number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>'); ?></h2>

    <ol class="comment-list">
      <?php wp_list_comments(['style' => 'ol', 'short_ping' => true]); ?>
    </ol>

    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
      <nav>
        <ul class="pager">
          <?php if (get_previous_comments_link()) : ?>
            <li class="previous"><?php previous_comments_link(__('&larr; Older comments', 'sage')); ?></li>
          <?php endif; ?>
          <?php if (get_next_comments_link()) : ?>
            <li class="next"><?php next_comments_link(__('Newer comments &rarr;', 'sage')); ?></li>
          <?php endif; ?>
        </ul>
      </nav>
    <?php endif; ?>
  <?php endif; // have_comments() ?>

  <?php if (!comments_open() && get_comments_number() != '0' && post_type_supports(get_post_type(), 'comments')) : ?>
    <div class="alert alert-warning">
      <?php _e('Comments are closed.', 'sage'); ?>
    </div>
  <?php endif;
$fields = array(
 'author' =>
    '<div class="form-group label-floating"><label for="author" class="control-label">' . __( 'Name', 'noun' ) . '</label> ' .
    '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
    '" size="30" aria-required="true" class="form-control"></div>',

  'email' =>
    '<div class="form-group label-floating"><label for="email" class="control-label">' . __( 'Email', 'noun' ) . '</label> ' .
    //( $req ? '<span class="required">*</span>' : '' ) .
    '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
    '" size="30" aria-required="true" class="form-control"></div>',

  'url' =>
    '<div class="form-group label-floating"><label for="url" class="control-label">' . __( 'Website', 'noun' ) . '</label>' .
    '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
    '" size="30" class="form-control"></div>',

);
//apply_filters( 'comment_form_default_fields', $fields );
$comments_args = array(
        'fields' => apply_filters( 'comment_form_default_fields', $fields ),
        //'label_submit'=>'Send',
        //'title_reply'=>'Write a Reply or Comment',
        'comment_notes_before' => 'Your email address will not be published.',
        //'comment_notes_after' => '',
        'comment_field' =>
        '<div class="form-group label-floating"><label for="comment" class="control-label">' . _x( 'Comment', 'noun' ) . '</label>' .
        '<textarea id="comment" name="comment" aria-required="true" class="form-control"></textarea></div>',
        'class_submit' => 'btn btn-primary btn-raised',
);

comment_form($comments_args); ?>
</section>
