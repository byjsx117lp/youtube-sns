@if(Auth::check())

@if(Auth::id() != $user->id)

@if(Auth::user()->is_following($user->id))

<form action="{{ route('unfollow', ['id' => $user->id]) }}" method="post">
    @csrf
    @method('delete')
    <button type="submit" class="btn button btn-danger mt-1">フォローを外す</button>
</form>

@else

<form action="{{ route('follow', ['id' => $user->id]) }}" method="post">
    @csrf
    <button type="submit" class="button btn btn-primary mt-1">フォローする</button>
</form>
@endif

@endif

@endif