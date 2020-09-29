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
                        <h2>Mon compte</h2>
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
                                <li class="active"><a href="dashboard">Informations Personnelles</a></li>
                                <li><a href="booking.php">Vos Commandes</a></li>
                                <li><a href="wishlist.php">Votre liste d'envies</a></li>
                                <li><a href="update-addr.php">Adresses</a></li>
                                <li><a href="update-pwd.php">Modifier Mot de Passe</a></li>
                                <li><a href="newsletter.php">Newsletter</a></li>
                                <li class="last"><a href="logout.php">Déconnexion</a></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="dashboard-right">
                        <div class="dashboard">
                            <div class="page-title">
                                <h2>Mon Compte</h2>
                            </div>
                            <div class="welcome-msg">
                                <p>Bonjour, <b>MARK JECNO </b>  !</p>
                                <p>À partir de votre Espace Mon compte, vous avez la possibilité d'afficher 
                                    l'activité du compte et de mettre à jour les informations . <br>
                                    Sélectionnez un lien ci-dessous pour afficher ou
                                    modifier les informations.</p>
                            </div>
                            <div class="box-account box-info">
                                <div class="box-head">

                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="box">
                                            <div class="box-title">
                                                <h3>INFORMATIONS PERSONNELLES</h3><a href="update-info.php">Modifier</a>
                                            </div>
                                            <div class="box-content">
                                                <h6>MARK JECNO</h6>
                                                <h6>markjecno@gmail.com</h6>
                                                <h6><a href="update-pwd.php">Modifier votre mot de passe</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box">
                                            <div class="box-title">
                                                <h3>Adresse Par defaut</h3><a href="update-addr.php">Modifier</a>
                                            </div>
                                            <div class="box-content">
                                                <p>
                                                    MARK JECNO
                                                </p>
                                                <p>
                                                    Cocody-riviera 3 - FAYA - laurier 8-villa 128
                                                </p>
                                                <p>
                                                    07 06 09 21
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="box">
                                            <div class="box-title">
                                                <h3>Newsletters</h3><a href="newsletter.php">S'inscrire</a>
                                            </div>
                                            <div class="box-content">
                                                <p>Vous n'êtes actuellement pas abonné à notre newsletter.</p>
                                            </div>
                                        </div>
                                    </div>
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