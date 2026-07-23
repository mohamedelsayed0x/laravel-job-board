<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('home');
});
// index
Route::get('/jobs', function () {
  $jobs = Job::with('employer')->cursorPaginate(6);

  return view('jobs.index', [
    'jobs' => $jobs,
  ]);
});

//create
Route::get('/jobs/create', function () {
  return view('jobs.create');
});

//Store
Route::post('/jobs', function () {
  request()->validate([
    'title' => ['required', 'min:3'],
    'salary' => ['required']
  ]);

  Job::create([
    'title' => request('title'),
    'salary' => request('salary'),
    'employer_id' => 1,
  ]);

  return redirect('/jobs');
});

// show 
Route::get('/jobs/{job}', function (Job $job) {
  return view('jobs.show', [
    'job' => $job,
  ]);
});


// edit
Route::get('/jobs/{job}/edit', function (Job $job) {
  return view('jobs.edit', [
    'job' => $job,
  ]);
});

// update 
Route::patch('/jobs/{job}', function (Job $job) {
  // Validation
  request()->validate([
    'title' => ['required', 'min:3'],
    'salary' => ['required']
  ]);
  // authorize (on hold ...)
  $job->update([
    'title' => request('title'),
    'salary' => request('salary')
  ]);

  return redirect('/jobs/' . $job->id);
});

// destroy
Route::delete('/jobs/{job}', function (Job $job) {
  // authorize (on hold ...)
  $job->delete();
  return redirect('/jobs');
});

//==========================================

Route::get('/contact', function () {
  return view('contact');
});

Route::get('/index', function () {
  return view('index');
});