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
                            <img src="{{'BevisSneaker'}}/images/Product-Single/1.png">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xl-3">
                                        <img src="{{'BevisSneaker'}}/images/Product-Single/1.png" >
                                    </div>
                                    <div class="col-xl-3">
                                        <img src="{{'BevisSneaker'}}/images/Product-Single/2.png" >
                                    </div>
                                    <div class="col-xl-3">
                                        <img src="{{'BevisSneaker'}}/images/Product-Single/3.png" >
                                    </div>
                                    <div class="col-xl-3">
                                        <img src="{{'BevisSneaker'}}/images/Product-Single/4.png" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <hr>
                        <div class="info-product">
                            <h1>STAN SMITH</h1>
                            <p>ID: Stansmith001</p>
                            <h4 style="color: #ff5f17;">$250</h4>
                            <hr style="border: 2px dashed white;">
                            <p>Thông tin sản phẩm sẽ được thêm ở đây, giày được sản xuất vào năm 2022 do Travatrix sản xuất, ví dụ như thế.</p>
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
                                                <option value="Red">RED</option>
                                                <option value="Blue">BLUE</option>
                                                <option value="Black">BLACK</option>
                                                <option value="White">WHITE</option>
                                                <option value="Yellow">YELLOW</option>
                                                <option value="Green">GREEN</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select name="" id="">
                                                <option value="Red">35</option>
                                                <option value="Blue">36</option>
                                                <option value="Black">37</option>
                                                <option value="White">38</option>
                                                <option value="Yellow">39</option>
                                                <option value="Green">40</option>
                                                <option value="Green">41</option>
                                                <option value="Green">42</option>
                                                <option value="Green">43</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                            <hr style="border: 2px dashed white;">
                            <button class="btn-footer" onclick="addCart()">MUA NGAY</button>
                        </div>

                        {{-- JS --}}
                        <script>
                            function addCart()
                                {
                                     location.assign("cart")
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
