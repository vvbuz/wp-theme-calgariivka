<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1 class="entry-title" itemprop="headline">
        <?php the_title(); ?>
    </h1>
    <div class="entry-meta">
        <!-- The source link -->
        <span style="color: rgb(76,76,76);">Джерело: </span>
        <a href="<?php echo get_post_custom()['Source'][0]; ?>">CBC News</a>
        <span> • </span>

        <!-- Date of post -->
        <time
          class="entry-date" 
          datetime="<?php echo esc_attr(get_the_date('c')); ?>"
          title="<?php echo esc_attr(get_the_date()); ?>"
          <?php if (is_single()) { echo 'itemprop="datePublished" pubdate';} ?>>
            <?php the_time(get_option('date_format')); ?>
        </time>
    </div>
    <?php the_post_thumbnail(); ?>
    <?php the_content(); ?>
</article>