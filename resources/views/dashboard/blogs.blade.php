
@extends('dashboard.common.app')
@extends('dashboard.common.navbar')
@section('content')



    <main>
        <div class="container mt-100">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-30"><a class="card-img-tiles" href="#" data-abc="true">
                            <div class="inner">
                                <div class="main-img"><img src="{{asset("assets/image/Blueberry_Jar.jpg")}}" alt="Category"></div>
                                <div class="thumblist"><img src="{{asset("assets/image/Blueberry_Jar.jpg")}}" alt="Category"><img src="{{asset("assets/image/Blueberry_Jar.jpg")}}" alt="Category"></div>
                            </div>
                        </a>
                        <div class="card-body text-center">
                            <h4 class="card-title">Blue Berry Jar</h4>
                            <p class="text-muted">Starting from 25</p><a class="btn btn-outline-primary btn-sm" href="#" data-abc="true">View Products</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-30"><a class="card-img-tiles" href="#" data-abc="true">
                            <div class="inner">
                                <div class="main-img"><img src="{{asset("assets/image/Chocolate-chips.jpg")}}" alt="Category"></div>
                                <div class="thumblist"><img src="{{asset("assets/image/Chocolate-chips.jpg")}}" alt="Category"><img src="{{asset("assets/image/Chocolate-chips.jpg")}}" alt="Category"></div>
                            </div>
                        </a>
                        <div class="card-body text-center">
                            <h4 class="card-title">Chocolate CupCakes</h4>
                            <p class="text-muted">Starting from 25</p><a class="btn btn-outline-primary btn-sm" href="#" data-abc="true">View Products</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-30"><a class="card-img-tiles" href="#" data-abc="true">
                            <div class="inner">
                                <div class="main-img"><img src="{{asset("assets/image/Chocolate_Jar.jpg")}}" alt="Category"></div>
                                <div class="thumblist"><img src="{{asset("assets/image/Chocolate_Jar.jpg")}}" alt="Category"><img src="{{asset("assets/image/Chocolate_Jar.jpg")}}" alt="Category"></div>
                            </div>
                        </a>
                        <div class="card-body text-center">
                            <h4 class="card-title">CheeseCake Jar</h4>
                            <p class="text-muted">Starting from 35</p><a class="btn btn-outline-primary btn-sm" href="#" data-abc="true">View Products</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


@endsection

