<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Xiezhen]].
 *
 * @see Xiezhen
 */
class XiezhenQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Xiezhen[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Xiezhen|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
