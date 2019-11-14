<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>viparfum</title>
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
</head>

<body>

    <nav id="vip-navbar" class="container-fluid">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="header-container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/"><?php echo get_bloginfo('name'); ?></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>

                    <div class="header-menu-wrap">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <?php
                            wp_nav_menu(
                                array (
                                    'menu' => 'main-menu',
                                    'container' => false,
                                    'depth' => 2,
                                    'items_wrap' => '<ul class="navbar-nav mr-auto">%3$s</ul>', // removes ul
                                    'walker' => new Vip_Walker // custom walker to replace li with div
                                )
                            );
                            ?>
                        </div>
                    </div>

                    <div class="navbar-cart">
                        <div class="header-search">
                            <div class="header-search-button">
                                <div class="header-search-input">
                                    <form role="search" method="get" class="woocommerce-product-search" action="http://cx26071.tmweb.ru/">
                                        <input type="search" class="search-field" placeholder="Поиск продуктов…" value="" name="s" title="Искать:">
                                        <input type="submit" value="Найти">
                                    </form>
                                </div>
                                <i class="fas fa-search"></i>
                            </div>
                        </div>
                        <div class="navbar-cart-inner">
                            <a href="/cart/" title="Перейти в корзину" class="cart-contents">
                                <i class="icon-basket fas fa-shopping-cart"></i>
                                <span class="cart-item-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </nav>

    <section class="cd-section cd-section--bg-fixed"></section>

    <section id="banners" class="module-small home-banners">
        <div class="container"><div class="row shop_isle_bannerss_section">
                <div class="col-sm-4">
                    <div class="content-box mt-0 mb-0">
                        <div class="content-box-image">
                            <a href="#"><img src="http://cx26071.tmweb.ru/wp-content/themes/vip-shop/assets/images/banner1.jpg"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="content-box mt-0 mb-0">
                        <div class="content-box-image">
                            <a href="#"><img src="http://cx26071.tmweb.ru/wp-content/themes/vip-shop/assets/images/banner2.jpg"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="content-box mt-0 mb-0">
                        <div class="content-box-image">
                            <a href="#"><img src="http://cx26071.tmweb.ru/wp-content/themes/vip-shop/assets/images/banner3.jpg"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
