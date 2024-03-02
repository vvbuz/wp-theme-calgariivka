<?php get_header(); ?>

<div>
    <h1 class="entry-title" itemprop="name">
        <?php single_term_title(); ?>
    </h1>
    <div class="archive-meta" itemprop="description">
        <?php if ('' != get_the_archive_description()) {
            echo get_the_archive_description();
        } ?>
    </div>
</div>
<div class="row article-preview">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php get_template_part('preview'); ?>
    <?php endwhile;
    endif; ?>
</div>

<?php get_footer(); ?>