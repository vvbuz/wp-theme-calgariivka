<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <!-- Image -->
    <?php get_template_part('preview', (is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary' : 'content')); ?>
    
    <!-- Title -->
    <div>
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
            <?php
                    $original_date = get_the_date('j F Y');
                    $ukrainian_date = translate_month_to_ukrainian($original_date);
                    if (is_single()) {
                        echo '<time class="entry-date" datetime="' . esc_attr(get_the_date('c')) . '" title="' . esc_attr(get_the_date()) . '" itemprop="datePublished" pubdate>' . $ukrainian_date . '</time>';
                    } else {
                        echo '<time class="entry-date" datetime="' . esc_attr(get_the_date('c')) . '" title="' . esc_attr(get_the_date()) . '">' . $ukrainian_date . '</time>';
                    }
            ?>
            <div class="article-preview__description"><?php the_excerpt(); ?></div>
        </div>
    </div>
</article>