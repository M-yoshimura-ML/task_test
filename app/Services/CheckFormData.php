<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\ContactForm;
use Illuminate\Support\Facades\DB;

class CheckFormData
{
    public static function checkGender($data){
        if($data->gender == 0){
            $gender = '男性';
        } else {
            $gender = '女性';
        }
        return $gender;
    }

    public static function checkAge($data){
        if($data->age == 0){
            $age = '～19歳';
        } else if ($data->age == 1){
            $age = '20歳～29歳';
        } else if ($data->age == 2){
            $age = '30歳～39歳';
        } else if ($data->age == 3){
            $age = '40歳～49歳';
        } else if ($data->age == 4){
            $age = '50歳～59歳';
        } else {
            $age = '60歳～';
        }
        return $age;
    }
}
