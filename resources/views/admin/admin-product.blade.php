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
                                            <th>Images2</th>
                                            <th>Images3</th>
                                            <th>Images4</th>
                                            <th>Images5</th>
                                            <th>Function</th>
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
                                            <th>{{ $value -> images2}}</th>
                                            <th>{{ $value -> images3}}</th>
                                            <th>{{ $value -> images4}}</th>
                                            <th>{{ $value -> images5}}</th>
                                            <th>
                                                <a href="{{route('delete',$value->productid)}}"><button style="width: 8rem" class="btn btn-danger">Delete</button></a>
                                                <br>
                                                <a href="{{route('UP',$value->productid)}}"><button style="width: 8rem" class="btn btn-success">Update</button></a>
                                            </th>
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
