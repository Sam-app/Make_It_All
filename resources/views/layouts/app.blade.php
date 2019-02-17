<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    <img style="width: 100px;height:40px" src="{{ asset('img/logo.png') }}" alt="Make-IT-All">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @guest
                        @else  
                        {{-- <li class="nav-item active">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                          </li> --}}
                          <li class="nav-item">
                            <a class="nav-link" href="/problems/create">New Record</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="/mytask">My Task</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="/problems">Ongoing </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="/completed">Resolved</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="/tools">Items</a>
                          </li>
                        
                        @endguest
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
                        @else

                          {{-- Serach form --}}
                          <li class="nav-item">
                            {!! Form::open(['action'=>'SearchsController@store','method'=>'POST','class'=>'form-inline']) !!}
                                <label class="sr-only" for="inlineFormInput">query</label>
                                <input id="search_input" name="query" type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Search problem">
                                {{Form::submit('Search',['class'=>'btn btn-light'])}}

                                {!! Form::close() !!}
                          </li>
                          {{-- End serach Form --}}




                            <li class="nav-item ">
                               <div class="" aria-labelledby="" style="margin-left:9px">
                                    <a  class="nav-link" href="/home"   >
                                            {{ Auth::user()->name }} 
                                    </a>

                               </div>
                            </li>
                            <li class="nav-item">
                                    <div class="" aria-labelledby="" style="margin-top:5px">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>


                                        </div>
                            </li>
                            
                        @endguest
                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                </div>
            </div>
        </nav>

        <div class="container">
            <main class="py-4">
                @include('inc.messages')
                @yield('content')
            </main>
        </div>
    </div>
    <!-- Footer -->
    <hr>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
         $(document).ready(function(){
    
            // $("#search").click(function(){
            //     var search = $('#search_input').val()
            //     var search_url = 'makeitall.test/search/'+ search;
            //     alert(search_url);
            //     window.location.replace(search_url);

            //  });
    
             
     });
     </script>

</body>
</html>
