<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Car;

// Home page route
Route::get('/', function () {
    return view('home');
});


// Job Page route
Route::get('/jobs', function () {
    return view('jobs',[
        'jobs' => Job::all()
    ]);
});

// Job Listings page route
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('job', ['job' => $job]);
});


// Cars page route
Route::get('/cars', function () {
    return view('cars',[
        'cars' => Car::all()
    ]);
});

// Cars page listing route
Route::get('/cars/{id}', function ($id) {
    $car = Car::find($id);

    return view('car', ['car' => $car]);
});


// Contact page route
Route::get('/contact', function () {
    return view('contact');
});
