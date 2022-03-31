@include('header')
@section('title', 'Bevis |Login')
@yield('login')
<div class="form--login">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-2"></div>
                    <div class="col-xl-8">
                        <div class="main-form">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <h1>LOG IN</h1>
                                        <form class="row g-3">
                                            <div class="col-12">
                                                <label for="inputUsername" class="form-label">Username</label>
                                                <input type="text" class="form-control" id="inputUsername">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputPassword4" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="inputPassword4">
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                                <label class="form-check-label" for="gridCheck">
                                                    Remember Password
                                                </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn-footer">Sign in</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-xl-6">
                                        <img src="{{'BevisSneaker'}}/images/STORE--001.png" alt="">
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
