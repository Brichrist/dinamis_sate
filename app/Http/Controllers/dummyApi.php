<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\api;


class dummyApi extends Controller
{
    function getData($id=null){
        return $id?api::find($id):api::all();
    }
    function postData(Request $req){
        $dataapi=new api;
        $dataapi->name=$req->name;
        $dataapi->active=$req->active;
        $result=$dataapi->save();

        if ($result==true) {
            return "succes";
        } else {
            return "something when wrong";
        }
        
        
    }
    function putData(Request $req,$id){
        $dataapi=api::find($id);
        $dataapi->name=$req->name;
        $dataapi->active=$req->active;
        $result=$dataapi->save();

        if ($result==true) {
            return "succes";
        } else {
            return "something when wrong";
        }
        
    }
    function deleteData($id){
        
        $result=api::find($id)->delete();


        if ($result==true) {
            return "succes";
        } else {
            return "something when wrong";
        }
        
    }
}
