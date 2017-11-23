<?php
/* Template name: Custom Page Servicios */
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
                        <?php the_field('breadcrumbs'); ?>
                    </div>
                </section>
                <section class="grid">
                    <div class="container">
                        <div class="has-text-centered">
                           <a href="https://www.facebook.com/Bugshunting/" target="_blank"><img src="<?= get_template_directory_uri(); ?>/dist/img/bugshunting_logo.png" /></a>
                        </div>
                        <br><br>
                        <h1 class="title has-text-centered"><?php the_field('titulo'); ?></h1>
                        <div class="columns is-multiline">
                            
                            <?php 
                                $categories = get_field('servicios');
                                foreach ( $categories as $category ) { 
                                   
                            ?>
                                <div class="column is-4 categories">
                                    <div class="item_content">
                                        <a href="<?= $category['url'] ?>">
                                            <div class="picture">
                                                <img src="<?= $category['imagen'] ?>" alt="image">
                                            </div>
                                            <div class="item-title">
                                                <p><?= $category['titulo'] ?></p>
                                            </div>
                                        </a>
                                        <a href="<?= $category['url'] ?>" class="link">
                                            ver más
                                        </a>
                                    </div>
                                </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>


 <?php get_footer(); ?>