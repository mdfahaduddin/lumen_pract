<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

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

    public function ArrayTest(){
        $arr1=array("MD Fahad"=>'22','MD Shuvo'=>'22', 'MD Safayet'=>'22', 'MD Sumon'=>'22', 'Hasan Gazi'=>'22','Rubel'=>'22');
        return response()->json($arr1);
    }

    public function ArrayTest2(){
        $arr1=array(
        array("MD Fahad",22,14),
        array("MD Shuvo",22,14),
        array("MD Safayet",22,14),
        array("MD Sumon",22,14),
        array("MD Gazi",22,14));;
        return response()->json($arr1);
    }

    public function FirstMethForRedirect(){
        return redirect('/redirect2');
    }

    public function SecondMethForRedirect(){
        return 'I am Redirect 2 Method';
        return redirect('/redirect1');
    }

    //download request
    public function Download(){
        $FilePath = 'downloadTest.txt';
        return response()->download($FilePath);
    }

    public function Catch(Request $request){
      return  $request->header();
    }

}