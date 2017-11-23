<?php
/* Template name: Control de plagas */
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
                        <h1 class="title no-margin"><?php the_field('titulo'); ?></h1>
                        <p>
                           <?php the_field('descripcion'); ?> 
                        </p>
                        <br><br>
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
                    <br><br>
                    <?php if(get_field('formulario')): ?>
                            <h1 class="title addCite">Programe su cita <i class="fa fa-plus"></i></h1>
                            <div class="form_servicios">
                                <?= do_shortcode(get_field('formulario')); ?>
                            </div>
                    <?php endif; ?>
                </section>
                
            </div>
        </div>
    </div>
</main>


 <?php get_footer(); ?>