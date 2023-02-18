@extends ('common.master')
<title>Video</title>

@section('title')
    Video
@endsection


@section('content')
<!-- start header -->
<header style="margin-top: 1px; margin-bottom: 10px;">
    <!--start  media query -->
    <div class="head" style="background-color: #245168;width: 600px;">
        <div class="container">
            <nav>
                <div class="nav-link" id="navLink">
                    <ul>
                        <img src="image/logo-removebg-preview.png" style="position: relative;right:150px;top:10px" class="rounded" height="60px" alt="logo">
                        <li><a style="position: relative;right:150px"  href="/podcasts">Podcasts</a></li>
                        <li><a style="position: relative;right:70px" href="home.html">Home</a></li>
                        <li><a style="position: relative;right:20px" style=""  href="videos.html">Videos</a></li>
                        <li><a style="padding-left: 20px;"  href="blogs.html">Blogs</a></li>
                        <li><a style="padding-left: 50px;"  href="home.html#contact_us">contactUs</a></li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--end  media query -->
    <!-- start carasol -->
    <div id="carouselExampleCaptions" class="carousel carousel-dark
                slide"
         data-bs-ride="carousel">

        <div class="carousel-inner">

            <section class="carasoul">
                <div id="img" class="carousel-item active">
                    <img src="{{asset("assets/image/watch videos.jpg")}}" height="700px"
                         class="d-block w-100" alt="">
                </div>
            </section>

            <!-- start navbar -->
            <section class="header">
                @include('common.navbar')
            </section>
            <!-- end navbar -->

        </div>

        <!-- end carasol-->

    </div>
</header>
<!-- end header -->


<main>
    <section class="card_video">

        <div class="row">
            @foreach($videos as $video)
                @if($video->video_url and $video->video_title !==Null)
            <div class="col-4" style="margin-top: 20px;margin-bottom: 40px">
                <div class="card shadow">
                    <div class="card-body">
                        <iframe style="margin-bottom: 40px;margin-top: 20px;margin-left: 40px"
                                src=" {{$video->video_url}}"
                                width="350px" height="200px"
                                style="margin-left: 20px;" height="500px"
                                frameborder="0"></iframe>
                        <bdo dir="rtl" >
                            <h3 style="padding-right: 70px">
                                {{$video->video_title}}
                                <span style="padding-right: 80px;"> {{$video->ContentCreatorName}}</span>
                            </h3>
                           <div>
                               <i class="fa fa-star" aria-hidden="true"></i>
                               <i class="fa fa-star" aria-hidden="true"></i>
                               <i class="fa fa-star" aria-hidden="true"></i>
                               <i class="fa fa-star" aria-hidden="true"></i>
                           </div>
                        </bdo>

                    </div>

                </div>
            </div>
                @endif
            @endforeach
        </div>

    </section>
</main>




{{--                                src="https://www.youtube.com/embed/6Fd9PCDuZk4"--}}
{{--                            <h3>الحضن--}}

{{--                                src="https://www.youtube.com/embed/XUpaNV7Jbtk"--}}
{{--                            <h3>سكان القمر--}}
{{--                                <span style="padding-right: 80px;">ايمان الامام</span>--}}

{{--                                src="https://www.youtube.com/embed/ftbgcarkxS0"--}}
{{--                            <h3>الطب النفسي--}}
{{--                                <span style="padding-right: 40px;">أحمد الغندور</span>--}}


{{--                                src="https://www.youtube.com/embed/3VVbfIoXXw0"--}}
{{--                            <h3>القلق--}}
{{--                                <span style="padding-right: 130px;">ايمان الامام</span>--}}

@include('common.footer')
@endsection
