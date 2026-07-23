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

// Show 
Route::get('/jobs/{id}', function ($id) {
  $job = Job::findOrFail($id);

  return view('jobs.show', [
    'job' => $job,
  ]);
});


// Edit
Route::get('/jobs/{id}/edit', function ($id) {
  $job = Job::findOrFail($id);

  return view('jobs.edit', [
    'job' => $job,
  ]);
});

// Update 
Route::patch('/jobs/{id}', function ($id) {
  // Validation
  request()->validate([
    'title' => ['required', 'min:3'],
    'salary' => ['required']
  ]);

  // authorize (on hold ...)

  $job = Job::findOrFail($id);

  $job->update([
    'title' => request('title'),
    'salary' => request('salary')
  ]);

  return redirect('/jobs/' . $job->id);
});

// Destroy
Route::delete('/jobs/{id}', function ($id) {
  // authorize (on hold ...)
  $job = Job::findOrFail($id)->delete();
  return redirect('/jobs');
});

//==========================================

Route::get('/contact', function () {
  return view('contact');
});

Route::get('/index', function () {
  return view('index');
});