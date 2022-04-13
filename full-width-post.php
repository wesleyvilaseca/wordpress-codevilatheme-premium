<?php 

/**
 * Template Name: Full Width Post
 * Template Post Type: Post
 */

get_header() ?>
<section id="content">

    <div class="content-wrap">
        <div class="container clearfix">
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
                                <?php
                                the_content();
                                $defaults = [
                                    'before'           => '<p class="text-center">' . __('Pages:', 'codeVilaTheme'),
                                    'after'            => '</p>',
                                ];
                                wp_link_pages($defaults);
                                ?>

                                <div class="tagcloud clearfix bottommargin">
                                    <?php the_tags('', ' ') ?>
                                </div>

                                <div class="clear"></div>

                            </div>
                        </div>
                        <div class="post-navigation clearfix">

                            <div class="col_half nobottommargin">
                                <?php previous_post_link() ?>
                            </div>

                            <div class="col_half col_last tright nobottommargin">
                                <?php next_post_link() ?>
                            </div>

                        </div>

                        <div class="line"></div>


                        <div class="card">
                            <div class="card-header">
                                <strong>
                                    Posted by
                                    <a href="<?php $author_url ?>"><?php the_author() ?></a>
                                </strong>
                            </div>
                            <div class="card-body">
                                <div class="author-image">
                                    <?php echo get_avatar($author_id, 90, '', false, ['class' => 'img-circle']) ?>
                                </div>
                                <?php echo nl2br(get_the_author_meta('description')) ?>
                            </div>
                        </div>

                        <div class="line"></div>

                        <h4>Related Posts:</h4>

                        <div class="related-posts clearfix">

                            <?php

                            $categories = get_the_category();
                            $rp_query = new WP_Query([
                                'posts_per_page'    => 2,
                                'post__not_in'      => [$post->ID], //the current post being viewd shold not be returned
                                'cat'               => !empty($categories) ? $categories[0]->term_id : null // define if the posts should be in a specific category
                            ]);

                            if ($rp_query->have_posts()) :
                                while ($rp_query->have_posts()) :
                                    $rp_query->the_post();
                            ?>
                                    <div class="mpost clearfix">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <div class="entry-image">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_post_thumbnail('thumbnail'); ?>
                                                </a>
                                            </div>
                                        <?php endif; ?>

                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4>
                                                    <a href="<?php the_permalink() ?>">
                                                        <?php the_title() ?>
                                                    </a>
                                                </h4>
                                            </div>
                                            <ul class="entry-meta clearfix">
                                                <li><i class="icon-calendar3"></i> <? echo get_the_date() ?></li>
                                                <li><i class="icon-comments"></i> <?php comments_number('0') ?></li>
                                            </ul>
                                            <div class="entry-content">
                                                <?php the_excerpt() ?>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;
                            ?>
                        </div>


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

    </div>

</section>

<?php get_footer() ?>