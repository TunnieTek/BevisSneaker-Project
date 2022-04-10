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
                                            <th>ID Product</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Color</th>
                                            <th>Images</th>
                                            <th>Category</th>
                                            <th>Description</th>
                                            <th>Function</th>
                                        </tr>
                                    </thead>

                                    <style type="text/css">
                                        .hoveritem:hover
                                        {
                                            background-color: #cececea1;
                                            color: #20212a;
                                        }
                                    </style>
                                    <tbody>
                                        @foreach ( $product as $key => $value)
                                        <tr class="hoveritem">
                                            <th>{{ $value -> productid}}</th>
                                            <th>{{ $value -> productname}}</th>
                                            <th>{{ $value -> price}}</th>
                                            <th>
                                                {{{ $value -> color }}}
                                            </th>
                                            <th>{{ $value -> image}} <br> {{ $value -> image2}} <br> {{ $value -> image3}} <br> {{ $value -> image4}} <br> {{ $value -> image5}}</th>
                                            <th>
                                                {{{ $value -> category }}}
                                            </th>
                                            <th  style="width: 45%">{{ $value -> description}}</th>
                                            <th  style="width: 15%">
                                                <a href="{{route('delete',$value->productid)}}" class="btn btn-danger">Delete</a>
                                                <a href="{{route('UP',$value->productid)}}" class="btn btn-success">Update</a>
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
