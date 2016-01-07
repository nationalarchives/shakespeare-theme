

<?php

/*
 Template Name: Documents
 */

get_header(); ?>



<?php if (have_posts()): while (have_posts()) : the_post();

    $featured_image_id = get_post_thumbnail_id($page->ID);
    $featured_image = wp_get_attachment_image_src($featured_image_id,'full', false);

    ?>



    <div style="background-image: url(<?php echo($featured_image[0]); ?>);" class="jumbotron main document-banner">

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
    <div class="clearfix"></div>
<!-- documents go here -->
<div class="container-fluid dark-grey-bg">
  <?php
    $pages = get_pages('sort_column=menu_order&child_of='.$post->ID.'&parent='.$post->ID.'');

    foreach($pages as $page)
    {
        $title = $page->post_title;
        $thumb_id = get_post_thumbnail_id($page->ID);
        $thumb_url = wp_get_attachment_image_src($thumb_id,'large', false);


        ?>

    <div class="float-left half padding-left-extra-big">
        <h2> <a href="<?php echo get_page_link($page->ID); ?>" title="<?php echo ($title);?>"><?php echo ($title);?></a></h2>

        <p class="padding-top-medium padding-bottom-medium"><?php if ( empty( $page->post_excerpt ) ) {
        echo first_sentence($page->post_content);
    } else {
        echo $page->post_excerpt;
    }


        ?></p>

        <p><a href="<?php echo get_page_link($page->ID); ?>" title="<?php echo ($title);?>" class="button">Explore this document</a></p>

    </div>
    <div class="float-left half text-center padding">
       <a href="<?php echo get_page_link($page->ID); ?>" title="<?php echo ($title);?>"><div style="background-image: url('<?php echo($thumb_url[0]); ?>');" class="theme"></div></a>
    </div>

    <div class="clearfix-padding-extra"></div>
   <?php
    }

    ?>

    <!-- documents go here -->

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
