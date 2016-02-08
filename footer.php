<?php if (!is_page_template("holding.php")){?>

<div class="container-fluid green-left-border ">

    <div class="two-thirds float-left text-left padding">


        <?php if (function_exists('dynamic_sidebar') || dynamic_sidebar('Copyright')) : ?>
            <?php dynamic_sidebar( 'Copyright' ); ?>

        <?php endif; ?>



    </div>

    <div class="one-third float-right padding-extra-big">
        <a href="http://www.shakespeare400.org/" target="_blank" class="border-none"><img
                src="<?php bloginfo('template_directory'); ?>/images/bmws-shakespeare-400.png" title="Visit the Shakespeare400 website" border="0"
                class="s400"></a>
    </div>


    <div class="clearfix"></div>
    <div class="col-lg-12 text-left padding border-top-dotted">
        <p class="float-left padding-right-small"><img
                src="http://www.nationalarchives.gov.uk/images/infoman/ogl-symbol-41px-retina-black.png"></p>

        <p class="float-left padding-left-small">

            <?php if (function_exists('dynamic_sidebar') || dynamic_sidebar('OGL Notice')) : ?>
                <?php dynamic_sidebar( 'OGL Notice' ); ?>

            <?php endif; ?>

        </p>

        <div class="clearfix"></div>
    </div>
</div>

</div>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/scripts.js"></script>




<!-- magnificent.js dependancies -->

<?php

if (is_page_template("will.php")){?>

  <script src="<?php bloginfo('template_directory'); ?>/js/jquery.bxslider.min.js"></script>
   <link href="<?php bloginfo('template_directory'); ?>/css/jquery.bxslider.css" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">



    <script type="text/javascript">
        jQuery(document).ready(function($) {

            var dslider=  $('.bxslider').bxSlider({
                minSlides: 1,
                maxSlides: 4,
                slideWidth: 200,
                slideMargin: 10, pager: true,
                responsive:true,
                preloadImages:'visible',
                controls:true,
                infiniteLoop:false,
                hideControlOnEnd:true,
                pager:true,
                nextSelector: '#slider-next',
                prevSelector: '#slider-prev',
                nextText: '<i class="fa fa-chevron-right fa-2x"></i>',
                prevText: '<i class="fa fa-chevron-left fa-2x"></i>'
            });

        });
        var resizeId;
        $(window).resize(function() {
            clearTimeout(resizeId);
            resizeId = setTimeout(doneResizing, 500);
        });

        function doneResizing(){
            dslider.reloadSlider();
        }


    </script>






<?php }


if (is_page_template("document-viewer.php")){

?>

<script src="<?php bloginfo('template_directory'); ?>/js/jquery.bridget.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.12/jquery.mousewheel.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.event.drag.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/screenfull.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/hammer.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/preventGhostClick.js"></script>

<!-- magnificent.js libraries -->
<script src="<?php bloginfo('template_directory'); ?>/js/mag.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/mag-jquery.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/mag-control.js"></script>
<script>
    window.MAGNIFICENT_OPTIONS = {
        noTrack: true
    };

    (function () {
        var $host;
        var $controls;
        var w = $(window).width();

        $host = $('[mag-thumb="controls"]');

        if (w <= 768) {
            $host.mag({
                mode: 'inner',
                initialShow: 'thumb',
                toggle: false,
                position: 'drag',
                positionEvent: 'move',
                zoomMax: 8,
                smooth: 'true'

            });
        }else{
            $host.mag({
                mode: 'inner',
                initialShow: 'thumb',
                toggle: false,
                position: 'drag',
                positionEvent: 'move',
                zoomMax: 4,
                smooth: 'true'

            });

        }

        $controls = $('[mag-ctrl="controls"]');
        $controls.magCtrl({
            mag: $host
        });

    })();
</script>

<?php }?>

<?php }?>

	</body>
</html>
