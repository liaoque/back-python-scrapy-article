<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[ArticleBody]].
 *
 * @see ArticleBody
 */
class ArticleBodyQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ArticleBody[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ArticleBody|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
