<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\modules\module1\models\Users;

class SignupForm extends Model
{
    public $username;
    public $password;
    public $password2;
    public $email;

    public function rules()
    {
        return [
            [['username', 'password', 'email'], 'required'],
            ['password', 'validatePassword'],
            ['password2', 'validatePassword'],
            ['email', 'email'],
        ];
    }

    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {

            if ($this->password !== $this->password2) {
                $this->addError($attribute, 'Hasła nie są identyczne.');
            }
        }
    }

    public function signup()
    {
        if ($this->validate())
        {
            $user = new Users();
            $user->login = $this->username;
            $user->password = $this->password;
            $user->email = $this->email;
            $user->save();
        }
    }
}