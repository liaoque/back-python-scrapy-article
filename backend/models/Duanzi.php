<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%duanzi}}".
 *
 * @property string $id
 * @property string $body
 * @property string $fingerprint
 * @property string $ctime
 * @property integer $status
 */
class Duanzi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%duanzi}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['body'], 'string'],
            [['ctime'], 'safe'],
            [['status'], 'integer'],
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
            'body' => 'Body',
            'fingerprint' => 'body的md5签名',
            'ctime' => 'Ctime',
            'status' => '1.发布, -1未发布',
        ];
    }

    /**
     * @inheritdoc
     * @return DuanziQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DuanziQuery(get_called_class());
    }
}
