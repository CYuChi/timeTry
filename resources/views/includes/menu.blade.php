<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">贏在起跑點!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/')}}">首頁<span class="sr-only">(current)</span></a>
        </li>
        @if (Route::has('login'))
            @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/logout')}}">登出</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/login')}}">登入</a>
                </li>
                @if(Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/register')}}">註冊</a>
                    </li>
                @endif
            @endif
        @endif

        <li class="nav-item">
          <a class="nav-link" href="{{route('oil_doit')}}">油價</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            發票
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route('10907')}}">109年07、08月中獎號碼</a>
            <a class="dropdown-item" href="{{route('10905')}}">109年05、06月中獎號碼</a>
            <a class="dropdown-item" href="{{route('10903')}}">109年03、04月中獎號碼</a>
            <a class="dropdown-item" href="{{route('10901')}}">109年01、02月中獎號碼</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('today')}}">天氣</a>
        </li>
        {{-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            天氣
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route('today')}}">今日天氣預測</a>
            <a class="dropdown-item" href="{{route('week')}}">一周天氣預測</a>
          </div>
        </li> --}}
        {{-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            油價
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route('oil_doit')}}">本周油價</a>
            <a class="dropdown-item" href="#">過去油價</a>
          </div>
        </li> --}}
      </ul>
    </div>
</nav>