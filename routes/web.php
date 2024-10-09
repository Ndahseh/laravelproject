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
    $jobs = Job::with('employer')->latest()->cursorPaginate(3);

    return view('jobs.index',[
        'jobs' => $jobs
    ]);
});

//Jobs Create
Route::get('/jobs/create', function()
{
    return view('jobs.create');
});

Route::post('/jobs', function(){
    // dd(request()->all());  Validation

    Job::create([
        'title'=> request('title'),
        'salary' => request('salary'),
        'employer_id' => 1,
    ]);

    return redirect('/jobs');
});

// Job Listings page route Wild Card
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('job.show', ['job' => $job]);
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
