<?php get_header() ?>
<section id="content">

    <div class="content-wrap">
        <?php
        if (!is_single() and is_home() and function_exists('wpp_get_mostpopular') and get_theme_mod('ju_show_header_popular_posts')) :
            wpp_get_mostpopular([
                'wpp_start'     => '<div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
                                    <div>
                                    <div class="container clearfix">
                                    <span class="badge bg-danger bnews-title">Breaking News:</span>
                                    <div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false" data-pagi="false">
                                    <div class="flexslider">
                                    <div class="slider-wrap">',
                'wpp_end'       => '</div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>',

                'post_html'     => '<div class="slide"><a href="{url}"><strong>{text_title}</strong></a></div>'
            ]);
        ?>
        <?php endif; ?>
        <div class="container clearfix">
            <div class="postcontent nobottommargin clearfix">
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
                        <!--<a href="#" class="btn btn-outline-secondary float-left"></a>
                        <a href="#" class="btn btn-outline-dark float-right"></a>-->
                    </div>
                </div>

            </div>

            <?php get_sidebar() ?>
        </div>

    </div>

</section>

<?php get_footer() ?>