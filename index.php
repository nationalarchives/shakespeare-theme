

<?php



get_header(); ?>



<?php if (have_posts()): while (have_posts()) : the_post();



    if ( has_post_thumbnail()) {

    $image_id = get_post_thumbnail_id($page->ID);
    $image_high = wp_get_attachment_image_src($image_id, 'full', false);
    $image_high = fix_internal_url($image_high[0]);

        ?>
<div  style="background-image: url(<?php echo($image_high); ?>);" class="jumbotron main will-banner">
        <?php


    }else{

    ?>
    <div class="jumbotron main will-banner">

            <?php }?>





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

