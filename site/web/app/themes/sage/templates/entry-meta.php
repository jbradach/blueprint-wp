<div class="entry-meta">
    <span class="updated"><i class="material-icons">today</i> <?= __('Posted', 'sage'); ?>
        <time datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
    </span>
    <span class="byline"><i class="material-icons">person_outline</i> <?= __('By', 'sage'); ?>
        <span class="author vcard">
            <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a>
        </span>
    </span>
</div>
