<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMERTA</title>
    @include('include.style')
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>

<body>
    @if(Auth::check())
    @endif
    <div id="app">
        
        {{-- sidebars --}}
        @include('include.sidebars')
        

        {{-- Akhir sidebars --}}
    </div>
    @include('include.headers')
    <div id="main">
        <header class="mb-3 ">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Dashboard Admin</h3>
        </div>

        @yield('content')


        {{-- Footer --}}
        @include('include.footer')
        {{-- Akhir Footer --}}
    </div>
    </div>

    @include('include.script')
    
</body>

</html>
