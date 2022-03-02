<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use illuminate\support\Facades\DB;

class QueryBuilderController extends Controller{

    function AllRow(){
      $result = DB::table('details')->get();

      return $result;
    }

    function SingleRow(){
      //  $result = DB::table('details')->where('name','MD Fahad')->first(); //first method
      // return $result->class; //first method
      $result = DB::table('details')->where('name','MD Fahad')->get();
      return $result;
       
    }

    function SingleRowFind(){
       
        $result = DB::table('details')->find(2);
        
        if($result === null)
        {
          return 'not found';
        }
        else{
          return $result->name;
        }
         
      }

      function PluckMethod(){
        $result = DB::table('details')->pluck('name','roll');
        return $result;
      }
 

}