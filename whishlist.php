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
                        <h2>Votre liste d'envies</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="wishlist-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table cart-table table-responsive-xs">
                        <thead>
                            <tr class="table-head">
                                <th scope="col">image</th>
                                <th scope="col">article</th>
                                <th scope="col">disponibilité</th>
                                <th scope="col">action</th>
                                <th scope="col">action</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="#"><img src="assets/images/pro3/1.jpg" alt=""></a>
                                </td>
                                <td><a href="#">Monture Chic et Moderne</a>
                                    <div class="mobile-cart-content row">
                                        <div class="col-xs-3">
                                            <p>en stock</p>
                                        </div>
                                        <div class="col-xs-3">

                                        </div>
                                        <div class="col-xs-3">
                                            <h2 class="td-color"><a href="#" class="icon mr-1"><i class="ti-close"></i>
                                                </a><a href="#" class="cart"><i class="ti-shopping-cart"></i></a></h2>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p>en stock</p>
                                </td>
                                <td>
                                    <a class="btn btn-warning" href="#" role="button"><i class="ti-close"></i> Supprimer </a>
                                </td>
                                <td>
                                    <a class="btn btn-warning" href="#" role="button"><i class="ti-shopping-cart"></i> Ajouter au panier </a> 
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="#"><img src="assets/images/pro3/1.jpg" alt=""></a>
                                </td>
                                <td><a href="#">Monture Chic et Moderne</a>
                                    <div class="mobile-cart-content row">
                                        <div class="col-xs-3">
                                            <p>en stock</p>
                                        </div>
                                        <div class="col-xs-3">

                                        </div>
                                        <div class="col-xs-3">
                                            <h2 class="td-color"><a href="#" class="icon mr-1"><i class="ti-close"></i>
                                                </a><a href="#" class="cart"><i class="ti-shopping-cart"></i></a></h2>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p>en stock</p>
                                </td>
                                <td>
                                    <a class="btn btn-warning" href="#" role="button"><i class="ti-close"></i> Supprimer </a>
                                </td>
                                <td>
                                    <a class="btn btn-warning" href="#" role="button"><i class="ti-shopping-cart"></i> Ajouter au panier </a> 
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="#"><img src="assets/images/pro3/1.jpg" alt=""></a>
                                </td>
                                <td><a href="#">Monture Chic et Moderne</a>
                                    <div class="mobile-cart-content row">
                                        <div class="col-xs-3">
                                            <p>en stock</p>
                                        </div>
                                        <div class="col-xs-3">

                                        </div>
                                        <div class="col-xs-3">
                                            <h2 class="td-color"><a href="#" class="icon mr-1"><i class="ti-close"></i>
                                                </a><a href="#" class="cart"><i class="ti-shopping-cart"></i></a></h2>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p>en stock</p>
                                </td>
                                <td>
                                    <a class="btn btn-warning" href="#" role="button"><i class="ti-close"></i> Supprimer </a>
                                </td>
                                <td>
                                    <a class="btn btn-warning" href="#" role="button"><i class="ti-shopping-cart"></i> Ajouter au panier </a> 
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row wishlist-buttons">
                <div class="col-12"><a href="index.php" class="btn btn-solid">Poursuivre achat</a> 
                <a href="checkout.php" class="btn btn-solid">Voir Panier</a></div>
            </div>
        </div>
    </section>
    <!--section end-->


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