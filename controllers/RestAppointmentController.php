<?php
namespace app\controllers;

use yii\filters\AccessControl;
use yii\rest\ActiveController;
use yii\rest\UrlRule;

class RestAppointmentController extends ActiveController
{
    public $modelClass = 'app\models\Appointment';

    public function actions()
    {
        $actions = parent::actions();
        unset($actions['index'], $actions['view'], $actions['update'], $actions['delete']);
        return $actions;
    }
}