<!DOCTYPE html>
<html>
<head>
    <title>
        @section('title')
            Link List Fooooo Bar
        @show
    </title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/app.css">
<body>

@include('nav')

@yield('content')

<script src="/js/main.js"></script>
</body>
</html>
