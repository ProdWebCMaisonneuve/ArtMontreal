<?php
/**
 * Class Vue Admin
 * 
 * @author Jonathan Martel
 * @version 1.0
 * @update 2013-12-11
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 *
 */

class VueAdmin
{
    
    /**
     * Affiche la page de connexion admin
     * @access public
     * @author Gautier Piatek
     */
    public function afficheConnexionAdmin($nombreAleatoire, $erreurConnexion) 
        {
            $_SESSION["grainSel"] = $nombreAleatoire;
           
            ?>
            <!DOCTYPE html>
            <html lang="en">

            <head>

                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta name="description" content="">
                <meta name="author" content="">
                
                <meta name="viewport" content="width=device-width">

                <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
                <script src="./js/plugins.js"></script>
                <script src="./js/main.js"></script>
                <script type="text/javascript" src="./js/md5.js"></script>
                
                <title>Chass'oeuvres - Administration</title>

                <!-- Bootstrap Core CSS -->
                <link href="./lib/SBAdmin2/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

                <!-- MetisMenu CSS -->
                <link href="./lib/SBAdmin2/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

                <!-- Custom CSS -->
                <link href="./lib/SBAdmin2/dist/css/sb-admin-2.css" rel="stylesheet">

                <!-- Custom Fonts -->
                <link href="./lib/SBAdmin2/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
                

                <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                <!--[if lt IE 9]>
                    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                <![endif]-->

            </head>

            <body>

                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <div class="login-panel panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Connexion</h3>
                                </div>
                                <div class="panel-body">
                                    <form role="form" name="loginForm">
                                       <span><?php echo $erreurConnexion;?></span>
                                        <fieldset>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Login" name="utilisateur" type="text" autofocus>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Mot de passe" name="motDePasse" type="password" value="">
                                            </div>

                                            <input class="btn btn-lg btn-success btn-block" type="button" value="Valider" onclick="encrypte();">
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form method="POST" name="formEncrypte" action="index.php?requete=admin&action=envoyer">
                        <input type="hidden" name="utilisateur"/><br/>
                        <input type="hidden" name="motDePasse"/><br/>
                        <input type="hidden" name="grainSel" value="<?php echo $_SESSION['grainSel']; ?>">
                    </form>
                </div>

                <!-- jQuery -->
                <script src="./lib/SBAdmin2/bower_components/jquery/dist/jquery.min.js"></script>

                <!-- Bootstrap Core JavaScript -->
                <script src="./lib/SBAdmin2/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

                <!-- Metis Menu Plugin JavaScript -->
                <script src="./lib/SBAdmin2/bower_components/metisMenu/dist/metisMenu.min.js"></script>

                <!-- Custom Theme JavaScript -->
                <script src="./lib/SBAdmin2/dist/js/sb-admin-2.js"></script>

            </body>

            </html>           
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
                <link rel="stylesheet" href="css/main_bootstrap.css">
                
                <!-- Bootstrap Core CSS -->
                <link href="lib/SBAdmin2/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

                <!-- MetisMenu CSS -->
                <link href="lib/SBAdmin2/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

                <!-- DataTables CSS -->
                <link href="lib/SBAdmin2/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
                <!-- DataTables Responsive CSS -->
                <link href="lib/SBAdmin2/bower_components/datatables-responsive/css/responsive.dataTables.scss" rel="stylesheet">
                
                <!-- Morris Charts CSS -->
                <link href="lib/SBAdmin2/bower_components/morrisjs/morris.css" rel="stylesheet">
                
                <!-- Custom CSS -->
                <link href="lib/SBAdmin2/dist/css/sb-admin-2.css" rel="stylesheet">
                <!-- Custom Fonts -->
                <link href="lib/SBAdmin2/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
                <!-- Barre de chargement Pace-->
                <script src="js/pace.min.js"></script>
                <link rel="stylesheet" href="css/pace.css">
                
                <script src="./js/main.js"></script>

                <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                <!--[if lt IE 9]>
                    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                <![endif]-->
            </head>

            <body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Basculer la navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Chass'Oeuvres</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Profil</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="deconnexion.php"><i class="fa fa-sign-out fa-fw"></i> Déconnexion</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                             
                        </li>
                        <li><a href="index.php?requete=adminPanel"><i class="fa fa-dashboard fa-fw"></i> Tableau de bord</a></li>
                        <li><a href="index.php?requete=afficheOeuvres"><i class="fa fa-paint-brush fa-fw"></i> Oeuvres</a></li>
                        <li><a href="index.php?requete=afficheArtistes"><i class="fa fa-users fa-fw"></i> Artistes</a></li>
                        <li><a href="index.php?requete=afficheCategories"><i class="fa fa-list fa-fw"></i> Catégories</a></li>
                        <li><a href="index.php?requete=afficheUtilisateurs"><i class="fa fa-user fa-fw"></i> Utilisateurs</a></li>
                        <li><a href="#"><i class="fa fa-sitemap fa-fw"></i> Modération<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                    <a href="#"><i class="fa fa-paint-brush fa-fw"></i> Oeuvres</a>
                                </li>
                                   <li>
                                    <a href="index.php?requete=afficheModPhotos"><i class="fa fa-picture-o fa-fw"></i> Photos</a>
                                </li>
                                <li>
                                    <a href="index.php?requete=afficheModCommentaires"><i class="fa fa-comment fa-fw"></i> Commentaires</a>
                                </li>

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li><a href="#"><i class="fa fa-unlock-alt fa-fw"></i> Administrateurs<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="index.php?requete=afficheAdminMods"><i class="fa fa-wrench fa-fw"></i> Gestion</a></li>
                                <li><a href="index.php?requete=afficheBDD"><i class="fa fa-download fa-fw"></i> Base de données</a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <?php
        
        
    }
    
    /**
     * Affiche la page gestion de la partie Admin
     * @access public
     * @author Gautier Piatek
     * @version 1.0
     * 
     */
    public function afficheGestion($nbreOeuvres, $nbreArtistes, $nbreUtilisateurs, $nbrePhotos) {
    
    ?>
    
    <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tableau de bord</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-paint-brush fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $nbreOeuvres; ?></div>
                                    <div>Oeuvres</div>
                                </div>
                            </div>
                        </div>
                        <a href="index.php?requete=afficheOeuvres">
                            <div class="panel-footer">
                                <span class="pull-left">Voir les détails</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $nbreArtistes; ?></div>
                                    <div>Artistes</div>
                                </div>
                            </div>
                        </div>
                        <a href="index.php?requete=afficheArtistes">
                            <div class="panel-footer">
                                <span class="pull-left">Voir les détails</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $nbreUtilisateurs; ?></div>
                                    <div>Utilisateurs</div>
                                </div>
                            </div>
                        </div>
                        <a href="index.php?requete=afficheUtilisateurs">
                            <div class="panel-footer">
                                <span class="pull-left">Voir les détails</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-picture-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $nbrePhotos; ?></div>
                                    <div>Photos</div>
                                </div>
                            </div>
                        </div>
                        <a href="index.php?requete=afficheModPhotos">
                            <div class="panel-footer">
                                <span class="pull-left">Voir les détails</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Visites
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-area-chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Notifications
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small"><em>11:32 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-bolt fa-fw"></i> Server Crashed!
                                    <span class="pull-right text-muted small"><em>11:13 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-warning fa-fw"></i> Server Not Responding
                                    <span class="pull-right text-muted small"><em>10:57 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-shopping-cart fa-fw"></i> New Order Placed
                                    <span class="pull-right text-muted small"><em>9:49 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-money fa-fw"></i> Payment Received
                                    <span class="pull-right text-muted small"><em>Yesterday</em>
                                    </span>
                                </a>
                            </div>
                            <!-- /.list-group -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>            

                <div class="col-lg-4">
                    <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-bar-chart-o fa-fw"></i> Photos
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                                
                            </div>
                            <!-- /.panel-body -->
                    </div>
                </div>    
                <!-- /.panel -->
        </div>          
    </div>
    <?php
    }


