<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = \App\User::orderBy('id', 'desc')->paginate(5);
        
        return view('users.index', [
            'users' => $users
            ]);
    }
    
    public function show($id){
        $user = \app\User::find($id);
        
        return view('users.show', [
            'user' => $user
            ]);
    }
}
