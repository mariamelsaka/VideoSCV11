@foreach($users as $k=>$user)
    @extends('dashboard.common.app')
@endforeach
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Video</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <div class="card shadow" style="width: 80%;margin-left: 130px;margin-top: 30px;">
                <div class="card-header">
                    ADD Video
                </div>
                <div class="card-body">
                    @include("common.errors")
                    <form action="" method="post" enctype="multipart/form-data">
                        {{--                        {{ route('products.store') }}--}}
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Video Title</label>
                            <input value="{{old('video_title')}}"  type="text" name="video_title" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Content Creator name</label>
                            <input value="{{old('ContentCreatorName')}}"  type="text" name="ContentCreatorName" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Video Url</label>
                            <input value="{{old('video_url')}}"  type="text" name="video_url" class="form-control">
                        </div>

                        <div class="mb-3">
                            <br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                </div>
            </div>


        </div>


@endsection
