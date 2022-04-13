@include('header')
@yield('purchase')
@section('title', 'Purchased')
        <!-- PRODUCT DETAIL -->
        @yield('CHECKOUT')
        @foreach ($bill as $item)
        <div class="cart" style="font-family: 'URW Geometric';">
            <h1 style="text-align: center">ORDER #1000{{$item->orderid}}</h1>
            <div class="pb-5">
                <div class="container">
                <div class="row">
                    <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
         <!-- Shopping cart table -->

            <p>Username: {{$item->fullname}} </p>
            <p>Date: {{$item->purchasedate}}</p>
            <p>Address:{{$item->address}} </p>
            <p>Phone: {{$item->phonenumber}}</p>
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
                <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Status</div>
                </th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($cart as $item) --}}
                    <tr>
                        <th scope="row" class="border-0">
                            <div class="p-2">
                            <img src="{{'BevisSneaker'}}/images/SingleItem/{{$item->image}}" alt="" width="100" style="margin-right: 2%;" class="img-fluid rounded shadow-sm">
                                <div class="ml-3 d-inline-block align-middle">
                                    <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle"></a></h5>
                                    </a></h5>
                                    <span class="text-muted font-weight-normal font-italic d-block">

                                    </span>
                                </div>
                            </div>
                        </th>
                        <td class="border-0 align-middle"><strong>{{$item->productname}}</strong></td>
                        <td class="border-0 align-middle"><strong>{{$item->price}}</strong></td>
                        <td class="border-0 align-middle"><strong><input type="number" value="{{$item->quantity}}" min="1"></strong></td>
                        <td class="border-0 align-middle"><strong style="color: orange">Pending Payment</strong></td>
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
            <p>Banking Transfer: 0217 0406 0203 399</p>
            <p>Host: Quach Cong Tuan</p>
            <p>Vietnam International Banking | VIB</p>
            <strong>Content: <i style="color: red">BV1000{{$item->orderid}}</i></strong>

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
                        ${{$item->total}}
                    </strong>
                </h5>
            </li>
            </ul>
            <a href="{{route('DeleteCartBill',$item->cartid)}}"><button class="btn-footer" type="submit">PROCCEED TO CHECKOUT</button></a>
            {{-- <a type="submit" class="btn-footer" style="padding: 1.5%; font-family: 'URW Geometric'; text-align:center">PROCCEED TO CHECKOUT</a> --}}
        </div>
        </div>
        @endforeach
    </div>
</div>
</div>
</div>
@include('footer')
