<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;




Route::get('/', function () {
   
    return view('home', );
});


Route::get('/jobs', function()   {

    $jobs = Job::with('employer')->get();

    return view('jobs', [
        'jobs' => $jobs ]);
});

Route::get('/jobs/{id}', function($id) {
        /**
         * This method finds a job with a given id
         * fn (anonymous function)has been passed as an argument to the Arr::first function
         * it takes the $job argument which is the current job and cheks if its id corresponds to the one passed as a parameter 
         * if it meets the true bool it is is returned by the Arr::first
         * 
         */
         
       //alternative without the arrow function
//     $job = Arr::first($jobs, function($job) use ($id) {
//     return $job['id'] == $id;
// });
         $job = Job::find($id);
       
       //dump and die for the found job details
        // dd($job);
    return view('job', ['job' => $job]);
 });


 
Route::get('/contact', function() {
   return view('contact');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
