<?php session_start();
  
if(!$_SESSION['username']) {
  
    header("Location: login.php");
}  
 
?>
  <?php include('components/header.php'); ?>



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
                                    <li><a smoth-scroll href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
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
                            <h2>Bienvenue </h2>
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




<section id="prices" class="pricing-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h2>votre Espace</h2>
                    <h1>uploader vos fichier images</h1>
                </div>
            </div>
        </div>
        <div >
        <form method="POST" action="upload.php" enctype="multipart/form-data">

        <input type="hidden"  style="width: 500px; margin:auto; display:block;" class="form-control" name="MAX_FILE_SIZE" value="100000000"> <br/>
    
       <input style=" margin: 0 auto;" type="file" name="avatar" > <br/>
          <button type="submit" name="envoyer" onclick="verif_extension(document.forms['formsUpload'].avatar.value) " accept="image/png" class="btn btn-success">Envoyer le fichier</button>
     
   </form>
        
        </div>
    </div>
</section>

<script type="text/javascript">
 
 function recup_extension(fichier) // fonction de récupération extension fichier
    {
          if (fichier!="")// si le champ fichier n'est pas vide
          {
             nom_fichier=fichier;// on récupere le chemin complet du fichier
             nbchar = nom_fichier.length;// on compte le nombre de caractere que compose ce chemin
             extension = nom_fichier.substring(nbchar-4,nbchar); // on récupere les 4 derniers caracteres
             extension=extension.toLowerCase(); //on uniforme les caracteres en minuscules au cas ou cela aurait été écris en majuscule...
             return extension; // on renvoi l'extension vers la fonction appelante
          }
    }
 
 function verif_extension(fichier)// fonction vérification de l'extension aprés avoir choisi le fichier
    {console.log(fichier);
 
    ext = recup_extension(fichier);// on appelle la fonction de récupération de l'extension et on récupere l'extension
             if(ext==".jpg"||ext==".gif"||ext==".png" ||ext==".jpeg"){  document.formsUpload.submit();
 
             
 
              }// si extension = a une des extension suivante alors tout est ok donc ... pas d'erreur
             else // sinon on alert l'user de la mauvaise extension
             { 
                alert("Attention les images au format '"+extension+"' ne sont pas autorisées !\n");
 
                document.forms['formsUpload'].focus();
 
               return false;
             }
    }
  </script>
 
  <script src="/assets/js/jquery-3.2.1.js"></script>
 <!-- Latest compiled and minified JavaScript -->
 

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
