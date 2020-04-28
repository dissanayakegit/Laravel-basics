<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>
<body>

@include('inc.navbar')
<div class="container">

    @if(Request::is('/'))
        @include('inc.showcase')
    @endif

    <div class="row">
        <div class="col-md-8">
            @include('inc.messages')
            @yield('content')
        </div>
        <div class="col-md-4 sidebar">
            @include('inc.sidebar')
            this is app pages sidebar column 4
        </div>
    </div>
</div>


    
</body>
</html>