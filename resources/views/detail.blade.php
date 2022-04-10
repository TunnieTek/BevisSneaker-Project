@include('header')
@section('title', 'Product Detail')
@yield('detail')
<!-- PRODUCT DETAIL -->
        <div class="detail">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3"></div>

                    <div class="col-xl-3">
                        <hr>
                        <div class="main-pic">
                            <img src="../BevisSneaker{{$data['images']}}">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xl-3">
                                        <img src="../BevisSneaker{{$data['images']}}" >
                                    </div>
                                    <div class="col-xl-3">
                                        <img src="../BevisSneaker{{$data['images']}}" >
                                    </div>
                                    <div class="col-xl-3">
                                        <img src="../BevisSneaker{{$data['images']}}" >
                                    </div>
                                    <div class="col-xl-3">
                                        <img src="../BevisSneaker{{$data['images']}}" >
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3">
                        <hr>
                        <div class="info-product">
                            <h1>{{$data['productname']}}</h1>
                            <p>Category:{{$data['category']}} </p>
                            <p>ID: {{$data['productid']}}</p>
                            <h4 style="color: #ff5f17;">${{$data['price']}}</h4>
                            <hr style="border: 2px dashed white;">
                            <p>{{$data['description']}}</p>
                            <hr style="border: 2px dashed white;">

                            <form method="post">
                                <table>
                                    <tr>
                                        <th><h4>COLOR</h4></th>
                                        <th><h4>SIZE</h4></th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select name="" id="">
                                                <option value="{{$data['color']}}">{{$data['color']}}</option>

                                            </select>
                                        </td>
                                        <td>
                                            <select name="" id="">
                                                <option value="{{$data['size']}}">{{$data['size']}}</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                            <hr style="border: 2px dashed white;">
                            <a class="btn-footer" href="{{ route('add-to-cart', $data['productid']) }}">ORDER NOW</a>
                        </div>

                    </div>
                    <div class="col-xl-3"></div>

                </div>
            </div>
        </div>

        <!-- END PRODUCT DETAIL -->
@include('footer')
