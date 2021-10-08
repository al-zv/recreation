<?php

namespace app\models;

use yii\base\Model;

class Country extends Model
{
    public $ski_resort;
    public $email;
    public $country_name;

    public function rules()
    {
        return [
            ['ski_resort', 'string'],
        ];
    }
}