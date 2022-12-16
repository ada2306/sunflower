<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $date
 * @property int $id_user
 * @property float $over_price
 * @property int $count
 * @property int $status
 *
 * @property ProductsInOrder[] $productsInOrders
 * @property User $user
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description'/*, 'date'*/, 'id_user', 'over_price', 'count'], 'required'],
            [['description'], 'string'],
            [['date'], 'safe'],
            [['id_user', 'count','status'], 'integer'],
            [['over_price'], 'number'],
            [['name'], 'string', 'max' => 255],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ФИО заказчика',
            'description' => 'Описание',
            'date' => 'Дата заказа',
            'id_user' => 'Id User',
            'over_price' => 'Финальная цена',
            'count' => 'Количество',
            'status'=> 'Статус',
        ];
    }

    /**
     * Gets query for [[ProductsInOrders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductsInOrders()
    {
        return $this->hasMany(ProductsInOrder::class, ['id_order' => 'id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'id_user']);
    }
}
