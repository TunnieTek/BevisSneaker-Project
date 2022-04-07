@include('admin.admin-header')
@yield('tables')
 <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">CUSTOMER TABLES</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

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
                                            <li><input type="text" name="productid" id=""></li>
                                            <li>Name</li>
                                            <li><input type="text" name="productname" id=""></li>
                                            <li>Price</li>
                                            <li><input type="number" min="0" value="10" name="price" id=""></li>
                                            <li>Color</li>
                                            <li><input type="text" name="color" id=""></li>
                                            <li>Size</li>
                                            <li><input type="number" value="35" min="35" max="43" name="size" id=""></li>
                                            <li>Images</li>
                                            <li><input type="file" name="images" id="" multiple></li>
                                            <li>Category</li>
                                            <li><input type="text" name="category" id="" ></li>
                                            <li>Description</li>
                                            <li><input type="text" name="description" id="" ></li>
                                            <li>Images-2</li>
                                            <li><input type="file" name="images" id="" multiple></li>
                                            <li>Images-3</li>
                                            <li><input type="file" name="images" id="" multiple></li>
                                            <li>Images-4</li>
                                            <li><input type="file" name="images" id="" multiple></li>
                                            <li>Images-5</li>
                                            <li><input type="file" name="images" id="" multiple></li>
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
