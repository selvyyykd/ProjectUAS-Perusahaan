<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('home.contact'); 
    }

    // Metode lainnya sesuai kebutuhan Anda, misalnya untuk mengirim email, menangani form kontak, dll.
}
