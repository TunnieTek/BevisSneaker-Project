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
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Fullname</th>
                                            <th>Phone Number</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>City</th>
                                            <th>Function</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user as $key => $value)
                                        <tr>
                                            <td>{{ $key + 1}}</td>
                                            <td>{{ $value -> username}}</td>
                                            <td>{{ $value -> password}}</td>
                                            <td>{{ $value -> fullname}}</td>
                                            <td>{{ $value -> phonenumber}}</td>
                                            <td>{{ $value -> email}}</td>
                                            <td>{{ $value -> address}}</td>
                                            <td>{{ $value -> city}}</td>
                                            <th><a href="{{route('deleteUser',$value->username)}}">Delete</a></th>
                                            <th><a href="{{route('UU',$value->username)}}">Update</a></th>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Fullname</th>
                                            <th>Phone Number</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>City</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
@include('admin.admin-footer')
