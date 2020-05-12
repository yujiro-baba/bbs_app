<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\CreatePost;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts/index', [
            'posts' => $posts,
        ]);
    }

    public function showCreateForm()
    {
        return view('posts/create');
    }

    public function create(CreatePost $request)
    {
    
    $post = new Post();

    $post->title = $request->title;
    $post->content = $request->content;
    $post->write_time = Carbon::now();
 
    $post->save();

    return redirect()->route('posts.index');
    }   
}
