<?php

namespace app\controllers;

use app\models\Basket;
use app\models\Category;
use app\models\Orders;
use app\models\Products;
use app\models\RegForm;
use app\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $products = Products::find()->all();
        $products_akc = Products::find()->orderBy(['price'=> SORT_DESC])->all();
        return $this->render('index',['products'=>$products,'products_akc'=>$products_akc]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        /*if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);*/
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $modelLogin = new LoginForm();
        if ($modelLogin->load(Yii::$app->request->post()) && $modelLogin->login()) {
            return $this->goBack();
        }
        $modelLogin->password = '';


        $modelReg = new RegForm();

        if ($this->request->isPost) {
            if ($modelReg->load($this->request->post()) && $modelReg->save()) {
                Yii::$app->user->login($modelReg);
                return $this->redirect(['/site']);
            }
        } else {
            $modelReg->loadDefaultValues();
        }

        return $this->render('login', [
            'modelReg' => $modelReg,
            'modelLogin' => $modelLogin,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionProduct()
    {

        $category = Category::find()->all();
        $products = Products::find()->all();
        return $this->render('product',['products'=>$products,
            'category'=>$category]);
    }
    public function actionProduct_details()
    {
        $id = Yii::$app->request->getQueryParam('id');
        $product = Products::findOne($id);

        return $this->render('product_details', ['product'=>$product]);
    }
    public function actionProduct_checkout()
    {

        //$products = Yii::$app->session['basket']['products'];
        /*if (Yii::$app->user->isGuest){
            return $this->redirect('/site/login');
        }
        else{
            $basket = (new Basket())->getBasket();
            $model = new Orders();
            if ($this->request->isPost && $model->load($this->request->post())) {
                $model->date = Yii::$app->formatter->asDatetime('2019-09-24 22:12:42', 'medium');
                $model->name = Yii::$app->user->identity->fio;
                $model->over_price = Yii::$app->session['basket']['amount'];
                $count = 0;
                foreach ($basket['products'] as $item) {
                    $count = $count + $item['count'];
                }
                $model->count = $count;
                $model->id_user = Yii::$app->user->identity->id;
                $model->save();
                return $this->redirect(['/site/my_account']);
            }



            return $this->render('product_checkout', ['basket'=>$basket, 'model'=>$model]);*/


        if (Yii::$app->user->isGuest){
            return $this->redirect('/site/login');
        }
        else{
            $basket = (new Basket())->getBasket();
            $model = new Orders();
           // $model->date = Yii::$app->formatter->asTimestamp(date('Y-d-m h:i:s'));
            $model->date = date("Y.m.d");
            $model->name = Yii::$app->user->identity->fio;
            $model->over_price = Yii::$app->session['basket']['amount'];
            $count = 0;
            foreach ($basket['products'] as $item) {
                $count = $count + $item['count'];
            }
            $model->count = $count;
            $model->id_user = Yii::$app->user->identity->id;
            $model->description = 'sdasd';


            if ($this->request->isPost) {
                if ($model->load($this->request->post()) && $model->save()) {
                    return $this->redirect(['/site/my_account']);
                }
            } else {
                $model->loadDefaultValues();
            }

            return $this->render('product_checkout', [
                'model' => $model,
                'basket'=>$basket,
            ]);
        }

    }
    public function actionProduct_cart()
    {
        return $this->render('product_cart');
    }
    public function actionMy_account(){
        $orders = Orders::find()->where(['id_user'=>Yii::$app->user->identity->id])->all();
        return $this->render('my_account',['orders'=>$orders]);
    }
}
