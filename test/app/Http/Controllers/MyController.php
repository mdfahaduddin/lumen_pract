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

    public function UpdateInfo($name){
        return 'Your Name is '. $name .' Update Successful !';
    }

    public function DeleteInfo($name){
        return 'Your Name is '. $name .' Delete Successful !';
    }

}