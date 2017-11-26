<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[UniqueQiushibaike]].
 *
 * @see UniqueQiushibaike
 */
class UniqueQiushibaikeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return UniqueQiushibaike[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return UniqueQiushibaike|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
