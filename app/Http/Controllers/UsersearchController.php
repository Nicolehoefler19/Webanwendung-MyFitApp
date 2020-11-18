<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersearchController extends Controller
{

    function action(Request $request){
        if($request->ajax()){
            $query = $request->get('query');
            if($query != ''){
                $data = DB::table('users')
                ->where('name', 'like', '%'.$query.'%')
                ->get();
            }
            else{
                $data = DB::table('users')
                ->orderBy('id', 'desc')
                ->get();

            }

            $total_row = $data->count();
            if($total_row > 0){
                foreach($data as $row){
                    $output = '
                    <li>'.$row->name.'</li>
                    ';
                }
            }

            else{
                $output = '<p>Keine Resultate!</p>';
            }

            $data = array(
                'table_data' => $output,
                'gesamtprofile' => $total_row
            );

            echo json_encode($data);
        }
    }
}
