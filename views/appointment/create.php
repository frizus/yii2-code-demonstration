<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\appointment */

$this->title = Yii::t('app', 'Create Appointment');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Appointments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appointment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
