<?php

namespace app\models;

use Yii;

use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string $title
 * @property string|null $lead
 * @property string|null $text
 * @property int|null $created_at
 */
class Post extends \yii\db\ActiveRecord
{

    public function behaviors()
{
  return [
      [
          'class' => TimestampBehavior::className(),
          'createdAtAttribute' => 'created_at',
          'updatedAtAttribute' => false,
          'value' => time(),
      ],
  ];
}

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['text'], 'string'],
            [['created_at'], 'integer'],
            [['title'], 'string', 'max' => 50],
            [['lead'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'lead' => 'Lead',
            'text' => 'Text',
            'created_at' => 'Created At',
        ];
    }
}
