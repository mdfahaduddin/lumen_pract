<?php

namespace App\Http\Controllers;

use illuminate\support\Facades\DB;

class ExampleController extends Controller
{
    function testConnection(){
        $dbname=DB::Connection()->getDatabaseName();

        return $dbname;
    }

    function selectData(){
        
        $dbSelect=DB::Connection()->select('SELECT * FROM details');

        return $dbSelect;
    }
}
