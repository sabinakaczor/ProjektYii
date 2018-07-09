<?php

namespace app\modules\module1\controllers;

use yii\web\Controller;
use app\modules\module1\models\Users;

class UsersController extends Controller
{
    public function actionIndex()
    {
        $query = Users::find();
        $users = $query->all();
        return $this->render('index', ['users' => $users]);
    }

}