@foreach($users as $k=>$user)
    @extends('dashboard.common.app')
@endforeach
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Video</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <div class="card shadow" style="width: 80%;margin-left: 130px;margin-top: 30px;">
                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
                <div class="card-header">
                    EDIT VIDEO
                </div>

                <div class="card-body">

                    <form action="{{url('admin/edit_video/'.$video->id) }}"enctype='multipart/form-data' method="post" novalidate>
                        @csrf
                        @method('Post')

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Video title</label>
                            <input type="text" class="form-control" name="video_title" value="{{$video->video_title}}">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Content Creator name</label>
                            <input type="text" class="form-control" name="ContentCreatorName" value="{{$video->ContentCreatorName}}">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label des "> Video url</label>
                            <input type="text" name="video_url" value="{{$video->video_url}}" class="form-control">

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
