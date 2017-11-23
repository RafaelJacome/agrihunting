<?php
/* Template name: Servicios */
 get_header(); ?>

<main  class="servicios">
    <div class="container">
        <div class="columns is-marginless">
            <div class="column is-3 aside">
                <?php get_sidebar(); ?>
            </div>
            <div class="column is-9">
                <section class="breadcrumbs">
                    <div class="container">
                        <?php the_breadcrumbs(); ?>
                    </div>
                </section>
                <section class="grid">
                    <div class="container">
                        <div class="has-text-centered">
                           <a href="https://www.facebook.com/Bugshunting/" target="_blank"><img src="<?= get_template_directory_uri(); ?>/dist/img/bugshunting_logo.png" /></a>
                        </div>
                        <br><br>
                        <h1 class="title has-text-centered"><?php the_title(); ?></h1>
                        <div class="columns is-multiline">
                            
                            <?php 
                                $categories = get_categories( array(
                                    'orderby' => 'name',
                                    'parent'  => 0
                                ));
                                foreach ( $categories as $category ) { 
                                    if($category->term_id != -1){
                            ?>
                                <div class="column is-4 categories">
                                    <div class="item_content">
                                        <a href="<?= get_home_url(); ?>/category/<?php echo $category->slug; ?>">
                                            <div class="picture">
                                                <img src="<?php echo z_taxonomy_image_url($category->term_id); ?>" alt="image">
                                            </div>
                                            <div class="item-title">
                                                <p><?php echo $category->name ?></p>
                                            </div>
                                        </a>
                                        <a href="<?= get_home_url(); ?>/category/<?php echo $category->slug; ?>" class="link">
                                            ver más
                                        </a>
                                    </div>
                                </div>
                            <?php
                                } }
                            ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>


 <?php get_footer(); ?>