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
        
        if(!isset($_SESSION['sessionAdmin'])) {
            $_SESSION['sessionAdmin'] = '';
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

                <link rel="stylesheet" href="fonts/style.css" type="text/css">
                <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
                <link rel="stylesheet" href="./css/main_bootstrap.css" type="text/css" media="screen">
                <link rel="stylesheet" href="lib/SBAdmin2/bower_components/font-awesome/css/font-awesome.min.css">
                <link href="css/bootstrap.min.css" rel="stylesheet">
                <link href="css/heroic-features.css" rel="stylesheet">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
                <script src='js/jquery.validate.js'></script>
                
                <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
                
                <script src="http://maps.googleapis.com/maps/api/js"></script>
                <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
                <script src="./js/plugins.js"></script>
                <script src="./js/main.js"></script>
                <script type="text/javascript" src="./js/md5.js"></script>
                
                <!-- Barre de chargement Pace-->
                <script src="js/pace.min.js"></script>
                <link rel="stylesheet" href="css/pace.css">
            </head>

            <body>
               
                <nav class="navbar navbar-default" id="header_back">
                         <div class="col-lg-12" id="nav-logo"><img src="images/logo.png" class="img-responsive" alt="Logo" ></div>
                        <div class="container-fluid">

                        
                            
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Activer la navigation</span>
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
                                
                                    <?php
                                        if($_SESSION["sessionAdmin"]) {
                                            echo "<li><a href='index.php?requete=adminPanel'><span class='glyphicon glyphicon-user'></span> PANEL ADMIN </a></li>";
                                        }
        
                                        if($_SESSION["session"]) {
                                             echo  "<li>" . "<a href='index.php?requete=proposerOeuvre' class='btn btn-danger'><span class='glyphicon glyphicon-camera'></span> PROPOSER UNE OEUVRE</a></li>";
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
                
                <form method="POST" class="formulaire" action="index.php?requete=inscription&action=ajoutUtilisateur" name="formInscription" id="formInscription">
        
            <fieldset>

                <div class="form-group">
                    <label for="utilisateur" class="control-label">Nom d'utilisateur:</label>  
                    <input type="text" name="utilisateur" class="form-control" id="utilisateur"/>
                    <span id="msjUtilisateur1" style="display:none">Veuillez saisir votre nom d'utilisateur</span>
                    <span id="msjUtilisateur2" style="display:none">caractères de l A à la Z</span>
                </div>
                <div class="form-group">
                    <label for="motDePasse" class="control-label">Mot de passe:</label> 
                    <input type="password" name="motDePasse" class="form-control" id="motDePasse1"/>
                    <span id="msjMotDePasse1" style="display:none">Veuillez mettre votre mot de pass</span>
                </div>    
                <div class="form-group">    
                    <label for="motDePasse">Confirmer le mot de passe:</label>
                    <input type="password" name="motDePasse" class="form-control" id="motDePasse2"/>
                    <span id="msjMotDePasse2" style="display:none">Veuillez confirmer votre mot de pass</span>
                </div>
                <div class="form-group">
                    <label for="prenom"  class="control-label">Prénom:</label>
                    <input type="text" name="prenom" id="prenom" class="form-control"/>
                    <span id="msjPrenom" style="display:none">Veuillez confirmer votre prenom</span>
                </div>
                <div class="form-group">
                    <label for="nom" class="control-label">Nom:</label>
                    <input type="text" name="nom" id="nom" class="form-control"/>
                    <span id="msjNom" style="display:none">Veuillez confirmer votre nom</span>
                </div>
                <div class="form-group">
                    <label for="email" class="control-label">Email:</label>
                    <input type="text" name="email" id="email" class="form-control"/>
                    <span id="msjEmail" style="display:none">Veuillez confirmer votre email</span>
                </div>
                <div class="form-group">
                    <label for="telephone" class="control-label">Téléphone:</label>
                    <input type="text" name="telephone" id="telephone" class="form-control"/>
                    <span id="msjTelephone" style="display:none">Veuillez confirmer votre téléphone</span>
                </div>    
                <div class="form-group">
                    <label for="bio" class="control-label">Biographie:</label> 
                    <textarea name="bio" placeholder="Entrer un text ici..." class="form-control" rows="8" cols="60" id="bio"></textarea>
                     <span id="msjBio" style="display:none">Remplir bio</span>
                </div>
                <input type="button"  onclick="validerFormAInscription()" value="Envoyer" id="button"> 
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
                                <span id="msjUtilisateur1" style="display:none">Veuillez saisir votre nom d'utilisateur</span>
                    <span id="msjUtilisateur2" style="display:none">caractères de l A à la Z</span>
                            </div>
                            <div class="form-group">
                                <label for="motDePasse" class="control-label">Mot de passe:</label>  
                                <input type="password" name="motDePasse" class="form-control" class="form-control">
                                <span id="msjMotDePasse" style="display:none">Veuillez mettre votre mot de pass</span>
                            </div>
                            <input type="button" value="Connexion" class="btn btn-success" id="button" onclick="encrypte();">
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
                            Sous licence MIT</span> 
                                        
                            <a class="btn btn-block btn-social btn-facebook"><i class="fa fa-facebook"></i> Nous suivre sur Facebook</a>

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
                    <script>
                    $(document).ready(function() {
                        $('#dataTables-listeArtistes').DataTable({
                            responsive: true,
                            paging: false,
                            scrollY: "50vh",
                            scrollCollapse: true,
                            columns: [
                                null,
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
                    <script>
                    $(document).ready(function() {
                        $('#dataTables-listeUtilisateurs').DataTable({
                            responsive: true,
                            paging: false,
                            scrollY: "50vh",
                            scrollCollapse: true,
                            columns: [
                                null,
                                null,
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
                    <script>
                        $('#confirmer-effacer').on('show.bs.modal', function(e) {
                            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
                        });
                    </script>
    
                    <?php
                    }
                    ?>
                <!-- Piwik Image Tracker-->
                    <img src="https://goom.piwikpro.com/piwik.php?idsite=1&rec=1" style="border:0" alt="" />
                <!-- End Piwik -->                   
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
        
            
                <div class='row'>
                <div class=' visible-lg visible-md col-lg-12'>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>
                
                  <!-- Wrapper for slides -->
                 <div class="carousel-inner" role="listbox">
                   <?php
                    $compteur = 1;
                    foreach($oeuvres as $oeuvre) { ?>
                        <div class="item <?php if($compteur == 1){ echo 'active'; } ?>">
                          <img src="<?php echo $oeuvre[0]; ?>" alt="<?php echo $oeuvre[2]; ?>" class='imgSlider'>
                            <div class="carousel-caption">
                                <a href="<?php echo 'index.php?requete=unOeuvre&idOeuvre='. $oeuvre[3]; ?>"><h3><?php echo $oeuvre[2]; ?></h3></a>
                            </div>
                        </div>
                    <?php $compteur = $compteur+1; } ?>
                    
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
            <header class="jumbotron jumbotron-icon" id="slide_">
                <div class='row'>
                    <div class='col-lg-12'>
                        <div class='row' id="message_bienvenue">
                            <div class='col-lg-1'></div>
                                <div class="col-lg-3"><i class="fa fa-camera-retro awesome-responsive"></i></div>
       <div class='col-lg-7'>
                                    <h1>Bienvenue à toi, Chasseur d'Art !</h1>
                                   
                                    <p>Deviens le meilleur chasseur d'oeuvres d'art de la ville de Montréal ! </p>
                                    <p>Capture les oeuvres de la ville avec l'appareil photo de ton téléphone intelligent et tente d'arriver en haut du classement !</p>
                                    <p><button data-toggle="modal" data-target="#afficher-regles" class="btn btn-primary btn-large"><i class="fa fa-info"></i> Règles du jeu</button> <a href="index.php?requete=inscription" class="btn btn-success btn-large">S'inscrire !</a></p>

                                </div>
                        </div>
                    </div>
                </div>
            </header>  
            
               <!-- Source : https://stackoverflow.com/questions/8982295/confirm-delete-modal-dialog-with-twitter-bootstrap-->
            <div class="modal fade" id="afficher-regles" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header modal-regles">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Les règles du jeu</h4>
                        </div>

                        <div class="modal-body">
                            <p><strong>Devenez le meilleur chasseur en 4 étapes ! </strong></p>
                            <p><strong>Etape 1</strong></p>
                            <p>Prenez la photo d'une oeuvre d'art déjà présente sur le site, d'un graffiti ou d'un tag dans la rue ...</p>
                            <p><strong>Etape 2</strong></p>
                            <p>Si vous êtes le premier à capturer l'oeuvre en photo, vous obtenez 5 points !</p>
                            <ul>
                                <li>Le second obtient 3 points</li>
                                <li>Le troisième obtient 2 points</li>
                                <li>Les suivants obtiennent 1 point</li>
                            </ul></p>
                            <p><strong>Etape 3</strong></p>
                            <p>Vous pouvez donner un coup de pouce aux autres chasseurs en votant pour leurs photos. Ils obtiendront 1 point.</p>
                            <p><strong>Etape 4</strong></p>
                            <p>Tentez d'arriver en tête du classement des meilleurs chasseurs en découvrant le plus d'oeuvres possible !</p>
                        </div>

                        <div class="modal-footer modal-regles">
                            <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                            
                        </div>
                    </div>
                </div>
            </div>
            
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
        echo '<div id="tous_les_oeuvres" class="row">';
        foreach($oeuvres as $oeuvre) {
               if($oeuvre->getValidationOeuvre()==1)
               {   

                    $idOeuvre= $oeuvre->getIdOeuvre();
                    $titre = $oeuvre->getTitreOeuvre();
                        echo '<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 hero-feature oeuvres_" >';
                            echo '<div class="hovereffect">';
                                
                                echo "<img src='images/photoDefaut.jpg' alt='' class='img-responsive' id='images_oeuvres'></a>";
                                    echo '<div class="overlay">';
                                        echo '<h2>'.$titre .'</h2>';
                                        echo '<a class="info" href="index.php?requete=accueil&idOeuvre='.$idOeuvre.'">'. "plus d'info" .'</a><br/>';
                                        if ($_SESSION['session']){
                                            echo '<a class="info" href="index.php?requete=propositionPhotoUtilisateur&idOeuvre='.$idOeuvre.'">'. "Proposer Photo " .'</a>';
                                        }
                                    echo '</div>';
                                echo '</div>';
                        echo '</div>';
    
               } 
             
        }
        echo '</div>';

    }  

    public function afficherPages($pagesTotales, $pageCourante)
    {
        echo '<div id="pagination">';
        for($i=1;$i<=$pagesTotales;$i++) {
         if($i == $pageCourante) {
            echo $i.' ';
         } elseif ($i == $pageCourante+1){
             echo '<a href="index.php?page='.$i.'" class="suivante">'.$i.'</a> ';
         }else {
            echo '<a href="index.php?page='.$i.'">'.$i.'</a> ';
         }
      }
        echo '</div>';
        ?>
            <script src="js/jquery-ias.min.js"></script>
            <script>
                var ias = jQuery.ias({
                  container:  '#tous_les_oeuvres',
                  item:       '.oeuvres_',
                  pagination: '#pagination',
                  next:       '.suivante'
                });
            ias.extension(new IASSpinnerExtension({
            src: 'images/loader.gif', // optionally
            }));
            ias.extension(new IASNoneLeftExtension({
            text: "il n'y a plus d'oeuvres", // optionally
            }));
            </script>
        <?php
    }


    /**
     * Affiche un Oeuvre
     * @access public
     * @auteur: German Mahecha
     */
    public function afficheUnOeuvre($oeuvre,$arrondissement,$categorie,$sousCategorie, $photos) 
    {
         ?>
        <div class='row'>
            <div class="col-lg-12 text-center" >
                <h1 ><?php echo $oeuvre['titreOeuvre'];?></h1>
            </div>
            <div class="col-lg-12"></div>
        </div>

            <div class= 'row'>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3"></div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <?php
                        //var_dump($photos);
                        if($photos)
                            echo "<img class='img-responsive' src='./photos/proposees/".$photos[0][1]."' style='width:500px; alt=''>";
                        else
                            echo "<img class='img-responsive' src='./images/img_2.jpg' style='width:500px; alt=''>";
                    ?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 text-justify">
                    <p class='txt_uneOeuvre'> <strong>Description :</strong></p>
                    <p class='txt_uneOeuvre'><?php echo $oeuvre['description'];?></p>
                </div>
            </div>

            <div class='row'>
            <div class="col-lg-12 text-center" >
            
           
            </div></div>    
                
            <div class= 'row' id="details_oeuvre">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" ></div>
                
              
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
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
                     if ($titre) {
                         echo "<p><strong>Nom de l'oeuvre: </strong> ".$titre."</p>";
                     }
                    if ($categ) {
                        echo "<p><strong>Categorie: </strong> ".$categ."</p>";
                    }
                    if ($souscat) {
                        echo "<p><strong>Souscategorie: </strong> ".$souscat."</p>";
                    }
                    if ($technique) {
                        echo "<p><strong>Technique: </strong>".$technique."</p>";
                    }
                    if ($nomMateriaux) {
                        echo "<p><strong>Materiaux: </strong>".$nomMateriaux."</p>";
                    }
                    if ($arrond) {
                        echo "<p><strong>Arrondissement: </strong>".$arrond."</p>";
                    }
                    if ($parc) {
                        echo "<p><strong>Parc: </strong>".$parc."</p>";
                    }
                    if ($batiment) {
                        echo "<p><strong>Batiment: </strong>".$batiment."</p>";
                    }
                    if ($adres) {
                        echo "<p><strong>Adresse: </strong>".$adres."</p>";
                    }
                    
                    ?>
                    
                    <a href='index.php?requete=accueil' class="btn btn-primary btn-lg"><span class='icon-reply'></span> Retourner</a>
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
             
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" >
                    <div id="googleMap" style="width:300px;height:300px;"></div>
                </div>
            </div>                
    <?php    
    }


     /**
     * Affiche les oeuvres par artistes
     * @access public
    * Frontend artiste
    * @access public
    * @auteure:Thuy Tien Vo
    */  

     public function afficheArtistes($aArtistes, $oOeuvres) 

    {
        ?>
            <div class="text-center">
                <h2>Découvrez nos <span class="artistes">artistes</span> et <span class="collectif">collectifs</span></h2> </br></br></br>
            </div>
        <?php
 
        //$compteur = 0;

       //echo'<div class="container">';

       // foreach($aArtistes as $artiste)

       // {  

           // $photo = $artiste->getPhoto();
            //$prenom = $artiste->getPrenom();
            //$nom = $artiste->getNom();
            //$collectif = $artiste->getCollectif();
           // $idArtiste = $artiste->getIdArtiste();
 

            //echo ' <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">';
              
              // echo' <div class="panel-group" id="accordion">';

                   // echo'  <div class="panel panel-default">';

                       // echo'<div class="panel-heading" >';

                          // echo'<h4 class="panel-title">';

                               //echo "<a data-toggle='collapse' data-parent='#accordion' href='#collapse".$compteur."'> " . $collectif . $nom . " ". $prenom .  "  </a>";

                           //echo'</h4>'; 

                      // echo'</div>';

                       //echo'<div id="collapse'.$compteur.'" class="panel-collapse collapse">';
//
                       // echo'<div class="panel-body">';

                                //echo "<img class='img-responsive' src='./images/artisteDefaut.jpg'  width='700' height='700'>";
                    
                                   // $aOeuvres = $oOeuvres::listeOeuvresParArtiste($idArtiste);

                               
                                   // foreach($aOeuvres as $oeuvre)

                                       //{   $titreOeuvre = $oeuvre->getTitreOeuvre();
                                            //$idOeuvre = $oeuvre->getIdOeuvre();
                                          // echo "<li><a href='index.php?requete=artistes&idOeuvre=" . $idOeuvre . "'>" . $titreOeuvre . "</a> </li>";

                                        //}

                                 
                            //echo'</div>';

                        //echo'</div>';

                    //echo'</div>';

                //echo'</div>';

          // echo'</div>';


            //$compteur= $compteur+1;

       //}

    //echo'</div>';

        ?>
            <div class="container">
                <div class="row">

                    <div class="col-md-1"><i class='list-group-item'> <a href = 'ajaxControler.php?requete=artistes&lettre=a' id='alphabet' class=''> A </a> </i> </div>
                    <div class="col-md-1"><i class='list-group-item'> <a href = 'ajaxControler.php?requete=artistes&lettre=b' id='alphabet' class=''> B</a> </i> </div>
                    <div class="col-md-1"><i class='list-group-item'> <a href = 'ajaxControler.php?requete=artistes&lettre=c' id='alphabet' class=''> C </a> </i> </div>
                    <div class="col-md-1"><i class='list-group-item'> <a href = 'ajaxControler.php?requete=artistes&lettre=d' id='alphabet' class=''> D </a> </i> </div>
                    <div class="col-md-1"><i class='list-group-item'> <a href = 'ajaxControler.php?requete=artistes&lettre=e' id='alphabet' class=''> E </a> </i> </div>
                    <div class="col-md-1"><i class='list-group-item'> <a href = 'ajaxControler.php?requete=artistes&lettre=f' id='alphabet' class=''> F </a> </i> </div>
                    <div class="col-md-1"><i class='list-group-item'> <a href = 'ajaxControler.php?requete=artistes&lettre=g' id='alphabet' class=''> G </a> </i> </div>
                    <div class="col-md-1"><i class='list-group-item'> <a href = 'ajaxControler.php?requete=artistes&lettre=h' id='alphabet' class=''> H </a> </i> </div>
                    <div class="col-md-1"><i class='list-group-item'> <a href = 'ajaxControler.php?requete=artistes&lettre=i' id='alphabet' class=''> I </a> </i> </div>
                    <div class="col-md-1"><i class='list-group-item'> <a href = 'ajaxControler.php?requete=artistes&lettre=j' id='alphabet' class=''> J </a> </i> </div>
                    <div class="col-md-1"><i class='list-group-item'> <a href = 'ajaxControler.php?requete=artistes&lettre=k' id='alphabet' class=''> K </a> </i> </div>
                    <div class="col-md-1"><i class='list-group-item'> <a href = 'ajaxControler.php?requete=artistes&lettre=l' id='alphabet' class=''> L </a> </i> </div> <br/> <br/> <br/> <br/>
                    <div class="col-md-1"><i class='list-group-item'> <a href = 'ajaxControler.php?requete=artistes&lettre=m' id='alphabet' class=''> M </a> </i> </div>
                    <div class="col-md-1"><i class='list-group-item'> <a href = 'ajaxControler.php?requete=artistes&lettre=n' id='alphabet' class=''> N </a> </i> </div>
                    <div class="col-md-1"><i class='list-group-item'> <a href = 'ajaxControler.php?requete=artistes&lettre=o' id='alphabet' class=''> O </a> </i> </div>
                    <div class="col-md-1"><i class='list-group-item'> <a href = 'ajaxControler.php?requete=artistes&lettre=p' id='alphabet' class=''> P </a> </i> </div>
                    <div class="col-md-1"><i class='list-group-item'> <a href = 'ajaxControler.php?requete=artistes&lettre=q' id='alphabet' class=''> Q </a> </i> </div>
                    <div class="col-md-1"><i class='list-group-item'> <a href = 'ajaxControler.php?requete=artistes&lettre=r' id='alphabet' class=''> R</a> </i> </div>
                    <div class="col-md-1"><i class='list-group-item'> <a href = 'ajaxControler.php?requete=artistes&lettre=s' id='alphabet' class=''> S</a> </i> </div>
                    <div class="col-md-1"><i class='list-group-item'> <a href = 'ajaxControler.php?requete=artistes&lettre=t' id='alphabet' class=''> T </a> </i> </div>
                    <div class="col-md-1"><i class='list-group-item'> <a href = 'ajaxControler.php?requete=artistes&lettre=u' id='alphabet' class=''> U </a> </i> </div>
                    <div class="col-md-1"><i class='list-group-item'> <a href = 'ajaxControler.php?requete=artistes&lettre=v' id='alphabet' class=''> V </a> </i> </div>
                    <div class="col-md-1"><i class='list-group-item'> <a href = 'ajaxControler.php?requete=artistes&lettre=w' id='alphabet' class=''> W </a> </i> </div>
                    <div class="col-md-1"><i class='list-group-item'> <a href = 'ajaxControler.php?requete=artistes&lettre=x' id='alphabet' class=''> X</a> </i> </div> <br/> <br/> <br/> <br/>
                    <div class="col-md-1"><i class='list-group-item'> <a href = 'ajaxControler.php?requete=artistes&lettre=y' id='alphabet' class=''> Y </a> </i> </div>
                    <div class="col-md-1"><i class='list-group-item'> <a href = 'ajaxControler.php?requete=artistes&lettre=z' id='alphabet' class=''> Z </a> </i> </div >       
   
                </div><br/><br/>
                <table  class= "table table-bordered" id="resultat">    </table>


            </div>

        <?php

}
        


/**
     * Affiche tous les artistes par lettre a,b,c...
     * @access public
     * @author Thuy Tien Vo
     * @version 1.0
     * 
     */
    public function afficheArtisteParLettre($aArtistes)
        {
            foreach($aArtistes as $artiste)
               {  
                    $photo = $artiste->getPhoto();
                    $prenom = $artiste->getPrenom();
                    $nom = $artiste->getNom();
                    $collectif = $artiste->getCollectif();
                    $idArtiste = $artiste->getIdArtiste();

                    echo'<div class="container">';
                    echo "<table  class= 'table table-bordered' > " ;
                    echo"<tr>";
                    echo"<td>";
                    echo " <a href = 'index.php?requete=artistes&idArtiste=$idArtiste'> " . $collectif . $nom . " ". $prenom .  "  </a>";
                    echo"</td>";
                    echo"</tr>";
                    echo"</table>";
                    echo'</div>';
               } 
     
        } //FIN FUNCTION affiche Artiste

    public static function affichelisteOeuvresParArtiste($aArtistes, $aOeuvres)

        {   $aOeuvres = $oOeuvresParArt::listeOeuvresParArtiste($idArtiste);

                foreach($aOeuvres as $oeuvre)

                    {   $titreOeuvre = $oeuvre->getTitreOeuvre();
                        $idOeuvre = $oeuvre->getIdOeuvre();
                         echo "<li><a href='index.php?requete=artistes&idOeuvre=" . $idOeuvre . "'>" . $titreOeuvre . "</a> </li>";
                    }
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
     * Affiche sous_catégories
     * @access public
     * @author Thuy Tien VO
     * @version 1.0
     */
    public function afficheSousCategories($aSousCategories) 

    {
        ?>
        <div class="text-center">
        <h2>Catégories</h2>
        
        </div>
        <?php
      
        
        echo "<section class='contenu container'>";

            foreach($aSousCategories as $sousCategorie)
            {
                $id_SousCategorie= $sousCategorie->getIdSousCategorie();
              
                $nom = $sousCategorie->getNomSousCategorie();

            
                echo' <div class="col-sm-4">';

                    echo"<ul class='list-group-item'>";
                
                        echo "<a href = 'index.php?requete=sousCategories&idSousCategorie=$id_SousCategorie' class='sousCategorie'> " . $nom. "</a>";
                  
                    echo"</ul>";

                echo'</div>';   
            }

        echo "</section>";
        
    } //FIN FUNCTION afficheSousCategorie



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
            <div class="text-center">
                <h2>Oeuvre Par Catégorie</h2>
            </div>
            
            <?php

             if($aOeuvreParCat == "")
            {
                echo "Il n'y a pas d'oeuvres dans cette catégorie";
            }

            else
            {
            
                echo'<div class="container">';

                foreach($aOeuvreParCat as $oeuvre)
                {    
                    $idOeuvre= $oeuvre->getIdOeuvre();
                    $titre = $oeuvre->getTitreOeuvre();

                    echo' <div class="col-sm-4">';

                        echo"<ul class='list-group-item'>";

                            echo "<a href = 'index.php?requete=unOeuvre&idOeuvre=$idOeuvre' class='categorie'>" .  $titre. "</a>" . '</br>'; 

                        echo"</ul>";

                    echo'</div>';

                }
                
                echo'</div>';

            }
            
        }    //FIN FUNCTION afficheOeuvreParCat

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
     * Affiche Liste des categories
     * @access public
     * @author German Mahecha
     * @version 1.0
     */
    
    public function proposerOeuvre($aArrondissements, $aSousCategories, $message, $erreurTitre, $erreurTitreVariante, $erreurTechniqueAng, $erreurTechnique, $erreurTechniqueAng, $erreurDescription, $erreurAdresse, $erreurBatiment, $erreurParc, $erreurLatitude, $erreurLongitude, $erreurArrondissement, $erreurArtiste, $erreurCategorie, $erreurSousCategorie, $erreurMateriaux, $erreurMateriauxAng)

    {
        ?>
        <div class="row">
                <div class="col-lg-12"> 
                    <h1 class="page-header text-center">Proposer une Oeuvre</h1>
                </div>    
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Détails de l'oeuvre
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                    <div class="col-lg-6 col-lg-offset-3">   

                           <form method="POST" role="form" action="index.php?requete=proposerOeuvre&action=valider" enctype="multipart/form-data" id='formPropositionOeuvre' name="formPropositionOeuvre">


                                <div class="form-group">
                                    <label>Titre :</label>
                                    <input class="form-control" type="text" name="titre" id='titre'><span><?php echo $erreurTitre;?></span>
                                    <span id="msjTitre" style="display:none">Veuillez saisir le titre de l'oeuvre</span>
                                    
                                </div>
                                <div class="form-group">
                                    <label>Titre (variante) :</label>
                                    <input class="form-control" type="text" name="titreVariante" id='titreVariante'><span><?php echo $erreurTitreVariante;?></span>
                                    <span id="msjTitreVariante" style="display:none">Veuillez saisir le titre variante de l'oeuvre</span>
                                    
                                </div>
                                <div class="form-group">
                                    <label>Technique :</label>
                                    <input class="form-control" type="text" name="technique" id="technique"><span><?php echo $erreurTechnique;?></span>
                                    <span id="msjTechnique" style="display:none">Veuillez saisir la technique de l'oeuvre</span>
                                </div>
                                <div class="form-group">
                                    <label>Technique (anglais):</label>
                                    <input class="form-control" type="text" name="techniqueAng" id="techniqueAng"><span><?php echo $erreurTechniqueAng;?></span>
                                    <span id="msjTechniqueAng" style="display:none">Veuillez saisir la technique de l'oeuvre</span>
                                </div>
                                <div class="form-group">
                                    <label>Description :</label>
                                    <textarea class="form-control" rows="3" name="description" id="description"></textarea><span><?php echo $erreurDescription;?></span>
                                    <span id="msjDescription" style="display:none">Veuillez saisir la descirption de l'oeuvre</span>
                                </div>
                                <div class="form-group hidden-lg">
                                    <label>Localisation :</label>
                                    <input type="button" onclick="recupererGeolocalisation()" class="btn btn-success form-control"  name="localiser" value="Récupérer ma position">
                                    <input type="text" hidden name="latitude" id="latitude">

                                    <input type="text" hidden name="longitude" id="longitude">
                                    <span id="msjLocalisation"></span>
                                </div>   
                                <div class="form-group">
                                <label>Adresse Civique :</label>
                                    <input class="form-control" type="text" name="adresse" id="adresse"><span><?php echo $erreurAdresse;?></span>
                                    <span id="msjAdresse" style="display:none">Veuillez saisir une adresse valide</span>
                                </div>
                                <div class="form-group">
                                    <label>Batiment :</label>
                                    <input class="form-control" type="text" name="batiment" id="batiment"><span><?php echo $erreurBatiment;?></span>
                                    <span id="msjBatiment" style="display:none">Veuillez saisir le nom de batiment</span>
                                </div>
                                <div class="form-group">
                                <label>Parc :</label>
                                      <input class="form-control" type="text" name="parc" id="parc"><span><?php echo $erreurParc;?></span>
                                    <span id="msjParc" style="display:none">Veuillez saisir le nom du parc</span>
                                </div>
                                
                               
                                <div class="form-group">
                                <label>Arrondissement :</label>
                                    <select class="form-control" name="arrondissement" id='arrondissements'><br><span><?php echo $erreurArrondissement;?></span>
                                    <option value="nonChoisi" >Choisir un Arrondissement</option><br>
                                <?php
                                    foreach ($aArrondissements as $arrondissement) {
                                        echo "<option value='".$arrondissement->getidArrondissement()."'>".$arrondissement->getnomArrondissement()."</option>"; 
                                    }
                                ?>
                               </select>
                                    <span id="msjArrondissement" style="display:none">Veuillez choisir une option</span>
                                </div>
                                <div class="form-group">

                                   <label>Artiste :</label><br>
                                   <label>Prénom :</label>
                                   <input class="form-control" type="text" name="prenomArtiste" id="prenomArtiste"><?php echo $erreurArtiste;?></span>
                                    <span id="msjPrenomArtiste" style="display:none">Veuillez remplir le champ</span>
                                    <label>Nom :</label>
                                   <input class="form-control" type="text" name="nomArtiste" id="nomArtiste"><?php echo $erreurArtiste;?></span>
                                    <span id="msjNomArtiste" style="display:none">Veuillez remplir le champ</span>
                                    <label>Collectif :</label>
                                   <input class="form-control" type="text" name="collectifArtiste" id="collectifArtiste"><?php echo $erreurArtiste;?></span>
                                    <span id="msjCollectifArtiste" style="display:none">Veuillez remplir le champ</span>

                                </div>
                               
                                <div class="form-group">
                                   <label>Catégorie :</label>
                                    <select class="form-control" name="sousCategorie" id="sous_categorie"><span><?php echo $erreurSousCategorie;?></span>
                                    <option value="nonChoisi">Choisir une Catégorie</option>
                                <?php
                                    foreach ($aSousCategories as $sousCategorie) {
                                        echo "<option value='".$sousCategorie->getidSousCategorie()."'>".$sousCategorie->getnomSousCategorie()."</option>"; 
                                    }
                                ?>    
                                    </select>
                                    <span id="msjSous_categorie" style="display:none">Veuillez choisir une option</span>
                                    
                                </div>
                                <div class="form-group">
                                   <label>Matériaux :</label>
                                   <input class="form-control" type="text" name="materiaux" id="materiaux"><span><?php echo $erreurMateriaux;?></span>
                                    <span id="msjMateriaux" style="display:none">Veuillez saisir un material</span>
                                </div>
                                 <div class="form-group">
                                   <label>Matériaux (anglais) : </label>
                                    <input class="form-control" type="text" name="materiauxAng" id="materiauxAng"><span><?php echo $erreurMateriauxAng;?></span>
                                    <span id="msjMateriauxAng" style="display:none">Veuillez saisir un material</span>
                                </div>
                                <div class="form-group">
                                   <label>Photo : </label>

                                <input type='file' name="image" id="image">
                                <span id="msjImage" style="display:none">Veuillez choisir une photo</span>
                                </div>
                                <input type="button" onclick="validerFormPropositionOeuvre()" class="btn btn-success"  name="sauvegarder" value="Valider"> <input type="reset" class="btn btn-danger" name="reset" value="Réinitialiser"><span><?php echo $message; ?></span>

                           </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <?php
    }

}
?>
