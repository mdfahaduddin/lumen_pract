<?php

namespace App\Http\Controllers;
use App\Models\User;

class MyController extends Controller {

    public function MyName($name){
        return 'My Name is '. $name;
    }

}