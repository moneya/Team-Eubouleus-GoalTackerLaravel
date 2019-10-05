<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Hng Goal Tracker') }}</title>
    

  

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{--  <link href="{{ asset('css/app.css') }}" rel="stylesheet">  --}}
    <link href="{{ url('/css/app.css')}}" rel="stylesheet">
    

    @if(Request::url() === url('/') || Request::url() === url('/login') || Request::url() === url('/register'))
     <link href="{{ asset('css/index.css') }}" rel="stylesheet">
     <link href="{{ asset('css/eyeView.css')}}" rel="stylesheet">
    @endif

     @if(Request::url() != url('/') || Request::url() != url('/login') || Request::url() != url('/register'))
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">
     
    @endif

   

     @livewireAssets
</head>
<body>
    
    @guest
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Goal Tracker') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
 </div>
         @endguest

         @auth
     <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">
      <a class="navbar-brand" href="{{ url('/dashboard') }}">
                    {{ config('app.name', 'Goal Tracker') }}
                </a> </div>
      <div class="list-group list-group-flush">
        <a href="{{ url('/dashboard') }}" 
         @if(Request::url() === url('/dashboard') )
        class="list-group-item list-group-item-action bg-light active"
        @else
        class="list-group-item list-group-item-action bg-light"
        @endif
        >Dashboard</a>
        <a href="{{ url('/mygoals') }}" 
         @if(Request::url() === url('/mygoals') || Request::url() === '/goals/*' )
        class="list-group-item list-group-item-action bg-light active"
        @else
        class="list-group-item list-group-item-action bg-light"
        @endif
        >My Goals</a>
        {{--  <a href="{{ url('/settings') }}" 
         @if(Request::url() === url('/settings') )
        class="list-group-item list-group-item-action bg-light active"
        @else
        class="list-group-item list-group-item-action bg-light"
        @endif
        
        >Setting</a>  --}}
        {{--  <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>  --}}
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-secondary" id="menu-toggle"><i class="fas fa-align-left"></i></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
             <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
          </ul>
        </div>
      </nav>
         @endauth

       @guest
        <main>
            @yield('content')
        </main>
       @endguest


         @auth
        <div>
            @yield('content')
        </div>
       @endauth
   

    @yield('footer')
  <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/eyeView.js') }}"></script>

     @if(Request::url() != url('/') || Request::url() != url('/login') || Request::url() != url('/register'))
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
     @endif
  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
    @yield('script')
    
</body>
</html>
