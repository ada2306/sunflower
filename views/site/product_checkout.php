<?php

/** @var yii\web\View $this */

/** @var app\controllers\SiteController $basket */
/** @var app\controllers\SiteController $model */

/** @var yii\widgets\ActiveForm $form */


use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = 'Магазин';
?>


<!--== Start Page Header Area Wrapper ==-->
<!--== End Page Header Area Wrapper ==-->

<!--== Start Shopping Checkout Area Wrapper ==-->

<section class="shopping-checkout-wrap section-space">
    <form action="#" method="post">
    <?php $form = ActiveForm::begin(); ?>
    <div class="container">
        <div class="checkout-page-coupon-wrap">
            <!--== Start Checkout Coupon Accordion ==-->
            <div class="coupon-accordion" id="CouponAccordion">
                <div class="card">

                    <div id="couponaccordion" class="collapse" data-bs-parent="#CouponAccordion">
                        <div class="card-body">
                            <div class="apply-coupon-wrap">
                                <p>If you have a coupon code, please apply it below.</p>
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Coupon code">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="button" class="btn-coupon">Apply coupon</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Checkout Coupon Accordion ==-->
        </div>
        <div class="row">


            <div class="col-lg-6">
                <!--== Start Billing Accordion ==-->
                <div class="checkout-billing-details-wrap">
                    <h2 class="title">Billing details</h2>
                    <div class="billing-form-wrap">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f_name">ФИО</label>
                                        <input id="f_name" type="text" class="form-control"
                                               value="<?= Yii::$app->user->identity->fio ?>" disabled>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="street-address">Адрес</label>
                                        <input id="street-address" type="text" class="form-control"
                                               value="<?= Yii::$app->user->identity->address ?>" disabled>
                                    </div>

                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input id="phone" type="text" class="form-control"
                                               value="<?= Yii::$app->user->identity->phone ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="text" class="form-control"
                                               value="<?= Yii::$app->user->identity->email ?>" disabled>
                                    </div>
                                </div>

                                <div class="col-md-12">

                                    <div class="form-group mb-0">
                                        <?= $form->field($model, 'description')->textarea() ?>
                                        <? /*= $form->field($model, 'date')->textInput() */ ?>

                                    </div>

                                </div>


                            </div>


                    </div>
                </div>
                <!--== End Billing Accordion ==-->
            </div>
            <div class="col-lg-6">
                <!--== Start Order Details Accordion ==-->
                <div class="checkout-order-details-wrap">
                    <div class="order-details-table-wrap table-responsive">

                        <h2 class="title mb-25">Your order</h2>
                        <table class="table">

                            <thead>
                            <tr>
                                <th class="product-name">Product</th>
                                <th class="product-total">Total</th>
                            </tr>
                            </thead>
                            <tbody class="table-body">
                            <?php foreach ($basket['products'] as $id => $item): ?>
                                <tr class="cart-item">

                                    <td class="product-name"> <?= $item['name']; ?><span
                                                class="product-quantity">× <?= $item['count']; ?></span></td>
                                    <td class="product-total"><?= $item['price']; ?>₽</td>

                                </tr>
                            <?php endforeach; ?>

                            </tbody>
                            <tfoot class="table-foot">
                            <tr class="order-total">
                                <th>Total</th>

                                <td><?= $basket['amount']; ?>₽</td>
                            </tr>
                            </tfoot>
                        </table>


                        <div class="shop-payment-method">

                            <p class="p-text">Your personal data will be used to process your order, support your
                                experience throughout this website, and for other purposes described in our <a
                                        href="#/">privacy policy.</a></p>
                            <div class="agree-policy">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" id="privacy" class="custom-control-input visually-hidden">
                                    <label for="privacy" class="custom-control-label">I have read and agree to the
                                        website terms and conditions <span class="required">*</span></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                            </div>
                            <!--<a href="account.html" class="btn-place-order">Place order</a>-->
                        </div>
                    </div>
                </div>
                <!--== End Order Details Accordion ==-->
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
    </form>


</section>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

<?= $form->field($model, 'date')->textInput() ?>

<?= $form->field($model, 'id_user')->textInput() ?>

<?= $form->field($model, 'over_price')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'count')->textInput() ?>

<div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>

