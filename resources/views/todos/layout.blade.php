<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--    todo remove --}}
{{--    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">--}}
    <title>Todos</title>
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="text-center container">
    @yield('content')
</div>
</body>
</html>
