<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    function postCommentOne(Request $request){
        $id = Auth::id();
        $comment = $request->input('comment');

        DB::table('users')->where(['id' => $id])->insert(['commentone' => $comment]);
    }

    function postCommentTwo(Request $request){
        $id = Auth::id();
        $comment = $request->input('comment');

        DB::table('users')->where(['id' => $id])->insert(['commenttwo' => $comment]);
    }

    function postCommentThree(Request $request){
        $id = Auth::id();
        $comment = $request->input('comment');

        DB::table('users')->where(['id' => $id])->insert(['commentthree' => $comment]);
    }

    function postCommentFour(Request $request){
        $id = Auth::id();
        $comment = $request->input('comment');

        DB::table('users')->where(['id' => $id])->insert(['commentfour' => $comment]);
    }

    function deleteCommentOne(){
        $id = Auth::id();
        DB::table('users')->where(['id' => $id])->update(['commentone' => NULL]);
    }

    function deleteCommentTwo(){
        $id = Auth::id();
        DB::table('users')->where(['id' => $id])->update(['commenttwo' => NULL]);
    }

    function deleteCommentThree(){
        $id = Auth::id();
        DB::table('users')->where(['id' => $id])->update(['commentthree' => NULL]);
    }

    function deleteCommentFour(){
        $id = Auth::id();
        DB::table('users')->where(['id' => $id])->update(['commentfour' => NULL]);
    }
}
