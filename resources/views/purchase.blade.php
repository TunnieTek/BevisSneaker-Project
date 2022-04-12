@include('header')
@yield('order')

@section('title', 'Purchased')
        <!-- PRODUCT DETAIL -->
        @yield('error')
        <div class="n404">
            <div class="container-fluid">
                <div class="row">
                    <h1>THANK YOU</h1>
                    <h2>Your order has been placed successfully</h2>
                    <h3>
                        <a href="product" class="btn btn-dark">RETURN HOMEPAGE</a>
                    </h3>
                </div>
            </div>
        </div>
@include('footer')


