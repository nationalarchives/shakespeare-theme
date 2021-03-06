

<?php

/*
 Template Name: Document Viewer
 */

get_header(); ?>



<?php if (have_posts()): while (have_posts()) : the_post();

    if ( has_post_thumbnail()) {

        $image_id = get_post_thumbnail_id($page->ID);
        $image_high = wp_get_attachment_image_src($image_id, 'full', false);
        $image_med = wp_get_attachment_image_src($image_id, 'thumbnail', false);
        $image_med = fix_internal_url($image_med[0]);
        $image_high = fix_internal_url($image_high[0]);

    }

    ?>



    <div  style="background-image: url(<?php echo($image_high); ?>);" class="jumbotron main document-banner">

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

    if ( has_post_thumbnail()){


        ?>

        <div class="container-fluid padding base dark-grey-bg">
            <div class="padding padding-extra-big">
            <h2>Explore this document</h2>

            <div class="zoom-viewer">

                <div class="zoom-controls">
                    <div mag-ctrl="controls">
                        <button mag-ctrl-zoom-by="0.5" title="Zoom in" id="zoom-in"><i class="fa fa-plus fa-2x"></i></button>
                        <button mag-ctrl-zoom-by="-0.5" title="Zoom out" id="zoom-out"><i class="fa fa-minus fa-2x"></i></button>
                        <button mag-ctrl-move-by-y="-0.1" title="Move up" id="move-up"><i class="fa fa-caret-up fa-2x"></i></button>
                        <button mag-ctrl-move-by-y="0.1" title="Move down" id="move-down"><i class="fa fa-caret-down fa-2x"></i></button>
                        <button mag-ctrl-move-by-x="-0.1" title="Move left" id="move-left"><i class="fa fa-caret-left fa-2x"></i></button>
                        <button mag-ctrl-move-by-x="0.1" title="Move right" id="move-right"><i class="fa fa-caret-right fa-2x"></i></button>
                        <button mag-ctrl-fullscreen title="View fullscreen" id="fullscreen"><i class="fa fa-expand fa-2x"></i></button>


                    </div></div>

                <div mag-thumb="controls">
                   <img src="<?php echo($image_med); ?>" class="zoom-thumb"/>

                </div>
                <div mag-zoom="controls">
                    <img src="<?php echo($image_high); ?>" />
                </div>




            </div>

            <!-- Custom field here -->

            <?php $key="About";

            if ($key) {
                echo get_post_meta($post->ID, $key, true);

            }?>
            <!-- Custom field here -->



            <div class="clearfix-padding"></div>




                <?php
                $transcription = transcription_get_meta( 'transcription_transcription' );

                if ($transcription){
                    echo ("<h2>Transcription</h2>");
                    echo("<div class='separator padding-bottom-medium'></div>");
                    echo (html_entity_decode($transcription));
                    echo("<div class='separator padding-top-medium'></div>");
                }
                ?>

                <div class="clearfix-padding"></div>

                <a href="<?php echo($image_high); ?>" target="_blank" class="button">View full image</a>

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
