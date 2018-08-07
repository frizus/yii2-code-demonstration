<?php
namespace app\controllers;

use yii\filters\AccessControl;
use yii\rest\ActiveController;
use yii\rest\UrlRule;

class RestListDoctorDegreesController extends ActiveController
{
    public $modelClass = 'app\models\ListDoctorDegrees';

    public function actions()
    {
        $actions = parent::actions();
        unset($actions['create'], $actions['view'], $actions['update'], $actions['delete']);
        return $actions;
    }
}