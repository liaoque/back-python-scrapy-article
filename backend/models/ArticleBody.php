<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%article_body}}".
 *
 * @property integer $aid
 * @property string $body
 */
class ArticleBody extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%article_body}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['aid'], 'required'],
            [['aid'], 'integer'],
            [['body'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'aid' => 'article表id',
            'body' => '内容',
        ];
    }

    /**
     * @inheritdoc
     * @return ArticleBodyQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ArticleBodyQuery(get_called_class());
    }
}
