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
    <div class="entry-meta">
        <time class="entry-date"
        datetime="<?php echo esc_attr(get_the_date('c')); ?>"
        title="<?php echo esc_attr(get_the_date()); ?>"
        <?php if (is_single()) {
            echo 'itemprop="datePublished" pubdate';
        } ?>>
            <?php the_time(get_option('date_format')); ?>
        </time>
        <?php if (is_single()) {
            echo '<meta itemprop="dateModified" content="' . esc_attr(get_the_modified_date()) . '" />';
        } ?>
    </div>
    <div itemprop="article-preview__description"><?php the_excerpt(); ?></div>
</article>