<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home(){
        return view('home');
    }
    public function About(){
        return view('pages/about');
    }
    public function Reservations(){
        return view('pages/reservations');
    }
    public function Contact(){
        return view('pages/Contact');
    }
    public function Offers(){
        return view('pages/offers');
    }
    public function Menu(){
        return view('menu/index');
    }

    public function singleMenu(){
        return view('menu/singleMenu');
    }
 
}
