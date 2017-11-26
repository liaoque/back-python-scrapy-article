<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%unique_qiushibaike}}".
 *
 * @property integer $id
 * @property string $view_url
 * @property integer $type
 * @property integer $pid
 */
class UniqueQiushibaike extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%unique_qiushibaike}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'type', 'pid'], 'integer'],
            [['view_url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'view_url' => '实际文档url',
            'type' => '类型',
            'pid' => 'Pid',
        ];
    }

    /**
     * @inheritdoc
     * @return UniqueQiushibaikeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UniqueQiushibaikeQuery(get_called_class());
    }
}
