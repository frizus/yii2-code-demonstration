<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\appointment */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Appointments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appointment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'lastname',
            'firstname',
            'patronymic',
            'email:email',
            ['label' => $model->getAttributeLabel('specialization'), 'attribute' => 'specialization0.name'],
            ['label' => $model->getAttributeLabel('doctors_degree'), 'attribute' => 'doctorsDegree.name'],
            'purpose:ntext',
            'visit_date',
            'is_paid:boolean',
        ],
    ]) ?>

</div>
