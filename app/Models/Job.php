<?php

namespace App\Models;
use Illuminate\Support\Arr;


//declaring array so as not to duplicate 
//create a class that retrieves all
class Job{
    public static function  all():array {
         return [
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
    }

    public static function find(int $id) :array{
        /**
         * This method finds a job with a given id
         * fn (anonymous function)has been passed as an argument to the Arr::first function
         * it takes the $job argument which is the current job and cheks if its id corresponds to the one passed as a parameter 
         * if it meets the true bool it is is returned by the Arr::first
         * 
         */
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        //handling null return type
        if(! $job){
            abort(404);

        }

    }
 }