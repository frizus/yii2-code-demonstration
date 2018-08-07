<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\appointment */

$this->title = Yii::t('app', 'Update Appointment: {nameAttribute}', [
    'nameAttribute' => $model->lastname . ' ' . $model->firstname . ' ' . $model->patronymic,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Appointments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="appointment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
