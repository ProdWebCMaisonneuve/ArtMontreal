<?php
/**
 * Class Vue Defaut
 *
 * @author Jonathan Martel
 * @version 1.0
 * @update 2013-12-11
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 *
 */
class VueDefaut 
{


    /**
     * Affiche l'entete
     * @access public
     *
     */
    public function afficheHeader() 

    {
        if(!isset($_SESSION['session'])) {
            $_SESSION['session'] = '';
        }
        
        if(!isset($_SESSION['admin'])) {
            $_SESSION['admin'] = '';
        }
        
        ?>
        <!DOCTYPE html>
        <html lang="fr">
            <head>
                <title>Chass'Oeuvres</title>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
                <meta name="description" content="">
                <meta name="viewport" content="width=device-width">

<!--
                <link rel="stylesheet" href="./css/normalize.css" type="text/css" media="screen">
                <link rel="stylesheet" href="./css/base_h5bp.css" type="text/css" media="screen">
                <link rel="stylesheet" href="./css/main.css" type="text/css" media="screen">
-->
                <link rel="stylesheet" href="./css/main_bootstrap.css" type="text/css" media="screen">
<!--                <link rel="stylesheet" href="./css/_grid.css" type="text/css" media="screen">-->
                <link rel="stylesheet" href="fonts/style.css" type="text/css">
                <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
                
                <link href="css/bootstrap.min.css" rel="stylesheet">
                <link href="css/heroic-features.css" rel="stylesheet">
                
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
                <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
                
                <script src="http://maps.googleapis.com/maps/api/js"></script>
                <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
                <script src="./js/plugins.js"></script>
                <script src="./js/main.js"></script>
                <script type="text/javascript" src="./js/md5.js"></script>
            </head>

            <body>
                <nav class="navbar navbar-default navbar-fixed-top" id="header_back">
                         <div class="col-lg-12" id="nav-logo"><img src="images/logo.png" class="img-responsive" alt="Logo" ></div>
                        <div class="container-fluid">

                        
                            
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                              
                            </div>
                            
                            
                            
                            

                               <div class=" collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav col-mid-offset-2">
                                        <li><a href="index.php?requete=accueil" id="accueil"><span class="glyphicon glyphicon-home"></span> ACCUEIL</a>
                                        </li>
                                        <li>
                                            <a href="index.php?requete=artistes" class="artiste" id="artiste"><span class="glyphicon glyphicon-user"></span> ARTISTE</a>
                                        </li>
                                        <li><a href="index.php?requete=arrondissements" class="arrondisement" id="arrondissement"><span class="glyphicon glyphicon-map-marker"></span> ARRONDISSEMENT</a>
                                        </li>
                                        <li><a href="index.php?requete=sousCategories" class="categorie" id="categorie"><span class="glyphicon glyphicon-list-alt"></span> CATEGORIE</a>
                                        </li>
                                    </ul>
                                   
                                                                       
                                    <form name='recherche' class="navbar-form navbar-right" role="search" action="index.php?requete=recherche"   method="POST" >
                                        <div class="form-group">
                                            <label for="focusedInput"></label>
                                          
                                            <input class="form-control" id="focusedInput" type="text"  name="mot" placeholder=' Recherche...'> 
                                        </div> 
                                            <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-search"></span>   
                                            </button>
                                    </form>
                                   
                                   <ul class="nav navbar-nav navbar-right">
                                    
                                    
                                    </li>
                                    <?php
                                        if($_SESSION["admin"]) {
                                            echo "<li><a href='index.php?requete=adminPanel'><span class='glyphicon glyphicon-user'></span> PANEL ADMIN </a></li>";
                                        }
        
                                        if($_SESSION["session"]) {
                                            echo  "<li>" . "<a href='index.php?requete=profilUtilisateurConnexion'><span class='glyphicon glyphicon-user'></span> PROFIL ".$_SESSION["session"]."</a>". "</li>";
                                                echo  "<li>" ."<a href='deconnexion.php'><span class='icon-log-out'></span> DECONNEXION</a>". "</li>";
                                        } else {
                                            echo "<li><a href='index.php?requete=inscription'><span class='glyphicon glyphicon-user'></span> S'INSCRIRE</a>";
                                            echo "<li><a href='index.php?requete=connexion'><span class='glyphicon glyphicon-log-in'></span> SE CONNECTER</a></li>";
                                        }
                                    ?>
                                    <!--<a href="#"><span class='icon-language'></span> FR/EN</a>-->   
                                </ul> 
    <!--MOTEUR DE RECHERCHE --></div>
                        
                        </div>
                    </nav>
        <?php
       
    }
    

    

    /**
     * Affiche la page d'inscription
     * @access public
     * @author Thuy Tien Vo
     * @author Jorge Blanco
     * @author German Mahecha
     */
    public function afficheInscription() 
    {
        ?>
        <div class="container">
                    <div class='row'>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            <h1>Formulaire d'inscription</h1>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"></div>
                    </div>
                
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3"></div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <form method="POST" class="formulaire" action="index.php?requete=inscription&action=ajoutUtilisateur">
        
            <fieldset>
                <div class="form-group">
                    <label for="utilisateur" class="control-label">Nom d'utilisateur:</label>  
                    <input type="text" name="utilisateur" class="form-control">
                </div>
                <div class="form-group">
                    <label for="motDePasse" class="control-label">Mot de passe:</label> 
                    <input type="password" name="motDePasse" class="form-control">
                </div>    
                <div class="form-group">    
                    <label for="motDePasse">Confirmer le mot de passe:</label>
                    <input type="password" name="motDePasse" class="form-control">
                </div>
                <div class="form-group">
                    <label for="prenom"  class="control-label">Prénom:</label>
                    <input type="text" name="prenom" id="prenom" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="nom" class="control-label">Nom:</label>
                    <input type="text" name="nom" id="nom" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="email" class="control-label">Email:</label>
                    <input type="text" name="email" id="email" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="telephone" class="control-label">Téléphone:</label>
                    <input type="text" name="telephone" id="telephone" class="form-control"/>
                </div>    
                <div class="form-group">
                    <label for="bio" class="control-label">Biographie:</label> 
                    <textarea name="bio"placeholder="Entrer un text ici..." class="form-control" rows="8" cols="60"></textarea>
                </div>

                <div class="form-group">
                    <label for="fichier" class="control-label">Photo:</label> 
                    <input type="file" name="photo" >
                    <p class="help-block">maximun 50Mb</p>
                </div>
                <input type="submit" value="Envoyer" id="button">
            </fieldset>
        </form> 
            </div>
          </div> 
        </div>
        <?php

    }

    /**
     * Affiche la page de connexion utilisateur
     * @access public
     * @author Thuy Tien Vo
     * @author Gautier Piatek
     * @author German Mahecha
     */
    public function afficheConnexion($nombreAleatoire, $erreurConnexion) 
    {
        $_SESSION["grainSel"] = $nombreAleatoire;
       
        ?>
            
        <div class="container">
            <div class='row'>
                <div class="col-lg-12 text-center">
                    <h1>Connexion Utilisateur</h1>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3"></div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <form method ="post" name="loginForm" >
                            <span><?php echo $erreurConnexion;?></span>
                            <div class="form-group">
                                <label for="utilisateur" class="control-label">Nom d'utilisateur:</label>  
                                <input type="text" name="utilisateur" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="motDePasse" class="control-label">Mot de passe:</label>  
                                <input type="password" name="motDePasse" class="form-control" class="form-control">
                            </div>
                            <input type="button" value="Connexion" id="button" onclick="encrypte();">
                        </form>
                        <form method="POST" name="formEncrypte" action="index.php?requete=connexion&action=envoyer">
                            <input type="hidden" name="utilisateur"/><br/>
                            <input type="hidden" name="motDePasse"/><br/>
                            <input type="hidden" name="grainSel" value="<?php echo $_SESSION['grainSel']; ?>">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php

    }
    
    /**
     * Affiche la page de connexion admin
     * @access public
     * @author Gautier Piatek
     */
    public function afficheConnexionAdmin($nombreAleatoire, $erreurConnexion) 
    {
        $_SESSION["grainSel"] = $nombreAleatoire;
       
        ?>
        <div>
            <h2 id="titre1">Connexion</h2>
            <form method ="post" name="loginForm" class="formulaire1">
                <span><?php echo $erreurConnexion;?></span>
                <fieldset>
                    Nom d'utilisateur:<br> 
                    <input type="text" name="utilisateur" >
                    <br>
                    Mot de passe:<br>
                    <input type="password" name="motDePasse" >
                    <br> <br>
                    <input type="button" value="Connexion" id="button" onclick="encrypte();">
                </fieldset>
            </form>

            <form method="POST" name="formEncrypte" action="index.php?requete=admin&action=envoyer">
                <input type="hidden" name="utilisateur"/><br/>
                <input type="hidden" name="motDePasse"/><br/>
                <input type="hidden" name="grainSel" value="<?php echo $_SESSION['grainSel']; ?>">
            </form>
        </div>            
        <?php

    }
    
