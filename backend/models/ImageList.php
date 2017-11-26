<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%image_list}}".
 *
 * @property string $id
 * @property integer $pid
 * @property string $src
 * @property integer $type
 */
class ImageList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%image_list}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid', 'type'], 'integer'],
            [['src'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pid' => '对应表id',
            'src' => 'Src',
            'type' => '1.表示写真表',
        ];
    }

    /**
     * @inheritdoc
     * @return ImageListQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ImageListQuery(get_called_class());
    }
}
