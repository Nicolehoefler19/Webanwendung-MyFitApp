<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ProfilupdateController extends Controller
{
    function saveBirthdate(Request $request){
        $id = Auth::id();
        $date = $request->input('date');

        DB::table('users')->where(['id' => $id])->update(['birthdate' => $date]);

        return view('actionsucess'); 
    }

    function deleteBirthdate(){
        $id = Auth::id();
        DB::table('users')->where(['id' => $id])->update(['birthdate' => NULL]);
        return view('actionsucess'); 
    }

    function saveCountry(Request $request){
        $id = Auth::id();
        $country = $request->input('country');

        DB::table('users')->where(['id' => $id])->update(['country' => $country]);
        return view('actionsucess'); 
    }

    function deleteCountry(){
        $id = Auth::id();
        DB::table('users')->where(['id' => $id])->update(['country' => NULL]);
        return view('actionsucess'); 

    }

}
