<?php get_header() ?>
<section id="content">

    <div class="content-wrap">
        <div class="container clearfix">
            <div class="postcontent nobottommargin clearfix">

                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        global $post;
                        $author_id          = $post->post_author;
                        $author_url         = get_author_posts_url($author_id);
                ?>

                        <div class="single-post nobottommargin">


                            <div class="entry clearfix">


                                <div class="entry-title">
                                    <h2><?php the_title() ?></h2>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> <?php get_the_date() ?></li>
                                    <li>
                                        <a href="<?php $author_url ?>">
                                            <i class="icon-user"></i> <?php the_author() ?>
                                        </a>
                                    </li>
                                    <li><i class="icon-folder-open"></i> <?php the_category() ?>
                                    </li>
                                    <li><a href="#"><i class="icon-comments"></i> <?php comments_number() ?> </a></li>
                                </ul>

                                <?php if (has_post_thumbnail()) { ?>
                                    <div class="entry-image">
                                        <a href="<?php the_permalink() ?>">
                                            <?php the_post_thumbnail('full') ?>
                                        </a>
                                    </div>
                                <?php } ?>


                                <div class="entry-content notopmargin">
                                    <?php the_content(); ?>

                                    <div class="clear"></div>

                                </div>
                            </div>

                            <div class="line"></div>

                            <?php
                            if (comments_open() || get_comments_number()) {
                                comments_template();
                            }
                            ?>

                        </div>
                <?php
                    }
                }
                ?>
            </div>

            <?php get_sidebar() ?>
        </div>

    </div>

</section>

<?php get_footer() ?>