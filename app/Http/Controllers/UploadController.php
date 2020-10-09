<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //upload report template
    public function uploadTemplate(){
        return view('UploadFile.upload');
    }
     public function  uploadFile(Request $request){
        $request->file->store('public');
        return  "template uploaded succesfully";
     }

}
