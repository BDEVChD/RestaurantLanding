<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoodItemsController extends Controller
{
      
public function index(){
    return view('admin/food-items/all');
}

public function edit(){
    return view('admin/food-items/edit');
}
public function create(){
    return view('admin/food-items/create');
}   
}
