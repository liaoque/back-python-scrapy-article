<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%unique_xiezhen}}".
 *
 * @property string $id
 * @property string $view_url
 * @property integer $type
 * @property string $fingerprint
 * @property integer $pid
 */
class UniqueXiezhen extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%unique_xiezhen}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'pid'], 'integer'],
            [['view_url'], 'string', 'max' => 255],
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
            'view_url' => '实际文档url',
            'type' => '类型',
            'fingerprint' => 'md5的值',
            'pid' => 'Pid',
        ];
    }

    /**
     * @inheritdoc
     * @return UniqueXiezhenQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UniqueXiezhenQuery(get_called_class());
    }
}
