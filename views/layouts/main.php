<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Админка</h1>
            <p class="lead">backend заявок на прием к врачу</p>
        </div>
        <?php
        echo Nav::widget([
            'options' => ['class' => 'nav-pills'],
            'items' => [
                ['label' => 'Главная', 'url' => ['/']],
                ['label' => 'Заявки на прием к врачу', 'url' => ['/appointment']],
                ['label' => 'Справочник: специализации врача', 'url' => '/list-specializations'],
                ['label' => 'Справочник: научные степени врача', 'url' => '/list-doctor-degrees'],
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'nav-pills'],
            'items' => [
                ['label' => 'REST API создание: заявка на прием к врачу', 'url' => '/rest-appointment/create'],
                ['label' => 'REST API просмотр: справочник специализации врача', 'url' => '/rest-list-specializations'],
                ['label' => 'REST API просмотр: справочник научные степени врача', 'url' => '/rest-list-doctor-degrees'],
            ],
        ]);
        ?>
        <br>
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
