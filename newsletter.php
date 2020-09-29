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
                        <h2>Newsletter</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!-- section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="account-sidebar"><a class="popup-btn">Mon Compte</a></div>
                    <div class="dashboard-left">
                        <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left"
                                    aria-hidden="true"></i> Retour</span></div>
                        <div class="block-content">
                            <ul>
                                <li><a href="dashboard.php">Informations Personnelle</a></li>
                                <li><a href="booking.php">Vos Commandes</a></li>
                                <li><a href="wishlist.php">Votre liste d'envies</a></li>
                                <li><a href="update-addr.php">Adresse</a></li>
                                <li><a href="update-pwd.php">Modifier Mot de Passe</a></li>
                                <li class="active"><a href="newsletter.php">Newsletter</a></li>
                                <li class="last"><a href="logout.php">Déconnexion</a></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="dashboard-right">
                        <div class="dashboard">
                            <div class="page-title">
                                <h2>S'inscrire à la newsletter </h2>
                            </div>
                            <div class="checkout-page">
                                <div class="checkout-form">
                                    <form>
                                    <div class="row check-out">
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12"">
                                    <input type="text" class="form-control" name="EMAIL" id="mce-EMAIL"
                                        placeholder="Entrer votre adresse email" required="required">
                                </div>
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <a href="success-news.php" class="btn btn-solid">S'inscrire</a>
                                        </div>
                                    </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->


    <?php include_once 'footer.php' ?>



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