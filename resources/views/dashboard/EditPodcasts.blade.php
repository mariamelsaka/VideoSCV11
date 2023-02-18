@foreach($users as $k=>$user)
    @extends('dashboard.common.app')
@endforeach

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Podcast INFO</h1>


        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Podcast Information</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" >
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Podcast Title</th>
                            <th>Podcast description</th>
                            <th>edit/delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($podcasts) >0)
                            @foreach($podcasts as $k=>$podcast)
                                @if($podcast->podcast_title !== Null)
                                    <tr>
                                        <td>{{$podcast->id}}</td>
                                        <td>{{$podcast->podcast_title}}</td>
                                        <td>{{$podcast->podcast_img}}</td>

                                        <td style="position: relative;left:80px;">
                                        <span class="mb-3" style="padding-right: 20px" >
                                                <a class="collapse-item" href="{{ url('admin/edit_podcast/'.$podcast->id) }}}}">

                                                    <button class="btn btn-primary">Edit</button>
                                                </a>
                                        </span>

                                            {{--                                        <a href = 'delete/{{ $user->id }}'>Delete</a>--}}

                                            <form method="post" style="display: inline-block" action="{{ url('admin/edit_podcast/'.$podcast->id) }}}}">
                                                @method('post')
                                                @csrf

                                                <div class="mb-3">
                                                    <input type="hidden" name="cityId" value="{{ $podcast->id }}">
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
                {!! $podcasts->render() !!}
            </div>
        </div>

    </div>

@endsection
