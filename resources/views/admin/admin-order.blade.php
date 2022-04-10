@include('admin.admin-header')
@yield('tables')
 <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">ORDER TABLE</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Database Order | BEVIS</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">ID Order</th>
                                            <th class="text-center">Code</th>
                                            <th class="text-center">User</th>
                                            <th class="text-center">Total Money</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $orders as $key => $value )
                                        <tr>
                                            <td class="text-center">{{ $key + 1}}</td>
                                            <td class="text-center">{{ $value->id}}</td>
                                            <td>{{ $value->code}}</td>
                                            <td>{{ $value->user->username}}</td>
                                            <td>${{ number_format($value->total_money) }}</td>
                                            <td>
                                                @if ($value->status == 0)
                                                    Chờ Duyệt
                                                @elseif ($value->status == 1)
                                                    Đã duyệt
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.order.detail', $value->id) }}">Detail</a>
                                                @if ($value->status == 0)
                                                    <form action="{{ route('admin.order.approve', $value->id) }}" method="post" class="d-inline-block">
                                                        @csrf
                                                        <button type="submit" class="button border-0 bg-white">Approve</button>
                                                    </form>
                                                    <form action="{{ route('admin.order.delete', $value->id) }}" method="post" class="d-inline-block">
                                                        @csrf
                                                        <button type="submit" class="button border-0 bg-white">Delete</button>
                                                    </form>
                                                @endif
                                            </td>
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
