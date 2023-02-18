<!DOCTYPE html>
<html lang="en">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>
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
                                <form class="user" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label" style="color: white">Upload  Image</label>
                                        <input value="{{old('user_img')}}"  type="file" name="user_img" class="form-control">
                                    </div>

                                    <div style="margin-bottom:20px;margin-top: 20px;">
                                        <i class="fas fa-user" style="color: white"></i>
                                        <strong style="color: white"> user name </strong>
                                        <input value="{{old('username')}}" type="text" required class="form-control" name="username" placeholder="enter your user name" >
                                    </div>

                                    <div style="margin-bottom:20px;margin-top: 20px;">
                                        <i class="fas fa-align-justify" style="color: white"></i>
                                        <strong style="color: white"> first name </strong>
                                        <input    value="{{old('firstname')}}" type="text" required class="form-control" name="firstname" placeholder="enter your first name"  >
                                    </div>


                                    <div style="margin-bottom:20px;margin-top: 20px;">
                                        <i class="fas fa-align-justify" style="color: white"></i>
                                        <strong style="color: white"> last name </strong>
                                        <input  value="{{old('lastname')}}" type="text" required  class="form-control" name="lastname" placeholder="enter your first name" >
                                    </div>


                                    <div style="margin-bottom:20px;margin-top: 20px;">
                                        <i class="fas fa-phone-alt" style="color: white"></i>
                                        <strong style="color: white"> phone number </strong>
                                        <input value="{{old('phone_number')}}" type="text"  class="form-control" placeholder="enter your phone number" required name="phone_number" >

                                    </div>


                                    <div style="margin-bottom:20px;margin-top: 20px;">
                                        <i class="fas fa-address-card" style="color: white"></i>
                                        <strong style="color: white">Address</strong>

                                        <input value="{{old('address')}}" class="form-control"   type="text"value="{{old('address')}}" name="address">

                                    </div>

                                    <div style="margin-bottom:20px;margin-top: 20px;">
                                        <i class="fas fa-user" style="color: white"></i>
                                        <strong style="color: white"> Email </strong>
                                        <input  type="email" value="{{old('email')}}" required class="form-control"  name="email"placeholder="enter your email" >
                                    </div>


                                    <div  style="margin-bottom:20px;margin-top: 20px; margin-right: 20px;" >
                                        <i class="fas fa-lock" style="color: white"></i>
                                        <strong style="color: white"> Password </strong>
                                        <input value="{{old('password')}}" type="password"   class="form-control"  required name="password"placeholder="enter your password" >
                                    </div>

                                    <input type="number" name="is_admin" hidden value="0">
                                    <input type="number" name="gender_id" hidden value="1">

                                    <div style="margin-bottom:20px;margin-top: 50px;font-size: larger;">
                                        <strong style="color: white;margin-right: 20px">Gender</strong>
                                        <span style="color: white">male</span>
                                            <input type="radio" name="gender_id"  value="1">
                                        <span style="color: white">female</span>
                                            <input type="radio" name="gender_id"  value="2">
                                    </div>


                                    <button class="btn btn-primary btn-user btn-block"  style="background-color:white;color: #245168;font-size: 20px;" >Register</button>


                                    <hr>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" style="color: white;" href="/login" >Have Account</a>
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
