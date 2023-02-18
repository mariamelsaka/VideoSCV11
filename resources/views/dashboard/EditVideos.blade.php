@foreach($users as $k=>$user)
    @extends('dashboard.common.app')
@endforeach

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">VIDEO INFO</h1>


        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Video Information</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" >
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Video Title</th>
                            <th>Video description</th>
                            <th>Video URL</th>
                            <th>edit/delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($videos) >0)
                            @foreach($videos as $k=>$video)
                                @if($video->video_title !== Null)
                                    <tr>
                                        <td>{{$video->id}}</td>
                                        <td>{{$video->video_title}}</td>
                                        <td>{{$video->ContentCreatorName}}</td>
                                        <td>{{$video->video_url}}</td>

                                        <td style="position: relative;left:80px;">
                                        <span class="mb-3" style="padding-right: 20px" >
                                                <a class="collapse-item" href="{{ url('admin/edit_video/'.$video->id) }}}}">

                                                    <button class="btn btn-primary">Edit</button>
                                                </a>
                                        </span>

                                            {{--                                        <a href = 'delete/{{ $user->id }}'>Delete</a>--}}

                                            <form method="post" style="display: inline-block" action="{{ url('admin/edit_video/'.$video->id) }}}}">
                                                @method('post')
                                                @csrf

                                                <div class="mb-3">
                                                    <input type="hidden" name="cityId" value="{{ $video->id }}">
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
                {!! $videos->render() !!}
            </div>
        </div>

    </div>

@endsection