    /**
     * Affiche le pied de page
     * @access public
     *
     */
    public function afficheFooter($slider, $admin, $charts, $table) 
    {
        ?>
                   <footer class="container-fluid">
                             <div >
                                 <div class="row">
                                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" id="color_footer">
                                         Chass'Oeuvres 2015-2016 - Codé avec &hearts; par Jorge Blanco, German Mahecha, Gautier Piatek, Thuy Vo Tien<br>
                            <span id="jonathan">Certains droits réservés @ Jonathan Martel (2013)<br>
                            Sous licence Creative Commons (BY-NC 3.0)</span> 
                                     </div>
                                 </div>
                             </div>
                        </footer>


                    <?php
                    if($slider) {
                    ?>

                    <script src='js/jquery.js'></script>
                    <script src='js/jquery.slides.js'></script>
                    <script src="js/bootstrap.min.js"></script>
                    
                    <script>
                        $(function(){
                            $('.slides').slidesjs({
                               play: {
                                      active: true, // [boolean] Generate the play and stop buttons.  // You cannot use your own buttons. Sorry.
                                      effect: "slide",   // [string] Can be either "slide" or "fade".
                                      interval: 3000,    // [number] Time spent on each slide in milliseconds.
                                      auto: true,// [boolean] Start playing the slideshow on load.
                                      swap: false,// [boolean] show/hide stop and play buttons
                                      pauseOnHover: false,// [boolean] pause a playing slideshow on hover
                                      restartDelay: 2500// [number] restart delay on inactive slideshow
                                    } 
                            });
                        });

                    </script>
                    <?php
                    }
                   
                    if($admin) {
                    ?>
                    <!-- jQuery -->
                    <script src="lib/SBAdmin2/bower_components/jquery/dist/jquery.min.js"></script>

                    <!-- Bootstrap Core JavaScript -->
                    <script src="lib/SBAdmin2/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

                    <!-- Metis Menu Plugin JavaScript -->
                    <script src="lib/SBAdmin2/bower_components/metisMenu/dist/metisMenu.min.js"></script>
                    
                    <!-- Custom Theme JavaScript -->
                    <script src="lib/SBAdmin2/dist/js/sb-admin-2.js"></script>
                    
                    <?php 
                    }
                    
                    if($charts) {
                    ?>
                    <!-- Morris Charts JavaScript -->
                    <script src="lib/SBAdmin2/bower_components/raphael/raphael-min.js"></script>
                    <script src="lib/SBAdmin2/bower_components/morrisjs/morris.min.js"></script>
                    <script src="lib/SBAdmin2/js/morris-data.js"></script>
                    <?php    
                    }
                    
                    if($table) {
                    ?>
                    <!-- DataTables JavaScript -->
                    <script src="lib/SBAdmin2/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
                    <script src="lib/SBAdmin2/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
                    
                    <!-- dataTables -->
                    <script>
                    $(document).ready(function() {
                        $('#dataTables-liste').DataTable({
                            responsive: true,
                            paging: false,
                            scrollY: "50vh",
                            scrollCollapse: true,
                            columns: [
                                null,
                                null,
                                { "orderable": false },
                                { "orderable": false }
                            ],
                            info: false,
                            language: {
                                "sProcessing":     "Traitement en cours...",
                                "sSearch":         "Rechercher&nbsp;:",
                                "sLengthMenu":     "Afficher _MENU_ &eacute;l&eacute;ments",
                                "sInfo":           "Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                                "sInfoEmpty":      "Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment",
                                "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                                "sInfoPostFix":    "",
                                "sLoadingRecords": "Chargement en cours...",
                                "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
                                "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
                                "oPaginate": {
                                    "sFirst":      "Premier",
                                    "sPrevious":   "Pr&eacute;c&eacute;dent",
                                    "sNext":       "Suivant",
                                    "sLast":       "Dernier"
                                },
                                "oAria": {
                                    "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
                                    "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
                                }
                            }
                        });
                    });
                    </script>
                    
                    <?php
                    }
                    ?>
                                       
                </body>
            </html>
        <?php
    }



    /**
     * Affiche la page d'accueil
     * @access public
     * @auteur: German Mahecha
     * @auteur: Jorge Blanco
     */
public function afficheSliderAccueil($oeuvres) 
    {
        
        ?>
        <header class="jumbotron" id="slide_">
            
                <div class='row'>
                <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                 <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="images/img1.jpg" alt="image1">
                        <div class="carousel-caption">
                            <h3>Chania</h3>
                            <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                          </div>
                    </div>

                    <div class="item">
                      <img src="images/img2.jpg" alt="image2">
                        <div class="carousel-caption">
                            <h3>Chania</h3>
                            <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                          </div>
                    </div>

                    <div class="item">
                      <img src="images/img3.jpg" alt="image3">
                        <div class="carousel-caption">
                            <h3>Chania</h3>
                            <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                          </div>
                    </div>
                  </div>

                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
            </div>
                
                </div>

            </div>
            
          
        </header>
            
                



        <?php
            

    }
    
    /**
     * Affiche la page d'accueil
     * @access public
     * @auteur: German Mahecha
     * @auteur: Jorge Blanco
     */
    public function afficheJumbotronAccueil() 
    {
         if(!($_SESSION['session'])) {
          ?>
            <!-- Jumbotron Header -->
            <header class="jumbotron" id="slide_">
                <div class='row'>
                    <div class='col-lg-12'>
                        <div class='row' id="message_bienvenue">
                            <div class='col-lg-1'></div>
                                <div class='col-lg-10'>
                                    <h1>Bienvenue à CHASS’OEUVRES Montréal</h1>
                                    <p>Aide-nous à trouver les photos de toutes les œuvres de la ville de Montréal, vous pouvez recevoir de points sur chaque photo que vous prenez et être le meilleur photographe de notre site.</p>
                                    <p><a href="index.php?requete=inscription" class="btn btn-primary btn-large">S'inscrire</a></p>

                                </div>
                        </div>
                    </div>
                </div>
            </header>  
        <?php
        }
    } 
    
    
    /**
     * Affiche la page d'accueil
     * @access public
     * @auteur: German Mahecha
     * @auteur: Jorge Blanco
     */
    public function afficheOeuvresAccueil($oeuvres) 
    {
        
        foreach($oeuvres as $oeuvre) {
               if($oeuvre->getValidationOeuvre()==1)
               {   
                    echo '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 hero-feature">';
                        echo '<div class="hovereffect">';
                            $idOeuvre= $oeuvre->getIdOeuvre();
                            $titre = $oeuvre->getTitreOeuvre();
                            echo "<img src='images/img_2.jpg' alt='' class='img-responsive' id='images_oeuvres'></a>";
                                echo '<div class="overlay">';
                                    echo '<h2>'.$titre .'</h2>';
                                    echo '<a class="info" href="index.php?requete=accueil&idOeuvre='.$idOeuvre.'">'. "plus d'info" .'</a>';
                                    echo '<p class="info"><span class="glyphicon glyphicon-thumbs-up"></span> 30 likes</p>';
                                    if ($_SESSION['session']){
                                        echo '<a class="info" href="index.php?requete=propositionPhotoUtilisateur&idOeuvre='.$idOeuvre.'">'. "Proposer Photo " .'</a>';
                                        echo '<a class="info" href="index.php?requete=propositionPhotoUtilisateur&idOeuvre='.$idOeuvre.'">'. "<span class='glyphicon glyphicon-thumbs-up'></span> J'aime" .'</a>';
                                    }
                                echo '</div>';
                            echo '</div>';
                    echo '</div>';
               }   
        } 
    } 

    /**
     * Affiche un Oeuvre
     * @access public
     * @auteur: German Mahecha
     */
    public function afficheUnOeuvre($oeuvre,$arrondissement,$categorie,$sousCategorie) 
    {
         ?>
        <div class='row'>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <h1><?php echo $oeuvre['titreOeuvre'];?></h1>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"></div>
        </div>


            
            <div class= 'row'>
                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-right">
                <img src='images/img_2.jpg' alt="">
            </div>
                
            
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <?php
                    
                   $idOeuvre= $oeuvre['idOeuvre'];
                   $titre = $oeuvre['titreOeuvre'];
                   $technique= $oeuvre['technique']; 
                   $noInternetOeuvre  = $oeuvre['noInterne'];
                   $description= $oeuvre['description'];
                   $arrond= $arrondissement['nomArrondissement'];
                   $adres = $oeuvre['adresseCivic'];
                   $batiment = $oeuvre['batiment'];
                   $parc =$oeuvre['parc'];
                   //$prenom = $oeuvre->getPrenomArtiste();
                   //$nom = $oeuvre->getNomArtiste();
                   //$collectif = $oeuvre->getCollectif();
                   $nomMateriaux=$oeuvre['nomMateriaux'];
                   $categ = $categorie['nomCategorie'];
                   $souscat = $sousCategorie['nomSousCat'];
                    $lat=$oeuvre['latitude'];
                    $lon=$oeuvre['longitude'];
 
                  /*  if($collectif =="") {
                    echo "<p>Artiste: ".$prenom." ".$nom."</p>";

                    } else {
                        echo "<p>Artiste: ".$collectif."</p>";
                    }*/
                 ?>
                
                <p>Nom de l'oeuvre: <?php echo $titre; ?></p>
                <p>Categorie: <?php echo $categ; ?></p>
                <p>Souscategorie: <?php echo $souscat; ?></p>
                <p>Technique: <?php echo $technique; ?></p>
                <p>Materiaux: <?php echo $nomMateriaux; ?></p>
                <p>Arrondissement: <?php echo $arrond; ?></p>
                <p>Parc: <?php echo $parc; ?></p>
                <p>Batiment: <?php echo $batiment; ?></p>
                <p>Adresse: <?php echo $adres; ?></p>
                <p>Description:<?php echo  $description; ?></p>
                <a href='index.php?requete=accueil'><span class='icon-reply'></span> Retourner</a>
            </div>

        </div>
           
            <script>
                var myCenter=new google.maps.LatLng(<?php echo $lat;?>,<?php echo $lon;?>);

                function initialize()
                {
                var mapProp = {
                  center:myCenter,
                  zoom:9,
                  mapTypeId:google.maps.MapTypeId.ROADMAP
                  };

                var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

                var marker=new google.maps.Marker({
                  position:myCenter,
                  });

                marker.setMap(map);

                var infowindow = new google.maps.InfoWindow({
                  content:"<?php echo $titre;?>"
                  });

                google.maps.event.addListener(marker, 'click', function() {
                  infowindow.open(map,marker);
                  });
                }

                google.maps.event.addDomListener(window, 'load', initialize);
            </script>
            
            <div id="googleMap" style="width:100%;height:400px;"></div>
        
        
    
    <?php
       
    }
   
