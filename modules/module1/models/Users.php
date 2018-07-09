<?php

    namespace app\modules\module1\models;

    use yii\db\ActiveRecord;

    class Users extends ActiveRecord
    {
        public static function tableName ( )
        {
            return 'Users';
        }
    }