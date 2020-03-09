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
    
    public function show($id)
    {
        $user = \app\User::find($id);
        if(\Auth::id() == $user->id){
            return view('users.show', [
                'user' => $user
            ]);
        }
        else{
            return redirect()->route('tasks.index');
        }
    }   
}