    /**
     * Affiche les oeuvres par artistes
     * @access public
     *
     */
    public function afficheArtistes($aArtistes, $oOeuvres) 
    {
        ?>
            <h2>Découvrez nos <span class="artistes">artistes</span> et <span class="collectif">collectifs</span></h2>

        <?php
        
        $compteur = 1;
        
        echo "<section class='contenu container'>";

        foreach($aArtistes as $artiste) {

            $photo = $artiste->getPhoto();
            $prenom = $artiste->getPrenom();
            $nom = $artiste->getNom();
            $collectif = $artiste->getCollectif();
            $idArtiste = $artiste->getIdArtiste();
            
            echo "<div class=' accordion sixcol ";

            if($compteur%2 == 1){
                echo "last'>";
            } else {
                 echo "first'>";
            }

            echo "<figure class='";
                if($collectif == ""){
                    echo "artistes'>";
                } else {
                    echo "collectif'>";
                }

            if($photo == ""){
                echo "<img src='./images/artisteDefaut.jpg'>";
            } else {
                echo "<img src='./images/". $photo . "'>";
            }

            if($collectif =="") {
                echo "<input type='checkbox' checked><p>". $prenom . " " . $nom . "</p>";

            } else {
                echo "<input type='checkbox' checked><p>" . $collectif . "</p>";

            }
            echo "<i></i>"
        ?>
            <div class="accordion-contenu">
               
        <?php
            
            $aOeuvres = $oOeuvres::listeOeuvresParArtiste($idArtiste);
            //var_dump($idArtiste);
            //var_dump($aOeuvres);
            $compteurContenu = 1;
            
            echo "<div class='sixcol first'>";
            echo "<ul>";
            foreach($aOeuvres as $oeuvre){
                
                if ($compteurContenu != 11) {
                    if($compteurContenu ==6) {
                    echo "</div><div class='sixcol first'>";
                    echo "<ul>";
                    $titreOeuvre = $oeuvre->getTitreOeuvre();
                    $idOeuvre = $oeuvre->getIdOeuvre();
                   // echo "<li>" . $titreOeuvre . "</li>";
                    echo "<li><a href='index.php?requete=artistes&idOeuvre=" . $idOeuvre . "'>" . $titreOeuvre . "</a></li>";
                    $compteurContenu = $compteurContenu+1;
                }
                
                $titreOeuvre = $oeuvre->getTitreOeuvre();
                $idOeuvre = $oeuvre->getIdOeuvre();
                //echo "<li>" . $titreOeuvre . "</li>";
                echo "<li><a href='index.php?requete=artistes&idOeuvre=" . $idOeuvre . "'>" . $titreOeuvre . "</a></li>";
                }
                
                $compteurContenu = $compteurContenu+1;
            }
        ?>            
                    </ul>
                </div>
                
        <?php
            echo "</figure>";
            echo "</div>";

            $compteur = $compteur + 1;
        }
        echo "</section> ";
    }
   
/**
     * Affiche les arrondissements 
     * @access public
     * @author Jorge Blanco
     * @version 1.0
     * 
     */
    public function afficheArrondissements($aArrondissements)
    {
        ?>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <h2>Arrondissements</h2>
            </div>
        <?php
        
        
        echo "<div class='row'>";
        echo '<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">';
        echo '</div>';
        echo "<div class='col-xs-12 col-sm-12 col-md-3 col-lg-3' ";
        foreach($aArrondissements as $arrondissement)
        {
            $id_Arrondissement= $arrondissement->getidArrondissement();
            $nom = $arrondissement->getnomArrondissement();

            
            echo "<figure class='arrondisement'>";   
            echo "<a id=$nom href = 'index.php?requete=arrondissements&idArrondissement=$id_Arrondissement' class='arrondisement'> " . $nom . "</a>";
            echo "</figure>";
            
            
        }
        echo "</div>";
        

        echo '</div>';
        echo "</div>";
        

       

        
        
        
        
    } //FIN FUNCTION afficheArrondissements



    /**
     * Affiche les oeuvres par arrondissement
     * @access public
     * @author Jorge Blanco
     * @version 1.0
     * 
     */
    public function afficheOeuvre_Par_Arr($aOevuresParArr, $aArrondissements) 

    {
        ?>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <h2>Oeuvres par Arrondissements</h2>
            </div>
                
        <?php
        
            //var_Dump($aArrondissements);
            $id_Arrondissement= $aArrondissements["idArrondissement"];
            $nom = $aArrondissements["nomArrondissement"];
            echo "<div class='row'>";
                echo "<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center'>";
                    echo "<p>" . $nom . "</p>";
                echo "</div>";
            echo "</div>";
        
        ?>
                <p></p>
            
        </div>
        
        <?php
        if($aOevuresParArr == "")
        {
            echo "il n'y a pas d'oeuvres dans ce arrondisement";
        }
        else
        {
            
            
            
                foreach($aOevuresParArr as $OevuresParArr) {
  
                    echo '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 hero-feature">';
                        echo '<div class="hovereffect">';
                            $idOeuvre= $OevuresParArr->getIdOeuvre();
                            $titre = $OevuresParArr->getTitreOeuvre();
                            $lat = $OevuresParArr->getLatitude();
                            $lon = $OevuresParArr->getLongitude();
                            echo "<img src='images/img_2.jpg' alt='' class='img-responsive' id='images_oeuvres'>";
                                echo '<div class="overlay">';
                                    echo '<h2>'.$titre .'</h2>';
                                    echo '<a class="info" href="index.php?requete=accueil&idOeuvre='.$idOeuvre.'">'. "plus d'info" .'</a>';
                                    echo '<p class="info">likes</p>';
                                    
                                echo '</div>';
                            echo '</div>';
                    echo '</div>';
                    
                   
               
    
            } 
            
            
  
        }
        echo $lat;
        echo $lon;
        ?>
        
                    <script>
                var myCenter=new google.maps.LatLng(<?php echo $lat;?>,<?php echo $lon;?>);

                function initialize()
                {
                var mapProp = {
                  center:myCenter,
                  zoom:9,
                  mapTypeId:google.maps.MapTypeId.ROADMAP
                  };

                var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

                var marker=new google.maps.Marker({
                  position:myCenter,
                  });

                marker.setMap(map);

                var infowindow = new google.maps.InfoWindow({
                  content:"<?php echo $titre;?>"
                  });

                google.maps.event.addListener(marker, 'click', function() {
                  infowindow.open(map,marker);
                  });
                }

                google.maps.event.addDomListener(window, 'load', initialize);
            </script>
            <div id="googleMap" style="width:100%;height:400px;"></div>
<?php

    }    //FIN FUNCTION afficheOeuvre_Par_Arr
    

    /**
     * Affiche catégories
     * @access public
     * @author Thuy Tien VO
     * @version 1.0
     */
    public function afficheSousCategories($aSousCategories) 

    {
        ?>

        <h2>Catégories</h2>
        <?php
        $compteur = 1;
        
        echo "<section class='contenu container'>";

        foreach($aSousCategories as $sousCategorie)
        {
            $id_SousCategorie= $sousCategorie->getIdSousCategorie();
            //$categorie->afficher();
            $nom = $sousCategorie->getNomSousCategorie();

            echo "<div class=' accordion sixcol ";

            if($compteur%2 == 1)
                {
                    echo "last'>";
                } 
            else 
                {
                     echo "first'>";
                }
        
            echo "<figure class='sousCategorie'>";  

            echo'<div class="container">';
            echo"<ul class='list-group-item'>"; 
                 echo "<a href = 'index.php?requete=sousCategories&idSousCategorie=$id_SousCategorie' class='sousCategorie'> " . $nom. "</a>";
            echo"</ul>";
            echo'</div>';

            echo "</figure>";
            echo "</div>";
            $compteur = $compteur + 1;
        }
        echo "</section>";
        
    } //FIN FUNCTION afficheCategorie


/**
     * Affiche les oeuvres par catégorie
     * @access public
     * @author THuy Tien VO
     * @version 1.0
     * 
     */
        public function afficheOeuvre_Par_Cat($aOeuvreParCat) 

