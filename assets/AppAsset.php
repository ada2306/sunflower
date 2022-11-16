<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com',
        'https://fonts.gstatic.com',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap',
        '/web/css/vendor/bootstrap.min.css',
        '/web/css/plugins/swiper-bundle.min.css',
        '/web/css/plugins/font-awesome.min.css',
        '/web/css/plugins/fancybox.min.css',
        '/web/css/plugins/nice-select.css',
        '/web/css/style.min.css',
        'css/site.css',
    ];
    public $js = [
        '/web/js/vendor/modernizr-3.11.7.min.js',
        '/web/js/vendor/jquery-3.6.0.min.js',
        '/web/js/vendor/jquery-migrate-3.3.2.min.js',
        '/web/js/vendor/bootstrap.bundle.min.js',
        '/web/js/plugins/swiper-bundle.min.js',
        '/web/js/plugins/fancybox.min.js',
        '/web/js/plugins/jquery.nice-select.min.js',
        '/web/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
