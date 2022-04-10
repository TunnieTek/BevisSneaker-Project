        <!-- FOOTER -->
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-12">
                                    <!-- LOGO -->
                                    <img src="../BevisSneaker/images/STORE--001.png" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <button class="btn-footer">FIND OUT MORE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-3">
                                    <a href="#"><h4>PRODUCT</h4></a>
                                    <ul>
                                        <li><a href="#">Men Shoes</a></li>
                                        <li><a href="#">Women Shoes</a></li>
                                        <li><a href="#">Fashion & Item</a></li>
                                        <li><a href="#">Sale-off</a></li>
                                    </ul>
                                </div>
                                <div class="col-xl-3">
                                    <a href="#"><h4>ABOUT TRAVATRIX</h4></a>
                                    <ul>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="#">About Travatrix</a></li>
                                        <li>Connect</li>
                                        <li>Collab</li>
                                    </ul>
                                </div>
                                <div class="col-xl-3">
                                    <a href="#"><h4>SUPPORT</h4></a>
                                    <ul>
                                        <li><a href="#">FAQs</a></li>
                                        <li><a href="#">Information Security</a></li>
                                        <li><a href="#">Policies</a></li>
                                        <li><a href="#">Tracking</a></li>
                                    </ul>
                                </div>
                                <div class="col-xl-3">
                                    <a href="#"><h4>CONTACT</h4></a>
                                    <ul>
                                        <li><a href="#">Email: bavis-support@travatrix.com</a></li>
                                        <li><a href="#">Phone Number: 099 9999 999</a></li>
                                        <li><a href="#">Facebook: Travatrix Corporation</a></li>
                                        <li><a href="#">Other</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- row 2 -->
                            <div class="row">
                                <div class="col-xl-3">
                                    <div class="container-fluid" style="padding: 0;">
                                                <a href="#">
                                                    <h4>TRAVATRIX SOCIAL</h4>
                                                </a>
                                                <a href="#"><i class="fa-brands fa-facebook-square"></i></a>
                                                <a href="#"><i class="fa-brands fa-instagram-square"></i></a>
                                                <a href="#"><i class="fa-brands fa-twitter-square"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="container-fluid" style="padding: 0;">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <a href="#">
                                                    <h4>SUBSCRIBE</h4>
                                                </a>
                                                <div class="dky">
                                                    <input type="email" placeholder="      Email" class="dky-input">
                                                    <button class="dky-button">SUBSCRIBE</button>
                                               </div>
                                            </div>
                                        </div>
                                        <!-- <div class="row">
                                            <div class="col-xl-12">
                                               <div class="dky">
                                                    <input type="email" placeholder="      Email" class="dky-input">
                                                    <button class="dky-button">ĐĂNG KÝ</button>
                                               </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <img src="../BevisSneaker/images/footerlogo.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- row copyright -->
                <div class="row">
                    <div class="col-xl-12">
                        <h5 style="text-align: center; color: #b1b0b0; font-size: 90%;">Copyright © 2022 Travatrix. All rights reserved.</h5>
                    </div>
                </div>
            </div>
        </footer>
    </body>
    <script>
        var scrollSpyContentEl = document.getElementById('content')
        var scrollSpy = bootstrap.ScrollSpy.getInstance(scrollSpyContentEl) // Returns a Bootstrap scrollspy instance
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('jquery/jquery.min.js') }}"></script>
    <!-- toastr plugin -->
    <script src="{{ asset('toastr\build\toastr.min.js') }}"></script>

    <script type="text/javascript">
        // toastr noti
        @if(Session::has('alert-success'))
            Command: toastr["success"]("{{ Session::get('alert-success') }}")

            toastr.options = {
              "closeButton": false,
              "debug": false,
              "newestOnTop": false,
              "progressBar": false,
              "positionClass": "toast-top-right",
              "preventDuplicates": false,
              "onclick": null,
              "showDuration": 300,
              "hideDuration": 1000,
              "timeOut": 5000,
              "extendedTimeOut": 1000,
              "showEasing": "swing",
              "hideEasing": "linear",
              "showMethod": "fadeIn",
              "hideMethod": "fadeOut"
            }
        @endif

        @if(Session::has('alert-error'))
            Command: toastr["error"]("{{ Session::get('alert-error') }}")

            toastr.options = {
              "closeButton": false,
              "debug": false,
              "newestOnTop": false,
              "progressBar": false,
              "positionClass": "toast-top-right",
              "preventDuplicates": false,
              "onclick": null,
              "showDuration": 300,
              "hideDuration": 1000,
              "timeOut": 5000,
              "extendedTimeOut": 1000,
              "showEasing": "swing",
              "hideEasing": "linear",
              "showMethod": "fadeIn",
              "hideMethod": "fadeOut"
            }
        @endif
    </script>
</html>
