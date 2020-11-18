<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    function uploadImage(Request $request){
        return $request->file('photo')->storePubliclyAs('img', 'myprofil.jpg');
    }

    function editImage(Request $request){
        return $request->file('photo')->storePubliclyAs('img', 'myprofil.jpg');
    }

    function deleteImage(){
        $file = public_path('imgs/myprofil.jpg');
        if(is_file($file))
        {
            Storage::disk('local')->delete('/img/myprofil.jpg');
        }
        else
        {
            echo "File does not exist";
        }
        
        if(is_file($file)){
            echo "File still exists";
        }

        else {
            echo "sucessfully deleted";
        }
    }
}
