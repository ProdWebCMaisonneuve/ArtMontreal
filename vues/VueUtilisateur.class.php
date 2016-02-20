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

class VueUtilisateur 
{   
    /**
    * Affiche la page pour profil utilisateur
    * @access public
    * @auteure: German Mahecha
    */
    public function afficherProfilUtilisateur($utilisateur)
    {
        $idUtilisateur=$utilisateur["idUtilisateur"];
        $loginUtil=$utilisateur["loginUtilisateur"];
        $nomUtil=$utilisateur["nomUtil"];
        $prenomUtil=$utilisateur["prenomUtil"];
        $courrielUtil=$utilisateur["courrielUtil"];
        $telephoneUtil=$utilisateur["TelUtil"];
        $bioUtil=$utilisateur["bio"];
        $photoUtil=$utilisateur["photoUtilisateur"];
                  
        //var_dump($utilisateur);
         ?>
        <div class="container-fluid text-center">    
          <div class="row">
            <div class="col-xm-12 col-sm-4 col-md-4 col-lg-3 well">

                <div class="panel panel-info">
                  <div class="panel-heading"> <h3><span class="glyphicon glyphicon-user"></span><?php echo " ".$loginUtil;?></h3></div>
                  <div class="panel-body">
                      <img src="photos/utilisateurs/<?php echo $photoUtil;?>" class="img-circle" height="150" width="150" alt="Avatar"><hr>
                      <p><strong><?php echo $prenomUtil.' '.$nomUtil;?></strong></p><hr>
                      <p><span class="glyphicon glyphicon-envelope"></span><?php echo " ".$courrielUtil;?></p>
                       <p><span class="glyphicon glyphicon-earphone"></span><?php echo " ".$telephoneUtil;?></p><hr>
                       <p><?php echo $bioUtil;?></p><hr>
                        <div class="btn-group">
                          <a class="btn btn-primary" href="index.php?requete=profilUtilisateurConnexion"><span class="glyphicon glyphicon-user"></span>  Ton Profil</a>
                          <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                          <br/><ul class="dropdown-menu">
                            <li><a href="index.php?requete=modifierProfilUtilisateur&idUtilisateur=<?php echo $idUtilisateur; ?>">Éditer profil</a></li>
                            <li class="divider"></li>
                            <li><a href='deconnexion.php'><span class='icon-log-out'></span> Fermer session</a></li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
            
        <?php
    }
    
    /**
    * Affiche la page pour photos d'un utilisateur
    * @access public
    * @auteure: German Mahecha
    */
    public function afficherPhotosUtilisateur($photos)
    {
        //var_dump($photos);
        ?>
            <div class="col-sm-12 col-sm-8 col-md-8 col-lg-9 ">
                <div class="panel panel-info">
                  <div class="panel-heading"><h4>Mes Photos</h4></div>
                      <div class="panel-body">
                      <?php
                            if(!$photos)
                            {
                                echo "Aucune photo validée pour afficher";
                            }
                            else
                            {
                                foreach($photos as $photo){
                                    echo "<div class='col-sm-6 col-lg-3 col-md-4'>";
                                        echo "<div class='thumbnail'>";
                                            echo "<img src=".$photo[1]." class='img-thumbnail img-responsive' style='width:150px;height:150px' alt=''>";
                                            echo "<div class='caption'>";
                                                echo "<p><span class='glyphicon glyphicon glyphicon-comment'></span>".$photo[3]."</p>";
                                                echo "<p><span class='glyphicon glyphicon-thumbs-up'></span>".$photo[4]."</p>";
                                                echo "<a class='btn btn-primary' href='index.php?requete=detailsPhotoUtilisateur&idPhoto=".$photo[0]."'><span class='glyphicon glyphicon-eye-open'></span> Voir details</a>";
                                            echo "</div>";
                                        echo "</div>";  
                                    echo "</div>";  
                                }
                            }
                        ?>
                    </div>
                </div>
            
       <?php 
    }
    
