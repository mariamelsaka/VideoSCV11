<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User Login</title>
    <link rel="icon"type="image/x-icon"href="{{asset("assets/image/logo-removebg-preview.png")}}"/>
    <!-- Custom fonts for this template-->
    <link href="{{asset("dashboard/vendor/fontawesome-free/css/all.min.css")}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset("dashboard/css/sb-admin-2.min.css")}}" rel="stylesheet">

</head>

<body style="background-image: url('{{asset("dashboard/img/idea.jpg")}}');background-repeat: no-repeat;background-size: cover;" >

<div class="container" >

    <!-- Outer Row -->
    <div class="row justify-content-center" style="margin-top: 170px;">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5" style="background-color: #245168c9;" >
                <div class="card-body " style="padding-left: 200px;" >
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-900 mb-4" style="color: white;" >Welcome Back!</h1>
                                </div>
                                @include("common.errors") {{--  to get error msg--}}
                                @include("common.success")


                                @if (session('status'))
                                    <div class="mb-4 font-medium text-sm text-green-600">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <form class="user" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                               id="exampleInputEmail" aria-describedby="emailHelp"
                                               placeholder="Enter User  Name..." required  name="username" >
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                               id="exampleInputPassword" placeholder="Password" name="password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" style="color: white;"  for="customCheck">Remember
                                                Me</label>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-user btn-block"  style="background-color:white;color: #245168;font-size: 20px;" >Login</button>


                                    <hr>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" style="color: white;" href="/register" >Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</body>

</html>
