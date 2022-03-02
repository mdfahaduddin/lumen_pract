<?php

namespace App\Http\Controllers;
use App\DetailsModel;
use Illuminate\Http\Request;

class DetailsModelController extends Controller{

    function SelectAll(){
        $result = DetailsModel::all();
        return $result;
    }

    function SelectID(Request $request){
       $id = $request->input('id');
        $result = DetailsModel::where('id',$id)->get();
        return $result;
    }

    function Count(){
        $result = DetailsModel::count();
        return $result;
    }

    function Max(){
        $result = DetailsModel::max('roll');
        return $result;
    }

    function Min(){
        $result = DetailsModel::min('roll');
        return $result;
    }

    function Avg(){
        $result = DetailsModel::avg('roll');
        return $result;
    }

    function Sum(){
        $result = DetailsModel::sum('roll');
        return $result;
    }

    //insert method using model

    function Insert(Request $request){

        $name =  $request->input("name");
        $roll =  $request->input("roll");
        $class =  $request->input("class");
        $city =  $request->input("city");
        $phone_no =  $request->input("phone_no");

        $result = DetailsModel::insert(['name'=>$name,'roll'=>$roll,'class'=>$class,'city'=>$city,'phone_no'=>$phone_no]);

        if($result == true)
        {
            return 'Data insert success!';
        }else{
            return 'Insert failed!';
        }
    }

    function Delete(Request $request){

        $id =  $request->input("id");

        $result = DetailsModel::where('id',$id)->delete();

        if($result == true)
        {
            return 'Data delete success!';
        }
        else if($result == null){
            return 'ID not found';
        }
        else{
            return 'Delete failed!';
        }
    }
    

    function Update(Request $request){

        $id =  $request->input("id");

        $name =  $request->input("name");
        $roll =  $request->input("roll");
        $class =  $request->input("class");
        $city =  $request->input("city");
        $phone_no =  $request->input("phone_no");

        $result = DetailsModel::where('id',$id)->update(['name'=>$name,'roll'=>$roll,'class'=>$class,'city'=>$city,'phone_no'=>$phone_no]);

        if($result == true)
        {
            return 'Data update success!';
        }
        else{
            return 'Update failed!';
        }
    }
}