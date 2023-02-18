@extends ('common.master')
<link rel="stylesheet" href="{{asset("assets/css/podcast.css")}}">
<title>Podcast</title>
@section('title')
    Podcast
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
                        <li><a style="position: relative;right:150px"  href="podcasts.html">Podcasts</a></li>
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
                    <img src="{{asset("assets/image/pod_back.jpg")}}" height="700px"
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
    <section  class="card_video">
        <div class="row">
            @foreach($podcasts as $podcast)
                @if($podcast->podcast_title and $podcast->podcast_img !==Null)
            <div class="col-4" >
                <div class="card">
                    <div class="card-body shadow">
                        <bdo dir="rtl" >
                            <h3>{{$podcast->podcast_title}}
                            </h3>
                        </bdo>
{{--                        src="{{"/storage/app/".$images->filename}}--}}
{{--                        {{ URL::asset('storage/'.$podcast->podcast_img) }}--}}
                        <img src="{{ asset($podcast->podcast_img) }}" style="margin-top:6px ;" width="50%" height="50%" alt="">
                        <audio style="margin-top: 28px;"  controls>
                            <source   src="{{asset("assets/podcast/1. الانفجار العظيم - بودكاست علمي جدًا 2 (128 kbps).mp3")}}">
                        </audio>
                    </div>
                </div>

            </div>
                @endif
            @endforeach
        </div>



{{--        <div class="col-4">--}}
{{--            <div class="card" >--}}
{{--                <div class="card-body shadow"  >--}}
{{--                    <bdo dir="rtl" >--}}
{{--                        <h3>الانفجار العظيم--}}
{{--                        </h3>--}}
{{--                    </bdo>--}}
{{--                    <img src="{{asset("assets/image/podcasr2.jpg")}}" style="margin-top:6px ;" width="50%" height="50%" alt="">--}}
{{--                    <audio style="margin-top: 33px;"  controls>--}}
{{--                        <source   src="{{asset("assets/podcast/1. الانفجار العظيم - بودكاست علمي جدًا 2 (128 kbps).mp3")}}">--}}
{{--                    </audio>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}

{{--        <div class="col-4">--}}
{{--            <div class="card">--}}
{{--                <div class="card-body shadow">--}}
{{--                    <bdo dir="rtl" >--}}
{{--                        <h3>كلك على بعضك جميل--}}
{{--                        </h3>--}}
{{--                    </bdo>--}}
{{--                    <img src="{{asset("assets/image/podcast1.jpeg")}}" width="50%" height="50%" alt="">--}}
{{--                    <audio  controls>--}}
{{--                        <source  src="{{asset("assets/podcast/1. الانفجار العظيم - بودكاست علمي جدًا 2 (128 kbps).mp3")}}">--}}
{{--                    </audio>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-4">--}}
{{--                <div class="card" >--}}
{{--                    <div class="card-body shadow">--}}
{{--                        <bdo dir="rtl" >--}}
{{--                            <h3>سيارات بلا سائق--}}
{{--                            </h3>--}}
{{--                        </bdo>--}}
{{--                        <img src="{{asset("assets/image/podcast4.jpg")}}" width="50%" height="50%" alt="">--}}
{{--                        <audio  controls>--}}
{{--                            <source  src="{{asset("assets/podcast/1. الانفجار العظيم - بودكاست علمي جدًا 2 (128 kbps).mp3")}}">--}}
{{--                        </audio>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--            <div class="col-4">--}}
{{--                <div class="card" >--}}
{{--                    <div class="card-body shadow">--}}
{{--                        <bdo dir="rtl" >--}}
{{--                            <h3>نظرية السلطعون--}}
{{--                            </h3>--}}
{{--                        </bdo>--}}
{{--                        <img src="{{asset("assets/image/podcast5.jpg")}}" width="50%" height="50%" alt="">--}}
{{--                        <audio  controls>--}}
{{--                            <source  src="{{asset("assets/podcast/1. الانفجار العظيم - بودكاست علمي جدًا 2 (128 kbps).mp3")}}">--}}
{{--                        </audio>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--            <div class="col-4">--}}
{{--                <div class="card" >--}}
{{--                    <div class="card-body shadow">--}}
{{--                        <bdo dir="rtl" >--}}
{{--                            <h3>ايه يا نجم--}}
{{--                            </h3>--}}
{{--                        </bdo>--}}
{{--                        <img src="{{asset("assets/image/podcast6.jpg")}}" width="50%" height="50%" alt="">--}}
{{--                        <audio  controls>--}}
{{--                            <source  src="{{asset("assets/podcast/1. الانفجار العظيم - بودكاست علمي جدًا 2 (128 kbps).mp3")}}">--}}
{{--                        </audio>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--        <div class="row">--}}

{{--            <div class="col-4">--}}
{{--                <div class="card" >--}}
{{--                    <div class="card-body shadow">--}}
{{--                        <bdo dir="rtl" >--}}
{{--                            <h3>الصح في الاغلبيه--}}
{{--                            </h3>--}}
{{--                        </bdo>--}}
{{--                        <img src="{{asset("assets/image/podcast7.jpg")}}" width="50%" height="50%" alt="">--}}
{{--                        <audio  controls>--}}
{{--                            <source  src="{{asset("assets/podcast/1. الانفجار العظيم - بودكاست علمي جدًا 2 (128 kbps).mp3")}}">--}}
{{--                        </audio>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--            <div class="col-4">--}}
{{--                <div class="card" >--}}
{{--                    <div class="card-body shadow" >--}}
{{--                        <bdo dir="rtl" >--}}
{{--                            <h3>وهم الابراج--}}
{{--                            </h3>--}}
{{--                        </bdo>--}}
{{--                        <img src="{{asset("assets/image/podcast9.jpg")}}" style="margin-top:6px ;" width="50%" height="50%" alt="">--}}
{{--                        <audio  controls style="margin-top: 28px;">--}}
{{--                            <source   src="{{asset("assets/podcast/1. الانفجار العظيم - بودكاست علمي جدًا 2 (128 kbps).mp3")}}">--}}
{{--                        </audio>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--            <div class="col-4">--}}
{{--                <div class="card"style="width: 400px;">--}}
{{--                    <div class="card-body shadow">--}}
{{--                        <bdo dir="rtl" >--}}
{{--                            <h3>اين ذهب الفضائيون--}}
{{--                            </h3>--}}
{{--                        </bdo>--}}
{{--                        <img src="{{asset("assets/image/podcast8.jpg")}}" width="50%" height="50%" alt="">--}}
{{--                        <audio  controls>--}}
{{--                            <source  src="{{asset("assets/podcast/1. الانفجار العظيم - بودكاست علمي جدًا 2 (128 kbps).mp3")}}">--}}
{{--                        </audio>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}


    </section>
</main>



@include('common.footer')
@endsection
