@foreach($users as $k=>$user)
    @extends('dashboard.common.app')
@endforeach
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Podcast</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <div class="card shadow" style="width: 80%;margin-left: 130px;margin-top: 30px;">
                <div class="card-header">
                    ADD Podcast
                </div>
                <div class="card-body">
                    @include("common.errors")
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Podcast Title</label>
                            <input value="{{old('podcast_title')}}" type="text"  name="podcast_title" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Blog Image</label>
                            <input value="{{old('podcast_img')}}"  type="file" name="podcast_img" class="form-control">
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
