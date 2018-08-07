<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "list_doctor_degrees".
 *
 * @property int $id
 * @property string $name
 *
 * @property Appointment[] $appointments
 */
class ListDoctorDegrees extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'list_doctor_degrees';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppointments()
    {
        return $this->hasMany(Appointment::className(), ['doctors_degree' => 'id']);
    }
}
