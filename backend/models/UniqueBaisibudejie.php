<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%unique_baisibudejie}}".
 *
 * @property string $fingerprint
 * @property integer $pid
 */
class UniqueBaisibudejie extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%unique_baisibudejie}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fingerprint'], 'required'],
            [['pid'], 'integer'],
            [['fingerprint'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fingerprint' => 'Fingerprint',
            'pid' => 'Pid',
        ];
    }

    /**
     * @inheritdoc
     * @return UniqueBaisibudejieQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UniqueBaisibudejieQuery(get_called_class());
    }
}
