<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = Yii::$app->name;

/** @var app\controllers\SiteController $orders */


?>
<main class="main-content">


    <!--== Start Page Header Area Wrapper ==-->
    <section class="page-header-area pt-10 pb-9" data-bg-color="#FFF3DA">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="page-header-st3-content text-center text-md-start">
                        <ol class="breadcrumb justify-content-center justify-content-md-start">
                            <li class="breadcrumb-item"><a class="text-dark" href="index.html">Home</a></li>
                            <li class="breadcrumb-item active text-dark" aria-current="page">My Account</li>
                        </ol>
                        <h2 class="page-header-title">My Account</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start My Account Area Wrapper ==-->
    <section class="my-account-area section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="my-account-tab-menu nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="dashboad-tab" data-bs-toggle="tab"
                                data-bs-target="#dashboad" type="button" role="tab" aria-controls="dashboad"
                                aria-selected="true">Dashboard
                        </button>
                        <button class="nav-link" id="orders-tab" data-bs-toggle="tab" data-bs-target="#orders"
                                type="button" role="tab" aria-controls="orders" aria-selected="false"> Orders
                        </button>


                        <button class="nav-link" id="address-edit-tab" data-bs-toggle="tab"
                                data-bs-target="#address-edit" type="button" role="tab" aria-controls="address-edit"
                                aria-selected="false">address
                        </button>
                        <button class="nav-link" id="account-info-tab" data-bs-toggle="tab"
                                data-bs-target="#account-info" type="button" role="tab" aria-controls="account-info"
                                aria-selected="false">Account Details
                        </button>
                        <button class="nav-link" id="account-info-tab" data-bs-toggle="tab"
                                data-bs-target="#account-info" type="button" role="tab" aria-controls="account-info"
                                aria-selected="false">
                            <?= Html::a("Выход", ['site/logout'], [
                                    'data' => [
                                        'method' => 'post'
                                    ],
                                    ['class' => 'white text-center']
                                ]
                            ); ?>
                        </button>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="dashboad" role="tabpanel"
                             aria-labelledby="dashboad-tab">
                            <div class="myaccount-content">
                                <h3>Dashboard</h3>
                                <div class="welcome">
                                    <p>Hello, <strong><?= Yii::$app->user->identity->fio ?></strong></p>
                                </div>
                                <p>From your account dashboard. you can easily check & view your recent orders, manage
                                    your shipping and billing addresses and edit your password and account details.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                            <div class="myaccount-content">
                                <h3>Orders</h3>
                                <div class="myaccount-table table-responsive text-center">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                        <tr>
                                            <th>Заказ</th>
                                            <th>Дата создания</th>
                                            <th>Статус</th>
                                            <th>Сумма</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        foreach ($orders as $order) {
                                            $number = 1;
                                            if ($order->status == 0){
                                                $tekOrder = "Новый ";
                                            }
                                            elseif ($order->status == 1){
                                                $tekOrder = "Подтверждён";
                                            }
                                            else{
                                                $tekOrder = "Отменён";
                                            }
                                            echo '
                                        <tr>
                                            <td>'.$number.'</td>
                                            <td>'.$order->date.'</td>
                                            <td>'.$tekOrder.'</td>
                                            <td>'.$order->over_price.' ₽</td>
                                            
                                        </tr>
                                        ';
                                            $number ++;
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="address-edit" role="tabpanel" aria-labelledby="address-edit-tab">
                            <div class="myaccount-content">
                                <h3>Billing Address</h3>
                                <address>
                                    <p><strong><?= Yii::$app->user->identity->fio ?></strong></p>
                                    <p>Адрес: <?= Yii::$app->user->identity->address ?></p>
                                    <p>Mobile: <?= Yii::$app->user->identity->phone ?></p>
                                </address>
                                <a href="#/" class="check-btn sqr-btn"><i class="fa fa-edit"></i> Edit Address</a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-info" role="tabpanel" aria-labelledby="account-info-tab">
                            <div class="myaccount-content">
                                <h3>Account Details</h3>
                                <div class="account-details-form">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="single-input-item">
                                                    <label for="first-name" class="required">ФИО</label>
                                                    <input type="text" id="first-name"
                                                           value="<?= Yii::$app->user->identity->fio ?>" disabled/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-input-item">
                                            <label for="display-name" class="required">Телефон</label>
                                            <input type="text" id="display-name"
                                                   value="<?= Yii::$app->user->identity->phone ?>" disabled/>
                                        </div>
                                        <div class="single-input-item">
                                            <label for="email" class="required">Email</label>
                                            <input type="email" id="email"
                                                   value="<?= Yii::$app->user->identity->email ?>" disabled/>
                                        </div>
                                        <!--<fieldset>
                                            <legend>Password change</legend>
                                            <div class="single-input-item">
                                                <label for="current-pwd" class="required">Current Password</label>
                                                <input type="password" id="current-pwd"/>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="single-input-item">
                                                        <label for="new-pwd" class="required">New Password</label>
                                                        <input type="password" id="new-pwd"/>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="single-input-item">
                                                        <label for="confirm-pwd" class="required">Confirm
                                                            Password</label>
                                                        <input type="password" id="confirm-pwd"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>-->
                                        <!--<div class="single-input-item">
                                            <button class="check-btn sqr-btn">Save Changes</button>
                                        </div>-->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End My Account Area Wrapper ==-->

</main>