        {
            ?>
            <h2>Oeuvre Par Catégorie</h2>
            <?php
             if($aOeuvreParCat == "")
            {
                echo "Il n'y a pas d'oeuvres dans ce catégorie";
            }
            else
            {
            
                foreach($aOeuvreParCat as $oeuvre)
                {    
                    $idOeuvre= $oeuvre->getIdOeuvre();
                    $titre = $oeuvre->getTitreOeuvre();

                    echo'<div class="container">';

                        echo"<ul class='list-group-item'>";

                            echo "<a href = 'index.php?requete=unOeuvre&idOeuvre=$idOeuvre' class='categorie'>" .  $titre. "</a>" . '</br>'; 

                        echo"</ul>";

                    echo'</div>';
                }
            }
        }    //FIN FUNCTION afficheOeuvreParCat
    
    /**
     * Affiche le header de la connexion Admin
     * @access public
     * @author Gautier Piatek
     * @version 1.0
     * 
     */
    public function afficheHeaderCnxAdmin() 

    {
        ?>
         <!DOCTYPE html>
        <html lang="fr">
            <head>
                <title>Chass'Oeuvres - Administration</title>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
                <meta name="description" content="">
                <meta name="viewport" content="width=device-width">

                <link rel="stylesheet" href="./css/normalize.css" type="text/css" media="screen">
                <link rel="stylesheet" href="./css/base_h5bp.css" type="text/css" media="screen">
                <link rel="stylesheet" href="./css/main.css" type="text/css" media="screen">
                <link rel="stylesheet" href="./css/_grid.css" type="text/css" media="screen">
                <link rel="stylesheet" href="fonts/style.css" type="text/css">

                <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
                <script src="./js/plugins.js"></script>
                <script src="./js/main.js"></script>
                <script type="text/javascript" src="./js/md5.js"></script>
            </head>

            <body>
                <div id="wrapper">
                <header>
                    <div class="conteneurNav">

                        <img src="images/logo.png" alt="logo">

                        <div class="conteneurMenu">

                            <div class="session">

                                <!--<a href="index.php?requete=connexion" class="connexion">SE CONNECTER</a>-->
                               <!-- <a href="#">FR/EN</a>-->
                                <a href="index.php?requete=accueil" class="accueil"><span class="icon-home"></span> ACCUEIL</a>
         
                            </div>

                        </div>
    <?php
    }

    /**
     * Affiche le header de la partie Admin
     * @access public
     * @author Gautier Piatek
     * @version 1.0
     * 
     */
    public function afficheHeaderAdmin() 

    {
        if (!$_SESSION['admin']) {
            header('Location: index.php');
            exit;
        }
        
        ?>
         <!DOCTYPE html>
        <html lang="fr">
            <head>
                <title>Chass'Oeuvres - Administration</title>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
                <meta name="description" content="">
                <meta name="viewport" content="width=device-width">

                <link rel="stylesheet" href="./css/normalize.css" type="text/css" media="screen">
                <link rel="stylesheet" href="./css/base_h5bp.css" type="text/css" media="screen">
                <link rel="stylesheet" href="./css/main.css" type="text/css" media="screen">
                <link rel="stylesheet" href="./css/_grid.css" type="text/css" media="screen">
                <link rel="stylesheet" href="fonts/style.css" type="text/css">

                <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
                <script src="./js/plugins.js"></script>
                <script src="./js/main.js"></script>
                <script type="text/javascript" src="./js/md5.js"></script>
            </head>

            <body>    
                <div id="wrapper">
                <header>
                    <div class="conteneurNav">

                        <a href="index.php"><img src="images/logo.png" alt="logo"></a>

                        <div class="conteneurMenu">

                            <div class="session">

                                <!--<a href="index.php?requete=connexion" class="connexion">SE CONNECTER</a>-->
                               <!-- <a href="#">FR/EN</a>-->
                                <a href="index.php?requete=accueil" class="accueil"><span class="icon-home"></span> ACCUEIL</a>
                                <?php
                                        if($_SESSION["session"]) {
                                            echo "<a href='deconnexion.php'><span class='icon-user' class='connexion'></span> " . $_SESSION["session"] . " <span class='icon-log-out'></span> DECONNEXION </a>";
                                        } else {
                                            echo "<a href='index.php?requete=connexion' class='connexion'><span class='icon-login'></span> SE CONNECTER</a>";
                                        }
                                    ?>
                            </div>

                        </div>

                               <div class="admin2">
           <div class="menuAdmin2">
                <nav>
                    <ul>
                         
                        <li>
                            <a href="index.php?requete=adminPanel">GESTION</a>
                            <ul>
                                <li>
                                    <a href="#">OEUVRES</a>
                                       <ul>
                                            <li><a href="index.php?requete=ajoutOeuvre">Ajouter</a></li>
                                            <li><a href="index.php?requete=listeModifierOeuvres">Modifier</a></li>
                                            <li><a href="index.php?requete=listeSupprimerOeuvres">Supprimer</a></li>
                                        </ul>
                                </li>

                                <li>
                                    <a href="#">ARTISTES</a>
                                        <ul>
                                            <li><a href="index.php?requete=ajouterUnArtiste">Ajouter</a></li>
                                            <li><a href="index.php?requete=listeModifierArtistes">Modifier</a></li>
                                            <li><a href="index.php?requete=listeSupprimerArtistes">Supprimer</a></li>
                                        </ul>
                                </li>

                                <li>
                                    <a href="#">CATEGORIES</a>
                                        <ul>
                                            <li><a href="index.php?requete=ajouterUnCategorie">Ajouter</a></li>
                                            <li><a href="index.php?requete=listeModifierCategories">Modifier</a></li>
                                            <li><a href="index.php?requete=listeSupprimerCategories">Supprimer</a></li>
                                        </ul>
                                </li>

                                <li>
                                    <a href="index.php?requete=listerUtilisateurs">UTILISATEURS</a>
                                        <ul>
                                            <li><a href="index.php?requete=afficheInscriptionAdmin">Ajouter</a></li>
                                            <li><a href="index.php?requete=listeModifierUtilisateurs">Modifier</a></li>
                                            <li><a href="index.php?requete=listeSupprimerUtilisateurs">Supprimer</a></li>
                                        </ul>
                                </li>
                                
                                                                <li>
                                    <a href="index.php?requete=listerUtilisateurs">ADMIN/MODERATEUR</a>
                                        <ul>
                                            <li><a href="index.php?requete=ajouterAdmin_moderateur">Ajouter</a></li>
                                            <li><a href="index.php?requete=listeModifierAdmin_moderateur">Modifier</a></li>
                                            <li><a href="index.php?requete=listeSupprimerAdmin_moderateur">Supprimer</a></li>
                                        </ul>
                                </li>
                            </ul>
                        </li>
                       <!-- <li>
                            MODERATION
                            <ul>
                                <li><a href="#">Photos</a></li>
                                <li><a href="#">Commentaires</a></li>
                            </ul>
                        </li>
                        <br>
                        <li>
                            <a href="#">MISE A JOUR BDD</a>-->
                         <!--   http://donnees.ville.montreal.qc.ca/dataset/2980db3a-9eb4-4c0e-b7c6-a6584cb769c9/resource/18705524-c8a6-49a0-bca7-92f493e6d329/download/oeuvresdonneesouvertes.json  -->
                        <!--</li> -->

                    </ul>

                </nav>
            </div>
            
            <section class="contenu container">
        
                <!-- <h2>Gestion</h2> -->

                <div class="administration">
                   <div class="twelvecol">
                       
                    
                     
                   </div>

                </div>
            </section>
        </div>
                    </div>


                </header>
        <?php
        
        
    }
    
    /**
     * Affiche l'ajout d'oeuvre
     * @access public
     * @author Gautier Piatek
     * @version 1.0
     * 
     */
    public function afficheAjoutOeuvre($aArtistes, $aCategories, $aArrondissements, $aSousCategories, $erreurTitre, $message) 

