<?php include('components/header.php'); ?>
    <!-- START HOMEPAGE DESIGN AREA -->
<!-- START HOMEPAGE DESIGN AREA -->
<?php session_start();
?>
<header id="home" class="welcome-area">
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3" style="display: inline-block;">
                    <!-- START LOGO DESIGN AREA -->
                    <div class="logo"  style="display: inline-block;">
                        <a href="">
                            <p>Dolph Life</p>
                        </a>
                    </div>
                    <div class="logo"  style="display: inline-block; padding-left:50px;">
                       
                        <!-- <a href="#"><p>Le CA</p></a> -->
                    </div>
                    <!-- END LOGO DESIGN AREA -->
                </div>
                <div class="col-md-9">
                    <!-- START MENU DESIGN AREA -->
                    <div class="mainmenu">
                        <div class="navbar navbar-nobg">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                          
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <!--<li class="active"><a class="smoth-scroll" href="#home">Home <div class="ripple-wrapper"></div></a>
                                    </li>-->
                                   <!-- <li><a class="smoth-scroll" href="#About">À propos</a>
                                    </li>-->
                                    <li >
                                    </li>
                                   <!-- <li><a class="smoth-scroll" href="#service">Services</a>
                                    </li>
                                    <li><a class="smoth-scroll" href="#testimonial">Témoignages</a>
                                    </li>
                                    <li><a class="smoth-scroll" href="#team">Équipe</a>
                                    </li>
                                    <li><a class="smoth-scroll" href="#blog">Blogue</a>-->
                                    </li>
                                    <li><a class="smoth-scroll" href="#contact">Contact</a>
                                    </li>
                                    <li><a smoth-scroll href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- END MENU DESIGN AREA -->
                </div>
            </div>
        </div>
    </div>
    <div class="welcome-image-area" data-stellar-background-ratio="0.6">
        <div class="display-table">
            <div class="display-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header-text text-center">
                              
                                <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                <a class="slide-btn smoth-scroll" href="#About">Get started</a>
                                <a class="slide-btn other-btn smoth-scroll" href="#contact">contact us</a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- / END HOMEPAGE DESIGN AREA -->

 





<!-- START CONTACT DESIGN AREA -->
<section class="contact-area section-padding" data-stellar-background-ratio="0.6">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h2>Login</h2>
                </div>
            </div>
        </div>
        
    </div>
</section>
<div class="container" style="min-width:100px; max-width:400px">

<form action="login.php" method="post" style="margin-bottom:50px">
    Pseudo: <input class="form-control" type="text" name="username" value="" />
     
    Mot de passe: <input class="form-control" type="password" name="password" value="" />
     
    <input class="form-control" type="submit" name="connexion" value="Connexion" />
    <?php

    if(isset($_POST['connexion'])) { // si le bouton "Connexion" est appuyé
    // on vérifie que le champ "Pseudo" n'est pas vide
    // empty vérifie à la fois si le champ est vide et si le champ existe belle et bien (is set)
    if(empty($_POST['username'])) {
        echo "Le champ Pseudo est vide.";
        header('Refresh: 3; login.php');
               
    } else {
        // on vérifie maintenant si le champ "Mot de passe" n'est pas vide"
        if(empty($_POST['password'])) {
            echo "Le champ Mot de passe est vide.";
            header('Refresh: 3; login.php');
        
} else {
            // les champs sont bien posté et pas vide, on sécurise les données entrées par le membre:
            $username = $_POST['username']; // le htmlentities() passera les guillemets en entités HTML, ce qui empêchera les injections SQL
            $password = $_POST['password'];
            //on se connecte à la base de données:
            $mysqli = mysqli_connect("localhost", "root", "", "hackmaisonneuve");
            //on vérifie que la connexion s'effectue correctement:
            if(!$mysqli){
                echo "Erreur de connexion à la base de données.";
            } else {
                // on fait maintenant la requête dans la base de données pour rechercher si ces données existe et correspondent:
                $Requete = mysqli_query($mysqli,"SELECT * FROM users WHERE username = '".$username."' AND password = '".sha($password,512)."'");
                // si il y a un résultat, mysqli_num_rows() nous donnera alors 1
                // si mysqli_num_rows() retourne 0 c'est qu'il a trouvé aucun résultat
                if(mysqli_num_rows($Requete) == 0) {

                    echo "<br /><br /><br />Le pseudo ou le mot de passe est incorrect, le compte n'a pas été trouvé."; 
        
                 } else {
                    // on ouvre la session avec $_SESSION:
                    $_SESSION['username'] = $username; // la session peut être appelée différemment et son contenu aussi peut être autre chose que le pseudo
                    echo "Vous êtes à présent connecté !";
                echo "<script> window.location.assign('welcome.php'); </script>";
                }
            }
        }
    }
  }
?>



</form>

</div>
<!-- START FOOTER DESIGN AREA -->
<footer class="footer-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="footer-text">
                    <h6>&copy;copyright | Dolph Life <?=date('Y');?>. All right reserved <br>Développé par <a href="http://hackm9.ca">Hack@M9</a></h6>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- / END CONTACT DETAILS DESIGN AREA -->

<!-- START SCROOL UP DESIGN AREA -->
<div class="scroll-to-up">
    <div class="scrollup">
        <span class="lnr lnr-chevron-up"></span>
    </div>
</div>
<!-- / END SCROOL UP DESIGN AREA -->

<!-- LATEST JQUERY -->
<script src="assets/js/jquery.min.js"></script>
<!-- BOOTSTRP JS -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- OWL CAROUSEL JS  -->
<script src="assets/owlcarousel/js/owl.carousel.min.js"></script>
<!-- MAGNIFICANT JS -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery.mixitup.js"></script>
<!-- STEALLER JS -->
<script src="assets/js/jquery.stellar.min.js"></script>
<!-- YOUTUBE JS -->
<script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
<script type="text/javascript">
    $('.player').mb_YTPlayer();
</script>
<!-- COUNTER UP JS -->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/jquery.appear.js"></script>
<!-- WOW JS -->
<script src="assets/js/wow.min.js"></script>
<!-- GOOGLE MAP JS -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwIQh7LGryQdDDi-A603lR8NqiF3R_ycA"></script>
<script src="assets/js/gmap3.min.js"></script>
<script src="assets/js/google-map.js"></script>
<!-- CONTCAT FORM JS -->
<script src="assets/js/form-contact.js"></script>
<!-- COLOR SWITCHER -->
<script src="assets/switcher/switcher.js"></script>
<!-- scripts js -->
<script src="assets/js/scripts.js"></script>
</body>

</html>
