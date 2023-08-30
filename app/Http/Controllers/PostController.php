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
            'created_at' => Carbon::now()->format('d-m-y'),
            'updated_at' => Carbon::now()->format('d-m-y'),

        ]);

        return redirect('post')->with('store', 'Data berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $user = Auth::user();
        if ($post->user_id !== $user->id) {
            # code...
        }
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
            'updated_at' => Carbon::now()->format('d-m-y'),
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

public function indexUmum(Request $request)
{
    $handleCategory = function ($category) {
        // Logic for handling the given category
        // You can access $request here if needed

        // Example logic:
        if (request('level')) {
            $posts = Post::where('category', $category)
                         ->where('level', request('level'))
                         ->get();
        } else {
            $posts = Post::where('category', $category)->get();
        }

        return $posts;
    };

    $currentPath = $request->path();

    if (strpos($currentPath, 'html') !== false) {
        $posts = $handleCategory('html');
        return view('kelas-mentor.html.index', ['posts' => $posts]);
    } elseif (strpos($currentPath, 'css') !== false) {
        $posts = $handleCategory('css');
        return view('kelas-mentor.css.index', ['posts' => $posts]);
    } elseif (strpos($currentPath, 'php') !== false) {
        $posts = $handleCategory('php');
        return view('kelas-mentor.php.index', ['posts' => $posts]);
    } elseif (strpos($currentPath, 'js') !== false) {
        $posts = $handleCategory('js');
        return view('kelas-mentor.js.index', ['posts' => $posts]);
    } elseif (strpos($currentPath, 'sql') !== false) {
        $posts = $handleCategory('sql');
        return view('kelas-mentor.sql.index', ['posts' => $posts]);
    } else {
        // Default case
        return view('index');
    }
}

public function detailUmum(Request $request,Post $post){
{
    $currentPath = $request->path();

    if (strpos($currentPath, 'html') !== false) {
        // 'html' is present in the URL path
        // Your logic here
        return view('kelas-mentor.html.detail',[
             'posts' => $post,
         ]);
    } elseif (strpos($currentPath, 'css') !== false) {
        // 'css' is present in the URL path
        // Your logic here
        return view('kelas-mentor.css.detail',[
             'posts' => $post,
         ]);
    } elseif (strpos($currentPath, 'php') !== false) {
        // 'php' is present in the URL path
        // Your logic here
        return view('kelas-mentor.php.detail',[
             'posts' => $post,
         ]);
    } elseif (strpos($currentPath, 'js') !== false) {
        // 'js' is present in the URL path
        // Your logic here
         return view('kelas-mentor.js.detail',[
             'posts' => $post,
         ]);
    } elseif (strpos($currentPath, 'sql') !== false) {
        // 'sql' is present in the URL path
        // Your logic here
         return view('kelas-mentor.sql.detail',[
             'posts' => $post,
         ]);
    } else {
        // Default case
        return view('index');
    }
}
}

    public function profileMentor(Post $post){
        // $user = User::get();
        $poost = Post::with('users')->where('id_user',$post->id_user)->get();
        return view('kelas-mentor.profile-mentor.index', [
            'posts' => $post,
            'pos' => $poost
        ]);
    }
}
