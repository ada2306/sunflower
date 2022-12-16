<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = Yii::$app->name;

/** @var app\controllers\SiteController $products */
/** @var app\controllers\SiteController $products_akc */


?>


<main class="main-content">
    <!--== Start Hero Area Wrapper ==-->
    <section class="hero-two-slider-area position-relative">
        <div class="swiper hero-two-slider-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide hero-two-slide-item">
                    <div class="container">
                        <div class="row align-items-center position-relative">
                            <div class="col-12 col-md-6">
                                <div class="hero-two-slide-content">
                                    <div class="hero-two-slide-text-img"><img src="/web/images/slider/text-light.webp"
                                                                              width="427" height="232" alt="Image">
                                    </div>
                                    <h2 class="hero-two-slide-title">Свежие цветы</h2>
                                    <p class="hero-two-slide-desc">Свежие и красивые букеты на заказ на любые
                                        праздники.</p>
                                    <div class="hero-two-slide-meta">
                                        <a class="btn btn-border-primary" href="/web/site/product">Посмотреть</a>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="hero-two-slide-thumb">
                                    <img src="/web/images/slider/slider.png" width="690" height="690" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide hero-two-slide-item">
                    <div class="container">
                        <div class="row align-items-center position-relative">
                            <div class="col-12 col-md-6">
                                <div class="hero-two-slide-content">
                                    <div class="hero-two-slide-text-img"><img src="/web/images/slider/text-light.webp"
                                                                              width="427" height="232" alt="Image">
                                    </div>
                                    <h2 class="hero-two-slide-title">Быстрая доставка</h2>
                                    <p class="hero-two-slide-desc">Быстрая доставка в любую точку города. Фотоотчёт
                                        перед отправкой, а также экспресс-доставка при срочности.</p>
                                    <div class="hero-two-slide-meta">
                                        <a class="btn btn-border-primary" href="/web/site/product">Посмотреть</a>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="hero-two-slide-thumb">
                                    <img src="/web/images/slider/slider2.png" width="690" height="690" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== Add Pagination ==-->
            <div class="hero-two-slider-pagination"></div>
        </div>
    </section>
    <!--== End Hero Area Wrapper ==-->

    <!--== Start Product Banner Area Wrapper ==-->
    <section class="section-space">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <!--== Start Product Category Item ==-->
                    <a href="/web/site/product" class="product-banner-item">
                        <img src="/web/images/shop/banner/1.png" width="370" height="370" alt="Image-HasTech">
                    </a>
                    <!--== End Product Category Item ==-->
                </div>
                <div class="col-sm-6 col-lg-4 mt-sm-0 mt-6">
                    <!--== Start Product Category Item ==-->
                    <a href="/web/site/product" class="product-banner-item">
                        <img src="/web/images/shop/banner/2.png" width="370" height="370" alt="Image-HasTech">
                    </a>
                    <!--== End Product Category Item ==-->
                </div>
                <div class="col-sm-6 col-lg-4 mt-lg-0 mt-6">
                    <!--== Start Product Category Item ==-->
                    <a href="/web/site/product" class="product-banner-item">
                        <img src="/web/images/shop/banner/3.png" width="370" height="370" alt="Image-HasTech">
                    </a>
                    <!--== End Product Category Item ==-->
                </div>
            </div>
        </div>
    </section>
    <!--== End Product Banner Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="section-space pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="title">Новинки</h2>
                        <p class="m-0">Новинки нового сезона.</p>
                    </div>
                </div>
            </div>

            <div class="row mb-n4 mb-sm-n10 g-3 g-sm-6">

                <?php
                foreach ($products as $product) {
                    echo '
                <div class="col-6 col-lg-4 mb-4 mb-sm-9">
            
                    <!--== Start Product Item ==-->
                    <div class="product-item product-st2-item">
                        <div class="product-thumb">
                            <a class="d-block" href="/web/site/product_details">
                                <img src="' . $product->image . '" width="370" height="450" alt="Image-HasTech">
                            </a>
                            <span class="flag-new">Новинка</span>
                        </div>
                        <div class="product-info">
                            
                            <h4 class="title"><a href="/web/site/product_details">' . $product->name . '</a></h4>
                            <div class="prices">
                                <span class="price">' . $product->price . ' ₽</span>
                            </div>
                            <div class="product-action">
                                <form method="post"
                                          action="' . Url::to(['basket/add']) . '">
                                        <input type="hidden" name="id"
                                               value="' . $product['id'] . '">
                                                                    ' .
                        Html::hiddenInput(
                            Yii::$app->request->csrfParam,
                            Yii::$app->request->csrfToken
                        )
                        . '
                                        <button type="submit" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                            <i class="fa fa-shopping-cart"></i>
                                            В корзину
                                        </button>
                                    </form>
                                <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                    <i class="fa fa-expand"></i>
                                </button>
                                <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                    <i class="fa fa-heart-o"></i>
                                </button>
                            </div>
                            <div class="product-action-bottom">
                                <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                    <i class="fa fa-expand"></i>
                                </button>
                                <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                    <i class="fa fa-heart-o"></i>
                                </button>
                                <form method="post"
                                          action="' . Url::to(['basket/add']) . '">
                                        <input type="hidden" name="id"
                                               value="' . $product['id'] . '">
                                                                    ' .
                        Html::hiddenInput(
                            Yii::$app->request->csrfParam,
                            Yii::$app->request->csrfToken
                        )
                        . '
                                        <button type="submit" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                            <i class="fa fa-shopping-cart"></i>
                                            В корзину
                                        </button>
                                    </form>
                            </div>
                        </div>
                    </div>
                    <!--== End product Item ==-->
                    
                    

            </div>
                ';
                }
                ?>
            </div>


        </div>
    </section>
    <!--== End Product Area Wrapper ==-->

    <!--== Start Product Banner Area Wrapper ==-->
    <section class="section-space pt-0">
        <div class="container">
            <!--== Start Product Category Item ==-->
            <a href="/web/site/product" class="product-banner-item">
                <img src="/web/images/shop/banner/7.webp" width="1170" height="240" alt="Image-HasTech">
            </a>
            <!--== End Product Category Item ==-->
        </div>
    </section>
    <!--== End Product Banner Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="section-space pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="title">Акция</h2>
                        <p class="m-0">Скидки 15% на новую коллекцию</p>
                    </div>
                </div>
            </div>



            <div class="row mb-n4 mb-sm-n10 g-3 g-sm-6">

                <!--== Start Product Item ==-->

                <?php
                foreach ($products_akc as $product) {
                    echo '

                     <div class="col-6 col-lg-4 mb-4 mb-sm-10">
                    
                    <div class="product-item product-st2-item">
                        <div class="product-thumb">
                            <a class="d-block" href="/web/site/product_details">
                                <img src="' . $product->image . '" width="370" height="450" alt="Image-HasTech">
                            </a>
                            <span class="flag-new">SALE</span>
                        </div>
                        <div class="product-info">
                           
                            <h4 class="title"><a href="/web/site/product_details">' . $product->name . '</a></h4>
                            <div class="prices">
                                <span class="price">' . $product->price . ' ₽</span>
                            </div>
                            <div class="product-action">
                                <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal"
                                        data-bs-target="#action-CartAddModal">
                                    <span>В корзину</span>
                                </button>
                                <button type="button" class="product-action-btn action-btn-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                    <i class="fa fa-expand"></i>
                                </button>
                                <button type="button" class="product-action-btn action-btn-wishlist"
                                        data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                    <i class="fa fa-heart-o"></i>
                                </button>
                            </div>
                            <div class="product-action-bottom">
                                <button type="button" class="product-action-btn action-btn-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                    <i class="fa fa-expand"></i>
                                </button>
                                <button type="button" class="product-action-btn action-btn-wishlist"
                                        data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                    <i class="fa fa-heart-o"></i>
                                </button>
                                <form method="post"
                                          action="' . Url::to(['basket/add']) . '">
                                        <input type="hidden" name="id"
                                               value="' . $product['id'] . '">
                                                                    ' .
                        Html::hiddenInput(
                            Yii::$app->request->csrfParam,
                            Yii::$app->request->csrfToken
                        )
                        . '
                                        <button type="submit" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                            <i class="fa fa-shopping-cart"></i>
                                            В корзину
                                        </button>
                                    </form>
                            </div>
                        </div>
                    </div>
                    <!--== End prPduct Item ==-->
                                </div>


                    ';
                }
                ?>


        </div>
        </div>
    </section>
    <!--== End Product Area Wrapper ==-->

    <!--== Start Brand Logo Area Wrapper ==-->
    <div class="section-space pt-0">
        <div class="container">
            <div class="swiper brand-logo-slider-container">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide brand-logo-item">
                        <!--== Start Brand Logo Item ==-->
                        <img src="/web/images/brand-logo/1.webp" width="155" height="110" alt="Image-HasTech">
                        <!--== End Brand Logo Item ==-->
                    </div>
                    <div class="swiper-slide brand-logo-item">
                        <!--== Start Brand Logo Item ==-->
                        <img src="/web/images/brand-logo/2.webp" width="241" height="110" alt="Image-HasTech">
                        <!--== End Brand Logo Item ==-->
                    </div>
                    <div class="swiper-slide brand-logo-item">
                        <!--== Start Brand Logo Item ==-->
                        <img src="/web/images/brand-logo/3.webp" width="147" height="110" alt="Image-HasTech">
                        <!--== End Brand Logo Item ==-->
                    </div>
                    <div class="swiper-slide brand-logo-item">
                        <!--== Start Brand Logo Item ==-->
                        <img src="/web/images/brand-logo/4.webp" width="196" height="110" alt="Image-HasTech">
                        <!--== End Brand Logo Item ==-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Brand Logo Area Wrapper ==-->

    <!--== Start Blog Area Wrapper--==
    <section class="section-space pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title">Blog posts</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis</p>
                    </div>
                </div>
            </div>
            <div class="row mb-n9">
                <div class="col-sm-6 col-lg-4 mb-8">
                    <!--== Start Blog Item ==--
                    <div class="post-item">
                        <a href="blog-details.html" class="thumb">
                            <img src="/web/images/blog/1.webp" width="370" height="320" alt="Image-HasTech">
                        </a>
                        <div class="content">
                            <a class="post-category" href="blog.html">beauty</a>
                            <h4 class="title"><a href="blog-details.html">Lorem ipsum dolor sit amet consectetur adipiscing.</a></h4>
                            <ul class="meta">
                                <li class="author-info"><span>By:</span> <a href="blog.html">Tomas De Momen</a></li>
                                <li class="post-date">February 13, 2021</li>
                            </ul>
                        </div>
                    </div>
                    <!--== End Blog Item ==--
                </div>
                <div class="col-sm-6 col-lg-4 mb-8">
                    <!--== Start Blog Item ==--
                    <div class="post-item">
                        <a href="blog-details.html" class="thumb">
                            <img src="/web/images/blog/2.webp" width="370" height="320" alt="Image-HasTech">
                        </a>
                        <div class="content">
                            <a class="post-category post-category-two" data-bg-color="#A49CFF" href="blog.html">beauty</a>
                            <h4 class="title"><a href="blog-details.html">Facial Scrub is natural treatment for face.</a></h4>
                            <ul class="meta">
                                <li class="author-info"><span>By:</span> <a href="blog.html">Tomas De Momen</a></li>
                                <li class="post-date">February 13, 2021</li>
                            </ul>
                        </div>
                    </div>
                    <!--== End Blog Item ==--
                </div>
                <div class="col-sm-6 col-lg-4 mb-8">
                    <!--== Start Blog Item ==--
                    <div class="post-item">
                        <a href="blog-details.html" class="thumb">
                            <img src="/web/images/blog/3.webp" width="370" height="320" alt="Image-HasTech">
                        </a>
                        <div class="content">
                            <a class="post-category post-category-three" data-bg-color="#9CDBFF" href="blog.html">beauty</a>
                            <h4 class="title"><a href="blog-details.html">Benefit of Hot Ston Spa for your health & life.</a></h4>
                            <ul class="meta">
                                <li class="author-info"><span>By:</span> <a href="blog.html">Tomas De Momen</a></li>
                                <li class="post-date">February 13, 2021</li>
                            </ul>
                        </div>
                    </div>
                    <!--== End Blog Item ==--
                </div>
            </div>
        </div>
    </section>
    <!--== End Blog Area Wrapper ==-->

    <!--== Start News Letter Area Wrapper ==-->
    <section class="section-space pt-0">
        <div class="container">
            <div class="newsletter-content-wrap" data-bg-img="/web/images/photos/bg1.webp">
                <div class="newsletter-content">
                    <div class="section-title mb-0">
                        <h2 class="title">Подписывайся!</h2>
                        <p>Отправьте свой электронный адрес и получайте новости о наших товарах и скидках.</p>
                    </div>
                </div>
                <div class="newsletter-form">
                    <form>
                        <input type="email" class="form-control" placeholder="напишите свой email">
                        <button class="btn-submit" type="submit"><i class="fa fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--== End News Letter Area Wrapper ==-->

</main>