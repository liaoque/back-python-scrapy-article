<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[UniqueXiezhen]].
 *
 * @see UniqueXiezhen
 */
class UniqueXiezhenQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return UniqueXiezhen[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return UniqueXiezhen|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
