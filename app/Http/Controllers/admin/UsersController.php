<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index(){
        return view('admin/users/all');
    }
    
    public function edit(){
        return view('admin/users/edit');
    }
    public function create(){
        return view('admin/users/create');
    }   
}
