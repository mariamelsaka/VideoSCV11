@extends('dashboard.common.app')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">ADMIN USERS</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Admin Users info</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Full Name</th>
                                <th>UserName</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>image</th>
                                <th>edit/delete</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Full Name</th>
                                <th>UserName</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>image</th>
                                <th>edit/delete</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @if(count($users) >0)
                                @foreach($users as $k=>$user)
                                    @if($user->is_admin==1)
                                        @if($user->password!=='123456')
                                    <tr>
                                        <td>{{$k +1}}</td>
                                        <td>{{$user->firstname}} {{$user->lastname}}</td>

                                        <td>{{$user->username}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->phone_number}}</td>
                                        <td>{{$user->address}}</td>

                                        <td style="position: relative;left:80px;">
                                        <span class="mb-3" style="padding-right: 20px" >
                                                <a class="collapse-item" href="{{ url('admin/edit_admin/'.$user->id) }}}}">

                                                    <button class="btn btn-primary">Edit</button>
                                                </a>
                                        </span>

                                            <form method="post" style="display: inline-block" action="{{ url('admin/edit_admin/'.$user->id) }}}}">
                                                @method('post')
                                                @csrf

                                                <div class="mb-3">
                                                    <input type="hidden" name="cityId" value="{{ $user->id }}">
                                                    <button type="submit" class="btn btn-primary">Delete</button>
                                                </div>
                                            </form>

                                        </td>


                                    </tr>
                                            @endif
                                    @endif
                                @endforeach
                            @else
                                <tr>
                                    no data
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                    {!! $users->render() !!}
                </div>
            </div>


        </div>


@endsection
