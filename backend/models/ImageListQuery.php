<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[ImageList]].
 *
 * @see ImageList
 */
class ImageListQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ImageList[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ImageList|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
