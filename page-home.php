<?php
get_header()

?>
<?php
while (have_posts()) :
    the_post();
?>

    <section class="page-title">
        <div class="container clearfix">
            <h1><?php the_title() ?></h1>
            <span> <?php
                    if (function_exists('the_subtitle'))
                        the_subtitle();
                    ?>
            </span>
        </div>
    </section>

    <section id="slide">
        <?php echo do_shortcode('[recent_post_slider design="design-' . get_theme_mod('ju_slide_type') . '" limit="' . get_theme_mod('ju_slide_limit') . '"]') ?>
    </section>
    
    <div style="margin: 50px auto 20px auto; width: 100px; border-bottom:none; border-top: 4px solid #444; border-radius:5px;"></div>

    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="postcontent nobottommargin clearfix">
                    <?php
                    the_content();
                    $defaults = [
                        'before'           => '<p class="text-center">' . __('Pages:', 'codVilaSimpleTheme'),
                        'after'            => '</p>',
                    ];
                    ?>
                </div>
            </div>
    </section>

    <?php if (is_active_sidebar('ju_services1') || is_active_sidebar('ju_services2') || is_active_sidebar('ju_services3')) : ?>
        <div style="margin: 50px auto 20px auto; width: 100px; border-bottom:none; border-top: 4px solid #444; border-radius:5px;"></div>
        <section id="services_widgets" class="mt-5">
            <div class="container">
                <h3 class="text-center">Our Services</h3>
                <div class="row">
                    <div class="col-sm-4">
                        <?php dynamic_sidebar('ju_services1'); ?>
                    </div>
                    <div class="col-sm-4">
                        <?php dynamic_sidebar('ju_services2'); ?>
                    </div>
                    <div class="col-sm-4">
                        <?php dynamic_sidebar('ju_services3'); ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <div style="margin: 50px auto 20px auto; width: 100px; border-bottom:none; border-top: 4px solid #444; border-radius:5px;"></div>
    <section class="bg-light mt-5">
        <div class="ms-3 me-3 row">
            <h3 class="text-center ">Latest Posts</h3>
            <?php

            $featured = new WP_Query(['posts_per_page'    => 3]);

            if ($featured) :
                while ($featured->have_posts()) : $featured->the_post();
                    get_template_part('partials/post/content', 'featured');
                endwhile;
                wp_resolve_post_date();
            endif;

            ?>
        </div>
    </section>

    <?php if (get_theme_mod('ju_google_location_latitude_handle') and get_theme_mod('ju_google_location_longitude_handle')) : ?>
        <section id="google-location" class="mt-5">
            <h3 class="text-center ">Find me</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15954.244656835213!2d<?php echo get_theme_mod('ju_google_location_latitude_handle') ?>!3d<?php echo get_theme_mod('ju_google_location_longitude_handle') ?>!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x173331575dfeebe0!2sBIZARRO&#39;S%20SKATEBOARD%20SHOP!5e0!3m2!1spt-BR!2sbr!4v1648050297768!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>
    <?php endif; ?>

    <style>
        .wppsac-post-slider .wppsac-post-image-bg {
            min-height: 500px;
        }

        .wppsac-post-content-left {
            display: flex;
            align-items: center;
        }
    </style>

<?php
endwhile;
rewind_posts();
?>

<?php get_footer() ?>