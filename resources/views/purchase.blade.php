
@include('header')
@yield('purchase')
@section('title', 'Purchased')
        <!-- PRODUCT DETAIL -->
        @yield('CHECKOUT')
        <div class="cart" style="font-family: 'URW Geometric';">
            <h1 style="text-align: center">ORDER #</h1>
            <div class="pb-5">
                <div class="container">
                <div class="row">
                    <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
         <!-- Shopping cart table -->
            <p>Username: </p>
            <p>Date: </p>
            <p>Address: </p>
            <p>Phone: </p>
         <div class="table-responsive">
            <table class="table">
            <thead>
                <tr>
                <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">#</div>
                </th>
                <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">Product</div>
                </th>
                <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Price</div>
                </th>
                <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Quantity</div>
                </th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($cart as $item) --}}
                    <tr>
                        <th scope="row" class="border-0">
                            <div class="p-2">
                            <img src="{{'BevisSneaker'}}/images/SingleItem/" alt="" width="100" style="margin-right: 2%;" class="img-fluid rounded shadow-sm">
                                <div class="ml-3 d-inline-block align-middle">
                                    <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle"></a></h5>
                                    </a></h5>
                                    <span class="text-muted font-weight-normal font-italic d-block">

                                    </span>
                                </div>
                            </div>
                        </th>
                        <td class="border-0 align-middle"><strong></strong></td>
                        <td class="border-0 align-middle"><strong><input type="number" value="" min="1"></strong></td>
                    </tr>
                {{-- @endforeach --}}
            </tbody>
            </table>
        </div>
        <!-- End -->
        </div>
    </div>

    <div class="row py-5 p-4 bg-white rounded shadow-sm">
        <div class="col-lg-6">
        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Payment</div>
        <div class="p-4">
            <p class="font-italic mb-4">Please choose method payment</p>
            <div class="form-check form-switch">
                {{-- https://me.momo.vn/qr-page/P2P/BevidSneaker/8mepZ2o8vLlQbMy --}}
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" onclick="switches">
                <label class="form-check-label" for="flexSwitchCheckDefault">Payment with MOMO</label>
            </div>
        </div>
        </div>
        <div class="col-lg-6">
        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
        <div class="p-4">
            <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have entered.</p>
            <p></p>
            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                <h5 class="font-weight-bold">
                    <strong>
                        {{-- $<input value="{{$total}}" name="total"> --}}
                    </strong>
                </h5>
            </li>
            </ul>
            <a href="https://me.momo.vn/qr-page/P2P/BevidSneaker/8mepZ2o8vLlQbMy"><button class="btn-footer" type="submit">PROCCEED TO CHECKOUT</button></a>
            {{-- <a type="submit" class="btn-footer" style="padding: 1.5%; font-family: 'URW Geometric'; text-align:center">PROCCEED TO CHECKOUT</a> --}}
        </div>
        </div>
    </div>
</div>
</div>
</div>
@include('footer')
