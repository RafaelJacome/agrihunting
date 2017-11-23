<?php 
/* Template Name: Café de exportacion */
get_header();
?>
<main class="cafe_exportacion">
    <section>
        <div class="container">
            <div class="columns">
                <div class="column is-half">
                    <h1>Aroma agradable y penetrante; taza con bastante sabor y buena textura, mucha acidez y cuerpo.</h1>
                    <p class="bold">Cualidades del café salvadoreño</p>
                    <p>La mayor parte de nuestro café (71%) es cultivado en media y estricta altura, entre los 900 y más de 1,200 metros del nivel del mar, por lo que no es extrañar que sea disfrutado y muy bien aceptado gracias a su buena calidad en Alemania, Estados Unidos, Italia, Francia y Japón. El proceso del café en El Salvador es, sin lugar a dudas, uno de los más tradicionales del mundo, porque la pequeñez del territorio y su densidad poblacional permitió al país atender su cultivo como si se tratara de un jardín.</p>

                    <p class="bold">Adquierelo</p>
                    <?= do_shortcode('[weforms id="99"]'); ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>