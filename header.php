<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yahya Elharony | Front-end Developer</title>

    <?php wp_head(); ?>
</head>
<body>

        <header>
            <div class="container">
                <nav>
                    <a href="#" class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg">
                    </a>
                    <?php display_menu() ?>
                </nav>
            </div>
        </header>