    {   
        
        ?>            
            <section class="contenu container">
        
                <h2 id='titreAdm'>Ajouter une oeuvre</h2>
                <div class="formulaireAd1">
                
                       <form method="POST" action="index.php?requete=ajoutOeuvre&action=ajoutOeuvre">
                           
                            <label>Titre : <br></label> <input type="text" name="titre"><span><?php echo $erreurTitre;?><br><br>
                            <label>Titre (Variante) : <br></label> <input type="text" name="titreVariante"><br><br>
                            <label>Technique : <br></label> <input type="text" name="technique"><br><br>
                            <label>Technique (anglais) :<br> </label> <input type="text" name="techniqueAng"><br><br>
                            <label>Description : <br></label> <input type="text" name="description"><br><br>
                            <label>Validation :<br> </label> <input type="radio" checked name="validation" value="1"> Oui <input type="radio" name="validation" value="0"> Non<br><br>
                            
                            <label>Adresse Civique : <br></label> <input type="text" name="adresse"><br><br>
                            <label>Batiment : <br></label> <input type="text" name="batiment"><br><br>
                            <label>Parc :<br> </label> <input type="text" name="parc"><br><br>
                            <label>Latitude :<br> </label> <input type="text" name="latitude"><br><br>
                            <label>Longitude :<br> </label> <input type="text" name="longitude"><br><br>
                            <label>Arrondissement :<br> </label> <select name="arrondissement"><br>
                                <option value="nonChoisi">Choisir un Arrondissement</option><br>
                            <?php
                                foreach ($aArrondissements as $arrondissement) {
                                    echo "<option value='".$arrondissement->getidArrondissement()."'>".$arrondissement->getnomArrondissement()."</option>"; 
                                }
                            ?>
                           </select><br><br>
                               <label>Artiste/Collectif : </label> <br><select name="artiste">
                                <option value="nonChoisi">Choisir un Artiste/Collectif</option>
                            <?php
                                foreach ($aArtistes as $artiste) {
                                    
                                    if($artiste->getNom() == "") {
                                        
                                         echo "<option value='".$artiste->getIdArtiste()."'>".$artiste->getCollectif()."</option>"; 
                                    } else {                                    
                                       
                                        echo "<option value='".$artiste->getIdArtiste()."'>". $artiste->getPrenom() . " " . $artiste->getNom()."</option>";
                                    }
                                }
                            ?>
                           </select><br><br>
                               <label>Catégorie : </label><br> <select name="categorie"><br><br>
                                <option value="nonChoisi">Choisir une Catégorie</option>
                            <?php 
                                foreach ($aCategories as $categorie) {
                                    echo "<option value='".$categorie->getidCategorie()."'>".$categorie->getnomCategorie()."</option>"; 
                                }
                            ?>
                           </select><br><br>
                               <label>Sous-Catégorie : </label><br> <select name="sousCategorie"><br><br>
                                <option value="nonChoisi">Choisir une Sous-Catégorie</option>
                            <?php
                                foreach ($aSousCategories as $sousCategorie) {
                                    echo "<option value='".$sousCategorie->getIdSousCategorie()."'>".$sousCategorie->getnomSousCategorie()."</option>"; 
                                }
                            ?>    
                           </select><br><br>
                               <label>Matériaux : </label><br> <input type="text" name="materiaux"><br><br>
                               <label>Matériaux (anglais) : </label> <br><input type="text" name="materiauxAng"><br><br>
                            
                            <input type="submit" name="sauvegarder" id="button" value="Valider"> <span><?php echo $message; ?></span>
                       </form>

                   </div>

                </div>
            </section>
        </div>
        
        
        <?php
        
    }
    
    /**
     * Fonction qui modifie une Oeuvre
     * @access public
     * @author Gautier Piatek
     * @version 1.0
     */
    
    public function modifierOeuvre($aOeuvre, $aAdresse, $aArrondissements, $aArtistes, $aCategories, $aSousCategories, $erreurTitre, $message) {
        
        $idOeuvre = $aOeuvre['idOeuvre'];
        $titre = $aOeuvre['titreOeuvre'];
        $titreVariante = $aOeuvre['titreVariante'];
        $technique = $aOeuvre['technique'];
        $techniqueAng = $aOeuvre['techniqueAng'];
        $description = $aOeuvre['description'];
        $validation = $aOeuvre['validationOeuvre'];
        $adresseCiv = $aAdresse['adresseCiv'];
        $batiment = $aAdresse['batiment'];
        $parc = $aAdresse['parc'];
        $latitude = $aAdresse['latitude'];
        $longitude = $aAdresse['longitude'];
        $idArrondissement = $aOeuvre['idArrondissement'];
        $idCategorie = $aOeuvre['idCategorie'];
        $idSousCategorie = $aOeuvre['idSousCategorie'];
        $nomMateriaux = $aOeuvre['nomMateriaux'];
        $nomMateriauxAng = $aOeuvre['nomMateriauxAng'];
        $idArtiste = $aOeuvre['idArtiste'];
        ?>
        <!--<div class="administration">
                   <div class="twelvecol">-->
                       <h3>Modifier une oeuvre</h3>

                       <form method="POST" class='formulaire' action="index.php?requete=modifierOeuvre&idOeuvre=<?php echo $idOeuvre; ?>&action=valider">
                            <fieldset>
                            <label>Titre : </label> <input type="text" name="titre" value="<?php echo $titre; ?>"><span><?php echo $erreurTitre;?><br>
                            <label>Titre (Variante) : </label> <input type="text" name="titreVariante" value="<?php echo $titreVariante; ?>"><br>
                            <label>Technique : </label> <input type="text" name="technique" value="<?php echo $technique; ?>"><br>
                            <label>Technique (anglais) : </label> <input type="text" name="techniqueAng" value="<?php echo $techniqueAng; ?>"><br>
                            <label>Description : </label> <input type="text" name="description" value="<?php echo $description; ?>"><br>
                            <label>Validation : </label> <input type="radio" checked name="validation" value="1"> Oui <input type="radio" name="validation" value="0"> Non<br>
                            
                            <label>Adresse Civique : </label> <input type="text" name="adresse" value="<?php echo $adresseCiv; ?>"><br>
                            <label>Batiment : </label> <input type="text" name="batiment" value="<?php echo $batiment; ?>"><br>
                            <label>Parc : </label> <input type="text" name="parc" value="<?php echo $parc; ?>"><br>
                            <label>Latitude : </label> <input type="text" name="latitude" value="<?php echo $latitude; ?>"><br>
                            <label>Longitude : </label> <input type="text" name="longitude" value="<?php echo $longitude; ?>"><br>
                            <label>Arrondissement : </label> <select name="arrondissement" >
                                <option value="nonChoisi">Choisir un Arrondissement</option>
                            <?php
                                foreach ($aArrondissements as $arrondissement) {
                                    echo "<option value='". $arrondissement->getidArrondissement() . "'";
                                    if($arrondissement->getidArrondissement() == $idArrondissement){
                                        echo " selected";
                                    }  
                                    echo ">".$arrondissement->getnomArrondissement()."</option>"; 
                                }
                            ?>
                           </select><br>
                               <label>Artiste/Collectif : </label> <select name="artiste">
                                <option value="nonChoisi">Choisir un Artiste/Collectif</option>
                            <?php
                                foreach ($aArtistes as $artiste) {
                                    
                                    if($artiste->getNom() == "") {
                                        
                                        echo "<option value='".$artiste->getIdArtiste()."'";
                                        if($artiste->getIdArtiste() == $idArtiste){
                                            echo " selected";
                                        } 
                                        echo ">".$artiste->getCollectif()."</option>"; 
                                    } else {                                    
                                       
                                        echo "<option value='".$artiste->getIdArtiste()."'";
                                        if($artiste->getIdArtiste() == $idArtiste){
                                            echo " selected";
                                        }
                                        echo ">". $artiste->getPrenom() . " " . $artiste->getNom()."</option>";
                                    }
                                }
                            ?>
                           </select><br>
                               <label>Catégorie : </label> <select name="categorie">
                                <option value="nonChoisi">Choisir une Catégorie</option>
                            <?php 
                                foreach ($aCategories as $categorie) {
                                    echo "<option value='".$categorie->getidCategorie()."'";
                                    if($categorie->getidCategorie() == $idCategorie){
                                        echo " selected";
                                    }
                                    echo">".$categorie->getnomCategorie()."</option>"; 
                                }
                            ?>
                           </select><br>
                               <label>Sous-Catégorie : </label> <select name="sousCategorie">
                                <option value="nonChoisi">Choisir une Sous-Catégorie</option>
                            <?php
                                foreach ($aSousCategories as $sousCategorie) {
                                    echo "<option value='".$sousCategorie->getidSousCategorie()."'";
                                    if($sousCategorie->getidSousCategorie() == $idSousCategorie){
                                        echo " selected";
                                    }
                                    echo ">".$sousCategorie->getnomSousCategorie()."</option>"; 
                                }
                            ?>    
                           </select><br>
                               <label>Matériaux : </label> <input type="text" name="materiaux" value="<?php echo $nomMateriaux; ?>"><br>
                               <label>Matériaux (anglais) : </label> <input type="text" name="materiauxAng" value="<?php echo $nomMateriauxAng; ?>"><br><br>
                            
                            <input type="submit" name="sauvegarder" value="Valider" id='button'> <span><?php echo $message; ?></span>
                            </fieldset>
                       </form>

                </div>
                <?php
    }
 
    /**
     * Affiche Liste Artistes
     * @access public
     * @author German Mahecha
     * @version 1.0
     */
    
    public function afficheListeSupprimerArtistes($aArtistes){
            ?>
            <h2 id='titreA'>Supprimer un <span class="artistes">artiste</span> ou <span class="collectif">collectif</span></h2>
            <section class='contenu container'>
                <div class='tableArtistes'>
    <?php
                echo "<section class='formulaire2'>";
                echo "<table>";
                echo "<tr>";
                echo "<th></th>";
                echo "<th>Artiste</th>";
                echo "<th>Supprimer</th>";
                echo "</tr>";
                    foreach($aArtistes as $artiste) {
                        echo "<tr>";
                        $idArtiste = $artiste->getIdArtiste();
                        if($artiste->getNom()==NULL) {
                            echo "<td><span class='icon-users'></span>";
                            echo "<td>" .$artiste->getCollectif()."</td>" ;

                        }else{
                            echo "<td><span class='icon-user'></span>";
                            echo "<td>".$artiste->getPrenom()." ". $artiste->getNom()."</td>" ;
                        }
                        echo "<td><a href='index.php?requete=supprimerArtistes&idArtiste=$idArtiste'><span class='icon-remove-user'></span></a></td>";
                       
                         echo "</tr>";
                    }
                echo "</table>";
                echo "</div>";
            echo "</section> ";
            echo "</div>"; 
    } 
    
