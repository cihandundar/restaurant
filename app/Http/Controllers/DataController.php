<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function showMenu()
    {
        return view('front.pages.home', [
            'menu' => dataset('menu'),
            'testimonials' => dataset('testimonials'),
            'blogs' => dataset('blogs'),
        ]);
    }
}

