<?php get_header(); ?>
<div>
    <?php
    $query_guides = new WP_Query(array('category_name' => 'guides', "post_count" => 1));
    if ($query_guides->have_posts()) {
        echo '<h1>Посібники</h1>';
    } ?>
    <div class="row article-preview">
        <?php
        if ($query_guides->have_posts()) : while ($query_guides->have_posts()) : $query_guides->the_post(); ?>
                <?php get_template_part('preview'); ?>
        <?php
            endwhile;
        endif;
        ?>
    </div>
</div>
<div>
    <h1>Новини</h1>
    <div class="row article-preview">
        <?php
        $query_news = new WP_Query(array('category_name' => 'news'));
        $i = 0;
        if ($query_news->have_posts()) : while ($query_news->have_posts()) : $query_news->the_post();
            $class = ($i == 0) ? 'col-lg-12 col-12 article-preview__element-1' : 'col-lg-4 col-12 article-preview__element';
            ?>
                <div class="<?= $class ?>">
                    <?php get_template_part('preview'); ?>
                </div>
            <?php
            $i++;
        endwhile;
        endif;
        ?>
    </div>
</div>


<?php get_footer();
