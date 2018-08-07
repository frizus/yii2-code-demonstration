<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ListDoctorDegrees */

$this->title = Yii::t('app', 'Create List Doctor Degrees');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'List Doctor Degrees'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="list-doctor-degrees-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
