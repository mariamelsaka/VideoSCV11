@extends ('common.master')


@section('title')
    Home
@endsection


@section('content')
<!-- start header -->
<header style="margin-top: 1px; margin-bottom: 10px">
    <!--start  media query -->
    <div class="head" style="background-color: #245168;width: 600px;">
        <div class="container">
            @include('common.footer')
        </div>
    </div>
    <!--end  media query -->
    <!-- start carasol -->
    <div
        id="carouselExampleCaptions"
        class="carousel carousel-dark slide"
        data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"></button>
            <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="3"
                aria-label="Slide 4"></button>
            <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="4"
                aria-label="Slide 5"></button>
            <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="5"
                aria-label="Slide 6"></button>
        </div>

        <div class="carousel-inner">

            <section class="carasoul">
                <div id="img" class="carousel-item active">
                    <img
                        src="{{asset("assets/image/v6.jpg")}}"
                        height="700px"
                        class="d-block w-100"
                        alt=""
                    />
                </div>

                <div class="carousel-item">
                    <img
                        src="{{asset("assets/image/maxresdefault.jpg")}}"
                        height="700"
                        width="200px"
                        height="450px"
                        class="d-block w-100"
                        alt="..."
                    />
                </div>
                <div class="carousel-item">
                    <img
                        src="{{asset("assets/image/maxresdefault (1).jpg")}}"
                        height="700"
                        width="200px"
                        height="450px"
                        class="d-block w-100"
                        alt="..."
                    />
                </div>
                <div class="carousel-item">
                    <img
                        src="{{asset("assets/image/esp.jpg")}}"
                        height="700"
                        width="200px"
                        height="450px"
                        class="d-block w-100"
                        alt="..."
                    />
                </div>
                <div class="carousel-item">
                    <img
                        src="{{asset("assets/image/d7e7.jpg")}}"
                        height="700"
                        width="200px"
                        height="450px"
                        class="d-block w-100"
                        alt="..."
                    />
                </div>
                <div class="carousel-item">
                    <img
                        src="{{asset("assets/image/back.jpg")}}"
                        height="700"
                        width="200px"
                        height="450px"
                        class="d-block w-100"
                        alt="..."
                    />
                </div>
            </section>

            <!-- start navbar -->
            <section class="header">
                <nav>
                    <img
                        src="{{asset("assets/image/logo-removebg-preview.png")}}"
                        class="rounded"
                        height="70px"
                        alt="logo"
                    />
                    <div class="nav-link" id="navLink">
                        <ul style="margin-right: 200px">
                            <li><a href="/home">Home</a></li>
                            <li><a href="/video">Videos</a></li>
                            <li><a href="/podcast">Podcasts</a></li>
                            <li><a href="/blog">Blogs</a></li>
                            <li><a href="/home#contact_us">Contact
                                    Us</a></li>
                            @if(\Illuminate\Support\Facades\Auth::check())
                                <span>{{\Illuminate\Support\Facades\Auth::user()->first_name}}</span>
                                <span>{{\Illuminate\Support\Facades\Auth::user()->last_name}}</span>
                            @endif

                            @if(\Illuminate\Support\Facades\Auth::check())

                                <li style="position: absolute;right:100px;">
                                    <div style="">

                                        <i class="fa-solid fa-right-to-bracket"></i>

                                        <a  href="/logout" style="text-decoration: none;">Logout</a>
                                    </div>
                                </li>



                            @else
                                <div style="margin-left: 30px">

                                    <i class="fa-solid fa-arrow-right-to-bracket"> </i>

                                    <a class="nav-link" style="text-decoration: none" href="/login">Login</a>
                                </div>
                            @endif
                        </ul>
                    </div>
                </nav>
            </section>
            <!-- end navbar -->
        </div>
        <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

        <!-- end carasol-->
    </div>
</header>

<!-- end header -->

