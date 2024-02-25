<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LARAVEL | @yield('title') </title>
    <link href="{{ asset('/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
</head>
<body class="bg-dark">
   <x-header />


   <div class="container pt-5">

    @yield('content')
    

   </div>
   
    

   <script src="{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>