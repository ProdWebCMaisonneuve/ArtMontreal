<?php
/**
 * Class VueAdmin
 * classe de la vue Admin
 *
 * @author Gautier Piatek
 * @version 1.0
 * @update 2013-12-11
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 *
 */
class VueAdmin
{

    /**
     * Affiche la page d'inscription
     * @access public
     * @auteure: Thuy Tien Vo
     * @modifie: Jorge Blanco
     */
    public function afficheInscription() 
    {
        ?>
        <div>
        <h2 id="titre">Formulaire d'inscription</h2>
        <form method="POST" class="formulaire" action="index.php?requete=inscription&action=ajoutUtilisateur">
        
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
            <fieldset>
        </form>  
        </fieldset>
        </fieldset>
        </div>          
        <?php

    }

    /**
     * Affiche la page de connexion
     * @access public
     * @auteure: Thuy Tien Vo
     */
    public function afficheConnexion() 
    {
        ?>
        <div>
        <h2 id="titre1">Connexion</h2>
        <form class="formulaire1" action="">
            <fieldset>
            Nom d'utilisateur:<br> 
            <input type="text" name="utilisateur" >
            <br>
            Mot de passe:<br>
            <input type="text" name="motDePasse" >
            <br> <br>
            <input type="submit" value="Connexion" id="button">
            <fieldset>
        </form>
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
            </head>

            <body>
                <div id="wrapper">
                <header>
                    <div class="conteneurNav">

                        <img src="images/logo.png" alt="logo">

                        <div class="conteneurMenu">

                            <div class="langue">

                                <a href="index.php?requete=connexion" class="connexion">SE CONNECTER</a>
                                <a href="#">FR/EN</a>
                                <a href="index.php?requete=accueil" class="accueil"><span class="icon-home"></span> ACCUEIL</a>
         
                            </div>

                        </div>

                               <div class="admin2">
           <div class="menuAdmin2">
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
                                            <li><a href="index.php?requete=afficheInscriptionAdmin">Ajouter</a></li>
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
        <!-- <div class="admin">
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
                                            <li><a href="#">Ajouter</a></li>
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
                        </li> 

                    </ul>

                </nav>
            </div> -->
            
            <section class="contenu container">
        
               <!-- <h2>Administration</h2>-->

                <div class="administration">
                   <div class="twelvecol">
                       <h3>Ajouter une oeuvre</h3>

                       <form method="POST" class="formulaire" action="index.php?requete=ajoutOeuvre&action=ajoutOeuvre">
                           
                            <label>Titre : </label> <input type="text" name="titre"><span><?php echo $erreurTitre;?><br>
                            <label>Titre (Variante) : </label> <input type="text" name="titreVariante"><br>
                            <label>Technique : </label> <input type="text" name="technique"><br>
                            <label>Technique (anglais) : </label> <input type="text" name="techniqueAng"><br>
                            <label>Description : </label> <input type="text" name="description"><br>
                            <label>Validation : </label> <input type="radio" checked name="validation" value="1"> Oui <input type="radio" name="validation" value="0"> Non<br>
                            
                            <label>Adresse Civique : </label> <input type="text" name="adresse"><br>
                            <label>Batiment : </label> <input type="text" name="batiment"><br>
                            <label>Parc : </label> <input type="text" name="parc"><br>
                            <label>Latitude : </label> <input type="text" name="latitude"><br>
                            <label>Longitude : </label> <input type="text" name="longitude"><br>
                            <label>Arrondissement : </label> <select name="arrondissement">
                                <option value="nonChoisi">Choisir un Arrondissement</option>
                            <?php
                                foreach ($aArrondissements as $arrondissement) {
                                    echo "<option value='".$arrondissement->getidArrondissement()."'>".$arrondissement->getnomArrondissement()."</option>"; 
                                }
                            ?>
                           </select><br>
                               <label>Artiste/Collectif : </label> <select name="artiste">
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
                           </select><br>
                               <label>Catégorie : </label> <select name="categorie">
                                <option value="nonChoisi">Choisir une Catégorie</option>
                            <?php 
                                foreach ($aCategories as $categorie) {
                                    echo "<option value='".$categorie->getidCategorie()."'>".$categorie->getnomCategorie()."</option>"; 
                                }
                            ?>
                           </select><br>
                               <label>Sous-Catégorie : </label> <select name="sousCategorie">
                                <option value="nonChoisi">Choisir une Sous-Catégorie</option>
                            <?php
                                foreach ($aSousCategories as $sousCategorie) {
                                    echo "<option value='".$sousCategorie->getidSousCategorie()."'>".$sousCategorie->getnomSousCategorie()."</option>"; 
                                }
                            ?>    
                           </select><br>
                               <label>Matériaux : </label> <input type="text" name="materiaux"><br>
                               <label>Matériaux (anglais) : </label> <input type="text" name="materiauxAng"><br><br>
                            
                            <input type="submit" name="sauvegarder" value="Valider"> <span><?php echo $message; ?></span>
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
        <div class="administration">
                   <div class="twelvecol">
                       <h3>Modifier une oeuvre</h3>

                       <form method="POST" action="index.php?requete=modifierOeuvre&idOeuvre=<?php echo $idOeuvre; ?>&action=valider">
                           
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
                            
                            <input type="submit" name="sauvegarder" value="Valider"> <span><?php echo $message; ?></span>
                       </form>

                   </div>

                </div> 
                <?
    }
    
    
       
