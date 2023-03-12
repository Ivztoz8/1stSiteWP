<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?> >

    

    <div class="hero" style="background: url(<?php echo header_image() ?>); no-repeat center center; background-size:cover;">

        <header class="header">

            <a href="<?php echo home_url(); ?>"  class="logo"> <?php bloginfo( 'title' ); ?></a>
            
            <nav class="menu">

                <?php 
                wp_nav_menu( array(
                    'theme_location' => 'header',
                    'container' => false,
                    'item_wrap' => '<ul>%3$s</ul>'
                ) );
                
                ?>
            </nav>
            
        </header>  


        <?php if(is_home()){?>
            
            <h1><?php bloginfo( 'name' ); ?></h1>
        
            <?php }; ?>
        <?php if(is_page()){?>
       
            <h1><?php the_title();?></h1>
        
        <?php }; ?>
    </div>




