<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function about()
    {
        return view('home.about');
    }

    public function team()
    {
        return view('home.team');
    }

    public function portofolio()
    {
        //test
        return view('home.portofolio');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function testimonials()
    {
        return view('home.testimonials');
    }

    public function service()
    {
        return view('home.service');
    }
}