@extends('layouts.app')

@section('content')


<div class="text-right">

    {{ Auth::user()->name }}

</div>

<h2 class="mt-5">動画を登録する</h2>

<form action="{{ route('movies.store') }}" method="post">
    @csrf
    <div class="form-group mt-5">

        <label for="url" class="text-success">新規登録YouTube動画 "ID" を入力する</label>
        <br>例）登録したいYouTube動画のURLが <span>https://www.youtube.com/watch?v=-bNMq1Nxn5o なら</span>
        <div>  "v="の直後にある "<span class="text-success">-bNMq1Nxn5o</span>" を入力</div>
        <input id="url" type="text" name="url" class="form-control">

        <label for="comment">登録動画へのコメント</label>
        <input id="comment" type="text" name="comment" class="form-control">

        <button type="submit" class="button btn btn-primary mt-5 mb-5">新規登録</button>
    </div>
</form>


    <h2 class="mt-5">あなたの登録済み動画</h2>

    @include('movies.movies', ['movies' => $movies])


    @endsection