@include('admin.admin-header')
@yield('tables')
 <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">PRODUCT TABLES</h1>
                    <p class="mb-4">Anytime Anywhere EYE CONTACT LIVE </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Database Customer | BEVIS</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="form-product">
                                    <ul style="list-style: none">
                                        <form action="" method="post">
                                            @csrf
                                            <li>ID Product</li>
                                            <li><input type="text" name="productid" value="{{$product->productid}}"></li>
                                            <li>Name</li>
                                            <li><input type="text" name="productname" value="{{$product->productname}}"></li>
                                            <li>Price</li>
                                            <li><input type="number" min="0" value="10" name="price" value="{{$product->price}}"></li>
                                            <li>Color</li>
                                            <li><input type="text" name="color" value="{{$product->color}}"></li>
                                            <li>Size</li>
                                            <li><input type="number" value="35" min="35" max="43" name="size" value="{{$product->size}}"></li>
                                            <li>Images</li>
                                            <li><input type="file" name="images" value="{{$product->images}}" multiple></li>
                                            <li>Category</li>
                                            <li><input type="text" name="category" value="{{$product->category}}" ></li>
                                            <li>Description</li>
                                            <li><input type="text" name="description" value="{{$product->description}}" ></li>
                                            <li>Images-2</li>
                                            <li><input type="file" name="images2" value="{{$product->images2}}" multiple></li>
                                            <li>Images-3</li>
                                            <li><input type="file" name="images3" value="{{$product->images3}}" multiple></li>
                                            <li>Images-4</li>
                                            <li><input type="file" name="images4" value="{{$product->images4}}" multiple></li>
                                            <li>Images-5</li>
                                            <li><input type="file" name="images5" value="{{$product->images5}}" multiple></li>
                                            <li>
                                                <button class="btn btn-success" type="submit">Create</button>
                                            </li>
                                        </form>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
@include('admin.admin-footer')
