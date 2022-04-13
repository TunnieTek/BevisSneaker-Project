@include('admin.admin-header')
@yield('manage')
 <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">ORDER</h1>
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
                                            <th>OrderID</th>
                                            <th>Name</th>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Size</th>
                                            <th>Price</th>
                                            <th>Phone Number</th>
                                            <th>Address</th>
                                            <th>Email</th>
                                            <th>Status</th>
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
                                        @foreach ( $bill as $key => $item)
                                        <tr class="hoveritem">
                                            <th>{{$item->orderid}}</th>
                                            <th>{{$item->fullname}}</th>
                                            <th>{{$item->productname}}</th>
                                            <th>{{$item->quantity}}</th>
                                            <th>{{$item->size}}</th>
                                            <th>{{$item->price}}</th>
                                            <th>{{$item->phonenumber}} </th>
                                            <th>{{$item->address}}</th>
                                            <th>{{$item->email}}</th>
                                            <th>Pending</th>
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
