<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <link href="/wp-content/themes/bmws/css/ie.css" rel="stylesheet">
        <![endif]-->
	</head>
	<body>



    <div class="wrapper">

        <nav class="navbar navbar-inverse navbar-fixed-top">
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
<!--                        <li><a href="/a-life-in-writing/">A life in writing</a></li>-->

                    </ul>

                </div>


            </div>
        </nav>
        <div class="container-fluid base-bg green-left-border info">

            <div class="half float-left padding-left-small">
                <div class="float-left padding-top-medium">
                    <img src="<?php bloginfo('template_directory'); ?>/images/bmws-by-me-william-shakespeare.png" title="By me William Shakespeare" class="info-img">
                </div>
                <div class="float-left padding-top-medium padding-left-small">
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
                        src="<?php bloginfo('template_directory'); ?>/images/bmws-the-national-archives-logo.png" alt="The National Archives' logo"></a><a
                    href="http://www.kcl.ac.uk/" target="_blank" title="Visit the King's College London website"><img
                        src="<?php bloginfo('template_directory'); ?>/images/bmws-kings-college-london.png" alt="Kings College London logo"></a>
            </div>
        </div>

