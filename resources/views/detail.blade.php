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
                                @csrf
                                <table>
                                    <tr>
                                        <th><h4>COLOR</h4></th>
                                        <th><h4>SIZE</h4></th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select>
                                                @foreach ($color as $item)
                                                    <option value="{{$item->color}}">{{$item->color}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select name="size" id="">
                                                @foreach ($size as $item )
                                                    <option value="{{$item->sizeid}}">{{$item->size}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                                <hr style="border: 2px dashed white;">
                                @if (session('alertadd'))
                                    <div class="alert alert-success">
                                        {{ session('alertadd') }}
                                    </div>
                                @endif
                                @if(Auth::check())
                                    <button type="submit" class="btn-footer" style="width: 70%;">ORDER NOW</button>
                                @else
                                    <a href="{{route('login')}}" class="btn btn-dark" style="width: 100%;">BUY NOW</a>
                                @endif
                            </form>
                        </div>


                    </div>
                    <div class="col-xl-3"></div>

                </div>
            </div>
        </div>

        <!-- END PRODUCT DETAIL -->
@include('footer')