     /**
     * Affiche Liste Artistes
     * @access public
     * @author German Mahecha
     * @version 1.0
     */
    public function afficheListeModifierArtistes($aArtistes){
        ?>
            <h2 id='titreA'>Modifier nos <span class="artistes">artistes</span> et <span class="collectif">collectifs</span></h2>
            <section class='contenu container'>
                <div class='tableArtistes'>
        <?php
                echo "<section class='formulaire2'>";
                echo "<table>";
                echo "<tr>";
                echo "<th></th>";
                echo "<th>Artiste</th>";
                echo "<th>Modifier</th>	";
                echo "</tr>";
                    foreach($aArtistes as $artiste) {
                        echo "<tr>";
                        $idArtiste = $artiste->getIdArtiste();
                        if($artiste->getNom()==NULL) {
                            echo "<td><span class='icon-users'></span>";
                            echo "<td>" .$artiste->getCollectif()."</td>" ;

                        }else{
                            echo "<td><span class='icon-user'></span>";
                            echo "<td>".$artiste->getPrenom()." ". $artiste->getNom()."</td>" ;
                        }
                        echo "<td><a href='index.php?requete=modifierArtiste&idArtiste=$idArtiste'><span class='icon-edit'></span></a></td>";
                        
                        //$idArtiste = $artiste->getIdArtiste();
                         echo "</tr>";
                    }
                echo "</table>";
                echo "</div>";
            echo "</section> ";
       echo "</div>";
    
    }
    
     /**
     * Affiche Liste des utilisateurs
     * @access public
     * @author German Mahecha
     * @version 1.0
     */
    
    public function afficheListeModifierUtilisateurs($aUtilisateurs, $message){
        ?>
            <h2 id='titreA'>Modifier nos utilisateurs</h2>
            <section class='contenu container'>
                <div class='tableArtistes'>
        <?php
                echo "<section class='formulaire2'>"; 
                echo "<table>";
                echo "<tr>";
                echo "<th></th>";
                echo "<th>Utilisateur</th>";
                echo "<th>Modifier</th>	";
                echo "</tr>";
                foreach($aUtilisateurs as $utilisateur) {
                        echo "<tr>";
                        $idUtilisateur = $utilisateur->getIdUtilisateur();
                        echo "<td><span class='icon-user'></span>";
                        echo "<td>" .$utilisateur->getLoginUtilisateur()."</td>" ;
                        echo "<td><a href='index.php?requete=modifierUtilisateur&idUtilisateur=$idUtilisateur'><span class='icon-edit'></span></a></td>";
                        echo "</tr>";
                }
       
                echo "</table>";
                echo '<span>'.$message.'</span>';
                echo "</div>";
            echo "</section> ";
       echo "</div>";
    }
    
    
        /**
     * Afficher un liste d'admin/moderateur
     * @access public
     * @auteure: Jorge Blanco
     */
    
    public function afficheListeModifierAdmin_moderater($aAdmin_moderateur)
    {
        ?>
             <h2 id='titreA'>Modifier nos admins/moderateurs</h2>
            <section class='contenu container'>
                <div class='tableArtistes'>
                    
        <?php
                echo "<section class='formulaire2'>";
                echo "<table>";
                echo "<tr>";
                echo "<th></th>";
                echo "<th>Admin</th>";
                echo "<th>Modifier</th>	";
                echo "</tr>";
                foreach($aAdmin_moderateur as $admin_moderater){
                    echo "<tr>";
                    $idAdMod = $admin_moderater->getIdAdMod();
                    echo "<td><span class='icon-user'></span>";
                    echo "<td>" .$admin_moderater->getLogin()."</td>" ;
                    echo "<td><a href='index.php?requete=modifierAdmin_moderateur&idAdMod=$idAdMod'><span class='icon-edit'></span></a></td>";
                        echo "</tr>";
                }
                echo "</table>";
                echo "</div>";
            echo "</section> ";
       echo "</div>";
    }
    
    /**
     * Afficher un liste d'admin/moderateur
     * @access public
     * @auteure: Jorge Blanco
     */
    public function afficheListeSupprimerAdmin_moderateur($aAdmin_moderateur)
    {
        ?>
            
            <h2 id='titreA'>Supprimer nos admins/moderateurs</h2>
            <section class='contenu container'>
            <div class='tableArtistes'>                                      
        <?php
                echo "<section class='formulaire2'>";
                echo "<table>";
                echo "<tr>";
                echo "<th></th>";
                echo "<th>Admin</th>";
                echo "<th>Supprimer</th>	";
                echo "</tr>";
                foreach($aAdmin_moderateur as $admin_moderater){
                    echo "<tr>";
                    $idAdMod = $admin_moderater->getIdAdMod();
                    echo "<td><span class='icon-user'></span>";
                    echo "<td>" .$admin_moderater->getLogin()."</td>" ;
                    echo "<td><a href='index.php?requete=supprimerAdmin_moderateur&idAdMod=$idAdMod'><span class='icon-edit'></span></a></td>";
                        echo "</tr>";
                }
                echo "</table>";
                echo "</div>";
            echo "</section> ";
       echo "</div>";
    }
        
    
    
    
    
    /**
     * Affiche Liste des utilisateurs
     * @access public
     * @author German Mahecha
     * @version 1.0
     */
    
    public function afficheListeSupprimerUtilisateurs($aUtilisateurs){
        ?>
            <h2 id='titreA'>Supprimer nos utilisateurs</h2>
            <section class='contenu container'>
                <div class='tableArtistes'>
        <?php
                echo "<section class='formulaire2'>";
                echo "<table>";
                echo "<tr>";
                echo "<th></th>";
                echo "<th>Utilisateur</th>";
                echo "<th>Supprimer</th>	";
                echo "</tr>";
                
                foreach($aUtilisateurs as $utilisateur) {
                        echo "<tr>";
                        $idUtilisateur = $utilisateur->getIdUtilisateur();
                        echo "<td><span class='icon-user'></span>";
                        echo "<td>" .$utilisateur->getLoginUtilisateur()."</td>" ;
                        echo "<td><a href='index.php?requete=supprimerUtilisateurs&idUtilisateur=$idUtilisateur'><span class='icon-remove-user'></span></a></td>";
                        echo "</tr>";
                }
                echo "</table>";
                echo "</div>";
            echo "</section> ";
       echo "</div>";
    }
    

    
    /**
     * Affiche Liste des categories
     * @access public
     * @author German Mahecha
     * @version 1.0
     */
    
    
    public function afficheListeModifierCategories($aCategories){
        ?>
            <h2 id='titreA'>Modifier nos categories</h2>
            <section class='contenu container'>
                <div class='tableArtistes'>
        <?php
                echo "<section class='formulaire2'>";
                echo "<table>";
                echo "<tr>";
                echo "<th></th>";
                echo "<th>Categorie</th>";
                echo "<th>Modifier</th>	";
                echo "</tr>";
                    foreach($aCategories as $categorie) {
                        echo "<tr>";
                        $idCategorie = $categorie->getIdCategorie();
                        echo "<td><span class='icon-list'></span>";
                        echo "<td>".$categorie->getNomCategorie()."</td>" ;
                        echo "<td><a href='index.php?requete=modifierCategories&idCategorie=$idCategorie'><span class='icon-edit'></span></a></td>";
                        echo "</tr>";
                    }
                echo "</table>";
                echo "</div>";
            echo "</section> ";
       echo "</div>";
    }
    
    /**
     * Affiche Liste des categories
     * @access public
     * @author German Mahecha
     * @version 1.0
     */
    
     public function afficheListeSupprimerCategories($aCategories){
        ?>
            <h2 id='titreA'>Supprimer nos categories</h2>
            <section class='contenu container'>
                <div class='tableArtistes'>
        <?php
                echo "<section class='formulaire2'>";
                echo "<table>";
                echo "<tr>";
                echo "<th></th>";
                echo "<th>Categorie</th>";
                echo "<th>Supprimer</th>	";
                echo "</tr>";
                    foreach($aCategories as $categorie) {
                        echo "<tr>";
                        $idCategorie = $categorie->getIdCategorie();
                        echo "<td><span class='icon-list'></span>";
                        echo "<td>".$categorie->getNomCategorie()."</td>" ;
                        echo "<td><a href='index.php?requete=supprimerCategories&idCategorie=$idCategorie'><span class='icon-erase'></span></a></td>";
                        echo "</tr>";
                    }
                echo "</table>";
                echo "</div>";
            echo "</section> ";
       echo "</div>";
    }
    
    
    
    public function afficheListeModifierOeuvres($aOeuvres){
        ?>
            <h2 id='titreA'>Modifier nos Oeuvres</h2>
            <section class='contenu container'>
                <div class='tableArtistes'>
        <?php
                
    }
    
    /**
     * Affiche Liste des categories
     * @access public
     * @author German Mahecha
     * @version 1.0
     */
    
