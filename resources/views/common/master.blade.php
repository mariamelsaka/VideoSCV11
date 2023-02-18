<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- normalize css -->
    <link rel="stylesheet" href="{{asset("assets/css/normalize.css")}}" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}" />
    <!-- font awesome css -->
    <link rel="stylesheet" href="{{asset("assets/css/all.min.css")}}" />
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css.map")}}" />
    <link rel="stylesheet" href="{{asset("assets/css/base.css")}}" />
    <link rel="stylesheet" href="{{asset("assets/css/home.css")}}" />
    <title>home</title>
    <link rel="icon" type="image/x-icon"href="{{asset("assets/image/logo-removebg-preview.png")}}"/>

</head>
<body>

@yield('content')


<!-- bootstrap js -->
<script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>
<!-- font awesome js -->
<script src="{{asset("assets/js/all.min.js")}}"></script>
<script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("assets/js/all.min.js")}}"></script>
</body>
</html>
