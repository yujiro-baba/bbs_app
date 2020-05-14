@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">掲示板</div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->talktheme }}</p>
                        <a href="{{ route('posts.write' ,$post->id) }}" class="btn btn-primary">書き込む</a>
                    </div>
                </div>

                <div class="card-footer text-muted">
                    {{ $post->write_time }}
                </div>

                @foreach($writes as $write)
                    <div class="card">
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                            <p>{{ $write->content }}</p>
                            <footer class="blockquote-footer">{{ $write->write_time }}</footer>
                            </blockquote>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection