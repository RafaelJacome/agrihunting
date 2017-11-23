<?php
/* Template name: Homepage */
get_header();

?>

<main>
<?php if( get_field('slider')): 
    $sliders = get_field('slider');
?>
    <section class="mainSlider">
        <div class="icon prev">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
        </div>
        <div class="icon next">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
        </div>
        <div class="slider">
            <?php foreach( $sliders as $slider ): 
                if($slider['url']): 
                ?>  
                <a href="<?= $slider['url']; ?>">
                <?php endif; ?>
                    <div>
                        <img src="<?= $slider['imagen']; ?>" class="desktop" alt="slider">
                        <img src="<?= $slider['imagen_mobile']; ?>" class="mobile" alt="slider">
                    </div>
                <?php if($slider['url']): ?>  
                    </a>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </section>
  <?php endif; ?>

<?php if( get_field('cards') ): 
$cards = get_field('cards');
?>
  <section class="cards">
    <div class="container">
      <div class="columns is-multiline">

       <?php foreach( $cards as $card ): ?>
         <div class="column is-3-desktop is-half-tablet is-12-mobile">
          <a href="<?= $card['url'] ?>">
            <div class="content">
              <div class="picture">
                <img src="<?= $card['imagen'] ?>">
              </div>
              <div class="card-title">
                <h2><?= $card['titulo'] ?></h2>
              </div>
            </div>
          </a>
        </div>
       <?php endforeach; ?>
        
      </div>
    </div>
  </section>

<?php endif; ?>

  <section class="info">
    <div class="container">
      <div class="columns">
        <div class="column is-half has-vertical-centered has-text-centered-mobile">
          <div>
            <h2><?= get_field('titulo'); ?></h2>
            <h3><?= get_field('subtitulo'); ?></h1>
          </div>
        </div>
        <div class="column is-half has-vertical-centered">
          <div>
            <div class="has-text-centered-mobile">
              <a href="<?= get_field('url_del_boton'); ?>" class="btn"><?= get_field('texto_del_boton'); ?></a>
            </div>
            <p><?= get_field('titutlo_de_la_lista'); ?></p>
            <ol>
                <?php $items = get_field('lista'); 
                foreach( $items as $item ): ?>
                <li><?= $item['item'] ?></li>
              <?php endforeach; ?>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php if( get_field('carousel')): 
$items = get_field('carousel');
?>
  <section class="corousel">  
    <div class="container">
      <div class="circle-icon prev">
        <i class="fa fa-chevron-left" aria-hidden="true"></i>
      </div>
      <div class="circle-icon next">
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
      </div>
      <h2><?= get_field('titulo_carousel') ?></h2>
      <div class="marcas">
        <?php foreach( $items as $item ): ?>
            <div>
            <?php if($item['link']): ?>
            <a href="<?= $item['link'] ?>" target="_blank">
            <?php endif; ?>
            <img src="<?= $item['item'] ?>" alt="logo">
            <?php if($item['link']): ?>
              </a>
            <?php endif; ?>
            </div>
        <?php endforeach; ?>

      </div>
    </div>
  </section>
<?php endif; ?>
</main>

<?php get_footer(); ?>
