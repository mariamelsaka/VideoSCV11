@foreach($users as $k=>$user)
    @extends('dashboard.common.app')
@endforeach

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">BLOG INFO</h1>


        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Blog Information</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" >
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Blog Title</th>
                            <th>Blog description</th>
                            <th>edit/delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($blogs) >0)
                            @foreach($blogs as $k=>$blog)
                                @if($blog->blog_iframe !== Null)
                                <tr>
                                    <td>{{$blog->id}}</td>
                                    <td>{{$blog->blog_iframe}}</td>
                                    <td>{{$blog->blog_img}}</td>

                                    <td style="position: relative;left:80px;">
                                        <span style="display: inline-block;padding-right: 20px" class="mb-3" >
                                                <a class="collapse-item" href="{{ url('admin/edit_blog/'.$blog->id) }}}}">

                                                    <button  class="btn btn-primary">Edit</button>
                                                </a>
                                        </span>

{{--                                        <a href = 'delete/{{ $user->id }}'>Delete</a>--}}

                                        <form method="post" style="display: inline-block" action="{{ url('admin/edit_blog/'.$blog->id) }}}}">
                                            @method('post')
                                            @csrf

                                            <div class="mb-3">
                                                <input type="hidden" name="cityId" value="{{ $blog->id }}">
                                                <button type="submit" class="btn btn-primary">Delete</button>
                                            </div>
                                        </form>

                                    </td>
                                </tr>
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
                {!! $blogs->render() !!}
            </div>
        </div>

    </div>

@endsection
