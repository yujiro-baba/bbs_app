@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">投稿フォーム</div>
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
                        <form action="{{ route('posts.write') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">書き込み内容</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content" value="{{ old('content') }}"></textarea>
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