     public function afficheListeSupprimerOeuvres($aOeuvres){
        ?>
            <h2 id='titreA'>Supprimer une oeuvre</h2>
            <section class='contenu container'>
                <div class='tableArtistes'>
        <?php
                echo "<section class='formulaire2'>";
                echo "<table>";
                echo "<tr>";
                echo "<th></th>";
                echo "<th>Titre</th>";
                echo "<th>Artiste</th>";
                echo "<th>Arrondissement</th>";
                echo "<th>Supprimer</th>	";
                echo "</tr>";
                    foreach($aOeuvres as $oeuvre) {
                        echo "<tr>";
                        $idOeuvre = $oeuvre->getIdOeuvre();
                        echo "<td><span class='icon-blackboard'></span>";
                        echo "<td>".$oeuvre->getTitreOeuvre()."</td>" ;
                                               
                       if($oeuvre->getCollectif() == "") {
                          echo "<td>".$oeuvre->getNomArtiste()." ".$oeuvre->getPrenomArtiste()."</td>" ;
                       } else {
                           echo "<td>".$oeuvre->getCollectif()."</td>" ;
                       }
                       echo "<td>".$oeuvre->getNomArrondissement()."</td>" ;
                       echo "<td><a href='index.php?requete=supprimerOeuvres&idOeuvre=$idOeuvre'><span class='icon-erase'></span></a></td>";
                       echo "</tr>";
                    }
                echo "</table>";
                echo "</div>";
            echo "</section> ";
       echo "</div>";
    }


    /**
     * Affiche la page pour ajouter un artiste
     * @access public
     * @auteure: Jorge Blanco
     */
    public function formulaireAjouterArtiste() 
    {
        ?>
        <div>
        <h2 id="titreAdm">Ajouter un artiste</h2>
        <div class="formulaireAd1">
        <form method="POST"action="index.php?requete=ajouterUnArtiste&action=ajoutArtiste">
            <fieldset>
            Prénom:<br>
            <input type="text" name="prenom" >
            <br> <br>
            Nom:<br>
            <input type="text" name="nom" >
            <br> <br>
            Collectif:<br>
            <input  type="text" name="collectif" >
             <br> <br>
            Prendre une photo:<br><br>
            <input type="button" name="photoArtiste" value = "prendre une photo" >
            <br> <br>
            
            <input type="submit" value="Envoyer" id="button">
            <fieldset>
        </form>  
        </fieldset>
        </fieldset>
        </div>          
        <?php

    }

    /**
     * Affiche la page pour modifier un artiste
     * @access public
     * @author: Gautier Piatek
     */
    public function modifierUnArtiste($aArtiste) 
    {   
        $idArtiste = $aArtiste['idArtiste'];
        $prenom = $aArtiste['prenom'];
        $nom = $aArtiste['nom'];
        $collectif = $aArtiste['collectif'];
        $photoArtiste = $aArtiste['photoArtiste'];
        ?>
        <div>
        <h2 id="titre">Modifier un artiste</h2>
        <form class="formulaire" action="index.php?requete=modifierArtiste&idArtiste=<?php echo $idArtiste; ?>&action=valider" method='POST'>
            <fieldset>
            Prénom:<br>
            <input type="text" name="prenom" value="<?php echo $prenom; ?>">
            <br> <br>
            Nom:<br>
            <input type="text" name="nom" value="<?php echo $nom; ?>">
            <br> <br>
            Collectif:<br>
            <input  type="text" name="collectif" value="<?php echo $collectif; ?>">
             <br> <br>
            Photo:<br><br>
            <input type="text" name="photoArtiste" value="<?php echo $photoArtiste; ?>">
            <br> <br>
            
            <input type="submit" value="Envoyer" id="button">
            <fieldset>
        </form>  
        </fieldset>
        </fieldset>
        </div>          
        <?php

    }
    
    /**
     * Affiche la page pour modifier une catégorie
     * @access public
     * @author: Gautier Piatek
     */
    public function modifierUneCategorie($aCategories) 
    {   
        $idCategorie = $aCategories["idCategorie"];
        $nomCategorie = $aCategories["nomCategorie"];
        $nomCatAng = $aCategories["nomCatAng"];
        ?>
        <div>
        <h2 id="titre">Modifier une catégorie</h2>
        <form class="formulaire" action="index.php?requete=modifierCategories&idCategorie=<?php echo $idCategorie; ?>&action=valider" method='POST'>
            <fieldset>
            Nom catégorie:<br>
        <input type="text" name="nomCategorie" value="<?php echo $nomCategorie; ?>">
            <br> <br>
            Nom catégorie en anglais:<br>
            <input type="text" name="nomCatAng" value="<?php echo $nomCatAng; ?>">
            <br> <br>
            
            <input type="submit" value="Envoyer" id="button">
            <fieldset>
        </form>  
        </fieldset>
        </div>          
        <?php

    }
    
    /**
     * Affiche la page d'inscription - admin
     * @access public
     * @auteure: Thuy Tien Vo
     * @modifie: Jorge Blanco
     */
    public function afficheInscriptionAdmin() 
    {
        ?>
        <div>
        <h2 id="titreAdm">Ajouter un utilisateur</h2>
        <div class="formulaireAd1">
            <form method="POST"  action="index.php?requete=afficheInscriptionAdmin&action=ajoutUtilisateur">

                <fieldset>
                    <!-- MODIFICATION TEMPORAIRE DU FORMULAIRE Jorge -->
                <!-- Prénom:<br>
                <input type="text" name="prenom" >
                <br> <br>
                Nom:<br>
                <input type="text" name="nom" >
                <br> <br>
                Date de naissance:<br>
                <input  type="date" name="dateDeNaissance" placeholder="jj/mm/aaaa">
                 <br> <br>
                Sexe:<br><br>
                <input type="radio" name="sex" value="male" checked> Male
                <input type="radio" name="sex" value="female"> Female<br><br>
                Courriel:<br>
                <input type="text" name="courriel" placeholder="exemple@domaine.com" >
                <br> <br> -->
                Biographie:<br>
                <textarea rows="8" cols="60" name="bio"placeholder="Entrer un text ici..."></textarea>
                <br><br>
                 Nom d'utilisateur:<br> 
                <input type="text" name="utilisateur" >
                <br><br>
                Mot de passe:<br>
                <input type="password" name="motDePasse" >
                <br><br>
                Confirmer le mot de passe:<br>
                <input type="password" name="motDePasse" value="">
                <br><br>
                score:<br>
                <input type="text" name="score" value="">
                <br><br>
                photo:<br>
                <input type="text" name="photoUtilisateur" value="">
                <br><br>
                <input type="submit" value="Envoyer" id="button">
                </fieldset>
                </form>  
        </div>           
        <?php

    }


    /**
     * Afficher un liste d'utilisateurs 
     * @access public
     * @auteure: Jorge Blanco
     */
    public function listerUtilisateurs($aUtilisateurs)
    {
        ?>
            <h2>Utilisateurs</h2>
            <section class='contenu container'>
                <div class='tableArtistes'>
        <?php
                echo "<section class='formulaire2'>";
                echo "<table>";
                echo "<tr>";
                echo "<th></th>";
                echo "<th>Utilisateur</th>";
                echo "</tr>";
                
                foreach($aUtilisateurs as $utilisateur) {
                        echo "<tr>";
                        $idUtilisateur = $utilisateur->getIdUtilisateur();
                        $loginUtilisateur = $utilisateur->getloginUtilisateur();
                        $passUtilisateur = $utilisateur->getpassUtilisateur();
                        $bio = $utilisateur->getbio();
                        $score = $utilisateur->getscore();
                        $photoUtilisateur = $utilisateur->getphotoUtilisateur();
                        echo "<td><span class='icon-user'></span>";
                        echo "<td><a href='index.php?requete=unUtilisateur&idUtilisateur=$idUtilisateur'>".$utilisateur->getLoginUtilisateur()."</a>" ."</td>" ;
                        echo "</tr>";
                }
                echo "</table>";
                echo "</div>";
            echo "</section> ";
       echo "</div>";

    }
    
     /**
     * Affiche menu Admin
     * @access public
     * @author Gautier Piatek
     * @version 1.0
     * 
     */
    public function afficheContenuAdmin() 

