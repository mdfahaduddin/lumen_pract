<?php

namespace App\Http\Controllers;
use App\Models\User;

class MyController extends Controller {

    public function Create($name){
        return 'Your Name is '. $name .' Account Created Successful !';
    }

    public function InfoGet($name){
        return 'Your Name is '. $name;
    }

    public function UpdateInfo($name,$age,$city,$class){
        return response('Your Name is '. $name . $age . $city . $class . ' Update Successful !')
        ->header('Your name',$name)
        ->header('Your age',$age)
        ->header('Your city',$city)
        ->header('Your class',$class) ;
    }

    public function DeleteInfo($name){
        return response('Your Name is '. $name .' Delete Successful !') ;//response body
    }

}