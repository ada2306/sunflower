<?php

/** @var yii\web\View $this */

/** @var string $content */

use app\assets\AppAsset;
use app\models\Basket;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => '@web/favicon.ico']);


$basket = (new Basket())->getBasket();


?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html class="no-js" lang="<?= Yii::$app->language ?>">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?= Html::encode($this->title) ?></title>
        <meta name="robots" content="noindex, follow"/>
        <meta name="description" content="Brancy - Cosmetic & Beauty Salon Website Template">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords"
              content="bootstrap, ecommerce, ecommerce html, beauty, cosmetic shop, beauty products, cosmetic, beauty shop, cosmetic store, shop, beauty store, spa, cosmetic, cosmetics, beauty salon"/>
        <meta name="author" content="codecarnival"/>

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="/web/images/icons8-sunflower-64.png">

        <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

        <?php $this->head() ?>
    </head>

    <body>
    <?php $this->beginBody() ?>

    <!--== Wrapper Start ==-->
    <div class="wrapper">

        <!--== Start Header Wrapper ==-->
        <header class="header-area sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-5 col-sm-6 col-lg-3">
                        <div class="header-logo">
                            <a href="/">
                                <img class="logo-main" src="/web/images/logo.png" width="95" height="68" alt="Logo"/>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="header-navigation">
                            <ul class="main-nav justify-content-start">
                                <li class="has-submenu"><a href="/">Главная</a>
                                </li>
                                <li><a href="/web/site/about">О нас</a></li>
                                <li class="has-submenu position-static"><a href="/web/site/product">Магазин</a>

                                </li>
                                <!--<li class="has-submenu"><a href="blog.html">Blog</a>-->
                                </li>
                                <li><a href="/web/site/contact">Контакты</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-7 col-sm-6 col-lg-3">
                        <div class="header-action justify-content-end">
                            <button class="header-action-btn ms-0" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#AsideOffcanvasSearch" aria-controls="AsideOffcanvasSearch">
                                <span class="icon">
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"
                       xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect class="icon-rect" width="30" height="30" fill="url(#pattern1)"/>
                    <defs>
                      <pattern id="pattern1" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_504:11" transform="scale(0.0333333)"/>
                      </pattern>
                      <image id="image0_504:11" width="30" height="30"
                             xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAABiUlEQVRIie2Wu04CQRSGP0G2EUtIbHwA8B3EQisLIcorEInx8hbEZ9DKy6toDI1oAgalNFpDoYWuxZzJjoTbmSXERP7kZDbZ859vdmb27MJcf0gBUAaugRbQk2gBV3IvmDa0BLwA4Zh4BorTACaAU6fwPXAI5IAliTxwBDScvJp4vWWhH0BlTLEEsC+5Fu6lkgNdV/gKDnxHCw2I9rSiNQNV8baBlMZYJtpTn71KAg9SY3dUYn9xezLPgG8P8BdwLteq5X7CzDbnAbXKS42WxtQVUzoGeFlqdEclxXrnhmhhkqR+8KuMqzHA1vumAddl3IwB3pLxVmOyr1NjwKQmURJ4lBp7GmOAafghpg1qdSDeDrCoNReJWmZB4dsAPsW7rYVa1Rx4FbOEw5TEPKmFvgMZX3DCgYeYNniMaQ5piTXghGhPLdTmZ33hYNpem98f/UHRwSxvhqhXx4anMA3/EmhiOlJPJnSBOb3uQcpOE65VhujPpAms/Bu4u+x3swRbeB24mTV4LgB+AFuLedkPkcmmAAAAAElFTkSuQmCC"/>
                    </defs>
                  </svg>
                </span>
                            </button>

                            <button class="header-action-btn" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#AsideOffcanvasCart" aria-controls="AsideOffcanvasCart">
                                <span class="icon">
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"
                       xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect class="icon-rect" width="30" height="30" fill="url(#pattern2)"/>
                    <defs>
                      <pattern id="pattern2" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_504:9" transform="scale(0.0333333)"/>
                      </pattern>
                      <image id="image0_504:9" width="30" height="30"
                             xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAABFUlEQVRIie2VMU7DMBSGvwAqawaYuAmKxCW4A1I5Qg4AA93KBbp1ZUVUlQJSVVbCDVhgzcTQdLEVx7WDQ2xLRfzSvzzb+d6zn2MYrkugBBYevuWsHKiFn2JBMwH8Bq6Aw1jgBwHOYwGlPgT4LDZ4I8BJDNiEppl034UEJ8DMAJ0DByHBACPgUYEugePQUKkUWAmnsaB/Ry/YO9aXCwlT72AdrqaWEohwBWxSwc8ReIVtYIr5bM5pXqO+Men7rozGlkVSv4lJj1WQfsbvXVkNVNk1eEK4ik9/yuwzAPhLh5iuU4jtftMDR4ZJJXChxTJ2H3zXGDgWc43/X2Wro8G81a8u2fXU2nXiLVAxvNIKuPGW/r/2SltF+a3Rkw4pmwAAAABJRU5ErkJggg=="/>
                    </defs>
                  </svg>
                </span>
                            </button>
                            <?php
                            if (Yii::$app->user->isGuest) {
                                echo '
                                <a class="header-action-btn" href="/web/site/login">
                            ';
                            } else {
                                echo '
                            <a class="header-action-btn" href="/web/site/my_account">
                            ';
                            }
                            ?>

                            <span class="icon">
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"
                       xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect class="icon-rect" width="30" height="30" fill="url(#pattern3)"/>
                    <defs>
                      <pattern id="pattern3" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_504:10" transform="scale(0.0333333)"/>
                      </pattern>
                      <image id="image0_504:10" width="30" height="30"
                             xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAABEUlEQVRIie3UMUoDYRDF8Z8psqUpLBRrBS+gx7ATD6E5iSjeQQ/gJUzEwmChnZZaKZiQ0ljsLkhQM5/5Agr74DX7DfOfgZ1Hoz+qAl30Marcx2H1thCtY4DJN76parKqmAH9DM+6eTcArX2QE3yVAO7lBA8TwMNIw6UgeJI46My+rWCjUQL0LVIUBd8lgEO1UfBZAvg8oXamCuWNRu64nRNMmUo/wReSXLXayoDoKc9miMvqW/ZNG2VRNLla2MYudrCFTvX2intlnl/gGu/zDraGYzyLZ/UTjrD6G2AHpxgnAKc9xgmWo9BNPM4BnPYDNiLg24zQ2oNpyFdZvRKZLlGhnvvKPzXXti/Yy7hEo3+iD9EHtgdqxQnwAAAAAElFTkSuQmCC"/>
                    </defs>
                  </svg>
                </span>
                            </a>

                            <button class="header-menu-btn" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#AsideOffcanvasMenu" aria-controls="AsideOffcanvasMenu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--== End Header Wrapper ==-->


        <?= $content ?>


        <!--== Start Footer Area Wrapper ==-->
        <footer class="footer-area">
            <!--== Start Footer Main ==-->
            <div class="footer-main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="widget-item">
                                <div class="widget-about">
                                    <a class="widget-logo" href="index.html">
                                        <img src="/web/images/logo.png" width="95" height="68" alt="Logo">
                                    </a>
                                    <p class="desc">Цветочный магазин "Sunflower". Огромный выбор букетов, цветов на
                                        любые праздники.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5 mt-md-0 mt-9">
                            <div class="widget-item">
                                <h4 class="widget-title">Информация</h4>
                                <ul class="widget-nav">
                                    <li><a href="/shop">Главная</a></li>
                                    <li><a href="/web/site/about">О нас</a></li>
                                    <li><a href="/web/site/product">Магазин</a></li>
                                    <li><a href="/web/site/contact">Контакты</a></li>
                                    <li><a href="account-login">Вход</a></li>
                                    <li><a href="my-account">Личный кабинет</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mt-lg-0 mt-6">
                            <div class="widget-item">
                                <h4 class="widget-title">Соцсети</h4>
                                <div class="widget-social">
                                    <a href="https://www.telegram.org/" target="_blank" rel="noopener"><i
                                                class="fa fa-telegram"></i></a>
                                    <a href="https://vk.com/" target="_blank" rel="noopener"><i
                                                class="fa fa-vk"></i></a>
                                    <a href="https://www.pinterest.com/" target="_blank" rel="noopener"><i
                                                class="fa fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Footer Main ==-->

            <!--== Start Footer Bottom ==-->
            <div class="footer-bottom">
                <div class="container pt-0 pb-0">
                    <div class="footer-bottom-content">
                        <p class="copyright">© 2022. Made with <i class="fa fa-heart"></i></p>
                    </div>
                </div>
            </div>
            <!--== End Footer Bottom ==-->
        </footer>
        <!--== End Footer Area Wrapper ==-->

        <!--== Scroll Top Button ==-->
        <div id="scroll-to-top" class="scroll-to-top"><span class="fa fa-angle-up"></span></div>

        <!--== Start Product Quick Wishlist Modal ==-->
        <aside class="product-action-modal modal fade" id="action-WishlistModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="product-action-view-content">
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                <i class="fa fa-times"></i>
                            </button>
                            <div class="modal-action-messages">
                                <i class="fa fa-check-square-o"></i> Успешно добавлено в корзину
                            </div>
                            <div class="modal-action-product">
                                <div class="thumb">
                                    <img src="/web/images/shop/modal1.webp" alt="Organic Food Juice" width="466"
                                         height="320">
                                </div>
                                <h4 class="product-name"><a href="product_details.php">Readable content DX22</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!--== End Product Quick Wishlist Modal ==-->

        <!--== Start Product Quick Add Cart Modal ==-->
        <aside class="product-action-modal modal fade" id="action-CartAddModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="product-action-view-content">
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                <i class="fa fa-times"></i>
                            </button>
                            <div class="modal-action-messages">
                                <i class="fa fa-check-square-o"></i> Успешно добавлено в корзину
                            </div>
                            <div class="modal-action-product">
                                <div class="thumb">
                                    <img src="/web/images/shop/modal1.webp" alt="Organic Food Juice" width="466"
                                         height="320">
                                </div>
                                <h4 class="product-name"><a href="product_details.php">Readable content DX22</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!--== End Product Quick Add Cart Modal ==-->

        <!--== Start Aside Search Form ==-->
        <aside class="aside-search-box-wrapper offcanvas offcanvas-top" tabindex="-1" id="AsideOffcanvasSearch"
               aria-labelledby="offcanvasTopLabel">
            <div class="offcanvas-header">
                <h5 class="d-none" id="offcanvasTopLabel">Поиск</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i
                            class="fa fa-close"></i></button>
            </div>
            <div class="offcanvas-body">
                <div class="container pt--0 pb--0">
                    <div class="search-box-form-wrap">
                        <div class="search-note">
                            <p>Введите текст и нажмите enter для поиска</p>
                        </div>
                        <form action="#" method="post">
                            <div class="aside-search-form position-relative">
                                <label for="SearchInput" class="visually-hidden">Поиск</label>
                                <input id="SearchInput" type="search" class="form-control" placeholder="Поиск…">
                                <button class="search-button" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </aside>
        <!--== End Aside Search Form ==-->

        <!--== Start Product Quick View Modal ==-->
        <aside class="product-cart-view-modal modal fade" id="action-QuickViewModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="product-quick-view-content">
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                <span class="fa fa-close"></span>
                            </button>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <!--== Start Product Thumbnail Area ==-->
                                        <div class="product-single-thumb">
                                            <img src="/web/images/shop/quick-view1.webp" width="544" height="560"
                                                 alt="Image-HasTech">
                                        </div>
                                        <!--== End Product Thumbnail Area ==-->
                                    </div>
                                    <div class="col-lg-6">
                                        <!--== Start Product Info Area ==-->
                                        <div class="product-details-content">
                                            <h5 class="product-details-collection">Премиум коллекция</h5>
                                            <h3 class="product-details-title">Offbline Instant Age Rewind Eraser.</h3>
                                            <div class="product-details-review mb-5">
                                                <div class="product-review-icon">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                            <p class="mb-6">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                Delectus, repellendus. Nam voluptate illo ut quia non sapiente provident
                                                alias quos laborum incidunt, earum accusamus, natus. Vero pariatur ut
                                                veniam sequi amet consectetur.</p>
                                            <div class="product-details-pro-qty">
                                                <div class="pro-qty">
                                                    <input type="text" title="Quantity" value="01">
                                                </div>
                                            </div>
                                            <div class="product-details-action">
                                                <h4 class="price">$254.22</h4>
                                                <div class="product-details-cart-wishlist">
                                                    <button type="button" class="btn" data-bs-toggle="modal"
                                                            data-bs-target="#action-CartAddModal">В корзину
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--== End Product Info Area ==-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!--== End Product Quick View Modal ==-->

        <!--== Start Aside Cart ==-->
        <aside class="aside-cart-wrapper offcanvas offcanvas-end" tabindex="-1" id="AsideOffcanvasCart"
               aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h1 class="d-none" id="offcanvasRightLabel">Корзина</h1>
                <button class="btn-aside-cart-close" data-bs-dismiss="offcanvas" aria-label="Close">Корзина <i
                            class="fa fa-chevron-right"></i></button>
            </div>
            <div class="offcanvas-body">
                <?php if (!empty($basket)): ?>
                <ul class="aside-cart-product-list">
                    <?php foreach ($basket['products'] as $id => $item): ?>
                        <li class="aside-product-list-item">
                            <a href="#/" class="remove">×</a>
                            <a href="/web/site/product_details">
                                <img src="<?= $item['image']; ?>" width="68" height="84" alt="Image">
                                <span class="product-title"><?= $item['name']; ?></span>
                            </a>
                            <span class="product-price"><?= $item['count']; ?> × <?= $item['price']; ?>₽</span>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <p class="cart-total"><span>Subtotal:</span><span class="amount"><?= $basket['amount']; ?>₽</span></p>
                <a class="btn-total" href="/web/basket">Перейти в корзину</a>
                <a class="btn-total" href="/web/site/product_checkout">Купить</a>
                <?php else: ?>
                    <p>Ваша корзина пуста</p>
                <?php endif; ?>
            </div>
        </aside>
        <!--== End Aside Cart ==-->

        <!-- JS Vendor, Plugins & Activation Script Files -->

        <!-- Vendors JS -->

        <?php $this->endBody() ?>
    </body>

    </html>
<?php $this->endPage() ?>