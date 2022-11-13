<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--    <title>Document</title>-->      <!-- Removed, since it's invoked via php function -->
    <?php wp_head() ?>  <!-- Fire wp_head action https://developer.wordpress.org/reference/functions/wp_head/  -->
</head>
<body>

<header>
    <div class="container">
        <div class="row align-items-center">
            <!-- Bootstrap splits the screen in 12 -->
            <div class="col-4">
                <img src="<?php echo get_template_directory_uri()?>/assets/img/logo.png" alt="logo"> <!-- alt https://www.w3schools.com/tags/att_img_alt.asp-->
                <!-- get_template_directory_uri() Returns the active theme URL https://developer.wordpress.org/reference/functions/get_template_directory_uri/ -->
            </div>
            <div class="col-8">
                <nav>
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'top_menu',
                            'menu_class'    => 'menu-principal',
                            'container_class' => 'container-menu',
                        )
                    ); 
                    ?>
                </nav>
            </div>
        </div>
    </div>
</header>
    
