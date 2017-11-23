<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<main class="search-result">
	<div class="container">
		<div class="page-header">
			<?php if ( have_posts() ) : ?>
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyseventeen' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			<?php else : ?>
				<h1 class="page-title"><?php _e( 'Nothing Found', 'twentyseventeen' ); ?></h1>
			<?php endif; ?>
		</div>
		
		<section class="product-grid grid">
			<div class="columns is-multiline">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php if( get_post_type() == "product" ): ?>
						<div class="column is-4 product-item">
							<div class="box">
								<a href="<?= the_permalink(); ?>">
									<div class="columns">
										<div class="column is-7 info-product">
											<p class="title"><?php the_title(); ?></p>
											<p><?= the_excerpt(); ?></p>
											<p class="price">Precio: <?= woocommerce_template_loop_price(); ?></p>
										</div>
										<div class="column is-5 picture">
											<?= woocommerce_get_product_thumbnail(); ?>
										</div>
									</div>
								</a>
								<?php do_action('woocommerce_simple_add_to_cart'); ?>
							</div>
						</div>
					<?php endif ?>
					<?php if( get_post_type() == "servicios" ): ?>
						<div class="column is-4">
								<div class="item_content">
									<a href="<?php the_permalink(); ?>">
										<div class="picture">
											<img src="<?= the_field('imagen') ?>" alt="image">
										</div>
										<div class="item-title">
											<p><?= the_field('titulo') ?></p>
										</div>
									</a>
									<a href="<?php the_permalink(); ?>" class="link">
										ver más
									</a>
								</div>
							</div>
					<?php endif ?>
				<?php endwhile; // end of the loop. ?>
			</div>
		</section>
	</div>
</main>
<?php get_footer();