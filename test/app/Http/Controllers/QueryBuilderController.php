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

      function RowCount(){
        $result = DB::table('details')->count();
        return $result;
      }

      function Max(){
        $result = DB::table('details')->max('roll');
        return $result;
      }

      function Min(){
        $result = DB::table('details')->min('roll');
        return $result;
      }

      function Avg(){
        $result = DB::table('details')->avg('roll');
        return $result;
      }

      function Sum(){
        $result = DB::table('details')->sum('roll');
        return $result;
      }

      //CURD query builder

      function Insert(Request $request){

      $name =  $request->input("name");
      $roll =  $request->input("roll");
      $class =  $request->input("class");
      $city =  $request->input("city");
      $phone_no =  $request->input("phone_no");

      $result = DB::table('details')->insert(['name'=>$name,'roll'=>$roll,'class'=>$class,'city'=>$city,'phone_no'=>$phone_no]);

      if($result == true)
      {
        return 'Data Insert Success';
      }
      else
      {
        return 'Error! please try again.';
      }

      }

      function Update(Request $request){
        $id =  $request->input("id");
        $name =  $request->input("name");
      $roll =  $request->input("roll");
      $class =  $request->input("class");
      $city =  $request->input("city");
      $phone_no =  $request->input("phone_no");

      $result = DB::table('details')->where('id',$id)->update(['name'=>$name,'roll'=>$roll,'class'=>$class,'city'=>$city,'phone_no'=>$phone_no]);

      if($result == true){
        return 'Update Successful';
      }else{
        return 'Update Faild';
      }
      }

      function Delete(Request $request){
        $id =  $request->input("id");

        $result = DB::table('details')->where('id',$id)->delete();

        if($result == true){
          return 'Delete Successful';
        }else if($result == null){
          return 'ID not found !';
        }
        else{
          return 'Delete Faild';
        }
      }

     

 

}