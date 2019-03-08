<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
 
        return view('users.index', compact('users'));
    }
    public function store()
    {
        $user = new User;
        
        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt( request('password') );
        $user->save();

        return back();
    }
}
