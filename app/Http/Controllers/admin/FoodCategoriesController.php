<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoodCategoriesController extends Controller
{
    public function Index(){
        return view('admin/food-categories/all');
    }
    public function Create(){
        return view('admin/food-categories/create');
    }

    public function Edit(){
        return view('admin/food-categories/edit');
    }
}
