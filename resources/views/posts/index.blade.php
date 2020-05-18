@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="#">掲示板</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('posts.create') }}">新規作成</a>
                    </li>
                    </ul>
                </div>

                @foreach($posts as $post)
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">
                            投稿者：{{ $post->user->name }}
                        </p>
                        <p class="card-text">{{ $post->talktheme }}</p>
                        <a href="{{ route('posts.detail',$post->id) }}" class="btn btn-primary">全てを見る</a>
                    </div>
                </div>

                <div class="card-footer text-muted">
                    投稿日：{{ $post->formatted_post_time }}
                </div>
                @endforeach 

            </div>
        </div>
    </div>
</div>
@endsection
