<?php

namespace thienhungho\ProductManagement\modules\ProductBase\query;

/**
 * This is the ActiveQuery class for [[ProductType]].
 *
 * @see ProductType
 */
class ProductTypeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return ProductType[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ProductType|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
