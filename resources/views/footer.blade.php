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

    <script>
        var toastElList = [].slice.call(document.querySelectorAll('.toast'))
        var toastList = toastElList.map(function (toastEl) {
        return new bootstrap.Toast(toastEl, option)
        })

        var myAlert = document.getElementById('myAlert')
        var bsAlert = new bootstrap.Alert(myAlert)
        var alertNode = document.querySelector('.alert')
        var alert = bootstrap.Alert.getInstance(alertNode)
        alert.close()

        var myAlert = document.getElementById('myAlert')
        myAlert.addEventListener('closed.bs.alert', function () {

})

toast.show()
var myToastEl = document.getElementById('myToastEl')
var myToast = bootstrap.Toast.getInstance(myToastEl) // Returns a Bootstrap toast instance
var myToastEl = document.getElementById('myToastEl')
var myToast = bootstrap.Toast.getOrCreateInstance(myToastEl) // Returns a Bootstrap toast instance
toast.dispose()
var myToastEl = document.getElementById('myToast')
myToastEl.addEventListener('hidden.bs.toast', function () {
  // do something...
})
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
