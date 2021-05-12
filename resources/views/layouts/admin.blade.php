<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config("app.name")}}</title>
    <link rel="stylesheet" href="{{asset("css/admin.css")}}">
    <link rel="stylesheet" href="{{asset("css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/datatables.css")}}">
    @stack('css')
</head>
<body>
    {{-- <header class="header">
        <a class="" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
    </header> --}}
    <nav class="navbar navbar-light bg-white">
        <a class="btn btn-warning " href="{{ route('logout') }}"
        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
      </nav>
    @yield("content")

    <script src="{{asset("js/jquery.min.js")}}"></script>
    <script src="{{asset("js/datatables.min.js")}}"></script>
    <script src="{{asset("js/admin.js")}}"></script>
    @stack('js')
</body>
</html>
