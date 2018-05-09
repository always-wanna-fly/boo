<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Form".
 *
 * @property int $id
 * @property string $name
 * @property string $login
 * @property string $password
 * @property string $city
 */
class Form extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Form';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'login', 'password', 'city'], 'required'],
            [['name', 'login', 'password', 'city'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
//            'id' => 'ID',
            'name' => 'Ім\'я',
            'login' => 'Логін',
            'password' => 'Пароль',
            'city' => 'Місто',
        ];
    }
}