    /**
    * Affiche les meilleures photos valides du concours
    * @access public
    * @auteure: German Mahecha
    */
    public function afficherMeilleuresPhotos($photos)
    {
        //var_dump($photos);
        ?>
            
                <div class="panel panel-success">
                  <div class="panel-heading"><h4>Les meilleures Photos du concours</h4></div>
                      <div class="panel-body">
                      <?php
                            if(!$photos){
                                echo "Aucune photo validée pour afficher";
                            }
                            else{
                                foreach($photos as $photo){
                                    echo "<div class='col-sm-6 col-lg-3 col-md-4'>";
                                        echo "<div class='thumbnail'>";
                                            echo "<img src=".$photo[1]." class='img-thumbnail img-responsive' style='width:150px;height:150px' alt=''>";
                                            echo "<div class='caption'>";
                                                echo "<p><span class='glyphicon glyphicon glyphicon-comment'></span>".$photo[3]."</p>";
                                                echo "<p><span class='glyphicon glyphicon-thumbs-up'></span>".$photo[4]."</p>";
                                                echo "<a class='btn btn-primary' href='index.php?requete=detailsPhotoUtilisateur&idPhoto=".$photo[0]."'><span class='glyphicon glyphicon-eye-open'></span> Voir details</a>";
                                            echo "</div>";
                                        echo "</div>";  
                                    echo "</div>";  
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
          
       <?php 
    }
    
    
    
    
    /**
    * Affiche la page pour soumettre une photo utilisateur
    * @access public
    * @auteure: German Mahecha
    */
    /**
    * Affiche la page pour soumettre une photo utilisateur
    * @access public
    * @auteure: German Mahecha
    */
    public function afficherPropositionPhotosUtilisateur($idUtil, $oeuvre)
    {
         ?>
            <div class="col-xm-12 col-sm-8 col-md-8 col-lg-9">  

              <div class="panel panel-info">
                  <div class="panel-heading"><h4>Ajouter photo pour l'oeuvre: <?php echo $oeuvre['titreOeuvre']; ?></h4></div>
                  <div class="panel-body">
                        <div class="col-sm-6 col-lg-3 col-md-4">
                            <div class="thumbnail">
                                <img src="images/img_2.jpg" alt="">
                                <h3><strong><?php echo $oeuvre['titreOeuvre']; ?></strong></h3>
                            </div>
                        </div>
                          <div class="col-sm-6 col-lg-6 col-md-4 text-left">
                                <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="index.php?requete=propositionPhotoUtilisateur&action=ajoutPhoto">
                                    <div class="form-group">
                                        <input type="hidden" id="idUtil" name='idUtil' value='<?php echo $idUtil; ?>'/>
                                        <input type="hidden" id="idOeuvre" name='idOeuvre' value='<?php echo $oeuvre['idOeuvre']; ?>'/>
                                    </div>
                                    <div class="form-group">
                                        <label for="photo" class="control-label">Photo:</label>
                                        <input type='file' name="imagen" id="imagen">
                                    </div><br/><br/>
                                    <button type="submit" class="btn btn-primary btn-lg" name="photoPropose" value="photoPropose">Ajouter</button>
                                    <button type="reset" class="btn btn-default btn-lg">Annuler</button>
                                </form>
                              
                        </div>
                  </div>
              </div>
            </div>  
       <?php 
        
    } 
    
    /**
    * Affiche la page pour modifier le profil par un utilisateur
    * @access public
    * @auteure: German Mahecha
    */
    public function afficherModifierProfilUtilisateur($utilisateur)
    {
        ?>
        <div class="col-xm-12 col-sm-8 col-md-8 col-lg-7">
              <div class="panel panel-info">
                  <div class="panel-heading"><h4>Modifier votre profil</h4></div>
                  <div class="panel-body">            
                     <form class="form-horizontal" role="form" action="index.php?requete=modifierProfilUtilisateur&idUtilisateur=<?php echo $utilisateur['idUtilisateur']; ?>&action=valider" method='POST'>
                             <div class="form-group">
                                <label class="control-label col-sm-2" for="prenom">Prénom:</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="prenom" id="prenom" value="<?php echo $utilisateur['prenomUtil']; ?>">
                                </div>
                              </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="nom">Nom:</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="nom" id="nom" value="<?php echo $utilisateur['nomUtil']; ?>">
                                </div>
                              </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email:</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="email" id="email" value="<?php echo $utilisateur['courrielUtil']; ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-sm-2" for="telephone">Téléphone:</label>
                                <div class="col-sm-10"> 
                                  <input type="text" class="form-control" name="telephone" id="telephone" value='<?php echo $utilisateur['TelUtil']; ?>'>
                                </div>
                              </div>
                               <div class="form-group">
                                    <label class="control-label col-sm-2" for="bio">Biographie:</label>
                                    <div class="col-sm-10"> 
                                      <textarea rows="8" cols="60" class="form-control" name="bio" id="bio"><?php echo $utilisateur['bio']; ?></textarea>
                                    </div>
                              </div>
                              <div class="form-group"> 
                                <div class="col-sm-offset-2 col-sm-10">
                                  <input type="submit" value="Envoyer" class="btn btn-primary btn-lg pull-left" id="button">
                                </div>
                              </div>
                    </form>
                </div> 
            </div>  
        </div>
        <?php

    }
    
    
    public function afficherDetailsPhotoUtilisateur($commentaires, $oeuvre, $photo, $utilisateur,$unUtilisateurProposition)
    {
        ?> 
            <div class="col-xm-12 col-sm-8 col-md-8 col-lg-7">
                <div class="panel panel-info">
                    <div class="panel-heading"><h4><?php echo $oeuvre['titreOeuvre']; ?></h4></div>
                    <div class="panel-body">
                        <div class="thumbnail">
                            <img class="img-responsive" style='width:300px;' src="<?php echo $photo['nomPhoto']; ?>" alt=""><hr>
                            <div class="caption-full">
                                <p>Photographie de: <?php echo $unUtilisateurProposition['prenomUtil']." ".$unUtilisateurProposition['nomUtil'] ; ?></p>
                                <a href="index.php?requete=accueil&idOeuvre=<?php echo $oeuvre['idOeuvre']; ?>" class='btn btn-primary'><span class='glyphicon glyphicon-eye-open'></span> Details de l'oeuvre</a>
                                <?php
                                    if($utilisateur['idUtilisateur']!=$unUtilisateurProposition['idUtilisateur'])
                                        echo "<a href='index.php?requete=voter&idPhoto=".$photo['idPhoto']."&idUtilVote=".$utilisateur['idUtilisateur']."' class='btn btn-warning'><span class='	glyphicon glyphicon-thumbs-up'></span> Voter</a>";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading"><h4>Commentaires</h4></div>
                    <div class="panel-body">
                        <?php
                            if (!$commentaires) {
                                echo "Il n'y a pas aucune commentaire pour cette photo.";
                            }else{
                                 foreach($commentaires as $commentaire){
                                     echo "<div class='thumbnail'>";
                                         echo "<div class='text-left'>";
                                             echo "<p >Écrit par: <strong>".$commentaire[3]." ".$commentaire[4]."</strong>,<em> le ".$commentaire[2]."</em></p>";
                                             echo "<p>".$commentaire[1]."</p>";                                    
                                         echo "</div>";
                                     echo "</div>"; 
                                }
                            }
                        ?>
                            
                    </div>
                </div>
            </div>
      <?php  
    }
    /**
    * Affiche aside pour profil utilisateur
    * @access public
    * @auteure: German Mahecha
    */
    public function afficherAsideUtilisateur($pos,$likes,$comment)
    {
         ?>
            <div class="col-sm-12 col-lg-2 col-md-4 well">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa  fa-trophy fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">À faire</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-thumbs-o-up fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">VOTES <?php echo $likes;?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">COMMENTAIRES <?php echo $comment;?> </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    
            </div>     
            </div><!--div row-->
            </div><!--div container-fluid text-center-->
        </body>
        </html>
       <?php 
        
    }
    
}
?>
