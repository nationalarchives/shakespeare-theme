

<?php

/*
 Template Name: Posts
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
            <?php edit_post_link(); ?>
            <?php the_content(); ?>




            <div class="clearfix"></div>
        </div>






    </div>



    <?php

    if (is_page("shakespeares-will")){

        $image_id = get_post_thumbnail_id($page->ID);
        $image_high = wp_get_attachment_image_src($image_id,'full', false);
        $image_med = wp_get_attachment_image_src($image_id,'medium', false);

        ?>

        <div class="container-fluid padding base dark-grey-bg">

            <h2>Explore Shakespeare's will</h2>

            <div class="zoom-viewer">

                <div class="zoom-controls">
                    <div mag-ctrl="controls">
                        <button mag-ctrl-zoom-by="0.5" title="Zoom in"><i class="fa fa-plus fa-2x"></i></button>
                        <button mag-ctrl-zoom-by="-0.5" title="Zoom out"><i class="fa fa-minus fa-2x"></i></button>
                        <button mag-ctrl-move-by-y="-0.5" title="Move up"><i class="fa fa-caret-up fa-2x"></i></button>
                        <button mag-ctrl-move-by-y="0.5" title="Move down"><i class="fa fa-caret-down fa-2x"></i></button>
                        <button mag-ctrl-move-by-x="-0.5" title="Move left"><i class="fa fa-caret-left fa-2x"></i></button>
                        <button mag-ctrl-move-by-x="0.5" title="Move right"><i class="fa fa-caret-right fa-2x"></i></button>
                        <button mag-ctrl-fullscreen title="View fullscreen"><i class="fa fa-expand fa-2x"></i></button>


                    </div></div>

                <div mag-thumb="controls">
                   <img src="<?php echo($image_med[0]); ?>" class="zoom-thumb"/>

                </div>
                <div mag-zoom="controls">
                    <img src="<?php echo($image_high[0]); ?>" />
                </div>




            </div>

            <a href="<?php echo($image_high[0]); ?>" target="_blank" class="button">View full image</a>


            <div class="clearfix-padding"></div>

        </div>



    <?php }?>



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
