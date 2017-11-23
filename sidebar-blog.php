
<?php

global $post;
$args = array( 'posts_per_page' => 10);

$myposts = get_posts( $args );
echo "<h2 class='listItemsTitle'>Temas</h2>";
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
		<a href="<?php the_permalink(); ?>" class="postListItem"><?php the_title(); ?></a>
<?php endforeach; 
wp_reset_postdata();?>
