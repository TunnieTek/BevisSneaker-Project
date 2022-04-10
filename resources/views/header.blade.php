<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{url('BevisSneaker')}}/b-style.css">
        <link rel="icon" href="{{url('BevisSneaker')}}/favicon.ico" type="image/x-icon" />
        <link href="//db.onlinewebfonts.com/c/5bf04c97279e55318d67c21101cfd898?family=URW+Geometric" rel="stylesheet" type="text/css" />
        <title>@yield('title','Bevis | DiscoverYOU')</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Toastr Css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('toastr\build\toastr.min.css') }}">

     </head>
    <body>
        <!-- START HEADER -->
        <div class="ads">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-1"></div>
                    <div class="col-xl-10">
                        <a href="{{route('cart')}}"><i class="fa-solid fa-cart-shopping"></i> Cart</a>
                        <a href="{{route('login')}}">
                                @if(session('alertsc'))
                                    {{session('alertsc')}}
                                @else
                                    <i class="fa-solid fa-user"></i> Login
                                @endif
{{-- MAGIC MAGIC --}}
                                {{-- @if($user = Auth::User())
                                {
                                    @if(session('alertsc'))
                                        {{session('alertsc')}}
                                    @endif
                                }
                                @else
                                    <i class="fa-solid fa-user"></i> Login
                                @endif --}}

                        </a>
                        <a href="#"><i class="fa-solid fa-heart"></i> Love</a>
                        <a href="#"><i class="fa-solid fa-truck"></i> Tracking</a>
                    </div>
                    <div class="col-xl-1"></div>
                </div>
            </div>
        </div>
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="navbar">
                        <div class="col-xl-3">
                            <!-- LOGO -->
                            <img src="../BevisSneaker/images/LOGO--001.png" alt="">
                        </div>
                        <div class="col-xl-6">
                            <!-- Navbar -->
                            <div class="nav-menu">
                                <ul style="margin-bottom: 0;">
                                    <li><a href="{{route('index')}}"><h4>HOME</h4></a></li>
                                    <li class="line"></li>
                                    <li><a href="{{route('product')}}"><h4>PRODUCT</h4></a></li>
                                    <li class="line"></li>
                                    <li><a href="#"><h4>FEEDBACK</h4></a></li>
                                    <li class="line"></li>
                                    <li><a href="#"><h4>SALE OFF</h4></a></li>
                                    <li class="line"></li>
                                    <li><h4 style="color: #ff5f17">TRAVATRIX</h4></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="search">
                                <div class="input-group mb-0">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    <input type="text" class="form-control" placeholder="Search Product" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        {{-- @if(session('alertsc'))
        <div class="toast align-items-center text-white bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    {{session('alertsc')}}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
        @endif --}}

        {{-- @if(session('alertsc'))
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="..." class="rounded me-2" alt="...">
                <strong class="me-auto">Logged Successfully</strong>
                <small>02 Seconds</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                @if(session('alertsc'))
                    {{session('alertsc')}}
                @endif
            </div>
        </div>
         @endif --}}
        <!-- END HEADER -->
