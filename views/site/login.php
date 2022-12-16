<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\controllers\SiteController $modelReg */
/** @var app\controllers\SiteController $modelLogin */
/** @var yii\widgets\ActiveForm $form */
?>


<main class="main-content">

    <!--== Start Page Header Area Wrapper ==-->
    <section class="page-header-area pt-10 pb-9" data-bg-color="#FFF3DA">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="page-header-st3-content text-center text-md-start">
                        <ol class="breadcrumb justify-content-center justify-content-md-start">
                            <li class="breadcrumb-item"><a class="text-dark" href="index.html">Главная</a></li>
                            <li class="breadcrumb-item active text-dark" aria-current="page">Аккаунт</li>
                        </ol>
                        <h2 class="page-header-title">Аккаунт</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Account Area Wrapper ==-->
    <section class="section-space">
        <div class="container">
            <div class="row mb-n8">
                <div class="col-lg-6 mb-8">
                    <!--== Start Login Area Wrapper ==-->
                    <div class="my-account-item-wrap">
                        <h3 class="title">Вход</h3>
                        <div class="my-account-form">
                            <?php $form = ActiveForm::begin(); ?>

                                <div class="form-group mb-6">
                                    <?= $form->field($modelLogin, 'email')->textInput(['maxlength' => true]) ?>
                                </div>
                                <div class="form-group mb-6">
                                    <?= $form->field($modelLogin, 'password')->textInput(['maxlength' => true]) ?>
                                </div>

                                <div class="form-group d-flex align-items-center mb-14">
                                    <?= Html::submitButton('Войти', ['class' => 'btn btn-success']) ?>


                                    <div class="form-check ms-3">
                                        <input type="checkbox" class="form-check-input" id="remember_pwsd">
                                        <label class="form-check-label" for="remember_pwsd">Запомнить меня</label>
                                    </div>
                                </div>
                                <a class="lost-password" href="#">Забыли пароль?</a>
                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                    <!--== End Login Area Wrapper ==-->
                </div>
                <div class="col-lg-6 mb-8">
                    <!--== Start Register Area Wrapper ==-->
                    <div class="my-account-item-wrap">
                        <h3 class="title">Регистрация</h3>
                        <div class="my-account-form">
                            <?php $form = ActiveForm::begin(); ?>

                            <?= $form->field($modelReg, 'fio')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($modelReg, 'phone')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($modelReg, 'email')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($modelReg, 'password')->passwordInput(['maxlength' => true]) ?>

                            <?= $form->field($modelReg, 'passwordConfirm')->passwordInput(['maxlength' => true]) ?>

                            <?= $form->field($modelReg, 'address')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($modelReg, 'agree')->checkbox() ?>

                            <div class="form-group">
                                <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-success']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>
                        </div>

                    </div>
                    <!--== End Register Area Wrapper ==-->
                </div>
            </div>
        </div>
    </section>
    <!--== End Account Area Wrapper ==-->

</main>