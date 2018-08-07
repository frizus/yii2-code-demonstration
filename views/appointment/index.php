<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AppointmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Appointments');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appointment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Appointment'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'lastname',
            'firstname',
            'patronymic',
            'email:email',
            'specialization',
            [
                'attribute' => 'specialization',
                'value' => 'specialization0.name',
            ],
            [
                'attribute' => 'doctors_degree',
                'value' => 'doctorsDegree.name',
            ],
            'purpose:ntext',
            'visit_date',
            'is_paid:boolean',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
