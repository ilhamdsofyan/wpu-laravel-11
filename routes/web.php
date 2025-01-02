<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        'nama' => 'Ilham D. Sofyan',
        'email' => 'ilhamdsofyan@gmail.com'
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        'posts' => [
            [
                'title' => 'Judul Post Pertama',
                'author' => 'Ilham D. Sofyan',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates.'
            ],
            [
                'title' => 'Judul Post Kedua',
                'author' => 'Ilham D. Sofyan',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates.'
            ]
        ]
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'nama' => 'Ilham D. Sofyan',
        'email' => 'ilhamdsofyan@gmail.com',
        'telp' => '08123456789',
        'alamat' => 'Jl. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates.',
        'socials' => [
            'facebook' => 'Ilham D. Sofyan',
            'instagram' => 'ilhamdsofyan',
            'twitter' => 'ilhamdsofyan'
        ]
    ]);
});
