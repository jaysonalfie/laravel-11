<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;



//declaring array so as not to duplicate 
//create a class that retrieves all
class Job extends Model{ 
  protected $table= 'job_listings';

  //elements that can be mass assigned
  protected $fillable = ['title', 'salary'];
}
    