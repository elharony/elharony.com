<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- SEO Essentials -->
    <title>
        <?php is_front_page() ? bloginfo("name") : wp_title("&raquo;", true, "right") . bloginfo("name") ?>
    </title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="keywords" content="Yahya Elharony, Front End Developer, Freelancer Web Developer, Developer in Egypt">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png">

    <!-- Social Media Sharing Details -->
    <meta property="og:title" content="<?php bloginfo("name"); ?>"/>
    <meta property="og:description" content="<?php bloginfo('description'); ?>"/>
    <meta property="og:url" content="https://www.elharony.com"/>
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/Yahya-Elharony-Social-Media-Post-Image.jpg"/>

    <?php wp_head(); ?>
</head>
<body>

        <header>
            <div class="container">
                <nav>
                    <a href="<?php bloginfo("url"); ?>" class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg">
                    </a>
                    <div class="toggle-menu">
                        <span class="open-menu"><i class="fas fa-bars"></i></span>
                        <span class="close-menu"><i class="fas fa-times"></i></span>
                    </div>
                    <?php display_menu() ?>
                </nav>
            </div>
        </header>