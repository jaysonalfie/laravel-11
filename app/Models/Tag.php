<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;

 //a tag can belong to many jobs
 //use of relatedPivotKey so as to not reference the default jobs table but job_listings table
    public function jobs(){
        return $this->BelongsToMany(Job::class, relatedPivotKey:'job_listing_id');
    }
}
