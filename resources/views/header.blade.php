<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{url('BevisSneaker')}}/b-style.css">
        <link rel="icon" href="{{url('BevisSneaker')}}/favicon.ico" type="image/x-icon" />
        <link href="//db.onlinewebfonts.com/c/5bf04c97279e55318d67c21101cfd898?family=URW+Geometric" rel="stylesheet" type="text/css" />
        <title>@yield('title','Bevis | DiscoverYOU')</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     </head>
    <body>
        <!-- START HEADER -->
        <div class="ads">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-1"></div>
                    <div class="col-xl-10">
                        <a href="#"><i class="fa-solid fa-cart-shopping"></i> Cart</a>
                        <a href="#"><i class="fa-solid fa-user"></i> Login</a>
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
                            <img src="{{'BevisSneaker'}}/images/LOGO--001.png" alt="">
                        </div>
                        <div class="col-xl-6">
                            <!-- Navbar -->
                            <div class="nav-menu">
                                <ul style="margin-bottom: 0;">
                                    <li><a href="index"><h4>HOME</h4></a></li>
                                    <li class="line"></li>
                                    <li><a href="product"><h4>PRODUCT</h4></a></li>
                                    <li class="line"></li>
                                    <li><a href="#"><h4>NIKE</h4></a></li>
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
        <!-- END HEADER -->
