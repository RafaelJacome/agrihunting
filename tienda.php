<?php 
/* Template Name: Tienda */
get_header(); ?>
<hr>

<hr>

<?php if ( have_posts() ) : ?>
<?php woocommerce_content(); ?>

<?php endif; ?>

<?php get_footer(); ?>