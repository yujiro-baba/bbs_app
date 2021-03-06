@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">新規作成</div>
                <div class="card-body">
                    <div class="form-group">
                        @if($errors->any())
                            <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $message)
                                <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                            </div>
                        @endif
                        <form action="{{ route('posts.create') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">タイトル</label>
                                <input type="text" class="form-control" id="title"  name="title" value="{{ old('title') }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">トークテーマ</label>
                                <input type="text" class="form-control" id="talktheme"  name="talktheme" value="{{ old('talktheme') }}">
                            </div>
                            <div class="text-right">
                            <button type="submit" class="btn btn-primary">送信</button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
        </div>
    </div>
</div>

@endsection