

<?php

/*
 Template Name: Home
 */

get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post();


    if ( has_post_thumbnail()) {

        $image_id = get_post_thumbnail_id($page->ID);
        $image_high = wp_get_attachment_image_src($image_id, 'full', false);
        $image_high = fix_internal_url($image_high[0]);

    }

    ?>
<div style="background: url(<?php echo($image_high); ?>);" class="jumbotron main main-banner" >


        <h1 class="hidden">By Me William Shakespeare</h1>


    </div>


    <div class="container-fluid green-left-border">
        <div class="one-third float-right">

            <div class="text-center base-bg">
                <div class="vertical-half text-center padding-extra-big base grey-bg">
                    <div class="positioner">




                    <?php if (function_exists('dynamic_sidebar') || dynamic_sidebar('Exhibition Address')) : ?>
                        <?php dynamic_sidebar( 'Exhibition Address' ); ?>

                    <?php endif; ?>
                    </div>

                </div>
                <div class="vertical-half padding-extra-big text-center green-bg action-bg-mobile black">
                    <div class="positioner">

                            <?php if (function_exists('dynamic_sidebar') || dynamic_sidebar('Ticket URL')) : ?>
                                <?php dynamic_sidebar( 'Home Button' ); ?>
                                <div class="clearfix-padding"></div>
                            <?php endif; ?>


                    </div>
                </div>
            </div>
<div class="clearfix"></div>
        </div>
        <div class="two-thirds padding padding-left-extra float-left">
            <h2><?php the_title(); ?></h2>

            <?php the_content(); ?>
            <?php edit_post_link('Edit this page','<span class="edit-button">','</span>'); ?>

        </div>


    </div>

    <!-- /.container -->

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


    <div class="jumbotron will-banner">
        <div class="info-box">


            <?php if (function_exists('dynamic_sidebar') || dynamic_sidebar('Will Introduction')) : ?>
                <?php dynamic_sidebar( 'Will Introduction' ); ?>

            <?php endif; ?>
        </div>


    </div>






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
