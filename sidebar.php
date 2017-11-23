<aside>
    <a href="/demo/">Inicio</a>
    <?php wp_nav_menu(); ?>
    <ul class="items_aside">
        <?php 
            $categories = get_categories( array(
                'orderby' => 'name',
                'parent'  => 0
            ));
            foreach ( $categories as $category ) : ?>
            <li><a href="/category/<?php echo $category->slug; ?>"><?php echo $category->name; ?></a>
            <ul>
                <?php $loop = new WP_Query( array( 'post_type' => 'servicios', 'posts_per_page' => 50, 'cat' => $category->term_id, 'order'=> 'DESC' ) ); 
                    while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    <?php endwhile; wp_reset_query(); ?>
                </ul>
            </li>
        <?php endforeach; ?>
    </ul>

    <p>Paga en linea con tus tarjetas preferidas</p>
    <img src="<?= get_template_directory_uri(); ?>/dist/img/cards.png" />
</aside>