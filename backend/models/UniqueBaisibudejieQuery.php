<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[UniqueBaisibudejie]].
 *
 * @see UniqueBaisibudejie
 */
class UniqueBaisibudejieQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return UniqueBaisibudejie[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return UniqueBaisibudejie|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
