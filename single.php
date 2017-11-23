<?php get_header(); ?>
<main class="default-single">
    <div class="container">
        <?php if( get_post_type() == "servicios"): ?>
            <div class="columns">
                <div class="column is-3 aside">
                    <?php get_sidebar(); ?>
                </div>
                <div class="column is-9">
                    <section class="breadcrumbs">
                        <div class="container">
                            <?php the_field('breadcrumbs'); ?>
                        </div>
                    </section>
                    <section>
                        <div class="container">                       
                            <h1>
                                <?php if(get_field('titulo')): 
                                    the_field('titulo');
                                else: 
                                    the_title();
                                endif; ?>
                            </h1>
                            <?php if(get_field('imagen')): ?>
                                <img src="<?= get_field('imagen') ?>" class="banner" />
                            <?php endif; ?>
                            <div class="content_info">
                                <?= get_field('descripcion') ?>
                            </div>
                            <br>
                            
                            <?php if(get_field('formulario')): ?>
                                <h1 class="addCite">Programe su cita <i class="fa fa-plus"></i></h1>
                                <div class="form_servicios">
                                    <?= do_shortcode(get_field('formulario')); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </section>
                </div>
            </div>
        <?php endif; ?>
        <?php if( get_post_type() == "post"): ?>
            <div class="columns">
                <div class="column is-3 aside">
                    <?php get_sidebar('blog'); ?>
                </div>
                <div class="column is-9">

                <?php if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                        <div class="postHeader">
                            <?= get_the_post_thumbnail(); ?>
                            <h1 class="postTitle"><?php the_title(); ?></h1>
                        </div>
                        <div class="postContent"><?php the_content(); ?></div>
                        
                <?php    endwhile;
                endif; ?>
                </div>
                </div>

           <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>