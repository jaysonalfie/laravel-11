<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



//declaring array so as not to duplicate 
//create a class that retrieves all
class Job extends Model{ 

  use HasFactory;
  protected $table= 'job_listings';

  //elements that can be mass assigned
  protected $fillable = ['title', 'salary'];
}
    