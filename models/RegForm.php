<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $fio
 * @property string $phone
 * @property string $email
 * @property string $password
 * @property string $address
 * @property string $role
 *
 * @property Orders[] $orders
 */
class RegForm extends User
{

    public $passwordConfirm;
    public $agree;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fio', 'email', 'phone','address','password', 'passwordConfirm', 'agree'], 'required', 'message' => 'Поле обязательно для заполнения'],
            ['fio', 'match', 'pattern' => '/^[А-Яа-я\s\-]{5,}$/u', 'message' => 'Только кирилица, пробелы и дефисы'],
           // ['email', 'match', 'pattern' => '/^[A-Za-z\s\-]{1,}$/u', 'message' => 'Только латинские буквы'],
            ['email', 'unique', 'message' => 'Этот логин занят'],
            ['email', 'email', 'message' => 'Некорректный Email адрес'],
            ['passwordConfirm', 'compare', 'compareAttribute' => 'password' , 'message' => 'Пароли должны совподать'],
            ['agree', 'boolean'],
            ['agree', 'compare', 'compareValue' => true, 'message' => 'Необходимо согласиться'],
            [['fio', 'email', 'password','phone','address'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'Фио',
            'phone' => 'Телефон',
            'email' => 'Email',
            'password' => 'Пароль',
            'address' => 'Адрес',
            'role' => 'Role',
            'passwordConfirm' => 'Подтверждение пароля',
            'agree' => 'Даю согласие на обработку данных',
        ];
    }



}