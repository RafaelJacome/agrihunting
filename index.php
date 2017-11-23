<?php get_header(); ?>
<main>
  <section class="mainSlider">
    <div class="icon prev">
      <i class="fa fa-angle-left" aria-hidden="true"></i>
    </div>
    <div class="icon next">
      <i class="fa fa-angle-right" aria-hidden="true"></i>
    </div>
    <div class="slider">
      <div>
        <img src="<?= get_template_directory_uri() ?>/dist/img/slider2.jpg" class="desktop" alt="slider">
        <img src="<?= get_template_directory_uri() ?>/dist/img/slider_mobil.jpg" class="mobile" alt="slider">
      </div>
      <div>
        <img src="<?= get_template_directory_uri() ?>/dist/img/slider2.jpg" class="desktop" alt="slider">
        <img src="<?= get_template_directory_uri() ?>/dist/img/slider_mobil.jpg" class="mobile" alt="slider">
      </div>
    </div>
  </section>
  <section class="cards">
    <div class="container">
      <div class="columns">
        <div class="column is-3">
          <a href="/productos-e-insumos/">
            <div class="content">
              <div class="picture">
                <img src="<?= get_template_directory_uri() ?>/dist/img/insumos-img.jpg" alt="insumos">
              </div>
              <div class="card-title">
                <h2>Productos e Insumos</h2>
              </div>
            </div>
          </a>
        </div>
        <div class="column is-3">
          <a href="/servicios/">
            <div class="content">
              <div class="picture">
                <img src="<?= get_template_directory_uri() ?>/dist/img/insumos.png" alt="insumos">
              </div>
              <div class="card-title">
                <h2>Servicos para el<br>hogar e industría</h2>
              </div>
            </div>
          </a>
        </div>
        <div class="column is-3">
          <div class="content">
            <div class="picture">
              <img src="<?= get_template_directory_uri() ?>/dist/img/exportacion-img.jpg" alt="insumos">
            </div>
            <div class="card-title">
              <h2>Cafe de exportación</h2>
            </div>
          </div>
        </div>

        <div class="column is-3">
          <div class="content">
            <div class="picture">
              <img src="<?= get_template_directory_uri() ?>/dist/img/exportacion-img.jpg" alt="insumos">
            </div>
            <div class="card-title">
              <h2>Cafe de exportación</h2>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <section class="info">
    <div class="container">
      <div class="columns">
        <div class="column is-half has-vertical-centered has-text-centered-mobile">
          <div>
            <h2>Compra en línea</h2>
            <h3>Adquiere tus productos o solicita tus sercicios y paga con un sólo clic</h1>
          </div>
        </div>
        <div class="column is-half has-vertical-centered">
          <div>
            <div class="has-text-centered-mobile">
              <a href="/demo/formulario-de-registro/" class="btn">Registrarme</a>
            </div>
            <p>¿Qué ganas con registrarte?</p>
            <ol>
              <li>Si te registras ganas una fumigación de refuerzo o una segunda visita gratis.</li>
              <li>Podrás programar las próximas fumigaciones en linea, tu eliges el día y la hora para fumigar.</li>
              <li>Podrás pagar el servicio con un solo clic.</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="corousel">  
    <div class="container">
      <div class="circle-icon prev">
        <i class="fa fa-chevron-left" aria-hidden="true"></i>
      </div>
      <div class="circle-icon next">
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
      </div>
      <h2>Nuestras Marcas</h2>
      <div class="marcas">
        <div>
          <img src="<?= get_template_directory_uri() ?>/dist/img/fenix_logo.png" alt="logo">
        </div>
        <div>
          <img src="<?= get_template_directory_uri() ?>/dist/img/adama_logo.png" alt="logo">
        </div>
        <div>
          <img src="<?= get_template_directory_uri() ?>/dist/img/bugshunting_logo.png" alt="logo">
        </div>
        <div>
          <img src="<?= get_template_directory_uri() ?>/dist/img/el_patron_logo.png" alt="logo">
        </div>

      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>