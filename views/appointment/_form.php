<?php

use app\models\ListDoctorDegrees;
use app\models\ListSpecializations;
use dosamigos\datetimepicker\DateTimePicker;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\appointment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appointment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'patronymic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'specialization')->dropDownList(
        ArrayHelper::map(ListSpecializations::find()->all(), 'id', 'name')
    ) ?>

    <?= $form->field($model, 'doctors_degree')->dropDownList(
        ArrayHelper::map(ListDoctorDegrees::find()->all(), 'id', 'name')
    ) ?>

    <?= $form->field($model, 'purpose')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'visit_date')->widget(DateTimePicker::className(), [
        'language' => 'ru',
        'size' => 'ms',
        'template' => '{input}',
        'clientOptions' => [
            //'startView' => 1,
            //'minView' => 0,
            //'maxView' => 1,

            'autoclose' => true,
            //'linkFormat' => 'HH:ii P', // if inline = true
            // 'format' => 'HH:ii P', // if inline = false
            'todayBtn' => true,
            'pickerPosition' => 'top-right',
            'startDate' => 'now'
        ]
    ]);?>

    <?= $form->field($model, 'is_paid')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
