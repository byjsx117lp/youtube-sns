@extends('layouts.app')

@section('content')

<div class="center jumbotron bg-warning">
    <div class="text-center text-white">
        <h1>YouTubeまとめ × SNS</h1>
    </div>
</div>

<div class="text-center">
    <h3 class="login_title text-left d-inline-block mt-5">新規ユーザー登録</h3>
</div>

<div class="row mt-5 mb-5">
    <div class="col-sm-6 offset-sm-3">

        <form method="post" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" name="name" type="text" value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input class="form-control" name="email" type="text" value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" name="password" type="password">
            </div>

            <div class="form-group">
                <label for="password">Password(確認)</label>
                <input class="form-control" name="password_confirmation" type="password">
            </div>

            <button class="btn btn-primary mt-2" type="submit">送信</button>
        </form>

    </div>
</div>

@endsection