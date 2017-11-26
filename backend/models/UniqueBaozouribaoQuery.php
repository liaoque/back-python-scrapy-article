<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[UniqueBaozouribao]].
 *
 * @see UniqueBaozouribao
 */
class UniqueBaozouribaoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return UniqueBaozouribao[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return UniqueBaozouribao|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
