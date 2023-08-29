<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $post = Post::with('users')->where('id_user', $user->id)->get();

        return view('admin.post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        return view('admin.post.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Post::insert([

            'title' => $request->title,
            'id_user' => $request->id_user,
            'category' => $request->category,
            'level' => $request->level,
            'tool' => $request->tool,
            'content' => $request->content,
            'id_yt' => $request->id_yt,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);

        return redirect('post')->with('store', 'Data berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {

        return view('admin.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $userr = User::get();
        return view('admin.post.edit', compact('post','userr'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        Post::where('id', $post->id)->update([
            'title' => $request->title,
            'id_user' => $request->id_user,
            'category' => $request->category,
            'level' => $request->level,
            'tool' => $request->tool,
            'content' => $request->content,
            'id_yt' => $request->id_yt,
            'updated_at' => Carbon::now(),
        ]);

        return redirect('post')->with('update', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Post::where('id', $post->id)->delete();

        return redirect('post')->with('delete', 'Data berhasil dihapus');
    }

    //Fungsi Kelas Mentor HTML
    public function indexHTML(){
        if (request('level')) {
            # code...
            $posts = Post::Where('category','html')
                           ->where('level',request('level'))
                           ->get();
        }
        else {

            $posts = Post::Where('category','html')->get();
        }

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

    //Fungsi Kelas Mentor SQL
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

    //fungsi sort
    // public function sort(Request $request, $mudah, $menengah, $lanjutan){
    //     $posts = Post::Where('category','html','&','');
    // }
}
