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
                        <p class="card-text">{{ $post->content }}</p>
                        <a href="#" class="btn btn-primary">詳細</a>
                    </div>
                </div>

                <div class="card-footer text-muted">
                    {{ $post->write_time }}
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection
