<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="assets/images/favicon/8.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon/8.png" type="image/x-icon">
    <title>ANOPTIC - Opticien Lunetier</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="assets/css/themify-icons.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="assets/css/map.css" media="screen" id="color">

</head>

<body>
    <!-- header start -->
    <?php include_once 'menu.php' ?>
    <!-- header end -->

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>Prendre rendez-vous</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="contact-page section-b-space">
        <div class="container">
            <div class="row section-b-space">
                <div class="col-lg-12 map">
                    <div id=map></div>
                </div>
            </div>
            <div class="row section-b-space">
                <div class="col-lg-12">
                    <div class="contact-right">
                        <h3> <u>Informations:</u></h3>
                        <div style="border: solid 1px #ccc;
                        background: #e9ecef; 
                        padding: 30px 30px 30px 30px ;">
                            <form action="https://anoptic.com/Anoptic/rdv/post" method="POST">
                                <input type="hidden" name="_token" value="Jaj0JcBm5ifZPjZtOoXpUuKuuZsGjO9vG25Wwgo6">            <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="agence_id">Agence </label>
                                              <select class="form-control" id="agence_id" name="agence_id">
                                                                              <option value="">Aucune agence enregistré !</option>  
                                                                        </select>
                                            </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="rdvLieu">Lieu (cliquez sur la carte afin de generé une adresse)</label>
                                              <input type="text" class="form-control" id="rdvLieu" name="lieu" placeholder="" onchange="geocodeLatLng()">
                                            </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label class="control-label" for="nom">Date*</label>
                                              <div class="controls input-append date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                              <input size="16" type="text" id="date" class="form-control " value="" readonly style="background-color:#ffffff" required>
                                                                          <small class="form-text text-muted">Champ obligatoire*.</small>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <span class="add-on"><i class="icon-th"></i></span>
                                              </div>
                                              <input type="hidden" class="" name="date" id="dtp_input2" value="" required autocomplete="date" /><br/>
                                                                  </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="inputEmail1">Heure*</label>
                                              <div class="controls input-append date form_time" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
                                                <input size="16" type="text" id="heure" class="form-control " value="" name="heure" readonly style="background-color:#ffffff" autocomplete="heure" required>
                                                                          <small  class="form-text text-muted">Champ obligatoire*.</small>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <span class="add-on"><i class="icon-th"></i></span>
                                              </div>
                                              <input class="" type="hidden" name="heure" id="dtp_input3" value="" /><br/>
                                                                      </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                      <div class="form-group">
                                        <label for="objet">Objet * </label>
                                        <select class="form-control" id="objet" name="objet" onchange="monMotif()">
                                          <option value="aucun">Veuillez faire un choix</option>
                                          <option value="lunette">Lunette</option>
                                          <option value="lentille">Lentille</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div id="sec_motif_lunette" class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="display: none">
                                      <div class="form-group">
                                        <label for="motif_lunette">Motif * </label>
                                        <select class="form-control" id="motif_lunette" name="motif_lunette">
                                          <option value="controle de vue">Contrôle de vue</option>
                                          <option value="achât de lunette de vue">Achât de lunette de vue</option>
                                          <option value="achât de lunette solaire">Achât de lunette solaire</option>
                                          <option value="conseil pour mes lunette">Conseil pour mes lunettes</option>
                                          <option value="entretient de mes lunettes">Entretient de mes lunettes</option>
                                          <option value="livraison">livraison</option>
                                          <option value="autre">Autre</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div id="sec_motif_lentille" class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="display: none" >
                                      <div class="form-group">
                                        <label for="motif_lentille">Motif * </label>
                                        <select class="form-control" id="motif_lentille" name="motif_lentille">
                                          <option value="achât de lentille">Achât de lentille</option>
                                          <option value="conseil">Conseil</option>
                                          <option value="apprendre à poser les lentilles">Apprendre à poser les lentilles</option>
                                          <option value="apprendre à entretenir les lentilles">Apprendre à entretenir les lentilles</option>
                                          <option value="livraison_lentille">Livraison</option>
                                          <option value="autre">Autre</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="text-align: center;">
                                      <button class="btn btn-lg" type="submit" style="background-color: #153092; border-color: #153092;color: #ffffff;border-radius: 0px;">
                                          Envoyer
                                      </button>
                                  </div>
                                  </div>
                      
                            </form>
                        </div>
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
    <script type="text/javascript" src="https://anoptic.com/public/assets/datetimepicker/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="https://anoptic.com/public/assets/datetimepicker/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqFlxuUwcTYe5uibZ1pDVYCON22q2XDQE&callback=initMap" async defer></script>
    <script type="text/javascript">
  
        var map;
  
        function initMap() {
          var mapProp = 
          {
            center: {lat: 5.356602, lng: -3.969336},
            zoom: 14
          }
          map = new google.maps.Map(document.getElementById('map'),mapProp);
  
          var geocoder = new google.maps.Geocoder;
  
          google.maps.event.addListener(map, 'click', function(event) {
              document.getElementById('rdvLieu').value = event.latLng.lng() + ','+ event.latLng.lat();
              geocodeLatLng(geocoder);
          })
  
        }
  
        function geocodeLatLng(geocoder){
          var input = document.getElementById('rdvLieu').value;
          var latlngStr = input.split(',',2);
          var latlng = {lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};
  
          geocoder.geocode({'location': latlng}, function(result, status){
            console.log(status);
            if (status === 'OK') {
              if (results[0]) {
                document.getElementById('rdvLieu').value = results[0].formatted_address;
              }else{
                window.alert('Pas de resultat trouvé');
              }
            }else{
              //window.alert('Echec Geocoder dû à: ' + status);
            }
          });
        }
  
  
  
        //Datepicker
  
        $('.form_date').datetimepicker({
          language:  'fr',
          weekStart: 1,
          todayBtn:  1,
              autoclose: 1,
          todayHighlight: 1,
          startView: 2,
          minView: 2,
          forceParse: 0
        });
  
        $('.form_time').datetimepicker({
          language:  'fr',
          weekStart: 1,
          todayBtn:  1,
          autoclose: 1,
          todayHighlight: 1,
          startView: 1,
          minView: 0,
          maxView: 1,
          forceParse: 0
        });
  
        //Slectionner le motif
  
        function monMotif() {
           var option = document.getElementById("objet").value;
            console.log(option);
           if (option == "lunette") {
             var motif_lunette = document.getElementById("sec_motif_lunette");
             var motif_lentille = document.getElementById("sec_motif_lentille");
              console.log(motif_lunette);
             motif_lentille.style.display = 'none';
             motif_lunette.style.display = 'block';  
           }else{
              if(option == "lentille"){
                var motif_lunette = document.getElementById("sec_motif_lunette");
                var motif_lentille = document.getElementById("sec_motif_lentille");
  
                motif_lunette.style.display = 'none'; 
                motif_lentille.style.display = 'block';
              }else{
                var motif_lunette = document.getElementById("sec_motif_lunette");
                var motif_lentille = document.getElementById("sec_motif_lentille");
  
                motif_lunette.style.display = 'none'; 
                motif_lentille.style.display = 'none';
              }
           }
        }
  
  
  
  
         
    </script>

    <style>
    /* Set the size of the div element that contains the map */
    #map {
        height: 500px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
        }
    </style>
</body>

</html>