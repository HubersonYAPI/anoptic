
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
                        <h2>identifiez-vous ou créez un Compte</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="login-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Déjà client ?</h3>
                    <div class="theme-card">
                        <form class="theme-form">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email" required="">
                            </div>
                            <div class="form-group">
                                <label for="review">Mot de Passe</label>
                                <input type="password" class="form-control" id="review"
                                    placeholder="Entrer votre mot de passe" required="">
                            </div> <a   class="btn btn-solid" href="dashboard.php" role="button">se connecter</a>
                            <a href="forget_pwd.php">
                                Mot de passe oublier?
                            </a>
                            
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 right-login">
                    <h3>Pas encore client ?</h3>
                    <div class="theme-card authentication-right">
                        <form class="theme-form">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="email">Nom</label>
                                    <input type="text" class="form-control" id="fname" placeholder="Nom"
                                        required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" placeholder="Email" required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="review">Mot de passe </label>
                                    <input type="password" class="form-control" id="review"
                                        placeholder="Entrer votre mot de passe" required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="review">confirme mot de passe </label>
                                    <input type="password" class="form-control" id="review"
                                        placeholder="Confirmer le mot de passe" required="">
                                </div><a   class="btn btn-solid" href="dashboard.php" role="button">créer un compte</a>                                
                            </div>
                        </form>
                    </div>
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