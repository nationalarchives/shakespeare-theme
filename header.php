<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title>
            <?php wp_title('|',true,'right'); ?>
            <?php bloginfo('name'); ?>
        </title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php bloginfo('template_directory'); ?>/css/main.css" rel="stylesheet">


        <!-- magnificent.js stylesheets -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/mag.css" />
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/default.css" />
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

        <![endif]-->

        <!--[if lte IE 9]>
        <link href="/wp-content/themes/shakespeare/css/ie.css" rel="stylesheet">
        <![endif]-->

        <script type="text/javascript">var switchTo5x=true;</script>
        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
        <script type="text/javascript">stLight.options({publisher: "e5cdd262-ef8c-4460-b5bb-6be43e502d96", doNotHash: false, doNotCopy: false, hashAddressBar: false, onhover:false});</script>
	</head>
	<body>
    <!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-N69ZKL"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-N69ZKL');</script>
    <!-- End Google Tag Manager -->



    <div class="wrapper">

        <?php if (!is_page_template("holding.php")){?>

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">

                <?php if (function_exists('dynamic_sidebar') || dynamic_sidebar('Ticket URL')) : ?>
                <?php dynamic_sidebar( 'Ticket URL' ); ?>
                <?php endif; ?>



                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li <?php if (is_front_page()){?>class="active"<?php }?>><a href="/">About the exhibition</a></li>
                        <li <?php if (is_page_template("will.php")){?>class="active"<?php }?>><a href="/shakespeares-will/">Shakespeare's will</a></li>

                        <?php if(get_page_by_title('a life in writing')) : ?>




                        <li <?php if (is_page_template("documents.php") or is_page_template("document-viewer.php")){?>class="active"<?php }?>><a href="/a-life-in-writing/">A life in writing</a></li>  <?php endif;?>
                    </ul>

                </div>


            </div>
        </div>
        <div class="container-fluid base-bg green-left-border info">

            <div class="half float-left padding-left-small">
                <div class="half float-left padding-top-small">
                    <img src="<?php bloginfo('template_directory'); ?>/images/bmws-by-me-william-shakespeare-sm.jpg" title="By me William Shakespeare" class="info-img">
                </div>
                <div class="half float-left padding-top-large padding-left-small">
                    <?php if (function_exists('dynamic_sidebar') || dynamic_sidebar('Exhibition Date')) : ?>
                        <b> <?php dynamic_sidebar( 'Exhibition Date' ); ?></b>

                        <?php endif; ?><br>
                    <?php if (function_exists('dynamic_sidebar') || dynamic_sidebar('Exhibition Short Address')) : ?>
                        <?php dynamic_sidebar( 'Exhibition Short Address' ); ?>

                    <?php endif; ?>
                </div>
            </div>
            <div class="half info-logos">

                <a href="http://www.nationalarchives.gov.uk" target="_blank" title="Visit The National Archives' website"><img
                        src="<?php bloginfo('template_directory'); ?>/images/bmws-the-national-archives-logo.png" alt="The National Archives' logo" class="tna-logo"></a><a
                    href="http://www.kcl.ac.uk/" target="_blank" title="Visit the King's College London website"><img
                        src="<?php bloginfo('template_directory'); ?>/images/bmws-kings-college-london.png" alt="Kings College London logo"></a>
            </div>
            <div class="clearfix"></div>
        </div>

<?php }?>