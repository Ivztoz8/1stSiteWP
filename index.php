<?php get_header(); ?>

<main class="container">

    

    <?php if(have_posts()) :?><?php while(have_posts()) :  the_post();?>

        <!-- loop content -->

        <article>

        <div class="post-img"> 
            <?php the_post_thumbnail( 'large', array('class' => 'img-res','alt' => get_the_title( )) ); ?>
    
        </div>

           

            <a href="<?php the_permalink(); ?>">
                <h3><?php the_title(); ?></h3>  

                <?php the_excerpt();  ?>     
        
            </a> 

            

        </article>

      

    <?php endwhile; ?>
        <p> <?php previous_post_link( 'Older posts' ); ?> - <?php next_posts_link( 'Newer posts' ); ?> </p>
    <?php else: ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'slug-theme' ); ?></p>
    <?php endif; ?>

</main>



<?php get_footer(); ?>