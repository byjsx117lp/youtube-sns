<header class="mb-5">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <a class="navbar-brand" href="/">YouTube-Curation</a>
        @if(Auth::check())
        <p>ようこそ、{{ Auth::user()->name }}さん</p>
        @endif
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if(Auth::check())
                <li class="nav-item"><a id="logout" class="nav-link" href="#">ログアウト</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="post" style="display:none">
                @csrf
                </form>
                <li class="nav-item"><a class="nav-link" href="{{ route('users.show', ['id' => Auth::id()]) }}">マイページ</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('movies.create') }}">動画を登録する</a></li>
                @else
                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">新規ユーザ登録</a></li>
                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">ログイン</a></li>
                @endif
            </ul>
        </div>

    </nav>

</header>