@extends ('common.master')
<title>Blog</title>

@section('title')
    Blog
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
                    <img src="{{asset("assets/image/blogs_back.jpg")}}" height="700px"
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

<div class="row" style="margin-bottom: 40px;">
    @foreach($blogs as $blog)
        @if($blog->blog_img and $blog->blog_iframe !==Null)
    <div class="col-6">
        <div class="card shadow" style="width:90% ;">
            <div class="card-body">
{{--                  {{asset("assets/image/viral.png")}             --}}
                <img src="{{ asset($blog->blog_img) }}" width="100%"    alt="silence" usemap="#silence">
                <iframe src="{{$blog->blog_iframe}}" width="100%"    height="500px"  frameborder="0"></iframe>
            </div>
        </div>
    </div>
        @endif
    @endforeach
</div>

{{--<div class="row" style="margin-bottom: 40px;">--}}
{{--    <div class="col-6">--}}
{{--        <div class="card shadow" style="width:90% ;">--}}
{{--            <div class="card-body">--}}
{{--                <img src="{{asset("assets/image/ccpart1.png")}}" width="100%"    alt="silence" usemap="#silence">--}}
{{--                <iframe src="https://egychology.blogspot.com/2020/07/corona-chronicles-part-i-intro.html" width="100%"    height="500px"  frameborder="0"></iframe>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="col-6">--}}
{{--        <div class="card shadow" style="width:90% ;">--}}
{{--            <div class="card-body">--}}
{{--                <img src="{{asset("assets/image/hurt.png")}}" width="100%"    alt="silence" usemap="#silence">--}}
{{--                <iframe src="https://egychology.blogspot.com/2020/02/hurt-scientifically-emotional-excerpt.html" width="100%"    height="500px"  frameborder="0"></iframe>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--</div>--}}
{{--<div class="row" style="margin-bottom: 40px;">--}}
{{--    <div class="col-6">--}}
{{--        <div class="card shadow" style="width:90% ;">--}}
{{--            <div class="card-body">--}}
{{--                <img src="{{asset("assets/image/troublingthoughts.png")}}" width="100%"    alt="silence" usemap="#silence">--}}
{{--                <iframe src="https://egychology.blogspot.com/2020/01/troublesome-thoughts.html" width="100%"    height="500px"  frameborder="0"></iframe>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="col-6">--}}
{{--        <div class="card shadow" style="width:90% ;">--}}
{{--            <div class="card-body">--}}
{{--                <img src="{{asset("assets/image/choosinglove.png")}}" width="100%"    alt="silence" usemap="#silence">--}}
{{--                <iframe src="https://egychology.blogspot.com/2019/09/choosing-love.html" width="100%"    height="500px"  frameborder="0"></iframe>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--</div>--}}
@include('common.footer')
@endsection
