<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersearchController extends Controller
{

public function search(Request $request){
    if($request->ajax()){
        $output = "";

        $products = DB::table('users')->where('name','LIKE','%'.$request->search.'%')->get();

        if($products){
            foreach ($products as $key => $product){
                $output .= '<li>'.$product->id.'</li>'.'<li>'.$product->name.'</li>';
            }
            return Response($output);
        }
    }
}

}
