<?php


namespace app\assets;


use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'adminlte/plugins/fonts/font-glyphicons.css',
        'adminlte/plugins/fontawesome-free/css/all.min.css',
        'adminlte/dist/css/adminlte.min.css',
        'adminlte/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700',

    ];
    public $js = [
        'adminlte/plugins/jquery/jquery.min.js',
        'adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js',
        'adminlte/dist/js/adminlte.min.js',
        'js/admin.js'



    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];


}