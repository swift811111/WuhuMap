<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
    
    <!-- 載入打包後的 js 檔 -->
    <script src="/WuhuMap/public/js/manifest.js"></script>
    <script src="/WuhuMap/public/js/vendor.js"></script>
    <!-- 載入打包後的 css 檔 -->
    <link rel="stylesheet" type="text/css" href="/WuhuMap/public/css/comment.css">
    <!-- 自己的js檔 -->
    @yield('script')
    @yield('style')
</body>
</html>