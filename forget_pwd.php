<?php include_once 'header.php' ?>


    <!-- header start -->
    <?php include_once 'menu.php' ?>
    <!-- header end -->


    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>Mot de passe oublié</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                     
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="pwd-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h2>Réinitialiser votre mot de passe</h2>
                    <form class="theme-form">
                        <div class="form-row">
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="email" placeholder="Entrez votre email"
                                    required="">
                            </div><a href="dashboard.php" class="btn btn-solid">Réinitialiser</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->


    <!-- footer start -->
    <?php include_once 'footer.php' ?>
    <!-- footer end -->


    <!-- theme setting -->
    <?php include_once 'themeSetting.php' ?>
    <!-- theme setting -->


    <!-- tap to top start -->
    <div class="tap-top">
        <div><i class="fa fa-angle-double-up"></i></div>
    </div>
    <!-- tap to top end -->

    <!-- latest jquery-->
    <script src="assets/js/jquery-3.3.1.min.js"></script>

    <!-- menu js-->
    <script src="assets/js/menu.js"></script>

    <!-- lazyload js-->
    <script src="assets/js/lazysizes.min.js"></script>

    <!-- popper js-->
    <script src="assets/js/popper.min.js"></script>

    <!-- slick js-->
    <script src="assets/js/slick.js"></script>

    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap.js"></script>

    <!-- Bootstrap Notification js-->
    <script src="assets/js/bootstrap-notify.min.js"></script>

    <!-- Theme js-->
    <script src="assets/js/script.js"></script>

    <script>
        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
    </script>
</body>

</html>