@include('admin.admin-header')
@yield('tables')
 <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">ORDER DETAIL TABLE</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Database Order Detail | BEVIS</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">ID Product</th>
                                            <th class="text-center">Price</th>
                                            <th class="text-center">Amount</th>
                                            <th class="text-center">Total Money</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $order->orderDetails as $key => $value )
                                        <tr>
                                            <td class="text-center">{{ $key + 1}}</td>
                                            <td class="text-center">{{ $value->product->productid }}</td>
                                            <td class="text-center">${{ number_format($value->price) }}</td>
                                            <td class="text-center">{{ $value->amount}}</td>
                                            <td class="text-center">${{ number_format($value->total_money) }}</td>
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

            <style>
                .button {
                    color: #4e73df;
                }

                .button:hover {
                    text-decoration: underline;
                    color: #224abe;
                }
            </style>
@include('admin.admin-footer')
