<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // public function mentors()
    // {
    //     return $this->belongsToMany('App\Mentor', 'post_mentors', 'post_id', 'mentor_id');
    // }
}
