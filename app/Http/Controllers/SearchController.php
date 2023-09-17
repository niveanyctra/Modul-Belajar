<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        return view('autocompleteSearch');
    }
    public function autocomplete(Request $request)
    {
        $limit = 2;
        $data = Post::with('users')
                    ->where('posts.title', 'LIKE', '%'. $request->get('q'). '%')
                    ->orWhere('posts.level', 'LIKE', '%'. $request->get('q'). '%')
                    ->orWhereRelation('users','name', 'LIKE', '%'. $request->get('q'). '%')
                    // ->limit($limit)
                    ->get();
     
        return response()->json($data);
    }
    
}
