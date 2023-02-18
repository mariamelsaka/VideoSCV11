@foreach($users as $k=>$user)
    @extends('dashboard.common.app')
@endforeach
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Blog</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <div class="card shadow" style="width: 80%;margin-left: 130px;margin-top: 30px;">
                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
                <div class="card-header">
                    EDIT BLOG
                </div>

                <div class="card-body">

                    <form action="{{url('admin/edit_blog/'.$blog->id) }}"enctype='multipart/form-data' method="post" novalidate>
                        @csrf
                        @method('Post')

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Blog title</label>
                            <input type="text" class="form-control" name="blog_iframe" value="{{$blog->blog_iframe}}">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label des "> Blog url</label>
                            <input type="text" name="blog_img" value="{{$blog->blog_img}}" class="form-control">

                        </div>


                        <div  style="margin-top: 23px">
                            <div class="form-group d-flex mb-0">
                                <div class="w-50" >
                                    <input type="submit" name="submit" value="Save" class="btn btn-primary" >
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
            </div>


        </div>


@endsection
