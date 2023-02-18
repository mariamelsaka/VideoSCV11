@foreach($users as $k=>$user)
    @extends('dashboard.common.app')
@endforeach
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Admin</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <div class="card shadow" style="width: 80%;margin-left: 130px;margin-top: 30px;">
                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
                <div class="card-header">
                    EDIT ADMIN
                </div>

                <div class="card-body">
                    <form  action="{{url('admin/edit_admin/'.$user->id) }}" enctype='multipart/form-data' method="post" novalidate>
                        @csrf
                        @method('Post')

                        <div>
                            <label for="example-text-input" class="form-control-label">User name</label>
                            <input class="form-control" name="username"  type="text" value="{{$user->username}}">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">first name</label>
                            <input class="form-control" name="firstname"  type="text" value=" {{ $user->firstname}}">

                        </div>

                        <div class="mb-3">
                            <label for="example-text-input" class="form-control-label">Last name</label>
                            <input class="form-control" name="lastname" type="text" value="{{$user->lastname}}">
                        </div>
                        <div class="mb-3">
                            <label for="example-text-input" class="form-control-label">Phone Number</label>
                            <input class="form-control" name="phone_number" type="text" value="{{$user->phone_number}}">

                        </div>
                        <div class="mb-3">
                            <label for="example-text-input" class="form-control-label">Address</label>
                            <input class="form-control" name="address" type="text" value="{{$user->address}}">
                        </div>

                        <div class="mb-3">
                            <label for="example-text-input" class="form-control-label">Email</label>
                            <input class="form-control" name="email" type="email" value="{{$user->email}}">

                        </div>

                        <input type="number" name="is_admin" hidden value="1">

                        <div  style="margin-top: 23px">
                            <div class="form-group d-flex mb-0">
                                <div class="w-50" >

{{--                                    <a class="collapse-item" href="editadmins/{{$user->id}}">--}}

                                        <input type="submit" name="submit" value="Save" class="btn btn-primary" >
{{--                                    </a>--}}

                                </div>
                            </div>
                        </div>

                    </form>

                </div>
            </div>


        </div>


@endsection
