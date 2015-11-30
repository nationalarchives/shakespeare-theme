

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

        $image_id = get_post_thumbnail_id($page->ID);
        $image_high = wp_get_attachment_image_src($image_id,'full', false);
        $image_med = wp_get_attachment_image_src($image_id,'thumbnail', false);

        ?>

        <div class="container-fluid padding base dark-grey-bg">
            <div class="padding padding-extra-big">
            <h2>Explore Shakespeare's will</h2>

            <div class="zoom-viewer">

                <div class="zoom-controls">
                    <div mag-ctrl="controls">
                        <button mag-ctrl-zoom-by="0.5" title="Zoom in"><i class="fa fa-plus fa-2x"></i></button>
                        <button mag-ctrl-zoom-by="-0.5" title="Zoom out"><i class="fa fa-minus fa-2x"></i></button>
                        <button mag-ctrl-move-by-y="-0.1" title="Move up"><i class="fa fa-caret-up fa-2x"></i></button>
                        <button mag-ctrl-move-by-y="0.1" title="Move down"><i class="fa fa-caret-down fa-2x"></i></button>
                        <button mag-ctrl-move-by-x="-0.1" title="Move left"><i class="fa fa-caret-left fa-2x"></i></button>
                        <button mag-ctrl-move-by-x="0.1" title="Move right"><i class="fa fa-caret-right fa-2x"></i></button>
                        <button mag-ctrl-fullscreen title="View fullscreen"><i class="fa fa-expand fa-2x"></i></button>


                    </div></div>

                <div mag-thumb="controls">
                   <img src="<?php echo($image_med[0]); ?>" class="zoom-thumb"/>

                </div>
                <div mag-zoom="controls">
                    <img src="<?php echo($image_high[0]); ?>" />
                </div>




            </div>

            <!-- Custom field here -->

            <?php $key="About";

            if ($key) {
                echo get_post_meta($post->ID, $key, true);

            }?>
            <!-- Custom field here -->
            <div class="clearfix-padding"></div>

            <a href="<?php echo($image_high[0]); ?>" target="_blank" class="button">View full image</a>


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
