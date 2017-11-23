<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Agrihunting</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://use.fontawesome.com/dcab95e9c6.js"></script>
  <link rel="icon" href="<?= get_template_directory_uri(); ?>/favicon.png">
  <?php wp_head(); ?>
</head>
<body>
  <nav class="aside-menu" id="aside-menu">
    <div class="cartMobil">
        <a href="<?php echo wc_get_cart_url(); ?>">
            <div class="cart-info">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i><?php echo WC()->cart->get_cart_contents_count(); ?> item(s)<span><?php echo WC()->cart->get_cart_total();  ?></span>
            </div>
        </a>
    </div>
    <?php wp_nav_menu(array( 
        'menu'=>'main-menu',
        'menu_class'=>'aside-menu__list',
    )); ?>

    <div class="has-text-centered userIcon">
        <i class="fa fa-user"></i>
        <br>
        Mi Cuenta
    </div>
    <ul class="aside-menu__list border-top">
       <?php if( is_user_logged_in() ): ?>
            <li><a href="<?= get_home_url(); ?>/my-account/">Escritorio</a></li>
            <li><a href="<?= get_home_url(); ?>/my-account/orders/">Pedidos</a></li>
            <li><a href="<?= get_home_url(); ?>/my-account/edit-address/">Direcciones</a></li>
            <li><a href="<?= get_home_url(); ?>/my-account/edit-account/">Detalles de la cuenta</a></li>
            <li><a href="<?= get_home_url(); ?>/my-account/customer-logout/">Cerrar Sesión</a></li>
        <?php else: ?>
            <li><a href="<?= get_home_url(); ?>/my-account/">Ingresar</a></li>
            <li><a href="<?= get_home_url(); ?>/formulario-de-registro//">Registrarme</a></li>                            
        <?php endif; ?>
    </ul>

	</nav>
    <header id="mainHerader">
        <div class="container headerTop">
            <p class="has-text-right">
                <i class="fa fa-map-marker" aria-hidden="true"></i> Santa Tecla
                <i class="fa fa-phone" aria-hidden="true"></i> Atención al cliente (503) 7582 - 7313
            </p>
        </div>
        <div class="container">
            <div class="is-flex">
                <div class="logo">
                    <a href="<?= get_home_url(); ?>">
                        <img src="<?= get_template_directory_uri() ?>/dist/img/logo.png ?>" alt="">
                    </a>
                </div>
                <div class="store-options">
                    <form action="/" method="GEt">
                        <input type="text" name="s">
                        <input type="submit" value="BUSCAR">
                    </form>
                    <div class="account-btn">
                        <i class="fa fa-user" aria-hidden="true"></i> Mi cuenta <i class="fa fa-angle-down" aria-hidden="true"></i>
                        <ul class="animated fadeIn">
                            <?php if( is_user_logged_in() ): ?>
                            <li><a href="<?= get_home_url(); ?>/my-account/">Escritorio</a></li>
                            <li><a href="<?= get_home_url(); ?>/my-account/orders/">Pedidos</a></li>
                            <li><a href="<?= get_home_url(); ?>/my-account/edit-address/">Direcciones</a></li>
                            <li><a href="<?= get_home_url(); ?>/my-account/edit-account/">Detalles de la cuenta</a></li>
                            <li><a href="<?= get_home_url(); ?>/my-account/customer-logout/">Cerrar Sesión</a></li>
                            <?php else: ?>
                            <li><a href="<?= get_home_url(); ?>/my-account/">Ingresar</a></li>
                            <li><a href="<?= get_home_url(); ?>/formulario-de-registro//">Registrarme</a></li>                            
                            <?php endif; ?>
                        </ul>
                    </div>
                    <a href="<?php echo wc_get_cart_url(); ?>">
                        <div class="cart-info">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i><?php echo WC()->cart->get_cart_contents_count(); ?> item(s)<span><?php echo WC()->cart->get_cart_total();  ?></span>
                        </div>
                    </a>
                </div>
                <a href="#" class="nav-icon">
                    <div id="nav-icon4">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
        <nav class="RJ-nav">
            <div class="container">
                <?php wp_nav_menu(); ?>
            </div>
        </nav>
    </header>
    <div class="nav_space"></div>