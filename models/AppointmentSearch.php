<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\appointment;

/**
 * AppointmentSearch represents the model behind the search form of `app\models\appointment`.
 */
class AppointmentSearch extends appointment
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'specialization', 'doctors_degree'], 'integer'],
            [['lastname', 'firstname', 'patronymic', 'email', 'purpose', 'visit_date'], 'safe'],
            [['is_paid'], 'boolean'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = appointment::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'specialization' => $this->specialization,
            'doctors_degree' => $this->doctors_degree,
            'visit_date' => $this->visit_date,
            'is_paid' => $this->is_paid,
        ]);

        $query->andFilterWhere(['ilike', 'lastname', $this->lastname])
            ->andFilterWhere(['ilike', 'firstname', $this->firstname])
            ->andFilterWhere(['ilike', 'patronymic', $this->patronymic])
            ->andFilterWhere(['ilike', 'email', $this->email])
            ->andFilterWhere(['ilike', 'purpose', $this->purpose]);

        return $dataProvider;
    }
}
