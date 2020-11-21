<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{
    function uploadImage(Request $request){
        $id = Auth::id();

        $request->file('photo')->storePubliclyAs('img', $id.'.jpg');

        return view('actionsucess'); 

    }

    function editImage(Request $request){
        $id = Auth::id();

        $request->file('photo')->storePubliclyAs('img', $id.'.jpg');

        return view('actionsucess'); 

    }

    function deleteImage(){
        $id = Auth::id();

        $file = public_path('img', $id.'.jpg');
        if(is_file($file))
        {
            Storage::disk('local')->delete('img', $id.'.jpg');
        }

        return view('actionsucess'); 
    }
}
