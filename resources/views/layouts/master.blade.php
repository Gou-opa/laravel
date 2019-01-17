<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::to('src/css/main.css')}}">
    @yield('style')
    <script src="main.js"></script>
</head>
<body>
    <div class="main">
        @yield('content')
    </div>
</body>
</html>