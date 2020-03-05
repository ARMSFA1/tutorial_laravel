<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>@yield('title','Laravel 5.8 Basics')</title>
</head>
<body>

    {{-- That's how you write a comment in blade --}}
    
    @include('inc.navbar')
    
    <main class="container mt-4">
        @yield('content')
    </main>

    <script src="{{asset('js/app.js')}}"></script> {{-- <- bootstrap and jquery --}}
    
</body>
</html>