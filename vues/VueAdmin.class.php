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
                <link rel="stylesheet" href="css/main.css">
                
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
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
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
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Rechercher...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php?requete=adminPanel"><i class="fa fa-dashboard fa-fw"></i> Tableau de bord</a>
                        </li>
                        <li>
                            <a href="index.php?requete=afficheOeuvres"><i class="fa fa-paint-brush fa-fw"></i> Oeuvres</a>
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-users fa-fw"></i> Artistes</a>
                        </li>
                        <li>
                            <a href="index.php?requete=afficheCategories"><i class="fa fa-list fa-fw"></i> Catégories</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Utilisateurs</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Modération<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class="fa fa-picture-o fa-fw"></i> Photos</a>
                                </li>
                                <li>
                                    <a href="index.php?requete=afficheCommentaires"><i class="fa fa-comment fa-fw"></i> Commentaires</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-unlock-alt fa-fw"></i> Administrateurs<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class="fa fa-wrench fa-fw"></i> Gestion</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-download fa-fw"></i> Base de données</a>
                                </li>
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
    public function afficheGestion($nbreOeuvres, $nbreArtistes, $nbreUtilisateurs) {
    
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
                        <a href="#">
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
                        <a href="#">
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
                                    <div class="huge">13</div>
                                    <div>Photos</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
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
                            <i class="fa fa-bell fa-fw"></i> Notifications Panel
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
        /*var_dump($aOeuvres);*/
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
                                        echo '<td class="text-center"><a href="index.php?requete=supprimerOeuvres&idOeuvre='.$oeuvre->getIdOeuvre().'"><i class="fa fa-trash"></i></a></td>';    
                                        echo '<td class="text-center"><a href="index.php?requete=modifierOeuvres&idOeuvre='.$oeuvre->getIdOeuvre().'"><i class="fa fa-pencil"></i></a></td>';   
                                        echo '</tr>';
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
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
                                    echo "<option value='".$sousCategorie->getidSousCategorie()."'>".$sousCategorie->getnomSousCategorie()."</option>"; 
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
     * Afficher un liste MODIFIER DES OEUVRES
     * @access public
     * @author German Mahecha
     */
    
    public function afficheListeModifierOeuvres($aOeuvres)
    {
        ?>
            <h2 id='titreA'>Modifier nos Oeuvres</h2>
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
                echo "<th>Modifier</th> ";
                echo "</tr>";
                    foreach($aOeuvres as $oeuvre) {
                        echo "<tr>";
                        $idOeuvre = $oeuvre->getIdOeuvre();
                        echo "<td><span class='icon-blackboard'></span>";
                        echo "<td>".$oeuvre->getTitreOeuvre()."</td>" ;
                                               
                       if($oeuvre->getCollectif() =="") {
                          echo "<td>".$oeuvre->getNomArtiste()." ".$oeuvre->getPrenomArtiste()."</td>" ;
                       } else {
                           echo "<td>".$oeuvre->getCollectif()."</td>" ;
                       }
                       
                        echo "<td>".$oeuvre->getNomArrondissement()."</td>" ;
                        echo "<td><a href='index.php?requete=modifierOeuvre&idOeuvre=$idOeuvre'><span class='icon-edit'></span></a></td>";
                        echo "</tr>";
                    }
                echo "</table>";
                echo "</div>";
            echo "</section> ";
       echo "</div>";
    }


    /**
     * Affiche Liste  pour supprimer des OEUVRES
     * @access public
     * @author German Mahecha
     * @version 1.0
     */
    
     public function afficheListeSupprimerOeuvres($aOeuvres)
     {
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
                echo "<th>Supprimer</th>    ";
                echo "</tr>";
                    foreach($aOeuvres as $oeuvre) {
                        echo "<tr>";
                        $idOeuvre = $oeuvre->getIdOeuvre();
                        echo "<td><span class='icon-blackboard'></span>";
                        echo "<td>".$oeuvre->getTitreOeuvre()."</td>" ;
                                               
                       if($oeuvre->getCollectif() =="") {
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
     * Fonction qui MODIFIE une OEUVRE
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



 
     /**-------------------------------------------------------------------ARTISTE---------------------------------------------------------------------------- **/
    
    /**
     * Affiche lE FORMULAIRE pour AJOUTER ARTISTE
     * @access public
     * @author Jorge Blanco
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
     * Affiche une liste pour modifier les artistes
     *@access public
     *@author German Mahecha
     *@version 1.0
     */
    public function afficheListeModifierArtistes($aArtistes)
    {
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
     * Affiche une liste pour supprimer les artistes
     * @access public
     * @author German Mahecha
     * @version 1.0
     */
    
    public function afficheListeSupprimerArtistes($aArtistes)
    {
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
     * FUNCTION MODIFIER UN ARTISTE
     * @access public
     * @author Gautier Piatek
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







    /**--------------------------------------------------------------------CATÉGORIE---------------------------------------------------------------------------- **/

   /* Affiche la page admin catégories
     * @access public
     * @author Thuy Tien Vo
     * @version 1.0
     * 
     */

    public function afficheCategories($aCategories) 
    { 
        /*var_dump($aOeuvres);*/
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
                            <a href="index.php?requete=ajouterUnCategorie&action=ajoutCategorie">
                                <div class="col-xs-3">
                                    <button type="button" class="btn btn-success btn-circle btn-xl"><i class="fa fa-plus"></i></button>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"> Ajouter un catégorie</div>
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
                                        <div class="huge"><?php  ?> Catégorie</div>
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
                        Liste des catégorie
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-liste">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Name</th>
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
                                    echo '<td class="text-center"><a href="index.php?requete=supprimerCategories&idCategorie=$idCategorie='.$categorie->getIdCategorie().'"><i class="fa fa-trash"></i></a></td>';    
                                    echo '<td class="text-center"><a href="index.php?requete=modifierCategories&idCategorie=$idCategorie='.$categorie->getIdCategorie().'"><i class="fa fa-pencil"></i></a></td>';   
                                    echo '</tr>';
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
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
    */
    public function formulaireAjouterCategorie() 
    {   
       
         ?>
     
         <h2 id="titreAdm">Ajouter un categorie</h2>
           <div class="formulaireAd1">
       
         <form method="POST" action="index.php?requete=ajouterUnCategorie&action=ajoutCategorie">
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

   
    /**
     * Affiche une liste pour modifier les categories
     * @access public
     * @author German Mahecha
     * @version 1.0
     */
    
    
    public function afficheListeModifierCategories($aCategories)
    {
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
                echo "<th>Modifier</th> ";
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
     * Affiche une liste pour suprimer les categories
     * @access public
     * @author German Mahecha
     * @version 1.0
     */
    
    public function afficheListeSupprimerCategories($aCategories)
    {
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
                echo "<th>Supprimer</th>    ";
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

        /**
     * Affiche la page pour modifier une CATÉGORIE
     * @access public
     * @author Gautier Piatek
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
    


   


    /**--------------------------------------------------------------------UTILISATEUR---------------------------------------------------------------------------- **/

        /**
     * Fonction qui affiche un utilisateur 
     * @access public
     * @author Jorge Blanco
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
     * Afficher un liste d'UTILISATEUR
     * @access public
     * @author Jorge Blanco
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
                
                foreach($aUtilisateurs as $utilisateur) 
                {
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
     * Affiche la page d'inscription UTILISATEUR
     * @access public
     * @author Thuy Tien Vo(formulaire/CSS)
     * @author  Jorge Blanco
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
     * Affiche une liste pour modifier les utilisateurs
     * @access public
     * @author German Mahecha
     * @version 1.0
     */
    
    public function afficheListeModifierUtilisateurs($aUtilisateurs, $message)
    {
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
     * Affiche une liste pour supprimer les utilisateurs
     * @access public
     * @author German Mahecha
     * @version 1.0
     */
    
    public function afficheListeSupprimerUtilisateurs($aUtilisateurs)
    {
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
                echo "<th>Supprimer</th>    ";
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


    /*
     * Fonction qui modifie un UTILISATEUR 
     * @access public
     * @author Jorge Blanco
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
    
    




    
    /**-------------------------------------------------------------------ADMIN/MODERATEUR---------------------------------------------------------------------------- **/
    
    


    /**
     * Fonction qui montre le FORMULAIRE pour ajouter ADMIN/MODERATEUR
     * @access public
     * @author Jorge Blanco
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
     * Afficher un liste dE MODIFIER ADMIN/MODERATEUR
     * @access public
     * @author Jorge Blanco
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
     * Afficher un liste dE SUPPRIMER ADMIN/MODERATEUR
     * @access public
     * @author Jorge Blanco
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
     * Fonction qui modifie un ADMIN/MODERATEUR
     * @access public
     * @author Jorge Blanco
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


       public function afficheCommentaires() 
    { 
       
    ?>



    

            <div class="col-lg-4">
                   <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-paint-brush fa-5x"></i>
                                </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php  ?> Commentaire</div>
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
                        Liste des commentaire
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-liste">
                                <thead>
                                    <tr>
                                        <th>Utilisateur</th>

                                        <th>Commentaire</th>

                                        <th>Date</th>

                                        <th>Valider</th>

                                        <th>Supprimer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php

                                //foreach($aCommentaires as $commentaire) 
                              
                                {
                                    echo '<tr>';
                                    echo'<td>';
                                    echo'<td>';
                                    echo'<td>';
                                    echo '<td class="text-center"><a href=""><i class="fa fa-pencil"></i></a></td>';  
                                    echo '<td class="text-center"><a href=""><i class="fa fa-trash"></i></a></td>'; 
                                    echo'</tr>'; 

                                    echo '<tr>';
                                    echo'<td>';
                                    echo'<td>';
                                    echo'<td>';
                                    echo '<td class="text-center"><a href=""><i class="fa fa-pencil"></i></a></td>';  
                                    echo '<td class="text-center"><a href=""><i class="fa fa-trash"></i></a></td>'; 
                                    echo '</tr>';
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                </div>
            </div>
        </div>

    <?php
    }








}


