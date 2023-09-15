<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, SearchableTrait;

    protected $searchable = [
        'columns' => [
            'posts.title',
            'posts.category',
            'posts.level',
            'posts.tool',
            'posts.about',
            'users.name' ,
            'users.username' ,
            'users.email' ,
        ],
        'joins' => [
            'users' => ['post.id_user','users.id'],
        ],
    ];

    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'category',
        'level',
        'tool',
        'about',
        'id_yt',
        'id_user',
    ];
    public function users()
    {
        return $this->belongsTo(User::class,'id_user','id');
    }
}