    {   
        
        ?>
        <div class="admin">
           <div class="menuAdmin">
                <nav>
                    <ul>
                         
                        <li>
                            GESTION
                            <ul>
                                <li>
                                    <a href="#">OEUVRES</a>
                                       <ul>
                                            <li><a href="index.php?requete=ajoutOeuvre">Ajouter</a></li>
                                            <li><a href="index.php?requete=listeModifierOeuvres">Modifier</a></li>
                                            <li><a href="index.php?requete=listeSupprimerOeuvres">Supprimer</a></li>
                                        </ul>
                                </li>

                                <li>
                                    <a href="#">ARTISTES</a>
                                        <ul>
                                            <li><a href="index.php?requete=ajouterUnArtiste">Ajouter</a></li>
                                            <li><a href="index.php?requete=listeModifierArtistes">Modifier</a></li>
                                            <li><a href="index.php?requete=listeSupprimerArtistes">Supprimer</a></li>
                                        </ul>
                                </li>

                                <li>
                                    <a href="#">CATEGORIES</a>
                                        <ul>
                                            <li><a href="index.php?requete=ajouterUnCategorie">Ajouter</a></li>
                                            <li><a href="index.php?requete=listeModifierCategories">Modifier</a></li>
                                            <li><a href="index.php?requete=listeSupprimerCategories">Supprimer</a></li>
                                        </ul>
                                </li>

                                <li>
                                    <a href="index.php?requete=listerUtilisateurs">UTILISATEURS</a>
                                        <ul>
                                            <li><a href="index.php?requete=afficheInscription">Ajouter</a></li>
                                            <li><a href="index.php?requete=listeModifierUtilisateurs">Modifier</a></li>
                                            <li><a href="index.php?requete=listeSupprimerUtilisateurs">Supprimer</a></li>
                                        </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            MODERATION
                            <ul>
                                <li><a href="#">Photos</a></li>
                                <li><a href="#">Commentaires</a></li>
                            </ul>
                        </li>
                        <br>
                        <li>
                            <a href="#">MISE A JOUR BDD</a>
                         <!--   http://donnees.ville.montreal.qc.ca/dataset/2980db3a-9eb4-4c0e-b7c6-a6584cb769c9/resource/18705524-c8a6-49a0-bca7-92f493e6d329/download/oeuvresdonneesouvertes.json  -->
                        </li> 

                    </ul>

                </nav>
            </div>
            
            <section class="contenu container">
        
                <h2>Gestion</h2>

                <div class="administration">
                   <div class="twelvecol">
                       
                    
                     
                   </div>

                </div>
            </section>
        </div>
        
        
        <?php

        
    }

    /**
     * Fonction qui affiche un utilisateur 
     * @access public
     * @auteure: Jorge Blanco
     * @version 1.0
     */

    public function afficherUnUtilisateur($aUtilisateur)
    {
        ?>
        <section class='contenu container'>
            <div class= 'fourcol '>
                <img src='images/util_1.png' alt="">
            </div>
            <div class= 'sixcol'>
                <?php
                    //var_dump($aUtilisateur);
                   //$idUtilisateur= $aUtilisateur->getIdUtilisateur();



                 ?>
                
                <p>Nom utilisateur: <?php echo $aUtilisateur->getloginUtilisateur(); ?></p>
                <p>bio: <?php echo $aUtilisateur->getbio(); ?></p>

                <a href='index.php?requete=profilUtilisateur'><span class='icon-reply'></span> Retourner</a>
            </div>
        
        </section>

        <?php
    }


    /**
     * Fonction qui modifie un utilisateur  
     * @access public
     * @auteure: Jorge Blanco
     * @version 1.0
     */

    public function modifierUnUtilisateur($aUtilisateur)
    {
        
        $idUtilisateur = $aUtilisateur['idUtilisateur'];
        $bio = $aUtilisateur['bio'];
        $utilisateur = $aUtilisateur['loginUtilisateur'];
        $motDePasse = $aUtilisateur['passUtilisateur'];
        $score = $aUtilisateur['score'];
        $photoUtilisateur = $aUtilisateur['photoUtilisateur'];
    

        ?>
        <div>
        <h2 id="titreAdm">Modifier Utilisateur</h2>
    
        <form class="formulaire" action="index.php?requete=modifierUtilisateur&idUtilisateur=<?php echo $idUtilisateur; ?>&action=valider" method='POST'>
        
            <fieldset>
                <!-- MODIFICATION TEMPORAIRE DU FORMULAIRE Jorge -->
            <!-- Prénom:<br>
            <input type="text" name="prenom" >
            <br> <br>
            Nom:<br>
            <input type="text" name="nom" >
            <br> <br>
            Date de naissance:<br>
            <input  type="date" name="dateDeNaissance" placeholder="jj/mm/aaaa">
             <br> <br>
            Sexe:<br><br>
            <input type="radio" name="sex" value="male" checked> Male
            <input type="radio" name="sex" value="female"> Female<br><br>
            Courriel:<br>
            <input type="text" name="courriel" placeholder="exemple@domaine.com" >
            <br> <br> -->
            Biographie:<br>
            <textarea rows="8" cols="60" name="bio"><?php echo $bio; ?></textarea>
            <br><br>
             Nom d'utilisateur:<br> 
            <input type="text" name="utilisateur" value="<?php echo $utilisateur; ?>">
            <br><br>
            Mot de passe:<br>
            <input type="text" name="motDePasse" placeholder="Nouveau mot de passe" value="">
            <br><br>
<!--
            Confirmer le mot de passe:<br>
            <input type="password" name="motDePasse" value="<?php echo $motDePasse; ?>">
            <br><br>
-->
            score:<br>
            <input type="text" name="score" value="<?php echo $score; ?>">
            <br><br>
            photo:<br>
            <input type="text" name="photoUtilisateur" value="<?php echo $photoUtilisateur; ?>">
            <br><br>
            <input type="submit" value="Envoyer" id="button">

            <fieldset>
        </form>  
        </fieldset>
        </fieldset>
        </div>          
        <?php

    }
    
        /**
     * Fonction qui modifie un admin/moderateur 
     * @access public
     * @auteure: Jorge Blanco
     * @version 1.0
     */
    
    public function modifierUnAdmin_moderateur($aAdmin_moderateur)
    {
        $idAdMod = $aAdmin_moderateur['idAdMod'];
        $role = $aAdmin_moderateur['role'];
        $login = $aAdmin_moderateur['login'];
        $pass = $aAdmin_moderateur['pass'];
        
        ?>
        <div>
            <h2 id="titreA">Modifier un admin/moderateur</h2>

            <form class="formulaire" action="index.php?requete=modifierAdmin_moderateur&idAdMod=<?php echo $idAdMod; ?>&action=valider" method='POST'> 
                <fieldset>
                    Utilisateur:<br>
                    <input type="text" name="login" value="<?php echo $login; ?>"><br><br>
                    Mot de passe:<br>
                    <input type="text" name="pass" placeholder='Nouveau mot de passe'><br><br>
                    Rôle:
                    <select name='role'>
                        <?php
                            echo "<option value='".'1'."'";
                            if($role==1){echo "selected";}
                            echo ">".'Administrateur'."</option>";
                        ?>
                        <?php
                            echo "<option value='".'0'."'";
                            if($role==0){echo "selected";}
                            echo ">".'Moderateur'."</option>";
                        ?>
                                              
                    </select> 
                     <br>
                    <input type="submit" value="Envoyer" id="button">
                </fieldset>        
            </form>                    
        </div>
                    
        <?php
        
    }
    
    
    /**
     * Fonction qui montre le formaulaire pour ajouter admin/moderateur 
     * @access public
     * @auteure: Jorge Blanco
     * @version 1.0
     */
    
    public function formulaireAjouterAdmin_moderateur()
    {
        ?>
        <div>

        

        <h2 id="titreAdm">Ajouter un admin/moderateur</h2>

        <div class="formulaireAd1"> 
        <form  action="index.php?requete=ajouterAdmin_moderateur&action=ajoutAdmin_moderateur" method='POST' name='FormAjoutAdmin' id="FormAjoutAdmin"> 

            <fieldset>
                
                login:<br>
                <input type="text" name="login"><br><span id="erreurPrenom"></span>
                Mot de pass:<br>
                <input type="password" name="pass"><br>
                role:<br>
                <select name="role">
                    <option value='nonChoisi'>choisissez une option</option>
                    <option value="1">Administrateur</option>
                    <option value="0">Moderateur</option>
                </select><br>
                <input type="button"  onclick="validerFormAjoutAdmin()" value="Envoyer" id="button"> 
                
            </fieldset>        
        </form>                    
        </div>
        
        <?php
    }
    
    
    
    
    /**
     * Affiche Liste des categories
     * @access public
     * @author German Mahecha
     * @version 1.0
     */


    public function afficheOeuvresMot($aOeuvres)

    {
      
                echo' <div class="container">';
                echo' <h2>Resultats de la recherche</h2>';
                        echo'<div class="panel panel-default">';  
                            echo'<div class="panel-heading">Titre</div>';
                        
                                echo'<div class="panel-body">';

                                foreach($aOeuvres as $oeuvre)
                                    {
                                       $idOeuvre = $oeuvre->getIdOeuvre();
                                       echo "<td><a href = 'index.php?requete=unOeuvre&idOeuvre=$idOeuvre'><span class='icon-blackboard'></span>";
                                       echo "<td>".$oeuvre->getTitreOeuvre()."<br>" ;
                                       echo "</tr>";
                                    }

                                echo'</div>';
                        echo'</div>';
               
                echo'</div>';
            
        }

           
    
    
    /**
    * Affiche la page pour ajouter un catégorie
    * @access public
    * @auteure: Thuy Tien Vo
    */
    public function formulaireAjouterCategorie() 
    {   
       
         ?>
     
         <h2 id="titreAdm">Ajouter un categorie</h2>
           <div class="formulaireAd1">
       
         <form method="POST" action="index.php?requete=ajouterUnCategorie&action=ajoutCategorie" >
             <fieldset>
            Nom catégorie:<br>
             <input type="text" name="nomCategorie" >
             <br> <br>

            Nom catégorie en Anglais:<br>
             <input  type="text" name="nomCatAng" >
              <br> <br>

            <input type="submit" value="Envoyer" id="button"> 
            </fieldset>

         </form>  
       
         </div>        
         <?php        
    }










        

}
?>
