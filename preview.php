<article class="col-lg-4 col-12 article-preview__element" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php get_template_part('preview', (is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary' : 'content')); ?>
    <?php if (is_singular()) {
        echo '<h1 class="article-preview__title">';
    } else {
        echo '<h2 class="article-preview__title">';
    } ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
    <?php if (is_singular()) {
        echo '</h1>';
    } else {
        echo '</h2>';
    } ?>
    <div itemprop="article-preview__description"><?php the_excerpt(); ?></div>
</article>