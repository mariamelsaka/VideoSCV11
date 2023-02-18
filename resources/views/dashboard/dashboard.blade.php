
@foreach($users as $k=>$user)
    @extends('dashboard.common.app')
@endforeach
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Users
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{\App\Models\User::count()}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Blogs</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{\App\Models\Blog::count()}}</div>

                            </div>
                            <div class="col-auto">
                                <i class="fas fa-car fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Videos</div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{\App\Models\Video::count()}}</div>
                                    </div>
                                    <div class="col">

                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Podcasts</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    {{\App\Models\Podcast::count()}}
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->
        <div class="card shadow" style="margin-bottom: 140px;">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">dashboard pages</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                         {{--id="dataTable"--}}
                    <table class="table table-bordered"  width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th><a class="collapse-item" href="addblog">add Blog</a></th>
                            <th><a class="collapse-item" href="addvideo">add Video</a></th>
                            <th><a class="collapse-item" href="addpodcast">add Podcast</a></th>
                            <th><a class="collapse-item" href="addadmin">add admin</a></th>
                            <th><a class="collapse-item" href="editblogs">edit blogs</a></th>
                            <th><a class="collapse-item" href="editvideos">edit Videos</a></th>
                            <th><a class="collapse-item" href="editpodcasts">edit Podcasts</a></th>
                            <th><a class="collapse-item" href="editadmins">edit admins</a></th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

    </div>


@endsection
