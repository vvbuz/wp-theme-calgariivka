<?php get_header(); ?>
<a class="row back-link" href="<?php echo home_url(); ?>">
    <div class="offset-sm-1">
        <span class="material-symbols-outlined">arrow_back</span>
        <span class="back-link__text">Повернутись назад</span>
    </div>
</a>
<div class="row article-preview">
    <div class="col-12 col-sm-8 offset-sm-1">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1 class="entry-title" itemprop="headline">
                <?php the_title(); ?>
            </h1>
            <div class="entry-meta">
                <!-- The source link -->
                <?php if (isset(get_post_custom()['Source'][0])) { ?>
                    <span style="color: rgb(76,76,76);">Джерело: </span>
                    <a href="<?php echo get_post_custom()['Source'][0]; ?>">CBC News</a>
                    <span> • </span>
                <?php } ?>

                <!-- Date of post -->
                <!-- <time
                  class="entry-date" 
                  datetime="<?php echo esc_attr(get_the_date('c')); ?>"
                  title="<?php echo esc_attr(get_the_date()); ?>"
                  <?php if (is_single()) {
                        echo 'itemprop="datePublished" pubdate';
                    } ?>>
                    <?php the_time(get_option('date_format')); ?>
                </time> -->
                <?php
                $original_date = get_the_date('j F Y');
                $ukrainian_date = translate_month_to_ukrainian($original_date);
                if (is_single()) {
                    echo '<time class="entry-date" datetime="' . esc_attr(get_the_date('c')) . '" title="' . esc_attr(get_the_date()) . '" itemprop="datePublished" pubdate>' . $ukrainian_date . '</time>';
                } else {
                    echo '<time class="entry-date" datetime="' . esc_attr(get_the_date('c')) . '" title="' . esc_attr(get_the_date()) . '">' . $ukrainian_date . '</time>';
                }
                ?>
            </div>
            <?php the_post_thumbnail(); ?>
            <?php the_content(); ?>
        </article>
    </div>
    <div class="col-12 col-sm-3">
        <div class="advert">
            <h3>Підпишіться на наші новини</h3>
            <p>Читайте новини Калгарі українською у короткому форматі телеграмм каналу</p>
            <a href="https://t.me/+iA5u8nQs-9hlN2Yy">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09" />
                </svg>
                <span>@calgariivka</span>
            </a>
        </div>
    </div>
</div>