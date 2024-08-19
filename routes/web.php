<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs',[
    'jobs' => [
        [
            'id' => 1,
            'title' => 'Accountant',
            'salary' => '150,000frs'
        ],
        [
            'id' => 2,
            'title' => 'Java Developer',
            'salary' => '400,000frs'
        ],
        [
            'id' => 3,
            'title' => 'SEO Expert',
            'salary' => '350,000frs'
        ],
        [
            'id' => 4,
            'title' => 'Project Manager',
            'salary' => '300,000frs'
        ]
    ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Accountant',
            'salary' => '150,000frs'
        ],
        [
            'id' => 2,
            'title' => 'Java Developer',
            'salary' => '400,000frs'
        ],
        [
            'id' => 3,
            'title' => 'SEO Expert',
            'salary' => '350,000frs'
        ],
        [
            'id' => 4,
            'title' => 'Project Manager',
            'salary' => '300,000frs'
        ]
    ];
        $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

        return view('job', ['job' => $job]);
        });


Route::get('/contact', function () {
    return view('contact');
});
