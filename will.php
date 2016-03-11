

<?php

/*
 Template Name: Will
 */

get_header(); ?>



<?php if (have_posts()): while (have_posts()) : the_post(); ?>



    <div class="jumbotron main will-banner">

        <h1 class="hidden"><?php the_title(); ?></h1>


    </div>


    <div class="container-fluid ">

        <div class="green-left-border padding-left-extra">
            <div class="breadcrumb"><?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?></div>

            <div class="clearfix"></div>


            <h2><?php the_title(); ?></h2>

            <?php the_content(); ?>


            <?php edit_post_link('Edit this page','<span class="edit-button">','</span>'); ?>

            <div class="clearfix"></div>
        </div>






    </div>



    <?php

    if (is_page("shakespeares-will")){


        ?>

        <div class="container-fluid padding base dark-grey-bg">
            <div class="padding padding-extra-big">


                <?php

                $parent = $post->ID;
                $Dquery = new WP_Query();
                $Dquery->query('orderby=menu_order&order=ASC&post_parent='.$parent.'&post_type=page');

                $Dcount = $Dquery->post_count;
        if ($Dcount >= 1) {
                ?>

                <div class="document-slides">
                  <h2>Explore Shakespeare's will</h2>
                    <div class="clearfix-padding"></div>
                    <span id="slider-prev"></span>
                    <span id="slider-next"></span>
                    <div class="bxslider">
                        <!-- thumbs go here -->
                        <?php
                        while ($Dquery->have_posts()) : $Dquery->the_post();


                            $image_id = get_post_thumbnail_id();
                            $image_url = wp_get_attachment_image_src($image_id, 'medium', false);
                            $image_src = fix_internal_url($image_url[0]);

                            ?>
                            <a href="<?php echo get_page_link($Dquery->ID);  ?>" title="View <?php echo get_the_title( $Dquery->ID );?>">
                                <div class="document-slide-thumb" <?php printf('style="background-image: url(%s)"', $image_src); ?>>
                                    <div class="slide-title dark-grey-bg"><p><?php echo get_the_title( $Dquery->ID );?></p></div>


                                </div>

                            </a>

                        <?php
                        endwhile;
                        wp_reset_postdata();
                        }
                        ?>
                        <!-- thumbs go here -->

                    </div>




                </div>


                <div class="clearfix-padding"></div>



        </div>

        </div>

    <?php }?>

    <!-- social -->
    <div class="container-fluid light-grey-bg grey-left-border">
        <div class="half padding padding-left-extra float-left equalbox">

            <?php if (function_exists('dynamic_sidebar') || dynamic_sidebar('Exhibition Address')) : ?>
                <?php dynamic_sidebar( 'Social' ); ?>

            <?php endif; ?>
        </div>
        <div class="half text-left padding-big-pc float-left equalbox">

            <span class='st_twitter_large' displayText='Tweet'></span>
            <span class='st_facebook_large' displayText='Facebook'></span>
            <span class='st_googleplus_large' displayText='Google +'></span>
            <span class='st_pinterest_large' displayText='Pinterest'></span>
            <span class='st_email_large' displayText='Email'></span>
            <span class='st_sharethis_large' displayText='ShareThis'></span>

        </div>

    </div>

    <!-- social -->

<?php endwhile; ?>

<?php else: ?>
    <div class="container-fluid ">
        <div class="half green-left-border padding padding-left-extra float-left">
            <h2>Sorry</h2>

            <p>We couldn't find that page. Return to the <a href="/">homepage</a>.</p>
        </div>
    </div>

<?php endif; ?>




<?php get_footer(); ?>
