@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">掲示板</div>

                @foreach($posts as $post)
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
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
