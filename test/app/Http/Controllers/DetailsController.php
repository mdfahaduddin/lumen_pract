<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use illuminate\support\Facades\DB;

class DetailsController extends Controller{

    function DetailsSelect(Request $request){

        $SQL = "SELECT * FROM details";
        $request = DB::select($SQL);
        return $request ;
    }

    function DetailsDelete(Request $request){
        
    $inputId =  $request->input("id");

    $SQL = "DELETE FROM `details` WHERE `id`=?";
    $result =  DB::delete($SQL,[$inputId]); 
        
    if($result == true){
        return 'Delete Seccessful';
    }else if($result == null){
        return 'not found ID';
    }
    else{
        return 'Error ! please try again';
    }

    }

    function DetailsUpdate(){
        
    }

    function DetailsCreate(Request $request){

      $inputName =  $request->input("name");
      $inputRoll =  $request->input("roll");
      $inputClass =  $request->input("class");
      $inputCity =  $request->input("city");
      $inputPhoneNo =  $request->input("phone_no");

      $SQL = "INSERT INTO `details`(`name`, `roll`, `class`, `city`, `phone_no`) VALUES (?,?,?,?,?)";
      $result = DB::insert($SQL,[$inputName,$inputRoll,$inputClass,$inputCity,$inputPhoneNo]);

      if($result == true){
          return 'Save Seccessful';
      }else{
          return 'Error ! please try again';
      }

    }

}