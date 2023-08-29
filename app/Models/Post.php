<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{

    use HasFactory;
    protected $fillable = [
        'title',
        'category',
        'level',
        'tool',
        'content',
        'id_yt',
        'id_user',
    ];
    public function users()
    {
        return $this->belongsTo(User::class,'id_user','id');
    }
}
