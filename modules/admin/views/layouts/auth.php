<?php

use app\assets\AuthAsset;
use yii\helpers\Html;

AuthAsset::register($this)


?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    <base href="/adminlte/">
    <meta charset="<?= Yii::$app->charset ?>">
    <?php $this->registerCsrfMetaTags() ?>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= Html::encode($this->title) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php $this->head() ?>


</head>
<body class="hold-transition login-page">
<?php $this->beginBody() ?>

<?=


/* @var $content string */
$content ?>




<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
