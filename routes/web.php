<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[
        'jobs' => [
            [
            'title' => 'Accountant',
            'salary' => '150,000frs'
        ],
        [
            'title' => 'Java Developer',
            'salary' => '400,000frs'
        ],
        [
            'title' => 'SEO Expert',
            'salary' => '350,000frs'
        ],
        [
            'title' => 'Project Manager',
            'salary' => '300,000frs'
        ]
            ]
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
