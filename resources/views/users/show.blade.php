@extends('layouts.app')

@section('content')

@include('users.tabs',['user' => $user])

@include('movies.movies', ['movies' => $movies])

@if(Auth::id() == $user->id)

<h3 class="mt-5">表示名の変更</h3>

<div class="row mt-5 mb-5">
    <div class="col-sm-6">

        <form action="{{ route('rename') }}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="channel">チャンネル名</label>
                <input id="channel" class="form-control" type="text" name="channel"
                    value="{{ old('channel') ?? $user->channel }}">
            </div>

            <div class="form-group">
                <label for="name">名前</label>
                <input id="name" class="form-control" type="text" name="name" value="{{ old('name') ?? $user->name }}">
            </div>

            <button class="button btn btn-primary mt-2" type="submit">更新する</button>

        </form>

    </div>
</div>

@endif

@endsection