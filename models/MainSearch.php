<?php

namespace kouosl\search\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\search\models\Main;

/**
 * MainSearch represents the model behind the search form of `kouosl\search\models\Main`.
 */
class MainSearch extends Main
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['keywordID'], 'integer'],
            [['keyword'], 'safe'],
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
        $query = Main::find();

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
            'keywordID' => $this->keywordID,
        ]);

        $query->andFilterWhere(['like', 'keyword', $this->keyword]);

        return $dataProvider;
    }
}
