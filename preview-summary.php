<?php if ((has_post_thumbnail()) && (!is_search())) : ?>
    <a class="article-preview__image" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail(); ?>
    </a>
<?php endif; ?>