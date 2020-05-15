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
    public function __construct()
    {
        $this->middleware('auth');
    }
    
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

        $writes = $post->writes()->get();

        return view('posts/detail', [
            'post' => $post,
            'writes' => $writes,
        ]);
    }

    public function showWriteForm(Post $post)
    {
        return view('posts/write', [
            'post' => $post,
        ]);
    }

    public function write(Post $post, WritePost $request)
    {
        $write = new Write();
        $write->content = $request->content;
        $write->write_time = Carbon::now();

        $post->writes()->save($write);

        return redirect()->route('posts.detail', [
            'id' => $post->id,
        ]);
    }   
}

