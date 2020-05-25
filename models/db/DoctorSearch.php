<?php

namespace app\models\db;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\db\Doctor;

/**
 * DoctorSearch represents the model behind the search form of `app\models\db\Doctor`.
 */
class DoctorSearch extends Doctor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'sort', 'hide'], 'integer'],
            [['fio', 'image', 'description1', 'description2', 'schedule'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Doctor::find();

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
            'sort' => $this->sort,
            'hide' => $this->hide,
        ]);

        $query->andFilterWhere(['like', 'fio', $this->fio])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'description1', $this->description1])
            ->andFilterWhere(['like', 'description2', $this->description2])
            ->andFilterWhere(['like', 'schedule', $this->schedule]);

        return $dataProvider;
    }
}
