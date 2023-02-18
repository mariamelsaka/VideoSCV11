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
