@include('header')
@yield('cart')
{{-- <form action="purchase" method="post">
    @csrf --}}
        <!-- START CART -->
        <div class="cart" style="font-family: 'URW Geometric';">
            <div class="pb-5">
                <div class="container">
                <div class="row">
                    <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

                    <!-- Shopping cart table -->
                    <div class="table-responsive">
                        <table class="table">
                        <thead>
                            <tr>
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
                                <div class="py-2 text-uppercase">Remove</div>
                            </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart as $item)
                                <tr>
                                    <th scope="row" class="border-0">
                                        <div class="p-2">
                                        <img src="{{'BevisSneaker'}}/images/SingleItem/{{$item->image}}" alt="" width="100" style="margin-right: 2%;" class="img-fluid rounded shadow-sm">
                                            <div class="ml-3 d-inline-block align-middle">
                                                <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">{{$item->productname}}</a></h5>
                                                </a></h5>
                                                <span class="text-muted font-weight-normal font-italic d-block">Size:
                                                    {{$item->size}}
                                                </span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="border-0 align-middle"><strong>${{$item->price}}</strong></td>
                                    <td class="border-0 align-middle"><strong><input type="number" value="{{$item->quantity}}" min="1"></strong></td>
                                    <td class="border-0 align-middle"><a href="{{route('DeleteCart',$item->cartid)}}" class="text-dark"><i class="fa fa-trash"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                    <!-- End -->
                    </div>
                </div>
                <div class="row py-5 p-4 bg-white rounded shadow-sm">
                    <div class="col-lg-6">
                    <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">STATUS</div>
                    <div class="p-4">
                        @if(session('alertor'))
                            <section class='alert alert-success'>{{session('alertor')}}</section>
                        @endif
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">ORDER SUMARY</div>
                    <div class="p-4">
                        <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have entered.</p>
                        <p>@if (Auth::check())
                            @if (Auth::user()->role == '2')
                            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Discount</strong>
                                <h5 class="font-weight-bold">
                                    <strong>
                                        $100
                                    </strong>
                                </h5>
                            </li>
                            @elseif (Auth::user()->role == '3')
                            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Discount</strong>
                                <h5 class="font-weight-bold">
                                    <strong>
                                        $10
                                    </strong>
                                </h5>
                            </li>
                            @elseif(Auth::user()->role == '4')
                            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Discount</strong>
                                <h5 class="font-weight-bold">
                                    <strong>
                                        $5
                                    </strong>
                                </h5>
                            </li>
                            @else
                            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Discount</strong>
                                <h5 class="font-weight-bold">
                                    <strong>

                                    </strong>
                                </h5>
                            </li>
                            @endif

                        @endif</p>

                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                            <h5 class="font-weight-bold">
                                <strong>
                                    ${{$total}}
                                </strong>
                            </h5>
                        </li>
                        </ul>
                        <form action="" method="POST">
                            @csrf
                                <input type="hidden" name="total" id="total" value="{{$total}}">
                            <button class="btn-footer" type="submit">PROCCEED TO CHECKOUT</button>
                        {{-- <a type="submit" class="btn-footer" style="padding: 1.5%; font-family: 'URW Geometric'; text-align:center">PROCCEED TO CHECKOUT</a> --}}
                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- END CART -->
@include('footer')
