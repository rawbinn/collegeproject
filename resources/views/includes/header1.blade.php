<div id="header">
    <div class="container">
        <div class="row">

            <div class="col-sm-3">
                <a href="index.html"><img src="{{ asset('img/logo.png')}}" id="logo" /></a>
            </div>
            
            <div class="col-sm-9">
                <nav class="navbar navbar-default" id="main-menu">
                  <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#">Menu</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-left">
                        <li>
                          <form action="{{route('search')}}" id="search">
                            <input type="text" name="q" class="search-box" placeholder="Search by Name/Address/Email/Phone" value="{{Request::get('q')}}">
                          </form>
                        </li>
                      </ul>
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="#">Colleges</a></li>
                        <li><a href="{{route('about')}}">About</a></li>
                        @guest()
                        <li><a href="{{route('login')}}">Login</a></li>
                        <li><a href="{{route('register')}}">Register</a></li>
                        @else
                        <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }}
                          </a>

                          <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="navbarDropdown">
                              @if(Auth::user()->is_admin > 0)
                                  <a class="dropdown-item text-success text-bold" href="/admin">
                                      Admin Panel
                                  </a>
                              @endif
                              <a class="dropdown-item" href="/favorites">
                                  Favorites
                              </a>
                              <a class="dropdown-item" href="/me">
                                My Profile
                              </a>
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                          </div>
                      </li>
                        @endguest
                      </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>
            </div>
        </div>
    </div>
</div>