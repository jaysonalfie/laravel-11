<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;


//declaring arrays in laravel
Route::get('/', function () {
    return view('home', );
});


Route::get('/jobs', function() {
    return view('jobs', [
        'jobs' => [
              [
                 'id' => 1,
                 'title' => 'Director',
                 'salary' => '$50,000'
              ],
              [
                'id' => 2,
                'title' => 'Frontend developer',
                'salary' => '$500,000'
              ],
             [
                'id' => 3,
                'title' => 'Backend developer',
                'salary' => '$600,000'
             ]
        ]
    ]);
});

Route::get('/jobs/{id}', function($id) {
   $jobs  = [
        [
           'id' => 1,
           'title' => 'Director',
           'salary' => '$50,000'
        ],
        [
          'id' => 2,
          'title' => 'Frontend developer',
          'salary' => '$500,000'
        ],
       [
          'id' => 3,
          'title' => 'Backend developer',
          'salary' => '$600,000'
       ],
       [
          'id' => 4,
          'title' => 'teacher',
          'salary'=> '$30,000'
       ],
       [
         'id' => 5,
         'title' => 'musician',
         'salary' => '$90,000'
       ]
       ];
         

       //finding the first job that matches the id
       //fn has been passed as an argument to the Arr::first function
       //fn is an anonymous function
       //it takes the $job argument which is the current job and cheks if itd id corresponds to the one passed as a parameter 
       //if it meets the true bool it is is returned by the Arr::first
       //alternative without the arrow function
//     $job = Arr::first($jobs, function($job) use ($id) {
//     return $job['id'] == $id;
// });
       $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
       
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
