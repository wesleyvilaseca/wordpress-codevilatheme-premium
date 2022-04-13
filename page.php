<?php get_header() ?>
<section id="page-title">
    <div class="container clearfix">
        <h1><?php single_post_title(); ?></h1>
        <span>
            <?php

            if (function_exists('the_subtitle')) {
                the_subtitle();
            }

            ?>
        </span>
    </div>
</section><!-- #page-title end -->

<section id="content">

    <div class="content-wrap">
        <div class="container clearfix">
            <div class="postcontent nobottommargin clearfix">
                <?php
                while (have_posts()) :
                    the_post();
                    global $post;
                    $author_ID          =   $post->post_author;
                    $author_URL         =   get_author_posts_url($author_ID);
                ?>
                    <?php
                    the_content();
                    $defaults = [
                        'before'           => '<p class="text-center">' . __('Pages:', 'codVilaSimpleTheme'),
                        'after'            => '</p>',
                    ];

                    wp_link_pages($defaults);
                    ?>
                <?php endwhile; ?>

            </div>

            <?php get_sidebar() ?>
        </div>

    </div>

</section>

<?php get_footer() ?>