<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
     public function index()
    {
        return view('profile', [
            'name' => 'Aditya Maula',
            'bio' => 'Web Developer | Laravel Enthusiast',
            'email' => 'aditya@example.com',
            'phone' => '+62 812-3456-7890',
            'photo' => 'aditya.jpg', // Tempatkan di public/images
            'socials' => [
                'GitHub' => 'https://github.com/adityamaula',
                'LinkedIn' => 'https://linkedin.com/in/adityamaula',
            ]
        ]);
    }
}
