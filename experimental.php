<?php

/**
 * Template Name: Experimental
 */

get_header()

?>

<section id="page-title">

    <div class="container clearfix">
        <h1>experimental</h1>
    </div>

</section><!-- #page-title end -->


<section id="content">

    <div class="content-wrap">
        <div class="container clearfix">
            <div class="postcontent nobottommargin clearfix">
                <?php
                #echo wp_login_url()
                #wp_loginout();
                #single_post_title();
                #get_calendar();
                #echo get_search_link();
                #get_search_form();
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>