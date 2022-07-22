<?php

namespace app\models;

use yii\data\ActiveDataProvider;
use app\models\Post;

class PostFrontendSearch extends PostSearch
{
    /**
    * Правила валидации
    */
    public function rules()
    {
        return [
            [['text'], 'string', 'max' => 50],
        ];
    }

    /**
    *Метод поиска
    */
    public function search($params)
    {
    $query = Post::find();

    $dataProvider = new ActiveDataProvider([
        'query' => $query,
        'pagination' => [
          'pageSize' => 10,
        ],
    ]);

    $this->load($params);

    if (!$this->validate()) {
        return $dataProvider;
    }
    $query->orFilterWhere(['like', 'title', $this->text])
          ->orFilterWhere(['like', 'lead', $this->text])
          ->orFilterWhere(['like', 'text', $this->text]);

    return $dataProvider;
    }
}
