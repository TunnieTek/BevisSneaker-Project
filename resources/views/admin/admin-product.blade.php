@include('admin.admin-header')
@yield('tables')
 <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">PRODUCT TABLE</h1>
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
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ID Product</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Color</th>
                                            <th>Size</th>
                                            <th>Images</th>
                                            <th>Category</th>
                                            <th>Description</th>
                                        </tr>
                                        <tr>
                                            <form action="" method="post">
                                                @csrf
                                                <th></th>
                                                <th><input type="text" name="productid" id=""></th>
                                                <th><input type="text" name="productname" id=""></th>
                                                <th><input type="number" min="0" value="10" name="price" id=""></th>
                                                <th><input type="text" name="color" id=""></th>
                                                <th><input type="number" value="35" min="35" max="43" name="size" id=""></th>
                                                <th><input type="file" name="images" id="" multiple></th>
                                                <th><input type="text" name="category" id="" ></th>
                                                <th><input type="text" name="description" id="" ></th>
                                                <th>
                                                    <input type="submit" value="Create">
                                                </th>
                                            </form>
                                            {{-- @csrf
                                            <th><input type="text" name="productid" id=""></th>
                                            <th><input type="text" name="productname" id=""></th>
                                            <th><input type="number" min="0" value="10" name="price" id=""></th>
                                            <th><input type="text" name="color" id=""></th>
                                            <th><input type="number" value="35" min="35" max="43" name="size" id=""></th>
                                            <th><input type="file" name="images" id="" multiple></th>
                                            <th><input type="text" name="category" id="" ></th>
                                            <th><input type="text" name="description" id="" ></th>
                                            <th>
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Modify
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                                        <li><a class="dropdown-item active" href="#">Modify</a></li>
                                                        <li><hr class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="#">Create</a></li>
                                                        <li><a class="dropdown-item" href="#">Update</a></li>
                                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </th> --}}
                                        </tr>

                                    </thead>
                                    <tbody>
                                        @foreach ( $product as $key => $value )
                                        <tr>
                                            <th>{{ $key + 1}}</th>
                                            <th>{{ $value -> productid}}</th>
                                            <th>{{ $value -> productname}}</th>
                                            <th>{{ $value -> price}}</th>
                                            {{-- <th>{{ $value -> size}}</th> --}}
                                            <th>{{ $value -> color}}</th>
                                            <th>{{ $value -> size}}</th>
                                            <th>{{ $value -> images}}</th>
                                            <th>{{ $value -> category}}</th>
                                            <th>{{ $value -> description}}</th>
                                            <th><a href="{{route('delete',$value->productid)}}">Delete</a></th>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
@include('admin.admin-footer')