<!-- start main -->
<main>
    <!-- section1 about us and cards -->
    <section class="cards">
        <div class="services">
            <div class="container">
                <div class="main-heading">
                    <h1 class="text-uppercase">about us</h1>
                </div>

                <p id="about">
                    Here You Will Find Everything You Need To Know About science
                    in an
                    easy and fun way
                </p>

                <div class="row">
                    <div class="campus-col">
                        <img src="{{asset("assets/image/d7e7.jpg")}}" style="padding-top: 80px" />
                        <p style="padding-top: 62px">
                            We would like to present to you on this site some
                            scientific videos that concentrate on important
                            topics to help in developing knowledge and thinking
                            of people in our society so that one becomes
                            familiar with these topics such as psychology and
                            medicine. Among the most important makers of this
                            scientific content are Ahmed Samir, Ahmed
                            Al-Ghandour, and Iman Al-Imam
                        </p>

                        <div class="layer">
                            <h3>
                                <a href="#videos" style="color: white;
                                    text-decoration: none">videos</a>
                            </h3>
                        </div>
                    </div>

                    <div class="campus-col">
                        <img src="{{asset("assets/image/podcast.webp")}}" style="padding-top: 80px"
                             alt="" />
                        <p style="padding-top: 62px">
                            Unlike other forms of media, listeners tend to give
                            podcasts
                            exclusive attention and time. Listeners tune in
                            during workouts,
                            commutes, and other slices of free time. Nowadays,
                            there are a lot
                            of scientific content creators that are doing
                            creative and
                            interactive podcasts that one likes to listen to, so
                            we gathered
                            all wonderful podcasts in one place.
                        </p>
                        <div class="layer">
                            <h3>
                                <a href="#audio" style="color: white;
                                    text-decoration: none">podcasts</a>
                            </h3>
                        </div>
                    </div>

                    <div class="campus-col">
                        <img src="{{asset("assets/image/blogs.webp")}}" alt="" />
                        <p>
                            In this part, we show you some scientific blogs that
                            discuss
                            topics related to content creators that we will get
                            to know them
                            on this site and what they are interested in terms
                            of scientific
                            ideas that discuss a problem in society, so we added
                            some examples
                            of blogs like The Egychologist's Thoughts - افكار
                            الايجكولوجيست.
                        </p>
                        <div class="layer">
                            <h3>
                                <a href="#blogs" style="color: white;
                                    text-decoration: none">blogs</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section1 about us  and cards -->

    <!-- section2 videos -->
    <section style="margin-bottom: 100px" id="videos" class="video">
        <div class="services">
            <div class="container">
                <div class="main-heading">
                    <a href="/video" style="text-decoration: none; color:
                        #212529"><h1 class="text-uppercase" style="text-align:
                            center">
                            videos
                        </h1></a>
                </div>

                <iframe
                    src="https://www.youtube.com/embed/kLl7-r6XSkg"
                    width="100%" height="550px"
                    frameborder="0"></iframe>
            </div>
        </div>


    </section>
    <!-- end section2 videos-->

    <!-- section3 podcasts -->

    <section class="audio" id="audio">
        <div class="services">
            <div class="container">
                <div class="main-heading">
                    <a href="/podcast" style="text-decoration: none; color:
                        #212529"><h1 class="text-uppercase" style="text-align:
                            center">
                            podcasts
                        </h1></a>
                </div>


                <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1413939901&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                <div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;">
                    <a href="https://soundcloud.com/mariam2022alaa" title="egyscience" target="_blank" style="color: #cccccc; text-decoration: none;">egyscience</a> · <a href="https://soundcloud.com/mariam2022alaa/egyscience-podcast" title="egyscience podcast" target="_blank" style="color: #cccccc; text-decoration: none;">egyscience podcast</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end section3 podcasts -->

    <!-- section4 blogs -->
    <section class="blogs" id="blogs">
        <div class="main-heading">
            <a href="/blog" style="text-decoration: none; color:
                    #212529"><h1 class="text-uppercase" style="text-align:
                        center">blogs</h1></a>

        </div>

        <div class="row">
            <div class="col-6">
                <img
                    id="silence"
                    src="{{asset("assets/image/silence.png")}}"
                    width="91%"
                    style="padding-left: 100px"
                    alt="silence"
                    usemap="#silence"
                />
                <map name="silence">
                    <area
                        shape="rect"
                        coords="34,44,270,350"
                        alt="silence"
                        href="https://egychology.blogspot.com/2021/01/silence.html"
                    />
                </map>

                <p class="sie">Jun 16, 2020</p>
                <p class="sie">Silence</p>
            </div>

            <div class="col-6">
                <img
                    id="hal"
                    src="{{asset("assets/image/healingwithwriting.png")}}"
                    width="79%"
                    style="padding-right: 20px"
                    alt="heal"
                    usemap="#heal"
                />
                <map name="heal">
                    <area
                        shape="rect"
                        coords="34,44,270,350"
                        alt="heal"
                        href="https://egychology.blogspot.com/2021/01/healing-with-writing.html"
                    />
                </map>
                <p class="heal">Apr 15, 2020</p>
                <p class="heal">Healing and Writing</p>
            </div>
        </div>
    </section>
    <!-- end section4 blogs -->

    <!-- section5 contact us -->
    <section class="contact_us" id="contact_us">
        <div class="services">
            <div class="container">
                <div class="main-heading">
                    <h1 >contact us</h1>

                </div>

                <div class="row">
                    <div class="col-6" >
                        <img  src="{{asset("assets/image/viral.png")}}" width="50%" alt="">
                    </div>

                    <div class="col-6"  style="position: relative;top: 80px;">
                        <p class="contact">Cairo, Cairo Governorate, Egypt</p>
                        <p class="contact">
                            <i class="fas fa-phone-square-alt fa-1x text-gray-100" style="color:#245168;"></i>
                            01015564573
                        </p>
                        <p class="contact">
                            <i class="fa fa-envelope fa-1x text-gray-300" style="color: #245168;" aria-hidden="true"></i>
                            scientific22content@gmail.com
                        </p>

                        <div class="contact">
                            <a class="insta"

                               href="https://www.instagram.com/egychology_ig/"
                               style="color: black">
                                <i class="fab fa-instagram fa-2x text-gray-300" style="color: #245168;"> </i>
                            </a>

                            <a href="https://www.facebook.com/Egychology"
                               style="color: black">
                                <i class="fab fa-facebook-square fa-2x text-gray-300"
                                   style="margin-left: 20px;color: #245168;"> </i>
                            </a>

                            <a href="https://twitter.com/egychology" style="color:
                            black">
                                <i class="fab fa-twitter fa-2x text-gray-300" style="margin-left: 20px;color: #245168;">
                                </i>
                            </a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- end section5 contact us -->

    <!-- start feedback section -->
    <section class="feedback">
        <div class="services">
            <div class="container">
                <div class="main-heading">
                    <h1>feedbacks</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="testimonials" id="testimonials">
        <div class="container">

            <div class="box card shadow">
                <img src="{{asset("assets/image/ssQbFdK8_400x400.jpg")}}" alt="" />
                <h6> Dec 25, 2019 </h6>
                <h6 style="color: #2125297d;">feedback for :Ahmed Samir </h6>
                <h4>DevFestEgypt</h4>
                <p>
                    As techies, we can experience burnout and exhaustion. And mental health awareness is almost ignored in our communities
                    So catch Egychology's (the real account 👉)
                    @ahmedsamiread
                    himself, talking about how can technology play a role in preventing suicide
                    #DFEGY
                    #DevFest19
                </p>
                <a href="https://twitter.com/DevFestEgypt/status/1209951593820540930">
                    <button class="btn" style="background-color: #245168;color: white;">review</button></a>
            </div>

            <div class="box card shadow">
                <img src="{{asset("assets/image/eman.jpg")}}" alt="" />
                <h6> Oct 14, 2019 </h6>
                <h6 style="color: #2125297d;">feedback for :Eman Alemam </h6>
                <h4>Ashraf Amin</h4>
                <p>
                    With Eman ElEmam Espitalia & Dr.Hanan Badr during the international conf. Science Journalism @Goethe
                </p>
                <a href="https://twitter.com/ashrafmedia/status/1183691291210715136">
                    <button class="btn" style="background-color: #245168;color: white;">review</button></a>
            </div>

            <div class="box card shadow">
                <img src="{{asset("assets/image/d7e7_log.jpg")}}" alt="" />
                <h6>  Mar 18, 2020 </h6>
                <h6 style="color: #2125297d;">feedback for :Ahmed EL-Ghandour </h6>
                <h4>M7md_Makarem</h4>
                <p>
                    Honestly this is my favorite episode. I feel it's for me to recover🖤
                    El D7e7 always in time😂
                    #الدحيح
                </p>
                <a href="https://twitter.com/M7md_Makarem/status/1240064843304099841">
                    <button class="btn" style="background-color: #245168;color: white;">review</button></a>
            </div>

            <div class="box card shadow">
                <img src="{{asset("assets/image/ssQbFdK8_400x400.jpg")}}" alt="" />
                <h6> Jun 28, 2021</h6>
                <h6 style="color: #2125297d;">feedback for :Ahmed Samir </h6>
                <h4>CairoScene</h4>
                <p>
                    Egychology host
                    @ahmedsamiread
                    hits up major Middle Eastern platform
                    @kerningcultures
                    with a new podcast to make science entertaining and accessible.
                    http://shorturl.at/afgoD
                </p>
                <a href="https://twitter.com/CairoScene/status/1409523496800206848">
                    <button class="btn" style="background-color: #245168;color: white;">review</button></a>
            </div>

            <div class="box card shadow">
                <img src="{{asset("assets/image/d7e7_log.jpg")}}" alt="" />
                <h6> May 28, 2022 </h6>
                <h6 style="color: #2125297d;">feedback for :Ahmed EL-Ghandour </h6>
                <h4>ISOBEL ABULHOUL</h4>
                <p>
                    @ADIBF
                    standing room only. Amazing session on science. Such interest! On the
                    frontline of discovery! Ahmed Al Ghandour talking about having better
                    bodies that are easily fixable!
                </p>
                <a href="https://twitter.com/ummansoor/status/1530508048980131842">
                    <button class="btn" style="background-color: #245168;color: white;">review</button></a>
            </div>

            <div class="box card shadow">
                <img src="{{asset("assets/image/ssQbFdK8_400x400.jpg")}}" alt="" />
                <h6>  Feb 24, 2018 </h6>
                <h6 style="color: #2125297d;">feedback for :Ahmed Samir </h6>
                <h4>solsigamal</h4>
                <p>
                    The amazing
                    @ahmedsamiread
                    spreading science!🙌🏻
                    #egychology
                </p>
                <a href="https://twitter.com/solsigamal/status/967478315639549953">
                    <button class="btn" style="background-color: #245168;color: white;">review</button></a>
            </div>
        </div>
    </div>
    <!-- end feedback section -->
</main>
<!-- end main -->


@include('common.footer')
@endsection


