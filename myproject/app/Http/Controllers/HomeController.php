<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; // Add this line

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}