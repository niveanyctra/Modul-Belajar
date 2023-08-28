<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
        //Fungsi Kelas Mentor HTML
    public function indexHTML(){
        $posts = Post::Where('category','html')->get();
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
        $posts = Post::Where('category','css')->get();
        return view('kelas-mentor.css.index',[
            'posts' => $posts,
        ]);
    }
    public function detailCSS(Post $post){
        return view('kelas-mentor.css.detail',[
            'posts' => $post,
        ]);
    }


    //Fungsi Kelas Mentor PHP
    public function indexPHP(){
        $posts = Post::Where('category','php')->get();
        return view('kelas-mentor.php.index',[
            'posts' => $posts,
        ]);
    }
    public function detailPHP(Post $post){
        return view('kelas-mentor.php.detail',[
            'posts' => $post,
        ]);
    }

    //Fungsi Kelas Mentor JS
    public function indexJS(){
        $posts = Post::Where('category','js')->get();
        return view('kelas-mentor.js.index',[
            'posts' => $posts,
        ]);
    }
    public function detailJS(Post $post){
        return view('kelas-mentor.js.detail',[
            'posts' => $post,
        ]);
    }
    public function indexSQL(){
        $posts = Post::Where('category','mysql')->get();
        return view('kelas-mentor.sql.index',[
            'posts' => $posts,
        ]);
    }
    public function detailSQL(Post $post){
        return view('kelas-mentor.sql.detail',[
            'posts' => $post,
        ]);
    }
}
