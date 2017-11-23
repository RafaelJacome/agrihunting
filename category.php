<?php get_header(); ?>
<main  class="servicios">
    <div>
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
                            <img src="<?= get_template_directory_uri(); ?>/dist/img/bugshunting_logo.png" />
                        </div>
                        <br><br>
                        <h1 class="title has-text-centered"><?php echo get_cat_name(get_query_var('cat')); ?></h1>
                        <div class="columns is-multiline">
                
                            <?php $loop = new WP_Query( array( 'post_type' => 'servicios', 'posts_per_page' => 50, 'cat' => get_query_var('cat'), 'order'=> 'DESC' ) ); 
                            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                <div class="column is-4 categories">
                                    <div class="item_content">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="picture">
                                                <img src="<?php if(has_post_thumbnail()){ the_post_thumbnail_url(); }else{ echo 'img.jpg'; } ?>" alt="image">
                                            </div>
                                            <div class="item-title">
                                                <p><?php the_title(); ?></p>
                                            </div>
                                        </a>
                                        <a href="<?php the_permalink(); ?>" class="link">
                                            ver más
                                        </a>
                                    </div>
                                </div>
                            <?php endwhile; wp_reset_query();  ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>


<?php get_footer(); ?>