    /*******************************************GESTION OEUVRES / ARTISTES / CATÉGORIES / UTILISATEURS / ADMIN-MODÉRATEUR *******************************************/



    /**------------------------------------------------------------------------OEUVRE---------------------------------------------------------------------------- **/
    
    /**
     * Affiche la page admin oeuvres
     * @access public
     * @author Gautier Piatek
     * @version 1.0
     * 
     */
    public function afficheOeuvres($aOeuvres, $nbreOeuvres) 
    { 
        
    ?>
    <div id="page-wrapper">
            
            <div class="row">
                <div class="col-lg-12"> 
                    <h1 class="page-header">Oeuvres</h1>
                </div>    
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2"> 
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <a href="index.php?requete=ajoutOeuvre">
                                    <div class="col-xs-3">
                                        <button type="button" class="btn btn-success btn-circle btn-xl"><i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                                                   
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"> Ajouter une oeuvre</div>

                                    </div>
                                </a>
                            </div>
                        </div>
                           
                              
                                              
                    </div>
                </div>
                
                <div class="col-lg-4">
                   <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-paint-brush fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $nbreOeuvres; ?> Oeuvres</div>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>  
            </div>
            
            
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Liste des oeuvres
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           <?php if($aOeuvres) { ?>
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-liste">
                                    <thead>
                                        <tr>
                                            <th>Titre</th>
                                            <th>Titre (Variante)</th>
                                            <th>Supprimer</th>
                                            <th>Modifier</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach($aOeuvres as $oeuvre) {
                                        echo '<tr>';
                                        echo "<td>".$oeuvre->getTitreOeuvre()."</td>";
                                        echo "<td>".$oeuvre->getTitreVariante()."</td>";
                                        echo '<td class="text-center"><a href="#" data-href="index.php?requete=supprimerOeuvres&idOeuvre='.$oeuvre->getIdOeuvre().'" data-toggle="modal" data-target="#confirmer-effacer"><i class="fa fa-trash"></i></a></td>';    
                                        echo '<td class="text-center"><a href="index.php?requete=modifierOeuvre&idOeuvre='.$oeuvre->getIdOeuvre().'"><i class="fa fa-pencil"></i></a></td>';   
                                        echo '</tr>';
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php
                            } else {
                                echo " Il n'y a pas d'oeuvres à afficher.";
                            }
                            ?>
                            <!-- /.table-responsive -->
                        </div>
                    </div>
                </div>
            </div>
            
           <!-- Source : https://stackoverflow.com/questions/8982295/confirm-delete-modal-dialog-with-twitter-bootstrap-->
            <div class="modal fade" id="confirmer-effacer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Confirmer la suppression</h4>
                        </div>

                        <div class="modal-body">
                            <p><strong>Vous allez effacer une oeuvre, cette procédure est irréversible !</strong></p>
                            <p><strong>Voulez-vous continuer ?</strong></p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                            <a class="btn btn-danger btn-ok">Supprimer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    <?php
    }

    /**
     * Affiche l'AJOUT d'OEUVRE
     * @access public
     * @author Gautier Piatek
     * @version 1.0
     * 
     */
    public function afficheAjoutOeuvre($aArtistes, $aCategories, $aArrondissements, $aSousCategories, $message, $erreurTitre, $erreurTitreVariante, $erreurTechniqueAng, $erreurTechnique, $erreurTechniqueAng, $erreurDescription, $erreurAdresse, $erreurBatiment, $erreurParc, $erreurLatitude, $erreurLongitude, $erreurArrondissement, $erreurArtiste, $erreurCategorie, $erreurSousCategorie, $erreurMateriaux, $erreurMateriauxAng) 

    {   
        
        ?>            
            <div id="page-wrapper">
            
            <div class="row">
                <div class="col-lg-12"> 
                    <h1 class="page-header">Ajouter une Oeuvre</h1>
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
                           <form method="POST" role="form" action="index.php?requete=ajoutOeuvre&action=ajoutOeuvre" id ='formAjoutOeuvre' name="formAjoutOeuvre">

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
                                <div class="form-group">
                                    <label>Validation :</label>
                                    <label class="radio-inline">
                                    <input type="radio" checked name="validation" value="1" id="validationOui">Oui
                                    </label>
                                    <label class="radio-inline">
                                    <input type="radio" name="validation" value="0" id="validationNon"> Non
                                    </label>
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
                                <label>Latitude :</label>
                                     <input class="form-control" type="text" name="latitude" id="latitude"><span><?php echo $erreurLatitude;?></span>
                                    <span id="msjLatitude" style="display:none">Veuillez saisir la latitude</span>
                                </div>
                                <div class="form-group">
                                <label>Longitude :</label>
                                    <input class="form-control" type="text" name="longitude" id="longitude"><span><?php echo $erreurLongitude;?></span>
                                    <span id="msjLongitude" style="display:none">Veuillez saisir la longitude</span>
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
                                   <label>Artiste/Collectif :</label>
                                   <select class="form-control" name="artiste" id="artiste_Collectif"><span><?php echo $erreurArtiste;?></span>
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
                                    </select>
                                    <span id="msjArtiste_Collectif" style="display:none">Veuillez choisir une option</span>
                                </div>
                                <div class="form-group">
                                   <label>Catégorie :</label>
                                   <select class="form-control" name="categorie" id="categories"><span><?php echo $erreurCategorie;?></span>
                                    <option value="nonChoisi">Choisir une Catégorie</option>
                                <?php 
                                    foreach ($aCategories as $categorie) {
                                        echo "<option value='".$categorie->getidCategorie()."'>".$categorie->getnomCategorie()."</option>"; 
                                    }
                                ?>
                                   </select>
                                    <span id="msjCategorie" style="display:none">Veuillez choisir une option</span>
                                </div>
                                <div class="form-group">
                                   <label>Sous-Catégorie :</label>
                                    <select class="form-control" name="sousCategorie" id="sous_categorie"><span><?php echo $erreurSousCategorie;?></span>
                                    <option value="nonChoisi">Choisir une Sous-Catégorie</option>
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

                                <input type="button" onclick="validerFormAjoutOeuvre()" class="btn btn-success"  name="sauvegarder" value="Valider"> <input type="reset" class="btn btn-danger" name="reset" value="Réinitialiser"><span><?php echo $message; ?></span>
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

    /**
     * Fonction qui MODIFIE une OEUVRE
     * @access public
     * @author Gautier Piatek
     * @version 1.0
     */
    
    public function modifierOeuvre($aOeuvre, $aArrondissements, $idArtiste, $aArtistes, $aCategories, $aSousCategories, $erreurTitre, $message, $erreurTitre, $erreurTitreVariante, $erreurTechniqueAng, $erreurTechnique, $erreurTechniqueAng, $erreurDescription, $erreurAdresse, $erreurBatiment, $erreurParc, $erreurLatitude, $erreurLongitude, $erreurArrondissement, $erreurArtiste, $erreurCategorie, $erreurSousCategorie, $erreurMateriaux, $erreurMateriauxAng) {
        
        $idOeuvre = $aOeuvre['idOeuvre'];
        $titre = $aOeuvre['titreOeuvre'];
        $titreVariante = $aOeuvre['titreVariante'];
        $technique = $aOeuvre['technique'];
        $techniqueAng = $aOeuvre['techniqueAng'];
        $description = $aOeuvre['description'];
        $validation = $aOeuvre['validationOeuvre'];
        $adresse = $aOeuvre['adresseCivic'];
        $batiment = $aOeuvre['batiment'];
        $parc = $aOeuvre['parc'];
        $latitude = $aOeuvre['latitude'];
        $longitude = $aOeuvre['longitude'];
        $idArrondissement = $aOeuvre['idArrondissement'];
        $idCategorie = $aOeuvre['idCategorie'];
        $idSousCategorie = $aOeuvre['idSousCategorie'];
        $nomMateriaux = $aOeuvre['nomMateriaux'];
        $nomMateriauxAng = $aOeuvre['nomMateriauxAng'];
        
        ?>
       <div id="page-wrapper">
            
            <div class="row">
                <div class="col-lg-12"> 
                    <h1 class="page-header">Ajouter une Oeuvre</h1>
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
                            <form method="POST" role="form" action="index.php?requete=modifierOeuvre&idOeuvre=<?php echo $idOeuvre; ?>&action=valider" id ='formModifierOeuvre' name="formModifierOeuvre">

                                <div class="form-group">
                                    <label>Titre :</label>
                                    <input class="form-control" type="text" name="titre" id='titre' value="<?php echo $titre; ?>"><span><?php echo $erreurTitre;?></span>
                                    <span id="msjTitre" style="display:none">Veuillez saisir le titre de l'oeuvre</span>
                                </div>
                                <div class="form-group">
                                    <label>Titre (variante) :</label>
                                    <input class="form-control" type="text" name="titreVariante" id="titreVariante"  value="<?php echo $titreVariante; ?>"><span><?php echo $erreurTitreVariante;?></span>
                                    <span id="msjTitreVariante" style="display:none">Veuillez saisir le titre variante de l'oeuvre</span>
                                </div>
                                <div class="form-group">
                                    <label>Technique :</label>
                                    <input class="form-control" type="text" name="technique" id="technique" value="<?php echo $technique; ?>"><span><?php echo $erreurTechnique;?></span>
                                    <span id="msjTechnique" style="display:none">Veuillez saisir la technique de l'oeuvre</span>
                                </div>
                                <div class="form-group">
                                    <label>Technique (anglais):</label>
                                    <input class="form-control" type="text" name="techniqueAng" id="techniqueAng" value="<?php echo $techniqueAng; ?>"><span><?php echo $erreurTechniqueAng;?></span>
                                    <span id="msjTechniqueAng" style="display:none">Veuillez saisir la technique de l'oeuvre</span>
                                </div>
                                <div class="form-group">
                                    <label>Description :</label>
                                    <textarea class="form-control" rows="3" name="description" id="description"><?php echo $description; ?></textarea><span><?php echo $erreurDescription;?></span>
                                    <span id="msjDescription" style="display:none">Veuillez saisir la descirption de l'oeuvre</span>
                                </div>
                                <div class="form-group">
                                    <label>Validation :</label>
                                    <label class="radio-inline">
                                    <input type="radio" <?php if($validation == '1'){ echo "checked "; } ?> name="validation" value="1" id="validationOui">Oui
                                    </label>
                                    <label class="radio-inline">
                                    <input type="radio" <?php if($validation == '0'){ echo "checked "; } ?> name="validation" value="0" id="validationNon"> Non
                                    </label>
                                </div>
                                <div class="form-group">
                                <label>Adresse Civique :</label>
                                    <input class="form-control" type="text" name="adresse" id="adresse" value="<?php echo $adresse; ?>"><span><?php echo $erreurAdresse;?></span>
                                    <span id="msjAdresse" style="display:none">Veuillez saisir une adresse valide</span>
                                </div>
                                <div class="form-group">
                                    <label>Batiment :</label>
                                    <input class="form-control" type="text" name="batiment" id="batiment" value="<?php echo $batiment; ?>"><span><?php echo $erreurBatiment;?></span>
                                    <span id="msjBatiment" style="display:none">Veuillez saisir le nom de batiment</span>
                                </div>
                                <div class="form-group">
                                <label>Parc :</label>
                                      <input class="form-control" type="text" name="parc" id="parc" value="<?php echo $parc; ?>"><span><?php echo $erreurParc;?></span>
                                    <span id="msjParc" style="display:none">Veuillez saisir le nom du parc</span>
                                </div>
                                <div class="form-group">
                                <label>Latitude :</label>
                                     <input class="form-control" type="text" name="latitude" id="latitude" value="<?php echo $latitude; ?>"><span><?php echo $erreurLatitude;?></span>
                                    <span id="msjLatitude" style="display:none">Veuillez saisir la latitude</span>
                                </div>
                                <div class="form-group">
                                <label>Longitude :</label>
                                    <input class="form-control" type="text" name="longitude" id="longitude" value="<?php echo $longitude; ?>"><span><?php echo $erreurLongitude;?></span>
                                    <span id="msjLongitude" style="display:none">Veuillez saisir la longitude</span>
                                </div>
                                <div class="form-group">
                                <label>Arrondissement :</label>
                                    <select class="form-control" name="arrondissement" id="arrondissements"><br><span><?php echo $erreurArrondissement;?></span>
                                    <option value="nonChoisi">Choisir un Arrondissement</option><br>
                                <?php
                                foreach ($aArrondissements as $arrondissement) {
                                    echo "<option value='". $arrondissement->getidArrondissement() . "'";
                                    if($arrondissement->getidArrondissement() == $idArrondissement){
                                        echo " selected";
                                    }  
                                    echo ">".$arrondissement->getnomArrondissement()."</option>"; 
                                }
                            ?>
                               </select>
                                <span id="msjArrondissement" style="display:none">Veuillez choisir une option</span>
                                </div>
                                <div class="form-group">
                                   <label>Artiste/Collectif :</label>
                                   <select class="form-control" name="artiste" id="artiste_Collectif"><span><?php echo $erreurArtiste;?></span>
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
                                    </select>
                                    <span id="msjArtiste_Collectif" style="display:none">Veuillez choisir une option</span>
                                </div>
                                <div class="form-group">
                                   <label>Catégorie :</label>
                                   <select class="form-control" name="categorie" name="categories"><span><?php echo $erreurCategorie;?></span>
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
                                   </select>
                                    <span id="msjCategorie" style="display:none">Veuillez choisir une option</span>
                                </div>
                                <div class="form-group">
                                   <label>Sous-Catégorie :</label>
                                    <select class="form-control" name="sousCategorie" id="sous_categorie"><span><?php echo $erreurSousCategorie;?></span>
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
                                    </select>
                                    <span id="msjSous_categorie" style="display:none">Veuillez choisir une option</span>
                                </div>
                                <div class="form-group">
                                   <label>Matériaux :</label>
                                   <input class="form-control" type="text" name="materiaux" id="materiaux" value="<?php echo $nomMateriaux; ?>"><span><?php echo $erreurMateriaux;?></span>
                                    <span id="msjMateriaux" style="display:none">Veuillez saisir un material</span>
                                </div>
                                 <div class="form-group">
                                   <label>Matériaux (anglais) : </label>
                                    <input class="form-control" type="text" name="materiauxAng" id="materiauxAng" value="<?php echo $nomMateriauxAng; ?>"><span><?php echo $erreurMateriauxAng;?></span>
                                     <span id="msjMateriauxAng" style="display:none">Veuillez saisir un material</span>
                                </div>

                                <input type="button" onclick="validerFormModifierOeuvre()" class="btn btn-success" name="sauvegarder" value="Valider"> <input type="reset" class="btn btn-danger" name="reset" value="Réinitialiser"><span><?php echo $message; ?></span>
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



 
     /**-------------------------------------------------------------------ARTISTE---------------------------------------------------------------------------- **/
    
    /**
     * Affiche la page admin artistes
     * @access public
     * @author Gautier Piatek
     * @author German Mahecha
     * @version 1.0
     * 
     */
    public function afficheArtistes($aArtistes, $nbreArtistes) 
    { 
        
    ?>
    <div id="page-wrapper">
            
            <div class="row">
                <div class="col-lg-12"> 
                    <h1 class="page-header">Artistes</h1>
                </div>    
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2"> 
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <a href="index.php?requete=ajoutArtiste">
                                    <div class="col-xs-3">
                                        <button type="button" class="btn btn-success btn-circle btn-xl"><i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                                                   
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"> Ajouter un artiste</div>

                                    </div>
                                </a>
                            </div>
                        </div>
                           
                              
                                              
                    </div>
                </div>
                
                <div class="col-lg-4">
                   <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $nbreArtistes; ?> Artistes</div>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>  
            </div>
            
            
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Liste des Artistes
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           <?php if($aArtistes) { ?>
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-listeArtistes">
                                    <thead>
                                        <tr>
                                            <th>Prenom</th>
                                            <th>Nom</th>
                                            <th>Collectif</th>
                                            <th>Supprimer</th>
                                            <th>Modifier</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach($aArtistes as $artiste) {
                                        echo '<tr>';
                                        echo "<td>".$artiste->getPrenom()."</td>";
                                        echo "<td>".$artiste->getNom()."</td>";
                                        echo "<td>".$artiste->getCollectif()."</td>";
                                        echo '<td class="text-center"><a href="#" data-href="index.php?requete=supprimerArtistes&idArtiste='.$artiste->getIdArtiste().'" data-toggle="modal" data-target="#confirmer-effacer"><i class="fa fa-trash"></i></a></td>';    
                                        echo '<td class="text-center"><a href="index.php?requete=modifierArtiste&idArtiste='.$artiste->getIdArtiste().'"><i class="fa fa-pencil"></i></a></td>';   
                                        echo '</tr>';
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                             <?php
                            } else {
                                echo " Il n'y a pas d'artistes à afficher.";
                            }
                            ?>
                            <!-- /.table-responsive -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
           <!-- Source : https://stackoverflow.com/questions/8982295/confirm-delete-modal-dialog-with-twitter-bootstrap-->
            <div class="modal fade" id="confirmer-effacer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Confirmer la suppression</h4>
                        </div>

                        <div class="modal-body">
                            <p><strong>Vous allez effacer un artiste, cette procédure est irréversible !</strong></p>
                            <p><strong>Voulez-vous continuer ?</strong></p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                            <a class="btn btn-danger btn-ok">Supprimer</a>
                        </div>
                    </div>
                </div>
            </div>
            
    <?php
    }
    
    /**
     * Affiche lE FORMULAIRE pour AJOUTER ARTISTE
     * @access public
     * @author Jorge Blanco
     * @author Gautier Piatek
     */
    public function AjoutArtiste($message, $erreurPrenom, $erreurNom, $erreurCollectif, $erreurPhotoArtiste) 
    {
        ?>
        <div id="page-wrapper">
            
            <div class="row">
                <div class="col-lg-12"> 
                    <h1 class="page-header">Ajouter un Artiste</h1>
                </div>    
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Détails de l'artiste
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                    <div class="col-lg-6 col-lg-offset-3">   
                           <form method="POST" role="form" action="index.php?requete=ajoutArtiste&action=ajoutArtiste" id ='formAjoutArtiste' name="formAjoutArtiste">

                                <div class="form-group">
                                    <label>Prénom :</label>
                                    <input class="form-control" type="text" name="prenom" id="prenom"><span><?php echo $erreurPrenom;?></span>
                                    <span id="msjPrenom" style="display:none">Veuillez saisir votre prenom</span>
                                </div>
                                <div class="form-group">
                                    <label>Nom :</label>
                                    <input class="form-control" type="text" name="nom" id="nom"><span><?php echo $erreurNom;?></span>
                                    <span id="msjNom" style="display:none">Veuillez saisir votre nom</span>
                                </div>
                                <div class="form-group">
                                    <label>Collectif :</label>
                                    <input class="form-control" type="text" name="collectif" id="collectif"><span><?php echo $erreurCollectif;?></span>
                                    <span id="msjCollectif" style="display:none">Veuillez saisir le nom du collectif</span>
                                </div>
                                <div class="form-group">
                                    <label>Photo :</label>
                                    <input type="file" name="photoArtiste"><span><?php echo $erreurPhotoArtiste;?></span>
                                </div>
            
            <input type="button" onclick="validerFormAjoutArtiste()" class="btn btn-success" name="sauvegarder" value="Valider"> <input type="reset" class="btn btn-danger" name="reset" value="Réinitialiser"><span><?php echo $message; ?></span>
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


    /**
     * FUNCTION MODIFIER UN ARTISTE
     * @access public
     * @author Gautier Piatek
     */
    public function modifierUnArtiste($aArtiste, $message, $erreurPrenom, $erreurNom, $erreurCollectif, $erreurPhotoArtiste) 
    {   
        $idArtiste = $aArtiste['idArtiste'];
        $prenom = $aArtiste['prenom'];
        $nom = $aArtiste['nom'];
        $collectif = $aArtiste['collectif'];
        $photoArtiste = $aArtiste['photoArtiste'];
        ?>
        <div id="page-wrapper">
            
            <div class="row">
                <div class="col-lg-12"> 
                    <h1 class="page-header">Modifier un Artiste</h1>
                </div>    
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Détails de l'artiste
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                    <div class="col-lg-6 col-lg-offset-3">   
                           <form method="POST" role="form" action="index.php?requete=modifierArtiste&idArtiste=<?php echo $idArtiste; ?>&action=valider" id ='formModifierArtiste' name="formModifierArtiste">

                                <div class="form-group">
                                    <label>Prénom :</label>
                                    <input class="form-control" type="text" name="prenom" id="prenom" value="<?php echo $prenom; ?>"><span><?php echo $erreurPrenom;?>
                                    </span>
                                    <span id="msjPrenom" style="display:none">Veuillez saisir votre prenom</span>
                                </div>
                                <div class="form-group">
                                    <label>Nom :</label>
                                    <input class="form-control" type="text" name="nom" id="nom" value="<?php echo $nom; ?>"><span><?php echo $erreurNom;?></span>
                                    <span id="msjNom" style="display:none">Veuillez saisir votre nom</span>
                                </div>
                                <div class="form-group">
                                    <label>Collectif :</label>
                                    <input class="form-control" type="text" name="collectif" id="collectif" value="<?php echo $collectif; ?>"><span><?php echo $erreurCollectif;?></span>
                                    <span id="msjCollectif" style="display:none">Veuillez saisir le nom du collectif</span>
                                </div>
                                <div class="form-group">
                                    <label>Photo :</label>
                                    <input type="file" name="photoArtiste"><span><?php echo $erreurPhotoArtiste;?></span>
                                    
                                </div>
            
            <input  type="button" onclick="validerFormAmodifierArtiste()" class="btn btn-success" name="sauvegarder" value="Valider"> <input type="reset" class="btn btn-danger" name="reset" value="Réinitialiser"><span><?php echo $message; ?></span>
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







    /**--------------------------------------------------------------------CATÉGORIE---------------------------------------------------------------------------- **/

  /* Affiche la page admin catégories
     * @access public
     * @author Thuy Tien Vo
     * @author Gautier Piatek
     * @version 1.0
     * 
     */

    public function afficheCategories($aCategories, $nbreCategories) 
    { 
        
    ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12"> 
                <h1 class="page-header">Catégories</h1>

        <div class="row">
            <div class="col-lg-4 col-lg-offset-2"> 
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <a href="index.php?requete=ajoutCategorie">
                                <div class="col-xs-3">
                                    <button type="button" class="btn btn-success btn-circle btn-xl"><i class="fa fa-plus"></i></button>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"> Ajouter une catégorie</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                   <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-list fa-5x"></i>
                                </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $nbreCategories; ?> Catégories</div>
                                    </div>
                            </div>
                        </div>
                    </div>
            </div>  
        </div>

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Liste des catégories
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                       <?php if($aCategories) { ?>
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-liste">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Nom anglais</th>
                                        <th>Supprimer</th>
                                        <th>Modifier</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach($aCategories as $categorie) 
                                {
                                    echo '<tr>';
                                    echo "<td>".$categorie->getNomCategorie()."</td>";
                                    echo "<td>".$categorie-> getNomCatAng()."</td>";
                                    echo '<td class="text-center"><a href="#" data-href="index.php?requete=supprimerCategories&idCategorie='.$categorie->getIdCategorie().'" data-toggle="modal" data-target="#confirmer-effacer"><i class="fa fa-trash"></i></a></td>';
                                    echo '<td class="text-center"><a href="index.php?requete=modifierCategories&idCategorie='.$categorie->getIdCategorie().'"><i class="fa fa-pencil"></i></a></td>';   
                                    echo '</tr>';
                                }
                                ?>
                                </tbody>
                                </table>
                                </div>
                                <?php
                                } else {
                                    echo " Il n'y a pas de catégories à afficher.";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
        <!-- Source : https://stackoverflow.com/questions/8982295/confirm-delete-modal-dialog-with-twitter-bootstrap-->
            <div class="modal fade" id="confirmer-effacer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Confirmer la suppression</h4>
                        </div>

                        <div class="modal-body">
                            <p><strong>Vous allez effacer une catégorie, cette procédure est irréversible !</strong></p>
                            <p><strong>Voulez-vous continuer ?</strong></p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                            <a class="btn btn-danger btn-ok">Supprimer</a>
                        </div>
                    </div>
                </div>
            </div>

    <?php
    }





    /**
    * Affiche la page pour ajouter un CATÉGORIE
    * @access public
    * @author Thuy Tien Vo
    * @author Gautier Piatek
    */
    public function formulaireAjouterCategorie($message, $erreurNomCat, $erreurNomCatAng) 
    {   
       
         ?>
         
        <div id="page-wrapper">
            
            <div class="row">
                <div class="col-lg-12"> 
                    <h1 class="page-header">Ajouter une Catégorie</h1>
                </div>    
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Détails de la catégorie
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                    <div class="col-lg-6 col-lg-offset-3">   
                           <form method="POST" role="form" action="index.php?requete=ajoutCategorie&action=ajoutCategorie">

                                <div class="form-group">
                                    <label>Nom :</label>
                                    <input class="form-control" type="text" name="nomCategorie"><span><?php echo $erreurNomCat;?></span>
                                </div>
                                <div class="form-group">
                                    <label>Nom anglais :</label>
                                    <input class="form-control" type="text" name="nomCatAng"><span><?php echo $erreurNomCatAng;?></span>
                                </div>
                                
            
            <input type="submit" class="btn btn-success" name="sauvegarder" value="Valider"> <input type="reset" class="btn btn-danger" name="reset" value="Réinitialiser"><span><?php echo $message; ?></span>
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

   
    /**
     * Affiche une liste pour modifier les categories
     * @access public
     * @author German Mahecha
     * @author Gautier Piatek
     * @version 1.0
     */
    
    
    public function ModifierUneCategorie($aCategorie, $message, $erreurNomCat, $erreurNomCatAng)
    {
        $idCategorie = $aCategorie["idCategorie"];
        $nomCat = $aCategorie["nomCategorie"];
        $nomCatAng = $aCategorie["nomCatAng"];
        ?>
            <div id="page-wrapper">
            
            <div class="row">
                <div class="col-lg-12"> 
                    <h1 class="page-header">Ajouter une Catégorie</h1>
                </div>    
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Détails de la catégorie
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                    <div class="col-lg-6 col-lg-offset-3">   
                           <form method="POST" role="form" action="index.php?requete=modifierCategories&idCategorie=<?php echo $idCategorie; ?>&action=valider">

                                <div class="form-group">
                                    <label>Nom :</label>
                                    <input class="form-control" type="text" name="nomCategorie" value ="<?php echo $nomCat; ?>"><span><?php echo $erreurNomCat;?></span>
                                </div>
                                <div class="form-group">
                                    <label>Nom anglais :</label>
                                    <input class="form-control" type="text" name="nomCatAng" value ="<?php echo $nomCatAng; ?>"><span><?php echo $erreurNomCatAng;?></span>
                                </div>
                                
            
            <input type="submit" class="btn btn-success" name="sauvegarder" value="Valider"> <input type="reset" class="btn btn-danger" name="reset" value="Réinitialiser"><span><?php echo $message; ?></span>
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

    
    
    


   


    /**--------------------------------------------------------------------UTILISATEUR---------------------------------------------------------------------------- **/


     /**
     * Affiche la page admin Utilisateur
     * @access public
     * @author Gautier Piatek
     * @author German Mahecha
     * @version 1.0
     * 
     */
    public function afficheUtilisateurs($aUtilisateurs, $nbreUtilisateurs) 
    { 
        
    ?>
    <div id="page-wrapper">
            
            <div class="row">
                <div class="col-lg-12"> 
                    <h1 class="page-header">Utilisateurs</h1>
                </div>    
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2"> 
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <a href="index.php?requete=ajoutUtilisateur">
                                    <div class="col-xs-3">
                                        <button type="button" class="btn btn-success btn-circle btn-xl"><i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                                                   
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"> Ajouter un utilisateur</div>

                                    </div>
                                </a>
                            </div>
                        </div>
                           
                              
                                              
                    </div>
                </div>
                
                <div class="col-lg-4">
                   <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $nbreUtilisateurs; ?> Utilisateurs</div>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>  
            </div>
            
            
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Liste des Utilisateurs
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           <?php if($aUtilisateurs) { ?>
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-listeUtilisateurs">
                                    <thead>
                                        <tr>
                                            <th>Login</th>
                                            <th>Prenom</th>
                                            <th>Nom</th>
                                            <th>Courriel</th>
                                            <th>Supprimer</th>
                                            <th>Modifier</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach($aUtilisateurs as $utilisateur) {
                                        echo '<tr>';
                                        echo "<td>".$utilisateur->getLoginUtilisateur()."</td>";
                                        echo "<td>".$utilisateur->getPrenom()."</td>";
                                        echo "<td>".$utilisateur->getNom()."</td>";
                                        echo "<td>".$utilisateur->getCourriel()."</td>";
                                        echo '<td class="text-center"><a href="#" data-href="index.php?requete=supprimerUtilisateurs&idUtilisateur='.$utilisateur->getIdUtilisateur().'" data-toggle="modal" data-target="#confirmer-effacer"><i class="fa fa-trash"></i></a></td>';    
                                        echo '<td class="text-center"><a href="index.php?requete=modifierUtilisateur&idUtilisateur='.$utilisateur->getIdUtilisateur().'"><i class="fa fa-pencil"></i></a></td>';   
                                        echo '</tr>';
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php
                                } else {
                                    echo " Il n'y a pas d'utilisateurs à afficher.";
                                }
                                ?>
                            <!-- /.table-responsive -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
           <!-- Source : https://stackoverflow.com/questions/8982295/confirm-delete-modal-dialog-with-twitter-bootstrap-->
            <div class="modal fade" id="confirmer-effacer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Confirmer la suppression</h4>
                        </div>

                        <div class="modal-body">
                            <p><strong>Vous allez effacer un utilisateur, cette procédure est irréversible !</strong></p>
                            <p><strong>Voulez-vous continuer ?</strong></p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                            <a class="btn btn-danger btn-ok">Supprimer</a>
                        </div>
                    </div>
                </div>
            </div>
            
    <?php
    }

        
    /**
     * Affiche la page ajout UTILISATEUR
     * @access public
     * @author Thuy Tien Vo
     * @author  Jorge Blanco
     * @author Gautier Piatek
     */
    public function ajoutUtilisateur($message, $erreurPrenom, $erreurNom, $erreurLoginUtilisateur, $erreurPassUtilisateur, $erreurCourriel, $erreurTelephone, $erreurBio, $erreurPhotoArtiste) 
    {
        ?>
         <div id="page-wrapper">
            
            <div class="row">
                <div class="col-lg-12"> 
                    <h1 class="page-header">Ajouter un Utilisateur</h1>
                </div>    
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Détails de l'utilisateur
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                    <div class="col-lg-6 col-lg-offset-3">   
                           <form method="POST" role="form" action="index.php?requete=ajoutUtilisateur&action=ajoutUtilisateur">

                                <div class="form-group">
                                    <label>Prénom :</label>
                                    <input class="form-control" type="text" name="prenom"><span><?php echo $erreurPrenom;?></span>
                                </div>
                                <div class="form-group">
                                    <label>Nom :</label>
                                    <input class="form-control" type="text" name="nom"><span><?php echo $erreurNom;?></span>
                                </div>
                                <div class="form-group">
                                    <label>Login :</label>
                                    <input class="form-control" type="text" name="loginUtilisateur"><span><?php echo $erreurLoginUtilisateur;?></span>
                                </div>
                                <div class="form-group">
                                    <label>Mot de passe :</label>
                                    <input class="form-control" type="text" name="passUtilisateur"><span><?php echo $erreurPassUtilisateur;?></span>
                                </div>
                                <div class="form-group">
                                    <label>Courriel :</label>
                                    <input class="form-control" type="mail" name="courriel"><span><?php echo $erreurCourriel;?></span>
                                </div>
                                 <div class="form-group">
                                    <label>Téléphone :</label>
                                    <input class="form-control" type="phone" name="telephone"><span><?php echo $erreurTelephone;?></span>
                                </div>
                                <div class="form-group">
                                    <label>Bio :</label>
                                    <textarea class="form-control" name="bio" row="3"></textarea><span><?php echo $erreurBio;?></span>
                                </div>
                                <div class="form-group">
                                    <label>Photo :</label>
                                    <input type="file" name="photoUtilisateur"><span><?php echo $erreurPhotoArtiste;?></span>
                                </div>
            
            <input type="submit" class="btn btn-success" name="sauvegarder" value="Valider"> <input type="reset" class="btn btn-danger" name="reset" value="Réinitialiser"><span><?php echo $message; ?></span>
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



     /**
     * Affiche une liste pour modifier les utilisateurs
     * @access public
     * @author Jorge Blanco
     * @author Gautier Piatek
     * @version 1.0
     */
    
    public function modifierUtilisateur($aUtilisateur, $message, $erreurPrenom, $erreurNom, $erreurLoginUtilisateur, $erreurPassUtilisateur, $erreurCourriel, $erreurTelephone, $erreurBio, $erreurPhotoArtiste)
    {
        $idUtilisateur = $aUtilisateur['idUtilisateur']; 
        $prenom = $aUtilisateur['prenomUtil']; 
        $nom = $aUtilisateur['nomUtil'];
        $login = $aUtilisateur['loginUtilisateur'];
        $courriel = $aUtilisateur['courrielUtil'];
        $telephone = $aUtilisateur['TelUtil'];
        $bio = $aUtilisateur['bio'];
        $photo = $aUtilisateur['photoUtilisateur'];
        ?>
            <div id="page-wrapper">
            
            <div class="row">
                <div class="col-lg-12"> 
                    <h1 class="page-header">Modifier un Utilisateur</h1>
                </div>    
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Détails de l'utilisateur
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                    <div class="col-lg-6 col-lg-offset-3">   
                           <form method="POST" role="form" action="index.php?requete=modifierUtilisateur&idUtilisateur=<?php echo $idUtilisateur; ?>&action=valider">

                                <div class="form-group">
                                    <label>Prénom :</label>
                                    <input class="form-control" type="text" name="prenom" value="<?php echo $prenom; ?>"><span><?php echo $erreurPrenom;?></span>
                                </div>
                                <div class="form-group">
                                    <label>Nom :</label>
                                    <input class="form-control" type="text" name="nom" value="<?php echo $nom; ?>"><span><?php echo $erreurNom;?></span>
                                </div>
                                <div class="form-group">
                                    <label>Login :</label>
                                    <input class="form-control" type="text" name="loginUtilisateur" value="<?php echo $login; ?>"><span><?php echo $erreurLoginUtilisateur;?></span>
                                </div>
                                <div class="form-group">
                                    <label>Mot de passe :</label>
                                    <input class="form-control" type="text" name="passUtilisateur" placeholder="Entrez le nouveau mot de passe"><span><?php echo $erreurPassUtilisateur;?></span>
                                </div>
                                <div class="form-group">
                                    <label>Courriel :</label>
                                    <input class="form-control" type="mail" name="courriel" value="<?php echo $courriel; ?>"><span><?php echo $erreurCourriel;?></span>
                                </div>
                                 <div class="form-group">
                                    <label>Téléphone :</label>
                                    <input class="form-control" type="phone" name="telephone" value="<?php echo $telephone; ?>"><span><?php echo $erreurTelephone;?></span>
                                </div>
                                <div class="form-group">
                                    <label>Bio :</label>
                                    <textarea class="form-control" name="bio" row="3"><?php echo $bio; ?></textarea><span><?php echo $erreurCourriel;?></span>
                                </div>
                                <div class="form-group">
                                    <label>Photo :</label>
                                    <input type="file" name="photoUtilisateur" value="<?php echo $photo; ?>"><span><?php echo $erreurPhotoArtiste;?></span>
                                </div>
            
            <input type="submit" class="btn btn-success" name="sauvegarder" value="Valider"> <input type="reset" class="btn btn-danger" name="reset" value="Réinitialiser"><span><?php echo $message; ?></span>
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


    




    
    /**-------------------------------------------------------------------ADMIN/MODERATEUR---------------------------------------------------------------------------- **/
    
    /**
     * Fonction qui affiche la liste ADMIN/MODERATEUR
     * @access public
     * @author Gautier Piatek
     * @author Jorge Blanco
     * @version 1.0
     */
    
    public function afficheAdminMods($aAdminMods, $nbreAdminMods)
    {
        ?>
        <div id="page-wrapper">
            
            <div class="row">
                <div class="col-lg-12"> 
                    <h1 class="page-header">Administrateurs et Modérateurs</h1>
                </div>    
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2"> 
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <a href="index.php?requete=ajoutAdminMod">
                                    <div class="col-xs-3">
                                        <button type="button" class="btn btn-success btn-circle btn-xl"><i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                                                   
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"> Ajouter un administrateur</div>

                                    </div>
                                </a>
                            </div>
                        </div>
                           
                              
                                              
                    </div>
                </div>
                
                <div class="col-lg-4">
                   <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $nbreAdminMods; ?> Administrateurs</div>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>  
            </div>
            
            
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Liste des Administrateurs et Modérateurs
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           <?php if($aAdminMods) { ?>
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-liste">
                                    <thead>
                                        <tr>
                                            <th>Login</th>
                                            <th>Rôle</th>
                                            <th>Supprimer</th>
                                            <th>Modifier</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach($aAdminMods as $adminmod) {
                                        echo '<tr>';
                                        echo "<td>".$adminmod->getLogin()."</td>";
                                        echo "<td>";
                                        if($adminmod->getRole() == 1){
                                            echo "Administrateur";
                                        } else {
                                            echo "Modérateur";
                                        } 
                                        echo "</td>";
                                        echo '<td class="text-center"><a href="#" data-href="index.php?requete=supprimerAdminMod&idAdMod='.$adminmod->getIdAdMod().'" data-toggle="modal" data-target="#confirmer-effacer"><i class="fa fa-trash"></i></a></td>';    
                                        echo '<td class="text-center"><a href="index.php?requete=modifierAdminMod&idAdMod='.$adminmod->getIdAdMod().'"><i class="fa fa-pencil"></i></a></td>';   
                                        echo '</tr>';
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                             <?php
                                } else {
                                    echo " Il n'y a pas d'administrateurs à afficher.";
                                }
                                ?>
                            <!-- /.table-responsive -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
           <!-- Source : https://stackoverflow.com/questions/8982295/confirm-delete-modal-dialog-with-twitter-bootstrap-->
            <div class="modal fade" id="confirmer-effacer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Confirmer la suppression</h4>
                        </div>

                        <div class="modal-body">
                            <p><strong>Vous allez effacer un administrateur, cette procédure est irréversible !</strong></p>
                            <p><strong>Voulez-vous continuer ?</strong></p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                            <a class="btn btn-danger btn-ok">Supprimer</a>
                        </div>
                    </div>
                </div>
            </div>
        
        <div>
            <?php
    }
    /**
     * Fonction qui montre le FORMULAIRE pour ajouter ADMIN/MODERATEUR
     * @access public
     * @author Jorge Blanco
     * @author Gautier Piatek
     * @version 1.0
     */
    
    public function AjoutAdminMod($message, $erreurLogin, $erreurPass, $erreurRole)
    {
        ?>
        
        <div id="page-wrapper">
            
            <div class="row">
                <div class="col-lg-12"> 
                    <h1 class="page-header">Ajouter un Administrateur</h1>
                </div>    
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Détails de l'administrateur
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                    <div class="col-lg-6 col-lg-offset-3">   
                           <form method="POST" role="form" action="index.php?requete=ajoutAdminMod&action=ajoutAdminMod">

                                <div class="form-group">
                                    <label>Login :</label>
                                    <input class="form-control" type="text" name="login"><span><?php echo $erreurLogin;?></span>
                                </div>
                                <div class="form-group">
                                    <label>Mot de passe :</label>
                                    <input class="form-control" type="text" name="pass"><span><?php echo $erreurPass;?></span>
                                </div>
                               
                                <div class="form-group">
                                <label>Rôle :</label>
                                    <select class="form-control" name="role"><br><span><?php echo $erreurRole;?></span>
                                    <option value="nonChoisi">Choisir un rôle</option><br>
                                    <option value="1">Administrateur</option>
                                    <option value="0">Modérateur</option>
                               </select>
                                </div>
                                

                                <input type="submit" class="btn btn-success" name="sauvegarder" value="Valider"> <input type="reset" class="btn btn-danger" name="reset" value="Réinitialiser"><span><?php echo $message; ?></span>
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
    

    /**
     * Fonction qui modifie un ADMIN/MODERATEUR
     * @access public
     * @author Jorge Blanco
     * @author Gautier Piatek
     * @version 1.0
     */
    
    public function modifierUnAdmin_moderateur($aAdmin_moderateur, $message, $erreurLogin, $erreurPass, $erreurRole)
    {
        $idAdMod = $aAdmin_moderateur['idAdMod'];
        $role = $aAdmin_moderateur['role'];
        $login = $aAdmin_moderateur['login'];
        
        ?>
        <div id="page-wrapper">
            
            <div class="row">
                <div class="col-lg-12"> 
                    <h1 class="page-header">Modifier un Administrateur</h1>
                </div>    
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Détails de l'administrateur
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                    <div class="col-lg-6 col-lg-offset-3">   
                           <form method="POST" role="form" action="index.php?requete=modifierAdminMod&idAdMod=<?php echo $idAdMod; ?>&action=valider">

                                <div class="form-group">
                                    <label>Login :</label>
                                    <input class="form-control" type="text" name="login" value="<?php echo $login; ?>"><span><?php echo $erreurLogin;?></span>
                                </div>
                                <div class="form-group">
                                    <label>Mot de passe :</label>
                                    <input class="form-control" type="text" name="pass" placeholder="Entrez le nouveau mot de passe"><span><?php echo $erreurPass;?></span>
                                </div>
                               
                                <div class="form-group">
                                <label>Rôle :</label>
                                    <select class="form-control" name="role"><br><span><?php echo $erreurRole;?></span>
                                        <option value="nonChoisi">Choisir un rôle</option><br>
                                        <option value="1" <?php if($role == 1) { echo "selected"; }?>>Administrateur</option>
                                        <option value="0" <?php if($role == 0) { echo "selected"; }?>>Modérateur</option>
                                   </select>
                                </div>
                                

                                <input type="submit" class="btn btn-success" name="sauvegarder" value="Valider"> <input type="reset" class="btn btn-danger" name="reset" value="Réinitialiser"><span><?php echo $message; ?></span>
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

    

    /**--------------------------------------------------------GESTION BDD --------------------------------------**/
    
     /**
     * Fonction qui affiche la gestion BDD
     * @access public
     * @author Gautier Piatek
     * @version 1.0
     */

    public function afficheGestionBDD($message, $date)
    {
    ?>
    
    <div id="page-wrapper">    
            
            <div class="row">
                <div class="col-lg-12"> 
                    <h1 class="page-header">Gestion Base de données</h1>
                </div>    
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Mettre à jour la Base de données
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="alert alert-success col-lg-6 col-lg-offset-2">
                                            Dernière mise à jour : <?php echo $date; ?>
                                </div> 
                                <div class="col-lg-6 col-lg-offset-2">  
                                    
                                    <form method="POST" role="form" action="index.php?requete=miseajourjson">    
                                            <input type="submit" class="btn btn-success" name="majBDD" value="Mettre à jour"><span><?php echo $message; ?></span>
                                        
                                        
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
    
   /**--------------------------------------------------------MODERATION --------------------------------------**/ 
    
     /**
     * Fonction qui affiche la modération des photos
     * @access public
     * @author Gautier Piatek
     * @version 1.0
     */

    public function afficheModPhotos($aPhotosAValider, $nbrePhotosNonValides)
    {
       
    ?>
    <div id="page-wrapper">
            
            <div class="row">
                <div class="col-lg-12"> 
                    <h1 class="page-header">Modération des photos</h1>
                </div>    
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">
                
            <div class="col-lg-4 col-lg-offset-6">
                   <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-picture-o fa-5x"></i>
                                </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $nbrePhotosNonValides ?> Photos</div>
                                    </div>
                            </div>
                        </div>
                    </div>
            </div>  
        </div>

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Liste des photos
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                           <?php if($aPhotosAValider) { ?>
                           <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-listeUtilisateurs">
                                <thead>
                                    <tr>
                                        <th>Utilisateur</th>
                                        <th>Photo</th>
                                        <th>Oeuvre</th>
                                        <th>Date</th>
                                        <th>Supprimer</th>
                                        <th>Valider</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                
                                    foreach($aPhotosAValider as $photo) 
                                    {
                                        echo '<tr>';
                                        echo '<td>'. $photo[0].'</td>';
                                        echo '<td>'. $photo[3].'</td>';
                                        echo '<td>'. $photo[4].'</td>';
                                        echo '<td>'. $photo[1].'</td>';
                                        echo '<td class="text-center"><a href="#" data-href="index.php?requete=supprimerPhoto&idPhoto='.$photo[2].'" data-toggle="modal" data-target="#confirmer-effacer"><i class="fa fa-trash"></i></a></td>';  
                                        echo '<td class="text-center"><a href="index.php?requete=validerPhoto&idPhoto='. $photo[2] .'"><i class="fa fa-check"></i></a></td>'; 
                                        echo'</tr>'; 

                                    }
                                
                                
                                ?>
                                </tbody>
                            </table>
                        </div>
                        <?php
                        } else {
                            echo " Il n'y a pas de photos à valider.";
                        }
                        ?>
                        <!-- /.table-responsive -->
                    </div>
                </div>
            </div>
        </div>
    </div>     
    
    <!-- Source : https://stackoverflow.com/questions/8982295/confirm-delete-modal-dialog-with-twitter-bootstrap-->
            <div class="modal fade" id="confirmer-effacer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Confirmer la suppression</h4>
                        </div>

                        <div class="modal-body">
                            <p><strong>Vous allez effacer une photo, cette procédure est irréversible !</strong></p>
                            <p><strong>Voulez-vous continuer ?</strong></p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                            <a class="btn btn-danger btn-ok">Supprimer</a>
                        </div>
                    </div>
                </div>
            </div>
        
        <div>
    <?php
    }
    
    /**
     * Fonction qui affiche une liste de commentaires
     * @access public
     * @author Thuy Tien Vo
     * @version 1.0
     */

    public function afficheModCommentaires($aCommentairesAValider, $nbreCommentairesNonValides) 
    { 
       
    ?>
    <div id="page-wrapper">
            
            <div class="row">
                <div class="col-lg-12"> 
                    <h1 class="page-header">Modération des commentaires</h1>
                </div>    
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">
                
            <div class="col-lg-4 col-lg-offset-6">
                   <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comment fa-5x"></i>
                                </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $nbreCommentairesNonValides ?> Commentaires</div>
                                    </div>
                            </div>
                        </div>
                    </div>
            </div>  
        </div>

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Liste des commentaires
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                       <?php if($aCommentairesAValider) { ?>
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-listeArtistes">
                                <thead>
                                    <tr>
                                        <th>Utilisateur</th>

                                        <th>Commentaire</th>

                                        <th>Date</th>

                                        <th>Supprimer</th>

                                        <th>Valider</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                
                                    foreach($aCommentairesAValider as $commentaire) 
                                    {
                                        echo '<tr>';
                                        echo '<td>'. $commentaire[0].'</td>';
                                        echo '<td>'. $commentaire[3].'</td>';
                                        echo '<td>'. $commentaire[1].'</td>';
                                        echo '<td class="text-center"><a href="#" data-href="index.php?requete=supprimerCommentaire&idCommentaire='.$commentaire[2].'" data-toggle="modal" data-target="#confirmer-effacer"><i class="fa fa-trash"></i></a></td>';  
                                        echo '<td class="text-center"><a href="index.php?requete=validerCommentaire&idCommentaire='. $commentaire[2] .'"><i class="fa fa-check"></i></a></td>'; 
                                        echo'</tr>'; 

                                    }
                                
                                
                                ?>
                                </tbody>
                            </table>
                        </div>
                        <?php
                        } else {
                            echo " Il n'y a pas de commentaires à valider.";
                        }
                        ?>
                        <!-- /.table-responsive -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Source : https://stackoverflow.com/questions/8982295/confirm-delete-modal-dialog-with-twitter-bootstrap-->
            <div class="modal fade" id="confirmer-effacer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Confirmer la suppression</h4>
                        </div>

                        <div class="modal-body">
                            <p><strong>Vous allez effacer une photo, cette procédure est irréversible !</strong></p>
                            <p><strong>Voulez-vous continuer ?</strong></p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                            <a class="btn btn-danger btn-ok">Supprimer</a>
                        </div>
                    </div>
                </div>
            </div>
        
        <div>
    <?php
    }
}