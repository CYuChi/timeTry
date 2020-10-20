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
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
</nav>