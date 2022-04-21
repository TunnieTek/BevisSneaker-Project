@include('admin.admin-header')
@yield('admin-news')
 <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-6 text-gray-800">Create News Table</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net
">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Database Product | BEVIS</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="form-product">
                                    <ul style="list-style: none">
                                        <form action="" method="post" class="row g-3">
                                            @csrf
                                            <div class="input-group mb-6">
                                                <span class="input-group-text" id="basic-addon1">Heading</span>
                                                <input type="text" name="heading" class="form-control"   aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-6">
                                                <span class="input-group-text" id="basic-addon1">Author</span>
                                                <input type="text" name="author" class="form-control"   aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-text">Paraphase</span>
                                                <textarea name="paraphase" class="form-control" aria-label="With textarea"></textarea>
                                            </div>
                                            <div class="mb-6">
                                                <label for="formFile" class="form-label">Images</label>
                                                <input name="images" class="form-control" type="file" id="formFile">
                                            </div>
                                            <button class="btn btn-dark" type="submit">Publish</button>
                                            
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