<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "appointment".
 *
 * @property int $id
 * @property string $lastname
 * @property string $firstname
 * @property string $patronymic
 * @property string $email
 * @property int $specialization
 * @property int $doctors_degree
 * @property string $purpose
 * @property string $visit_date
 * @property bool $is_paid
 *
 * @property ListDoctorDegrees $doctorsDegree
 * @property ListSpecializations $specialization0
 */
class Appointment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'appointment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lastname', 'firstname', 'patronymic', 'email', 'specialization', 'doctors_degree', 'purpose', 'visit_date'], 'required'],
            [['specialization', 'doctors_degree'], 'default', 'value' => null],
            [['specialization', 'doctors_degree'], 'integer'],
            [['purpose'], 'string'],
            [['visit_date'], 'safe'],
            [['visit_date'], 'compare', 'compareValue' => date('Y-m-d H:i:s'), 'operator' => '>'],
            [['is_paid'], 'boolean'],
            [['lastname', 'firstname', 'patronymic', 'email'], 'string', 'max' => 255],
            [['doctors_degree'], 'exist', 'skipOnError' => true, 'targetClass' => ListDoctorDegrees::className(), 'targetAttribute' => ['doctors_degree' => 'id']],
            [['specialization'], 'exist', 'skipOnError' => true, 'targetClass' => ListSpecializations::className(), 'targetAttribute' => ['specialization' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lastname' => 'Фамилия',
            'firstname' => 'Имя',
            'patronymic' => 'Отчество',
            'email' => 'E-mail',
            'specialization' => 'Специализация врача',
            'doctors_degree' => 'Научная степень врача',
            'purpose' => 'Описание проблемы',
            'visit_date' => 'Желаемая дата приема',
            'is_paid' => 'Заявка оплачена',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDoctorsDegree()
    {
        return $this->hasOne(ListDoctorDegrees::className(), ['id' => 'doctors_degree']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSpecialization0()
    {
        return $this->hasOne(ListSpecializations::className(), ['id' => 'specialization']);
    }
}
