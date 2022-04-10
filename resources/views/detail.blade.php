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
                            <img src="../BevisSneaker/images/SingleItem/{{$data['image']}}">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xl-3">
                                        <img src="../BevisSneaker/images/SingleItem/{{$data['image2']}}" >
                                    </div>
                                    <div class="col-xl-3">
                                        <img src="../BevisSneaker/images/SingleItem/{{$data['image3']}}" >
                                    </div>
                                    <div class="col-xl-3">
                                        <img src="../BevisSneaker/images/SingleItem/{{$data['image4']}}" >
                                    </div>
                                    <div class="col-xl-3">
                                        <img src="../BevisSneaker/images/SingleItem/{{$data['image5']}}" >
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3">
                        <hr>
                        <div class="info-product">
                            <h1>{{$data['productname']}}</h1>
                            <p>Category:@foreach ($category as $item)
                                            {{$item->category}}
                                        @endforeach
                            </p>
                            <p>ID: BV{{$data['productid']}}-{{$data['productname']}}</p>
                            <h4 style="color: #ff5f17;">${{$data['price']}}</h4>
                            <hr style="border: 2px dashed white;">
                            <p style="text-align: justify">{{$data['description']}}</p>
                            <hr style="border: 2px dashed white;">

                            <form method="post">
                                <table>
                                    <tr>
                                        <th><h4>COLOR</h4></th>
                                        <th><h4>SIZE</h4></th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select name="color" id="">
                                                @foreach ($color as $item)
                                                    <option value="{{$item->color}}">{{$item->color}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select name="" id="">
                                                @foreach ($size as $value )
                                                <option value="{{$value['size']}}">{{$value['size']}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                            <hr style="border: 2px dashed white;">
                            <button class="btn-footer" onclick="addCart()">ORDER NOW    </button>
                        </div>

                        {{-- JS --}}
                        <script>
                            function addCart()
                                {
                                     location.assign("../cart")
                                }
                        </script>
                        {{-- JS --}}

                    </div>
                    <div class="col-xl-3"></div>

                </div>
            </div>
        </div>

        <!-- END PRODUCT DETAIL -->
@include('footer')
