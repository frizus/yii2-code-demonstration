<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AppointmentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appointment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'lastname') ?>

    <?= $form->field($model, 'firstname') ?>

    <?= $form->field($model, 'patronymic') ?>

    <?= $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'specialization') ?>

    <?php // echo $form->field($model, 'doctors_degree') ?>

    <?php // echo $form->field($model, 'purpose') ?>

    <?php // echo $form->field($model, 'visit_date') ?>

    <?php // echo $form->field($model, 'is_paid')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
