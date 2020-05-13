<?php

namespace App\Http\Controllers;

use App\Post;
use App\Write; 
use App\Http\Requests\CreatePost;
use App\Http\Requests\WritePost;
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
        $post->talktheme = $request->talktheme;
        $post->write_time = Carbon::now();
    
        $post->save();

        return redirect()->route('posts.index');
    }   

    public function detail(Post $post)
    {
        $select_post = Post::find($post->id);

        $writes = Write::where('post_id', $select_post->id)->get();

        return view('posts/detail', [
            'post' => $post,
            'writes' => $writes,
        ]);
    }

    public function showWriteForm()
    {
        return view('posts/write');
    }

    public function write(WritePost $request)
    {

        $post->content = $request->content;
        $post->write_time = Carbon::now();
    
        $post->save();

        return redirect()->route('posts.index');
    }   
}

