<?php
/*
 * Страница корзины покупателя, файл views/basket/index.php
 */


use yii\helpers\Html;
use yii\helpers\Url;

?>

<main class="main-content">

    <!--== Start Page Header Area Wrapper ==-->
    <nav aria-label="breadcrumb" class="breadcrumb-style1">
        <div class="container">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
        </div>
    </nav>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="section-space">
        <div class="container">
            <div class="shopping-cart-form table-responsive">

                <?php if (!empty($basket)): ?>
                <form action="<?= Url::to(['basket/update']); ?>" method="post">
                    <?=
                    Html::hiddenInput(
                        Yii::$app->request->csrfParam,
                        Yii::$app->request->csrfToken
                    );
                    ?>
                    <table class="table text-center">
                        <thead>
                        <tr>
                            <th class="product-remove">&nbsp;</th>
                            <th class="product-thumbnail">&nbsp;</th>
                            <th class="product-name">Product</th>
                            <th class="product-price">Price</th>
                            <th class="product-quantity">Quantity</th>
                            <th class="product-subtotal">Total</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php foreach ($basket['products'] as $id => $item): ?>
                            <tr class="tbody-item">
                                <td class="product-remove">
                                    <a href="<?= Url::to(['basket/remove', 'id' => $id]); ?>">
                                        ×
                                    </a>
                                </td>
                                <td class="product-thumbnail">
                                    <div class="thumb">
                                        <a href="single-product.html">
                                            <img src="<?= $item['image']; ?>" width="68" height="84"
                                                 alt="Image-HasTech">
                                        </a>
                                    </div>
                                </td>
                                <td class="product-name">
                                    <a class="title" href="single-product.html"><?= $item['name']; ?></a>
                                </td>
                                <td class="product-price">
                                    <span class="price"><?= $item['price']; ?> ₽</span>
                                </td>
                                <td class="product-quantity">
                                    <div class="pro-qty">
                                        <?=
                                        Html::input(
                                            'text',
                                            'count[' . $id . ']',
                                            $item['count'],
                                            ['class' => 'quantity']
                                        );
                                        ?>
                                    </div>
                                </td>
                                <td class="product-subtotal">
                                    <span class="price"><?= $item['price'] * $item['count']; ?> ₽</span>
                                </td>
                            </tr>

                        <?php endforeach; ?>


                        <tr class="tbody-item-actions">
                            <td colspan="6">
                                <button type="submit"
                                        class="btn-update-cart">
                                    Обновить корзину
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </form>

            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <!--<div class="coupon-wrap">
                        <h4 class="title">Coupon</h4>
                        <p class="desc">Enter your coupon code if you have one.</p>
                        <input type="text" class="form-control" placeholder="Coupon code">
                        <button type="button" class="btn-coupon">Apply coupon</button>
                    </div>-->
                </div>
                <div class="col-12 col-lg-6">
                    <div class="cart-totals-wrap">
                        <h2 class="title">Cart totals</h2>
                        <table>
                            <tbody>
                            <tr class="order-total">
                                <th>Total</th>
                                <td>
                                    <span class="amount"><?= $basket['amount']; ?></span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="text-end">
                            <a href="/web/site/product_checkout" class="checkout-button">Proceed to checkout</a>
                        </div>
                        <?php else: ?>
                            <p>Ваша корзина пуста</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Product Area Wrapper ==-->

</main>