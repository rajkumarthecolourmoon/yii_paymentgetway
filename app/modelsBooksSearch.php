<?php

namespace app;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Books;

/**
 * modelsBooksSearch represents the model behind the search form of `app\models\Books`.
 */
class modelsBooksSearch extends Books
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'price', 'student_id', 'books_id'], 'integer'],
            [['bookname', 'class', 'orientation', 'academic_year'], 'safe'],
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
        $query = Books::find();

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
            'price' => $this->price,
            'student_id' => $this->student_id,
            'books_id' => $this->books_id,
        ]);

        $query->andFilterWhere(['like', 'bookname', $this->bookname])
            ->andFilterWhere(['like', 'class', $this->class])
            ->andFilterWhere(['like', 'orientation', $this->orientation])
            ->andFilterWhere(['like', 'academic_year', $this->academic_year]);

        return $dataProvider;
    }
}
