<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%gif}}".
 *
 * @property string $id
 * @property string $title
 * @property string $src
 * @property string $fingerprint
 * @property string $ctime
 * @property integer $status
 */
class Gif extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%gif}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ctime'], 'safe'],
            [['status'], 'integer'],
            [['title', 'src'], 'string', 'max' => 255],
            [['fingerprint'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'src' => 'Src',
            'fingerprint' => 'Fingerprint',
            'ctime' => 'Ctime',
            'status' => '1.发布, -1未发布',
        ];
    }

    /**
     * @inheritdoc
     * @return GifQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GifQuery(get_called_class());
    }
}
