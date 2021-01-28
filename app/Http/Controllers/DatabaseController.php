<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserModel;

class DatabaseController extends Controller
{
    public function index(){
        $users = UserModel::all();
        // dd($users);

        return view('database', compact('users'));
    }
    public function show($id){
        $singleUser = UserModel::find($id);

        return view('user', compact('singleUser'));
    }
}

