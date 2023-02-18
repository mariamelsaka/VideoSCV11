@foreach($users as $k=>$user)
    @extends('dashboard.common.app')
@endforeach
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Admin</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <div class="card shadow" style="width: 80%;margin-left: 130px;margin-top: 30px;">
                <div class="card-header">
                    ADD ADMIN
                </div>
                <div class="card-body">
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
                            <input  value="{{old('lastname')}}" type="text" required  class="form-control" name="lastname" placeholder="enter your last name" >
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

                        <input type="number" name="is_admin" hidden value="1">

                        <div style="margin-bottom:20px;margin-top: 50px;font-size: larger;">
                            <strong >Gender</strong>
                            <span >male</span>
                                <input type="radio" name="gender_id"  value="1">
                            <span >female</span>
                                <input type="radio" name="gender_id"  value="2">
                        </div>


                        <button class="btn btn-primary btn-user btn-block"  style="background-color:white;color: #245168;font-size: 20px;" >Add Admin</button>


                        <hr>
                    </form>


                </div>
            </div>


        </div>


@endsection
