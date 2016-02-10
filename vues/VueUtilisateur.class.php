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
                       <img src="images/<?php echo $photoUtil;?>" class="img-circle" height="150" width="150" alt="Avatar">
                       <p><span class="glyphicon glyphicon-envelope"></span><?php echo " ".$courrielUtil;?></p>
                       <p><span class="glyphicon glyphicon-earphone"></span><?php echo " ".$telephoneUtil;?></p>
                       <p><?php echo $bioUtil;?></p>
                        <div class="btn-group">
                          <a class="btn btn-primary" href="index.php?requete=profilUtilisateurConnexion"><span class="glyphicon glyphicon-user"></span>  Ton Profil</a>
                          <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                          <br/><ul class="dropdown-menu">
                            <li><a href="index.php?requete=modifierProfilUtilisateur&idUtilisateur=<?php echo $idUtilisateur; ?>">Éditer profil</a></li>
                            <li><a href="index.php?requete=modifierMotDePasseUtilisateur">Changer mot de passe</a></li>
                            <li><a href="index.php?requete=modifierPhotoUtilisateur">Changer Photo</a></li>
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
    public function afficherPhotosUtilisateur()
    {
         ?>
              
              <div class="col-sm-12 col-sm-8 col-md-8 col-lg-9 ">
                  
              <div class="panel panel-info">
                  <div class="panel-heading"><h4>Mes Photos</h4></div>
                  <div class="panel-body">
                        <div class="col-sm-6 col-lg-3 col-md-4">
                            <div class="thumbnail">
                                <img src="images/img_2.jpg" alt="">
                                <div class="caption">
                                    <p><strong>Nom Photo</strong></p>
                                    <p><span class="glyphicon glyphicon glyphicon-comment"></span>  10 Commentaires</p>
                                    <p><span class="glyphicon glyphicon-thumbs-up"></span>  2 Likes</p>
                                    <button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> Voir detailles</button>
                                </div>
                            </div>
                        </div>
                          <div class="col-sm-6 col-lg-3 col-md-4">
                            <div class="thumbnail">
                                <img src="images/img_2.jpg" alt="">
                                <div class="caption">
                                    <p><strong>Nom Photo</strong></p>
                                    <p><span class="glyphicon glyphicon glyphicon-comment"></span>  10 Commentaires</p>
                                    <p><span class="glyphicon glyphicon-thumbs-up"></span>  2 Likes</p>
                                    <button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> Voir detailles</button>
                                </div>
                            </div>
                        </div>
                           <div class="col-sm-6 col-lg-3 col-md-4">
                            <div class="thumbnail">
                                <img src="images/img_2.jpg" alt="">
                                <div class="caption">
                                    <p><strong>Nom Photo</strong></p>
                                    <p><span class="glyphicon glyphicon glyphicon-comment"></span>  10 Commentaires</p>
                                    <p><span class="glyphicon glyphicon-thumbs-up"></span>  2 Likes</p>
                                    <button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> Voir detailles</button>
                                </div>
                            </div>
                        </div>

                       <div class="col-sm-6 col-lg-3 col-md-4">
                            <div class="thumbnail">
                                <img src="images/img_2.jpg" alt="">
                                <div class="caption">
                                    <p><strong>Nom Photo</strong></p>
                                    <p><span class="glyphicon glyphicon glyphicon-comment"></span>  10 Commentaires</p>
                                    <p><span class="glyphicon glyphicon-thumbs-up"></span>  2 Likes</p>
                                    <button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> Voir detailles</button>
                                </div>
                            </div>
                        </div>
                  </div>
              </div>

                <div class="panel panel-success">
                  <div class="panel-heading"><h4>Meilleures Photos</h4></div>
                  <div class="panel-body">
                        <div class="col-sm-6 col-lg-3 col-md-4">
                            <div class="thumbnail">
                                <img src="images/img_2.jpg" alt="">
                                <div class="caption">
                                    <p><strong>Nom Photo</strong></p>
                                    <p><span class="glyphicon glyphicon glyphicon-comment"></span>  10 Commentaires</p>
                                    <p><span class="glyphicon glyphicon-thumbs-up"></span>  2 Likes</p>
                                    <button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> Voir detailles</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 col-md-4">
                            <div class="thumbnail">
                                <img src="images/img_2.jpg" alt="">
                                <div class="caption">
                                    <p><strong>Nom Photo</strong></p>
                                    <p><span class="glyphicon glyphicon glyphicon-comment"></span>  10 Commentaires</p>
                                    <p><span class="glyphicon glyphicon-thumbs-up"></span>  2 Likes</p>
                                    <button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> Voir detailles</button>
                                </div>
                            </div>
                        </div>
                          <div class="col-sm-6 col-lg-3 col-md-4">
                            <div class="thumbnail">
                                <img src="images/img_2.jpg" alt="">
                                <div class="caption">
                                    <p><strong>Nom Photo</strong></p>
                                    <p><span class="glyphicon glyphicon glyphicon-comment"></span>  10 Commentaires</p>
                                    <p><span class="glyphicon glyphicon-thumbs-up"></span>  2 Likes</p>
                                    <button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> Voir detailles</button>
                                </div>
                            </div>
                        </div>

                      <div class="col-sm-6 col-lg-3 col-md-4">
                            <div class="thumbnail">
                                <img src="images/img_2.jpg" alt="">
                                <div class="caption">
                                    <p><strong>Nom Photo</strong></p>
                                    <p><span class="glyphicon glyphicon glyphicon-comment"></span>  10 Commentaires</p>
                                    <p><span class="glyphicon glyphicon-thumbs-up"></span>  2 Likes</p>
                                    <button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> Voir detailles</button>
                                </div>
                            </div>
                        </div>
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
    public function afficherPropositionPhotosUtilisateur()
    {
         ?>
            <div class="col-xm-12 col-sm-8 col-md-8 col-lg-9">  

              <div class="panel panel-info">
                  <div class="panel-heading"><h4>Ajouter photo pour cet oeuvre</h4></div>
                  <div class="panel-body">
                        <div class="col-sm-6 col-lg-3 col-md-4">
                            <div class="thumbnail">
                                <img src="images/img_2.jpg" alt="">
                                <h3><strong>La source</strong></h3>
                            </div>
                        </div>
                          <div class="col-sm-6 col-lg-6 col-md-4 text-left">
                                                
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label for="nomPhoto" class="control-label" >Nom pour la photo</label>
                                        <input type="text" class="form-control" id="nomPhoto" placeholder='Nom ici...'/>
                                    </div>
                                    <div class="form-group">
                                        <label for="photo" class="control-label">Photo:</label>
                                        <input type='file' name="photo" id="photo">
                                    </div><br/><br/>
                                    <button type="submit" class="btn btn-primary btn-lg">Ajouter</button>
                                    <button type="reset" class="btn btn-default btn-lg">Annuler</button>
                                  </form>     
                            
                        </div>
                  </div>
              </div>
                <div class="panel panel-info">
                  <div class="panel-heading"><h4>Photos pour cet oeuvre</h4></div>
                  <div class="panel-body">
                        <div class="col-sm-6 col-lg-3 col-md-4">
                            <div class="thumbnail">
                                <img src="images/img_2.jpg" alt="">
                                <div class="caption">
                                    <p><strong>Nom Photo</strong></p>
                                </div>
                            </div>
                        </div>
                          <div class="col-sm-6 col-lg-3 col-md-4">
                            <div class="thumbnail">
                                <img src="images/img_2.jpg" alt="">
                                <div class="caption">
                                    <p><strong>Nom Photo</strong></p>
                                </div>
                            </div>
                        </div>
                      <div class="col-sm-6 col-lg-3 col-md-4">
                            <div class="thumbnail">
                                <img src="images/img_2.jpg" alt="">
                                <div class="caption">
                                    <p><strong>Nom Photo</strong></p>
                                </div>
                            </div>
                        </div>
                      <div class="col-sm-6 col-lg-3 col-md-4">
                            <div class="thumbnail">
                                <img src="images/img_2.jpg" alt="">
                                <div class="caption">
                                    <p><strong>Nom Photo</strong></p>
                                </div>
                            </div>
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
    
    
    /**
    * Affiche aside pour profil utilisateur
    * @access public
    * @auteure: German Mahecha
    */
    public function afficherChangerMotdePasseUtilisateur()
    {
         ?>
        <div class="col-xm-12 col-sm-8 col-md-8 col-lg-7">

              <div class="panel panel-info">
                  <div class="panel-heading"><h4>Modifier votre mot de passe</h4></div>
                  <div class="panel-body">            
                     <form class="form-horizontal" role="form" action="index.php?requete=modifierMotDePasseUtilisateur&idUtilisateur=<?php echo $utilisateur['idUtilisateur']; ?>&action=valider" method='POST'>
                             <div class="form-group">
                                <label class="control-label col-sm-2" for="lastPass">Anterieur mot de passe:</label>
                                <div class="col-sm-10">
                                  <input type="password" class="form-control" name="lastPass" id="lastPass">
                                </div>
                              </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="newPass">Nouveau mot de passe:</label>
                                <div class="col-sm-10">
                                  <input type="password" class="form-control" name="newPass" id="newPass" >
                                </div>
                              </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="new2pass">Confirmez mot de passe:</label>
                                <div class="col-sm-10">
                                  <input type="password" class="form-control" name="new2pass" id="new2pass" >
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


          </div><!--div row-->
        </div><!--div container-fluid text-center-->

        </body>
        </html>
       <?php 
        
    }
    
    /**
    * Affiche aside pour profil utilisateur
    * @access public
    * @auteure: German Mahecha
    */
    public function afficherChangerPhotoUtilisateur()
    {
         ?>
        <div class="col-sm-12 col-lg-2 col-md-4 well">
                <div class="panel panel-info">
                 <div class="panel-heading"><h4>Dérnière photo ajouté</h4></div>
                    <div class="panel-body">
                        <img src="images/img_2.jpg" class="img-thumbnail" alt="Paris">
                        <p><strong>Nom Photo</strong></p>
                        <p>Fri. 27 November 2015</p>  
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> Voir detailles</button>
                    </div>
                </div>
                <div class="panel panel-success">
                    <div class="panel-heading"><h4>Photo plus point</h4></div>
                    <div class="panel-body">
                        <img src="images/img_2.jpg" class="img-thumbnail" alt="Avatar">
                        <p>10 points</p>
                        <p><strong>Nom Photo</strong></p>
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> Voir detailles</button>
                    </div>
                </div>
                
            </div>    



          </div><!--div row-->
        </div><!--div container-fluid text-center-->

        </body>
        </html>
       <?php 
        
    }
    
    
    /**
    * Affiche aside pour profil utilisateur
    * @access public
    * @auteure: German Mahecha
    */
    public function afficherAsideUtilisateur()
    {
         ?>
        <div class="col-sm-12 col-lg-2 col-md-4 well">
                <div class="panel panel-info">
                 <div class="panel-heading"><h4>Dérnière photo ajouté</h4></div>
                    <div class="panel-body">
                        <img src="images/img_2.jpg" class="img-thumbnail" alt="Paris">
                        <p><strong>Nom Photo</strong></p>
                        <p>Fri. 27 November 2015</p>  
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> Voir detailles</button>
                    </div>
                </div>
                <div class="panel panel-success">
                    <div class="panel-heading"><h4>Photo plus point</h4></div>
                    <div class="panel-body">
                        <img src="images/img_2.jpg" class="img-thumbnail" alt="Avatar">
                        <p>10 points</p>
                        <p><strong>Nom Photo</strong></p>
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> Voir detailles</button>
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
