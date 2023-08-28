<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
        //Fungsi Kelas Mentor HTML
    public function indexHTML(){
        $posts = Post::All();
        return view('kelas-mentor.html.index',[
            'posts' => $posts,
        ]);
    }
    public function detailHTML(Post $post){
        return view('kelas-mentor.html.detail',[
            'posts' => $post,
        ]);
    }

    //Fungsi Kelas Mentor CSS
    public function indexCSS(){
        return view('kelas-mentor.css.index');
    }

    //Fungsi Kelas Mentor PHP
    public function indexPHP(){
        return view('kelas-mentor.php.index');
    }

    //Fungsi Kelas Mentor JS
    public function indexJS(){
        return view('kelas-mentor.js.index');
    }

    //Fungsi Kelas Mentor SQL
    public function indexSQL(){
        return view('kelas-mentor.sql.index');
    }
}
