<!DOCTYPE html>
<html>
<head>
    <title>@yield('title','Sample') - Laravel 入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@include('layouts._header')
<div class="container" style="margin-top: 73px">
    @include('shared.messages')
    @yield('content')
    @include('layouts._footer')
</div>
</body>
<script src="/js/app.js"></script>
</html>