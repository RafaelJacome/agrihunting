<?php 
/* Template name: Registro */
get_header(); ?>
<main class="default-page register-main">
    <div class="container">
    <?php 
    if( is_user_logged_in() ):
    header('Location: /my-account/');
    else:
        if ( have_posts() ) {
            while ( have_posts() ) { the_post(); ?>
               <h1><?php the_title(); ?></h1>
               <p><?php the_content(); ?></p>
        <?php }  }  
    endif;
    ?>
    </div>
</main>

<?php get_footer(); ?>