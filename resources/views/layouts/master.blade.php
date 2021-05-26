<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME', 'FOODKING') }}</title>

</head>

<body>
    @include('includes\navbar')
    <div class="mb-3"></div>
    <div class="container">
        @yield('content')
    </div>


</body>

</html>
