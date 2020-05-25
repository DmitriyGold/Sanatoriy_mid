<?php

namespace app\models\db;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\db\Khammam;

/**
 * KhammamSearch represents the model behind the search form of `app\models\db\Khammam`.
 */
class KhammamSearch extends Khammam
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'hide'], 'integer'],
            [['description1', 'description2', 'description3'], 'safe'],
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
        $query = Khammam::find();

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
            'hide' => $this->hide,
        ]);

        $query->andFilterWhere(['like', 'description1', $this->description1])
            ->andFilterWhere(['like', 'description2', $this->description2])
            ->andFilterWhere(['like', 'description3', $this->description3]);

        return $dataProvider;
    }
}
