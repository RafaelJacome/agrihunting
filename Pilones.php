<?php 
/* Template Name: Pilones */
get_header();
?>
<main class="pilones">
    <section>
        <div class="container">
            <div class="has-text-centered">
                <img src="<?= get_template_directory_uri(); ?>/dist/img/el_patron_logo_white.png" />
            </div>
            <h1>En pilones el patrón contamos con diferentes tipos de plantas y especies listas para tu jardín.</h1>
            <p class="bold">Cualidades del café salvadoreño</p>
            <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.</p>

            <p class="bold limited">Solicita mas informacion</p>
            <?= do_shortcode('[weforms id="107"]'); ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>