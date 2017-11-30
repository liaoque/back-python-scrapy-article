<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%article}}".
 *
 * @property string $id
 * @property string $title
 * @property string $thumbnail
 * @property string $ctime
 * @property integer $status
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%article}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ctime'], 'safe'],
            [['status'], 'integer'],
            [['title', 'thumbnail'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '标题',
            'thumbnail' => '缩略图',
            'ctime' => 'Ctime',
            'status' => '1.发布, 2, 未发布',
        ];
    }

    public static function statusList(){
        return [
            1 => '发布',
            2 => '未发布'
        ];
    }

    /**
     * @inheritdoc
     * @return ArticleQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ArticleQuery(get_called_class());
    }

    public function getArticleBody()
    {
        return $this->hasOne(ArticleBody::className(), ['aid' => 'id']);
    }
}
