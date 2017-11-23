<?php /* Template name: Blog */
get_header();
global $post;
$args = array( 'posts_per_page' => 10);
?>
<main class="blog">

    <div class="container">
        <h1 class="has-text-centered"><?php the_title(); ?></h1>
        <div class="columns">
            <?php
            $myposts = get_posts( $args );
            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                <div class="column is-half">
                        <a href="<?php the_permalink(); ?>" class="postListItem">
                        <?= get_the_post_thumbnail(); ?>
                        <?php the_title(); ?>
                    </a>
                </div>
            <?php endforeach; 
            wp_reset_postdata();?>
        </div>
    </div>

</main>

<?php get_footer(); ?> 