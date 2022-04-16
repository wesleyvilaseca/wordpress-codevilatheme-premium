<?php get_header() ?>

<section id="page-title">
    <div class="container clearfix">
        <h1><?php _("Search Results for: ", 'codeVilaTheme')?><?php the_search_query() ?></h1>
    </div>
</section><!-- #page-title end -->

<section id="content">

    <div class="content-wrap">
        <div class="container clearfix">
            <div class="postcontent nobottommargin clearfix">
                <div class="col_full card">
                    <div class="card-header"><?php _e('What are you searhing for today?', 'codeVilaTheme') ?></div>
                    <div class="card-body">
                        <?php get_search_form() ; ?>
                    </div>
                </div>

                <div id="posts">
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();

                            //content-excerpt.php
                            // get_template_part('partials/post/content-excerpt');

                            //1) content-excerpt.php 2) content.php
                            get_template_part('partials/post/content', 'excerpt');
                        }
                    }
                    ?>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <?php
                        next_posts_link('&larr; Older');

                        previous_posts_link('Newer &rarr;');
                        ?>
                    </div>
                </div>

            </div>

            <?php get_sidebar() ?>
        </div>

    </div>

</section>

<?php get_footer() ?>