@include('header')
@yield('cart')
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
                                <div class="py-2 text-uppercase">Action</div>
                            </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carts as $cart)
                            <tr>
                                <th scope="row" class="border-0">
                                    <div class="p-2">
                                        <img src="../BevisSneaker/{{ $cart->options->img }}" alt="" width="100" style="margin-right: 2%;" class="img-fluid rounded shadow-sm">
                                        <div class="ml-3 d-inline-block align-middle">
                                            <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">{{ $cart->name }}</a></h5>
                                            {{-- <span class="text-muted font-weight-normal font-italic d-block">Category: Sneaker</span> --}}
                                            <span class="text-muted font-weight-normal font-italic d-block">Color: {{ $cart->options->color }}</span>
                                            <span class="text-muted font-weight-normal font-italic d-block">Size: {{ $cart->options->size }}</span>
                                        </div>
                                    </div>
                                </th>
                                <td class="border-0 align-middle"><strong>${{ $cart->price }}</strong></td>

                                <form action="{{ route('update-product-cart', ['rowid' => $cart->rowId]) }}" method="GET">
                                    <td class="border-0 align-middle"><strong><input type="number" value="{{ $cart->qty }}" min="1" name="qty"></strong></td>
                                    <td class="border-0 align-middle">
                                        <button class="updatecart bg-white" id="{{ $cart->rowId }}" data-id="{{ $cart->id }}" type="submit">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </button>

                                        <a href="{{ route('del-product-cart', ['id' => $cart->rowId]) }}" class="text-dark"><i class="fa fa-trash"></i></a>
                                    </td>
                                </form>
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
                    <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Coupon code</div>
                    <div class="p-4">
                        <p class="font-italic mb-4">If you have a coupon code, please enter it in the box below</p>
                        <div class="input-group mb-4 border rounded-pill p-2">
                        <input type="text" placeholder="Apply coupon" aria-describedby="button-addon3" class="form-control border-0">
                        <div class="input-group-append border-0">
                            <button id="button-addon3" type="button" class="btn btn-dark px-4 rounded-pill"><i class="fa fa-gift mr-2"></i> Apply coupon</button>
                        </div>
                        </div>
                    </div>
                    <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Instructions for seller</div>
                    <div class="p-4">
                        <p class="font-italic mb-4">If you have some information for the seller you can leave them in the box below</p>
                        <textarea name="" cols="30" rows="2" class="form-control"></textarea>
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
                    <div class="p-4">
                        {{-- <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have entered.</p> --}}
                        <ul class="list-unstyled mb-4">
                        {{-- <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>$79.00</strong></li> --}}
                        {{-- <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>$10.00</strong></li> --}}
                        {{-- <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>$0.00</strong></li> --}}
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                            <h5 class="font-weight-bold">${{ $total }}</h5>
                        </li>
                        </ul>
                        <form action="{{ route('order') }}" method="post">
                            @csrf

                            <button type="submit" class="btn-footer" style="padding: 1.5%; font-family: 'URW Geometric';">PROCCEED TO CHECKOUT</button>
                        </form>
                        {{-- <a href="#" class="btn-footer" style="padding: 1.5%; font-family: 'URW Geometric';">PROCCEED TO CHECKOUT</a> --}}
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- END CART -->
@include('footer')
