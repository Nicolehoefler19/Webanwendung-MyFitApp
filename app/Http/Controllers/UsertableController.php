<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use App\Models\User;

class UsertableController extends Controller
{
    public function userTable(){


        $users = User::all();

        return View::make('allusers')->with('users', $users);

    }
}
