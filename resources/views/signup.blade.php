@include('header')
@section('title', 'Bevis |Sign Up')
@yield('signup')
<div class="form--login">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-2"></div>
                    <div class="col-xl-8">
                        <div class="main-form">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <img src="{{'BevisSneaker'}}/images/STORE--001.png" alt="">
                                    </div>
                                    <div class="col-xl-6">
                                        <h1>SIGN UP</h1>
                                        <form class="row g-3" method="POST">
                                            @csrf
                                            <div class="col-md-6">
                                                <label for="inputUsername" class="form-label">Username</label>
                                                <input type="text" class="form-control" id="inputUsername" name="username">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="inputPassword4" name="password">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputFullname" class="form-label">Full Name</label>
                                                <input type="text" class="form-control" id="Fullname" placeholder="Tan Yin Ern" name="fullname">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputPhoneNumber" class="form-label">Phone Number</label>
                                                <input type="text" class="form-control" id="Fullname" placeholder="+84" name="phonenumber">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputEmail" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="inputEmail4" placeholder="@domain" name="email">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputAddress" class="form-label">Address </label>
                                                <input type="text" class="form-control" id="inputAddress" placeholder="Apartment, studio, or floor" name="address">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputCity" class="form-label">City</label>
                                                <input type="text" class="form-control" id="inputCity" name="city">
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                                <label class="form-check-label" for="gridCheck">
                                                    I agree to all terms of Travatrix.
                                                </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn-footer">Sign up</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2"></div>
                </div>
            </div>
        </div>
@include('footer')
