<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;


    //a employer can create many jobs and not just one hence hasMany
    public function jobs(){
    return $this->hasMany(Job::class);
    }
}
