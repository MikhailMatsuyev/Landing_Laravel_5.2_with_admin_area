<div class="container portfolio_title"> 
    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/admin') }}">Admin</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
    <!-- Title -->
    <div class="section-title">
      <h2>{{$title}}</h2>
    </div>
    <!--/Title --> 
    
  </div>
  <!-- Container -->
  
<div class="portfolio">

  <div id="filters" class="sixteen columns">
      <ul style="padding:0px 0px 0px 0px">
        <li><a  href="{{route('pages')}}">
          <h5>Страницы</h5>
          </a>
		</li>
		
		<li><a  href="{{route('portfolio')}}">
          <h5>Порфолио</h5>
          </a>
		</li>
		
		<li><a href="{{route('services')}}">
          <h5>Сервисы</h5>
          </a>
		</li>
      </ul>
    </div>
   
</div>	
