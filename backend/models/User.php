<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $password
 * @property int $status
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property int $created_at
 * @property int $updated_at
 * @property string $verification_token
 * @property string $surname Фамилия
 * @property string $name Имя
 * @property string $thirdname Отчество
 * @property string $job Должность
 * @property int $time_create
 * @property int $id_companies Организация
 * @property int $basket
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['password', 'status', 'auth_key', 'password_hash', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at', 'time_create', 'id_companies', 'basket'], 'integer'],
            [['surname', 'name', 'thirdname', 'job'], 'string'],
            [['password'], 'string', 'max' => 12],
            [['auth_key'], 'string', 'max' => 32],
            [['password_hash', 'password_reset_token', 'verification_token'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'password' => 'Password',
            'status' => 'Status',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'verification_token' => 'Verification Token',
            'surname' => 'Surname',
            'name' => 'Name',
            'thirdname' => 'Thirdname',
            'job' => 'Job',
            'time_create' => 'Time Create',
            'id_companies' => 'Id Companies',
            'basket' => 'Basket',
        ];
    }
}
