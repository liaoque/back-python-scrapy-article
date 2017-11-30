<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%xiezhen}}".
 *
 * @property string $id
 * @property string $title
 * @property string $thumbnail
 * @property integer $status
 */
class Xiezhen extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%xiezhen}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
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
            'title' => 'Title',
            'thumbnail' => '缩略图',
            'status' => '1发布， -1未发布',
        ];
    }

    /**
     * @inheritdoc
     * @return XiezhenQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new XiezhenQuery(get_called_class());
    }

    public function getImageList(){
        return $this->hasMany(ImageList::className(), [
            'pid' => 'id'
        ]);
    }

}
