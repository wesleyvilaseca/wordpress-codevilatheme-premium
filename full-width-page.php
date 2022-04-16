<?php

/**
 * Template Name: Full Width Page
 */

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
                    if (function_exists('the_subtitle')) {
                        the_subtitle();
                    }
                    ?>
            </span>
        </div>
    </section>

<?php
endwhile;
rewind_posts();
?>

<?php get_footer() ?>