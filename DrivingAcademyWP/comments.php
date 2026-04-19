<?php
/**
 * Comments Template
 */
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">
    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php
            $count = get_comments_number();
            printf(
                esc_html(_n('%d Comment', '%d Comments', $count, 'drivingacademywp')),
                $count
            );
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments([
                'style'      => 'ol',
                'short_ping' => true,
                'avatar_size' => 50,
            ]);
            ?>
        </ol>

        <?php
        the_comments_navigation([
            'prev_text' => esc_html__('Older Comments', 'drivingacademywp'),
            'next_text' => esc_html__('Newer Comments', 'drivingacademywp'),
        ]);
        ?>
    <?php endif; ?>

    <?php if (! comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
        <p class="no-comments"><?php esc_html_e('Comments are closed.', 'drivingacademywp'); ?></p>
    <?php endif; ?>

    <?php
    comment_form([
        'title_reply'        => esc_html__('Leave a Comment', 'drivingacademywp'),
        'label_submit'       => esc_html__('Post Comment', 'drivingacademywp'),
        'comment_notes_before' => '',
    ]);
    ?>
</div>
