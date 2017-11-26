<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%video}}".
 *
 * @property string $id
 * @property string $title
 * @property string $src
 * @property string $thumbnail
 * @property string $ctime
 * @property integer $status
 * @property string $fingerprint
 */
class Video extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%video}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ctime'], 'safe'],
            [['status'], 'integer'],
            [['title', 'src', 'thumbnail'], 'string', 'max' => 255],
            [['fingerprint'], 'string', 'max' => 32],
            [['fingerprint'], 'unique'],
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
            'src' => '视频连接',
            'thumbnail' => '缩略图',
            'ctime' => 'Ctime',
            'status' => '1.发布, 2, 未发布',
            'fingerprint' => 'Fingerprint',
        ];
    }

    /**
     * @inheritdoc
     * @return VideoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new VideoQuery(get_called_class());
    }
}
