<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>
    <body <?php body_class(); ?>>
    <div class="container-fluid">
    <hr>
        <header class="site-header">

            <h1><a href="/"><?php bloginfo('name');?></a></h1>
            <h5><?php bloginfo('description');?></h5>
            
            <nav class="site-nav">

                <?php
                    $args = array(
                        'theme_location' => 'primary'
                    );
                ?>

                <?php wp_nav_menu(); ?>

            </nav>

        </header><!-- end of site-header-->
    <hr>
    
    
    
        
    
    