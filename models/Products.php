<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $image
 * @property float $price
 * @property int $id_category
 *
 * @property Category $category
 * @property Posts[] $posts
 * @property ProductsInOrder[] $productsInOrders
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'image', 'price', 'id_category'], 'required'],
            [['description'], 'string'],
            [['price'], 'number'],
            [['id_category'], 'integer'],
            [['name', 'image'], 'string', 'max' => 255],
            [['id_category'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['id_category' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'image' => 'Image',
            'price' => 'Price',
            'id_category' => 'Id Category',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'id_category']);
    }

    /**
     * Gets query for [[Posts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPosts()
    {
        return $this->hasMany(Posts::class, ['id_product' => 'id']);
    }

    /**
     * Gets query for [[ProductsInOrders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductsInOrders()
    {
        return $this->hasMany(ProductsInOrder::class, ['id_product' => 'id']);
    }
}
