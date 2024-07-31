<?php get_header(); ?>

<!-- BIG POST -->
<div>
    <h1>Останні новини</h1>
    <div class="row article-preview">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'tax_query' => array(
                array(
                    'category_name' => 'news',
                ),
            ),
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                ?>
                <div class="col-lg-12 col-12 article-preview__element-1">
                    <?php get_template_part('preview'); ?>
                </div>
            <?php }
        }
        wp_reset_postdata();
        ?>
    </div>
</div>

<!-- SMALL POSTS -->
<div>
    <div class="row article-preview" style="border-bottom: 1px solid rgba(0, 0, 0, 0.1); margin-bottom: 16px;">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 4,
            'offset' => 1,
            'tax_query' => array(
                array(
                    'category_name' => 'news',
                ),
            ),
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                ?>
                <div class="col-lg-3 col-12 article-preview__element-min">
                    <?php get_template_part('preview'); ?>
                </div>
            <?php }
        }
        wp_reset_postdata();
        ?>
    </div>
</div>

<!-- OTHER POSTS -->
<div>
    <div class="row article-preview">
        <?php
        $args_other = array(
            'post_type' => 'post',
            'posts_per_page' => 20,
            'offset' => 5,
            'tax_query' => array(
                array(
                    'category_name' => 'news',
                ),
            ),
        );
        $query_other = new WP_Query($args_other);
        if ($query_other->have_posts()) {
            while ($query_other->have_posts()) {
                $query_other->the_post();
                ?>
                <div class="col-lg-4 col-12 article-preview__element">
                    <?php get_template_part('preview'); ?>
                </div>
            <?php }
        }
        wp_reset_postdata();
        ?>
</div>

<?php get_footer();
