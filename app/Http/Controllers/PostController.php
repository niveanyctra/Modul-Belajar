<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\Rules\YoutubeValidLink;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $post = Post::with('users')->where('id_user', $user->id)->orderBy('updated_at', 'DESC')->get();

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


preg_match(
    "/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user|shorts|live)\/))([^\?&\"'>]+)/",
    //supported link :
    // youtube.com/v/vidid
    // youtube.com/vi/vidid
    // youtube.com/?v=vidid
    // youtube.com/?vi=vidid
    // youtube.com/watch?v=vidid
    // youtube.com/watch?vi=vidid
    // youtu.be/vidid
    // youtube.com/embed/vidid
    // http://youtube.com/v/vidid
    // http://www.youtube.com/v/vidid
    // https://www.youtube.com/v/vidid
    // youtube.com/watch?v=vidid&wtv=wtv
    // http://www.youtube.com/watch?dev=inprogress&v=vidid&feature=related
    // https://m.youtube.com/watch?v=vidid
    // youtube.com/shorts/vididc
    // youtube.com/live/vididc
    $request->id_yt,
    $match
);
if (!$match) {
    # code...
    return redirect()->back()->withErrors(['video_id' => 'Link tidak valid!']);
}
        $youtube_id = $match[1];

        if (empty($request->tool)) {
            # code...
                return redirect()->back()->withErrors(['tool' => 'Mohon pilih minimal 1 tool!']);
        }
        $tool = implode(',', $request->tool);
        $rep = strtolower($request->title);
        Post::insert([
            'title' => $request->title,
            'slug' => str_replace(' ','-',$rep),
            'id_user' => $request->id_user,
            'category' => $request->category,
            'level' => $request->level,
            'tool' => $tool,
            'about' => $request->about,
            'id_yt' => $youtube_id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);

            # code...
            return redirect('post')->with('store', 'Data berhasil dibuat');


    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {

        $user = Auth::user();
        if ($post->id_user !== $user->id) {
           # code...
            return redirect('/post');
        }else {
            # code...
            return view('admin.post.show', compact('post','user'));
        }
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
        $user = Auth::user();
        if ($post->id_user !== $user->id) {
           # code...
            return redirect('/post');
        }else {
            # code...

            return view('admin.post.edit', compact('post','user'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $user = Auth::user();

preg_match(
    "/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user|shorts|live)\/))([^\?&\"'>]+)/",
    //supported link :
    // youtube.com/v/vidid
    // youtube.com/vi/vidid
    // youtube.com/?v=vidid
    // youtube.com/?vi=vidid
    // youtube.com/watch?v=vidid
    // youtube.com/watch?vi=vidid
    // youtu.be/vidid
    // youtube.com/embed/vidid
    // http://youtube.com/v/vidid
    // http://www.youtube.com/v/vidid
    // https://www.youtube.com/v/vidid
    // youtube.com/watch?v=vidid&wtv=wtv
    // http://www.youtube.com/watch?dev=inprogress&v=vidid&feature=related
    // https://m.youtube.com/watch?v=vidid
    // youtube.com/shorts/vididc
    // youtube.com/live/vididc

    $request->id_yt,
    $match
);
if (!$match) {
    # code...
    return redirect()->back()->withErrors(['video_id' => 'Link tidak valid!']);
}
        $youtube_id = $match[1];

        if (empty($request->tool)) {
            # code...
                return redirect()->back()->withErrors(['tool' => 'Mohon pilih minimal 1 tool!']);
        }
        $tool = implode(',', $request->tool);
        $rep = strtolower($request->title);
        if ($post->id_user !== $user->id) {
           # code...
            return redirect('/post');
        }else {
            # code...
            Post::where('id', $post->id)->update([
            'title' => $request->title,
            'slug' => str_replace(' ','-',$rep),
            'id_user' => $request->id_user,
            'category' => $request->category,
            'level' => $request->level,
            'tool' => $tool,
            'about' => $request->about,
            'id_yt' => $youtube_id,
            'updated_at' => Carbon::now(),
        ]);
        }


        return redirect('post')->with('update', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $user = Auth::user();
        if ($post->id_user !== $user->id) {
           # code...
            return redirect('/post');
        }else {
            # code...
            Post::where('id', $post->id)->delete();
        }

        return redirect('post')->with('delete', 'Data berhasil dihapus');
    }

public function indexUmum(Request $request)
{

    $currentPath = $request->path();
    if (str_contains($currentPath,'html')) {
        # code...

        if (request('level')) {
            $posts = Post::where('category', 'html')
                         ->where('level', request('level'))
                         ->get();
        } else {
            $posts = Post::where('category', 'html')->get();
        }
        return view('kelas-mentor.html.index', ['posts' => $posts]);

      }elseif (str_contains($currentPath,'css')) {
        # code...
        if (request('level')) {
            $posts = Post::where('category', 'css')
                         ->where('level', request('level'))
                         ->get();
        } else {
            $posts = Post::where('category', 'css')->get();
        }
        return view('kelas-mentor.css.index', ['posts' => $posts]);

      }elseif (str_contains($currentPath,'php')) {
        # code...
        if (request('level')) {
            $posts = Post::where('category', 'php')
                         ->where('level', request('level'))
                         ->get();
        } else {
            $posts = Post::where('category', 'php')->get();
        }
        return view('kelas-mentor.php.index', ['posts' => $posts]);

      }elseif (str_contains($currentPath,'js')) {
        # code...
        if (request('level')) {
            $posts = Post::where('category', 'js')
                         ->where('level', request('level'))
                         ->get();
        } else {
            $posts = Post::where('category', 'js')->get();
        }
        return view('kelas-mentor.js.index', ['posts' => $posts]);

      }elseif (str_contains($currentPath,'sql')) {
        # code...
        if (request('level')) {
            $posts = Post::where('category', 'sql')
                         ->where('level', request('level'))
                         ->get();
        } else {
            $posts = Post::where('category', 'sql')->get();
        }
        return view('kelas-mentor.sql.index', ['posts' => $posts]);
      }else{
        return view('index');
      }
        // Logic for handling the given category
        // You can access $request here if needed

        // Example logic:


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

    public function profileMentor(Post $post, $username){
        // $user = User::get();
        // $posts = Post::with('users')->whereHas('users', function($query) use ($username){
        //     $query->where('username', $username);
        // })->get();
        $user = User::where('username', $username)->firstOrFail();
        $posts = Post::where('id_user', $user->id)->get();
        // $poost = Post::with('users')->where('id_user',$posts->id_user)->get();
        return view('kelas-mentor.profile-mentor.index', compact('user','posts'));
            // 'postss' => $post,
            // 'pos' => $poost,
        //     'username' => $username,
        //     'posts' => $posts
        // ]);
        // return view('kelas-mentor.profile-mentor.index', [
        // ]);
    }
}