    /**
     * Affiche Liste Artistes
     * @access public
     * @author German Mahecha
     * @version 1.0
     */
    
    public function afficheListeSupprimerArtistes($aArtistes){
        ?>
            <h2>Supprimer un <span class="artistes">artiste</span> ou <span class="collectif">collectif</span></h2>
            <section class='contenu container'>
                <div class='tableArtistes'>
        <?php
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
            <h2>Modifier nos <span class="artistes">artistes</span> et <span class="collectif">collectifs</span></h2>
            <section class='contenu container'>
                <div class='tableArtistes'>
        <?php
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
    
    public function afficheListeModifierUtilisateurs($aUtilisateurs){
        ?>
            <h2>Modifier nos utilisateurs</h2>
            <section class='contenu container'>
                <div class='tableArtistes'>
        <?php
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
            <h2>Supprimer nos utilisateurs</h2>
            <section class='contenu container'>
                <div class='tableArtistes'>
        <?php
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
            <h2>Modifier nos categories</h2>
            <section class='contenu container'>
                <div class='tableArtistes'>
        <?php
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
                        echo "<td><a href='index.php?requete=modifierCategorie&idCategorie=$idCategorie'><span class='icon-edit'></span></a></td>";
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
            <h2>Supprimer nos categories</h2>
            <section class='contenu container'>
                <div class='tableArtistes'>
        <?php
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
            <h2>Modifier nos Oeuvres</h2>
            <section class='contenu container'>
                <div class='tableArtistes'>
        <?php
                echo "<table>";
                echo "<tr>";
                echo "<th></th>";
                echo "<th>Titre</th>";
                echo "<th>Artiste</th>";
                echo "<th>Arrondissement</th>";
                echo "<th>Modifier</th>	";
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
     * Affiche Liste des categories
     * @access public
     * @author German Mahecha
     * @version 1.0
     */
    
     public function afficheListeSupprimerOeuvres($aOeuvres){
        ?>
            <h2>Supprimer une oeuvre</h2>
            <section class='contenu container'>
                <div class='tableArtistes'>
        <?php
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
     * Affiche la page pour ajouter un artiste
     * @access public
     * @auteure: Jorge Blanco
     */
    public function formulaireAjouterArtiste() 
    {
        ?>
        <div>
        <h2 id="titre">Ajouter un artiste</h2>
        <form method="POST"class="formulaire"action="index.php?requete=ajouterUnArtiste&action=ajoutArtiste">
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
     * Affiche la page ajout utilisateur - admin
     * @access public
     * @auteure: Thuy Tien Vo
     * @modifie: Jorge Blanco
     */
    public function afficheInscriptionAdmin() 
    {
        ?>
        <div>
        <h2 id="titre">Ajouter un utilisateur</h2>
        <form method="POST" class="formulaire" action="index.php?requete=afficheInscriptionAdmin&action=ajoutUtilisateur">
        
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
            <fieldset>
        </form>  
        </fieldset>
        </fieldset>
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
                echo "<table>";
                echo "<tr>";
                echo "<th></th>";
                echo "<th>Utilisateur</th>";
                //echo "<th>Supprimer</th>    ";
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
                        //echo "<td><a href='index.php?requete=supprimerUtilisateurs&idUtilisateur=$idUtilisateur'><span class='icon-remove-user'></span></a></td>";
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
        $bio = $aUtilisateur['loginUtilisateur'];
        $utilisateur = $aUtilisateur['passUtilisateur'];
        $motDePasse = $aUtilisateur['bio'];
        $score = $aUtilisateur['score'];
        $photoUtilisateur = $aUtilisateur['photoUtilisateur'];
        
        
//        
//        $idUtilisateur = $aUtilisateur['idUtilisateur'];
//        $bio = $aUtilisateur['bio'];
//        $utilisateur = $aUtilisateur['loginUtilisateur'];
//        $motDePasse = $aUtilisateur['passUtilisateur'];
//        $score = $aUtilisateur['score'];
//        $photoUtilisateur = $aUtilisateur['photoUtilisateur'];

        ?>
        <div>
        <h2 id="titre">Modifier Utilisateur</h2>
    
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
            <textarea rows="8" cols="60" name="bio" placeholder="Entrer un text ici..."></textarea>
            <br><br>
             Nom d'utilisateur:<br> 
            <input type="text" name="utilisateur" value="<?php echo $utilisateur; ?>">
            <br><br>
            Mot de passe:<br>
            <input type="password" name="motDePasse" value="<?php echo $motDePasse; ?>">
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
     * Affiche Liste des categories
     * @access public
     * @author German Mahecha
     * @version 1.0
     */
    
     public function afficheOeuvresMot($aOeuvres){
        ?>
            <h2>Resultats de la recherche</h2>
            <section class='contenu container'>
                <div class='tableArtistes'>
        <?php
        if($aOeuvres!='Aucune')
        {
            echo "<table>";
            echo "<tr>";
            echo "<th></th>";
            echo "<th>Titre</th>";
            echo "<th>Artiste</th>";
            echo "<th>Arrondissement</th>";
            echo "</tr>";
            
            foreach($aOeuvres as $oeuvre) {
                echo "<tr>";
                $idOeuvre = $oeuvre->getIdOeuvre();
                echo "<td><a href = 'index.php?requete=unOeuvre&idOeuvre=$idOeuvre'><span class='icon-blackboard'></span>";
                echo "<td>".$oeuvre->getTitreOeuvre()."</td>" ;
               if($oeuvre->getCollectif() =="") {
                  echo "<td>".$oeuvre->getNomArtiste()." ".$oeuvre->getPrenomArtiste()."</td>" ;
               } else {
                   echo "<td>".$oeuvre->getCollectif()."</td>" ;
               }
               echo "<td>".$oeuvre->getNomArrondissement()."</td>" ;
               echo "</tr>";
            }
                    
            echo "</table>";
            echo "</div>";
            echo "</section> ";
        }
        else
            echo "Pas des resultats";
       echo "</div>";
    }
    
    /**
    * Affiche la page pour ajouter un catégorie
    * @access public
    * @auteure: Thuy Tien Vo
    */
    public function formulaireAjouterCategorie() 
    {   
       
         ?>
         <div>
         <h2 id="titre">Ajouter un categorie</h2>
         <form method="POST"class="formulaire"action="index.php?requete=ajouterUnCategorie&action=ajoutCategorie">
             <fieldset>
              Nom catégorie:<br>
             <input type="text" name="nomCategorie" >
             <br> <br>
              Nom catégorie en Anglais:<br>
             <input  type="text" name="nomCatAng" >
              <br> <br>    
             <input type="submit" value="Envoyer" id="button">
             <fieldset>
         </form>  
         </fieldset>
         </fieldset>
         </div>        
         <?php        
    }
        //private function rechercheOeuvreParCat()
       // {
            
           // $erreur = '';
            //$aOeuvre = Array();
            
            //if($_GET['action'] == 'rechercher')
           // {
               // $oOeuvre = new Oeuvre();
                //try
               // {
                     
                  //  $aOeuvre = $oOeuvre->rechercheOeuvreParCat($_POST['categorie']);
               // }
               // catch (Exception $e)
                //{
               //     $erreur = $e->getMessage();     
                //}
                //$oVue->AfficheChampRechercheCategorie($_POST['categorie'], $erreur); 
               // $oVue->AfficheOeuvre($aOeuvre);
            //}
           // else
           // {
              //  $oVue->AfficheChampRechercheCategorie($_POST['categorie'], $erreur); 
            //}
              
            
        //}

}
?>
