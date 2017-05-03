<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Restaurant Kit') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app ">
        
        <div class="container-fluid bg-default sec">
            <div class="col-xs-12 col-sm-1">
                    <!-- Left Side Of Navbar -->
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                           <a href="#"  data-toggle="dropdown" role="button" aria-expanded="false">
                                    
     {{ Html::image('storage/user/avatars/' . Auth::user()->image_url,
                            '',
                            ['class' => 'avatars'])
     }}        
                                
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                                         
                </div>



                <div class="col-xs-12 col-sm-2">
                    <h2 class="color-white font-default comeback-center">Hello {{Auth::user()->name}} 
                        <a href="#"><i class="fa fa-envelope color-black pull-right "></i></a>
                        <a href="#"><i class="fa fa-bell color-black pull-right"></i></a>
                    </h2>


                </div>
            </div>
        </div>

     
                    <div class="container-fluid page-heading  bg-default padding-0">
                            <h2 class="font-default text-center">{{ $title }}</h2>
                        
                    </div>

        <div class="container-fluid">
            @yield('content') 
        </div>



<!-- Modal -->
<div class="modal fade" id="globalSearchModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <!--<h4 class="modal-title" id="myModalLabel">Search anything</h4>-->
        <div class="form-group col-xs-10 col-xs-offset-1 ">
        <input type="search" class="form-control" name="search" id="global-search-box" placeholder="Search Here" >
            
        </div>
      </div>
      <div class="modal-body">
                <div class="row">
                    <div class="form-group col-xs-11 col-xs-offset-1 ">
                    After implementation, Search results will appear here. Stay tuned for updates.
                </div>
                </div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>-->
    </div>
  </div>
</div>
        <div class="footer-fixer"></div>



        <div class="container-fluid fixed-menu  bg-default padding-0" >
            <div class="col-xs-12 col-sm-4 bg-dark menu-block padding-0" id="menu-block">
                <h2  
                    class="text-center font-default color-white" id="menu-btn"><i class="fa fa-cog color-black"></i> Setting</h2>
                <div class=" close menu " id="modal" >
                  
                    <div class=" modal-body bg-default color-white text-center  text-center settings-menu-body">
                       @foreach ($navigation as $route)
                        <div class="col-xs-12 padding-0 border-bottom-1  ">
                            
                            <h4 class="light gg">
                                <a class="color-white " href="/{{$route->uri()}}">
                                    {{ $route->getName() }}
                                </a>
                            </h4>
                        </div>
                      @endforeach
                        <div class="clearfix"></div>
                    </div>
                </div>  
            </div>
            
            <div class="col-xs-12 col-sm-8 bg-default  padding-0">
                <form action="">
                    <input type="text" class="form-control pull-right gg" placeholder="Start typing to search anything ..." data-toggle="modal" data-target="#globalSearchModal" >
                </form> 
            </div>
        </div>
    















        
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="http://localhost:8890/socket.io/socket.io.js"></script>
    
    @yield('footer')
</body>
</html>
