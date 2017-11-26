<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Duanzi]].
 *
 * @see Duanzi
 */
class DuanziQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Duanzi[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Duanzi|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
