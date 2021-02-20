<nav class="navbar navbar-expand-lg navbar-dark " style="background-image:linear-gradient(to right,#1890c8,#1aa6e1,#1890c8);">
  <a class="navbar-brand ml-1 p-0" href="/"><img width="140" src="{{asset('img/applogo_white.png')}}" alt="logoapp"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto mr-3">
      @if(auth()->guard('masyarakat')->check())
        <a class="nav-link text-white @if(request()->segment(1) == "") disabled border border-warning border-top-0 border-left-0 border-right-0 @else active @endif" href="/">Home</a>
        <a class="nav-link text-white @if(request()->segment(1) == "lapor") disabled border border-warning border-top-0 border-left-0 border-right-0 @else active @endif" href="/lapor">Buat Laporan</a> 
        
        <li class="nav-item dropdown">
          <a href="#" class="nav-link text-white dropdown-toggle active" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth()->guard('masyarakat')->user()->nama}}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a href="/laporanku"class="dropdown-item">
            <i class="fas fa-clipboard fa-sm fa-fw mr-2"></i>
            Laporanku
          </a>
          <a class="dropdown-item" href="{{route('masyarakat.logout')}}">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
            Logout
          </a>
          </div>
        </li>
      @else
        <a class="nav-link btn text-dark" style="background-image:linear-gradient(to right,gold,#fff700)"href="/login">Login</a> 
      @endif 
    </div> 
  </div>
</nav>