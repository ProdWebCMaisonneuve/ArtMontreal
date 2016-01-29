<?php
/**
 * Class Controler
 * Gère les requêtes HTTP
 * 
 * @author Jonathan Martel
 * @version 1.0
 * @update 2013-12-10
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */

class Controler 
{
	
		/**
		 * Traite la requête
		 * @return void
		 */
		public function gerer()
		{
			switch ($_GET['requete']) {
				case 'accueil':
	                    if($_GET['idOeuvre']){
	                        $this->unOeuvre($_GET['idOeuvre']);    
	                    }else{
	                        $this->accueil();
	                    }
			break;
                
	                case 'artistes':
	                    if($_GET['idOeuvre'] != '') {
	                        $this->unOeuvre($_GET['idOeuvre']);    
	                    }else{
	                        $this->artistes();
	                    }
				break;
	                    
	                case 'listeModifierArtistes':
	                        $this->listeModifierArtistes();
	                	break;
	                case 'listeSupprimerArtistes':
	                        $this->listeSupprimerArtistes();
	                	break;
	                
	                case 'listeModifierUtilisateurs':
	                        $this->listeModifierUtilisateurs();
	                    	break;
	                case 'listeSupprimerUtilisateurs':
	                        $this->listeSupprimerUtilisateurs();
	                    	break;
	                case 'listeModifierCategories':
	                        $this->listeModifierCategories();
	                    	break;
	                case 'listeSupprimerCategories':
	                        $this->listeSupprimerCategories();
	                    	break;  
	                case 'listeModifierOeuvres':
	                        $this->listeModifierOeuvres();
	                    	break;
	                case 'listeSupprimerOeuvres':
	                        $this->listeSupprimerOeuvres();
	                    	break;
	                case 'listeModifierAdmin_moderateur':
	                        $this->listeModifierAdmin_moderateur();
	                    	break;
	                case 'listeSupprimerAdmin_moderateur':
	                    	$this->listeSupprimerAdmin_moderateur();
	                    	break;
	                case 'modifierArtiste':
	                        $this->modifierArtiste($_GET['idArtiste']);
	                	break;
	                case 'supprimerArtistes':
	                        $this->supprimerArtistes($_GET['idArtiste']);
	                    	break;
			case 'modifierUtilisateur':
	                        $this->modifierUtilisateur($_GET['idUtilisateur']);
	                    	break;
			case 'supprimerUtilisateurs':
	                        $this->supprimerUtilisateurs($_GET['idUtilisateur']);
	                    	break;
	                case 'supprimerAdmin_moderateur':
	                    	$this->supprimerAdmin_moderateur($_GET['idAdMod']);
	                    	break;
	                case 'modifierCategories':
	                        $this->modifierCategories($_GET['idCategorie']);
	                    	break;
	                case 'supprimerCategories':
	                        $this->supprimerCategories($_GET['idCategorie']);
	                    	break;
	                case 'supprimerOeuvres':
	                        $this->supprimerOeuvres($_GET['idOeuvre']);
	                    	break; 
	                case 'modifierOeuvre':
	                        $this->modifierOeuvre($_GET['idOeuvre']);
	                    	break; 
	                case 'modifierAdmin_moderateur':
	                        $this->modifierAdmin_moderateur($_GET['idAdMod']);
	                    	break;
	                case 'inscription':
	                    	$this->inscription();
	                    	break;
			case 'afficheInscriptionAdmin':
	                	$this->afficheInscriptionAdmin();
	                    	break;
			case 'connexion':
	                    	if($_GET['action'] == 'envoyer'){
	                        	$this->validerConnexion($_POST['utilisateur'], $_POST['motDePasse'], $_POST['grainSel']);    
	                    	}else{
	                        	$this->connexion();
	                    	}
	                        break;
	                case 'arrondissements':
	                    	if($_GET['idArrondissement'] !=''){
	                        	$this->oeuvresParArr($_GET['idArrondissement']);
	                    	}else{
	                        	$this->arrondissements();
	                    	} 
	                    break;
			case 'categories':
	                   	if($_GET['idCategorie'] !=''){
	                        	$this->oeuvresParCat($_GET['idCategorie']);
	                    	}else{
	                        	$this->categories();
	                    	} 
	                    	break;
			case 'unOeuvre':
	                    	$this->unOeuvre($_GET['idOeuvre']);
	                    	break;
			case 'unUtilisateur':
	                    	$this->unUtilisateur($_GET['idUtilisateur']);
	                    	break;
			case 'oeuvresParCat':
	                    	$this->oeuvresParCat();
	                    	break;
	                case 'oeuvresParArr';
	                 	$this->oeuvresParArr();
	                 	break;
			case 'ajoutOeuvre':
	                    	$this->ajoutOeuvre();
	                    	break;
	                case 'profilUtilisateur':
	                    	$this->profilUtilisateur();
	                    	break;
			case 'listerUtilisateurs':
	                    	$this->listerUtilisateurs();
	                    	break;
	                case 'ajouterUnArtiste':
	                    	$this->ajouterUnArtiste();
	                    	break;
	               	case 'formulaireAjouterArtiste':
	                    	$this->afficheAjouterUnArtiste();
	                	break;
	                case 'ajouterUnCategorie':
	                    	$this->ajouterUnCategorie();
	                    	break;
	                case 'formulaireAjouterCategorie':
	                   	$this->afficheAjouterUnCategorie();
	                    	break;
	                case 'ajouterAdmin_moderateur':
	                    	$this->ajouterAdmin_moderateur();
	                    	break;
	                case 'recherche':
	                    	$this->rechercheOeuvresMot();
	                    	break;                
	                case 'admin':
	                        if($_GET['action'] == 'envoyer'){
	                        	$this->validerConnexionAdmin($_POST['utilisateur'], $_POST['motDePasse'], $_POST['grainSel']);    
	                    	}else{
	                        	$this->admin();
	                    	}
	                    	break;
	                case 'adminPanel':
	                    	$this->adminPanel();
	                    	break;
			default:    $this->accueil();
				break;
		}
            
	}

       // private function afficheContenuAdmin()
        //{

          //  $oVue = new VueDefaut();
           // $oVue->afficheHeader();
           // $oVue->afficheContenuAdmin();
           // $oVue->afficheFooter();
            
       // } 

	/*Vue page d'accueil
        * @author: German Mahecha
        */
        private function accueil()
		{
            $oOeuvres = new MOeuvres ('', '', '','', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
            $aOeuvres = $oOeuvres::listeOeuvres();
            $oVue = new VueDefaut();
			$oVue->afficheHeader();
			$oVue->afficheAccueil($aOeuvres);
			$oVue->afficheFooter();
		} 

        /*ONGLET ARRONDISSEMENT*/  

        private function arrondissements()
        {

            $oArrondisement = new MArrondissement('', '');
            //$aArrondissements = $oArrondisement::listeArrondissement($id_Arrondissement);
            $aArrondissements = $oArrondisement::listeArrondissement();

            $oVue = new VueDefaut();
            $oVue->afficheHeader();
            $oVue->afficheArrondissements($aArrondissements);
            $oVue->afficheFooter();
    
        }

        private function oeuvresParArr($getIdArr)
        {   
            $oOeuvreParArr = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
            $aOeuvreParArr = $oOeuvreParArr::listerOeuvresParArr($getIdArr);

            $oVue = new VueDefaut();
            $oVue->afficheHeader();
            $oVue->afficheOeuvre_Par_Arr($aOeuvreParArr);
            $oVue->afficheFooter();
        }

        /*ONGLET CATÉGORIE*/  

        private function categories()
        {
            $oCategories = new MCategories('', '', '' ,'', '','');
            $aCategories = $oCategories::listeCategories();

            $oVue = new VueDefaut();
            $oVue->afficheHeader();
            $oVue->afficheCategories($aCategories);
            $oVue->afficheFooter();
    
        }


        private function oeuvresParCat($id_cat)
        {   
         
            $oOeuvreParCat = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
            $aOeuvreParCat = $oOeuvreParCat::listeOeuvresParCat($id_cat);

            $oVue = new VueDefaut();
            $oVue->afficheHeader();
            $oVue->afficheOeuvre_Par_Cat($aOeuvreParCat);
            $oVue->afficheFooter();
    
        }



       /*CONNEXION*/ 

        private function connexion()
        {   
            $nombreAleatoire = rand(1, 1000);
            $erreurConnexion = '';
            
            $oVue = new VueDefaut();
            $oVue->afficheHeader();
            $oVue->afficheConnexion($nombreAleatoire, $erreurConnexion);
            $oVue->afficheFooter();
            
        } 


            /* Vérifie la connexion admin
         * @author: Gautier Piatek
        */

        private function validerConnexionAdmin($login, $pass, $grainSel)
        {
            $oAdmin_moderateur = new MAdmin_Moderateur('', '', '', '');
            $motDePasseMD5 = $oAdmin_moderateur->MotDePasseAdmin($login);
            $motDePassePlusGrainSel = md5($grainSel . $motDePasseMD5);

            if($pass === $motDePassePlusGrainSel)
            {   
                $_SESSION["session"] = $login;
                $_SESSION['admin'] = true;
                //rediriger vers la page admin
                $oOeuvres = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
                $aOeuvres = $oOeuvres->listeOeuvres();

                $oArtistes = new MArtistes('', '', '', '', '', '');
                $aArtistes = $oArtistes->listeArtistes();

                $oUtilisateurs = new MUtilisateurs('', '', '', '', '', '');
                $aUtilisateurs = $oUtilisateurs->listeUtilisateurs();

                $oAdmin_moderateurs = new MAdmin_Moderateur('', '', '', '');
                $aAdmin_moderateurs = $oAdmin_moderateurs->listeAdmin_moderateur();

                $message = '';
                $oVue = new VueDefaut();
                $oVue->afficheHeaderAdmin();
                $oVue->afficheListeModifierOeuvres($aOeuvres);
                $oVue->afficheListeModifierUtilisateurs($aUtilisateurs, $message);
                $oVue->afficheListeModifierArtistes($aArtistes);
                $oVue->afficheListeModifierAdmin_moderater($aAdmin_moderateurs);
                $oVue->afficheFooter();
               
            }
            else
            {
                $nombreAleatoire = rand(1, 1000);
                $erreurConnexion = "Combinaison nom d'utilisateur et mot de passe invalide.";
                $oVue = new VueDefaut();
                $oVue->afficheHeaderCnxAdmin();
                $oVue->afficheConnexionAdmin($nombreAleatoire, $erreurConnexion);
                $oVue->afficheFooter();
                
            }
        }




        /* Vérifie la connexion utilisateur
         * @author: Gautier Piatek
        */

        private function validerConnexion($login, $pass, $grainSel)
        {
            $oUtilisateur = new MUtilisateurs('', '', '', '', '', '');
            $motDePasseMD5 = $oUtilisateur->MotDePasse($login);
            $motDePassePlusGrainSel = md5($grainSel . $motDePasseMD5);

            if($pass === $motDePassePlusGrainSel)
            {   
                $_SESSION["session"] = $login;
                //rediriger vers la page accueil
                $oOeuvres = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
                $aOeuvres = $oOeuvres->listeOeuvres();
                
                
                
                $oVue = new VueDefaut();
                $oVue->afficheHeader();
                $oVue->afficheAccueil($aOeuvres);
                $oVue->afficheFooter();
               
            }
            else
            {
                $nombreAleatoire = rand(1, 1000);
                $erreurConnexion = "Combinaison nom d'utilisateur et mot de passe invalide.";
                $oVue = new VueDefaut();
                $oVue->afficheHeader();
                $oVue->afficheConnexion($nombreAleatoire, $erreurConnexion);
                $oVue->afficheFooter();
                
            }
        }
 

        /*Vue recherche
        * @author: German Mahecha
        */

        private function rechercheOeuvresMot()
        {
            $oVue = new VueDefaut();
            $oVue->afficheHeader();
            
            $oOeuvre = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
            $aOeuvres=$oOeuvre::listeOeuvresparMot($_POST['mot']);
            $oVue->afficheOeuvresMot($aOeuvres);
            $oVue->afficheFooter();
                
        }
    


     /*PANEL ADMIN*/

         private function adminPanel()
        {
             
            $oOeuvres = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
            $aOeuvres = $oOeuvres->listeOeuvres();
             
            $oArtistes = new MArtistes('', '', '', '', '', '');
            $aArtistes = $oArtistes->listeArtistes();
             
            $oUtilisateurs = new MUtilisateurs('', '', '', '', '', '');
            $aUtilisateurs = $oUtilisateurs->listeUtilisateurs();
             
            $oAdmin_moderateurs = new MAdmin_Moderateur('', '', '', '');
            $aAdmin_moderateurs = $oAdmin_moderateurs->listeAdmin_moderateur();
            
            $message = '';
             
            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();
            $oVue->afficheListeModifierOeuvres($aOeuvres);
            $oVue->afficheListeModifierUtilisateurs($aUtilisateurs, $message);
            $oVue->afficheListeModifierArtistes($aArtistes);
            $oVue->afficheListeModifierAdmin_moderater($aAdmin_moderateurs);
            $oVue->afficheFooter();
        }



        /* OEUVRE*/
	/*Vue page d'un oeuvre
        * @author: German Mahecha
        */
        private function unOeuvre($idget)
		{
            $oOeuvre = new MOeuvres ('', '', '','', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
            $oeuvre = $oOeuvre::listeUnOeuvre($idget);
            $oVue = new VueDefaut();
			$oVue->afficheHeader();
			$oVue->afficheUnOeuvre($oeuvre);
			$oVue->afficheFooter();
			
		}
	
	/*Vue liste pour modifier oeuvres
        * @author: German Mahecha
        */
           private function listeModifierOeuvres()
        {
            $oOeuvres = new MOeuvres ('', '', '','', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
            $aOeuvres = $oOeuvres::listeOeuvres();
              
            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();
            $oVue->afficheListeModifierOeuvres($aOeuvres);
            $oVue->afficheFooter();
    
        }
	/*Vue liste pour supprimer oeuvres
        * @author: German Mahecha
        */
        private function listeSupprimerOeuvres()
        {
            $oOeuvres = new MOeuvres ('', '', '','', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
            $aOeuvres = $oOeuvres::listeOeuvres();
              
            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();
            $oVue->afficheListeSupprimerOeuvres($aOeuvres);
            $oVue->afficheFooter();
    
        }

        private function ajoutOeuvre()

        {
            $erreurTitre ='';
            $message ='';
            
            $oArtistes = new MArtistes('', '', '' ,'', '', '');
            $aArtistes = $oArtistes::listeArtistes();
            
            $oCategories = new MCategories('', '', '' ,'', '','');
            $aCategories = $oCategories::listeCategories();
            
            $oSousCategories = new MSousCategories('', '', '', '');
            $aSousCategories = $oSousCategories::listeSousCategories();
            
            $oArrondissements = new MArrondissement('', '');
            $aArrondissements = $oArrondissements::listeArrondissement();
            
            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();
            
            if($_GET['action'] == 'ajoutOeuvre') {
                $oOeuvre = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
                
                $oOeuvre->ajouterAdresse($_POST['adresse'], $_POST['batiment'], $_POST['parc'], $_POST['latitude'], $_POST['longitude']);
                $idAdresse = $oOeuvre->recupererDernierId();
                                         
                try
                {
                    $oOeuvre->ajouterOeuvre($_POST['titre'], $_POST['titreVariante'],  $_POST['technique'], $_POST['techniqueAng'], $_POST['description'], $_POST['validation'], $_POST['arrondissement'], $idAdresse, $_POST['artiste'], $_POST['categorie'], $_POST['sousCategorie'], $_POST['materiaux'], $_POST['materiauxAng']);
                
                $message = "Oeuvre ajoutée.";
                    
                }
                catch (Exception $e)
                {
                    $message = $e->getMessage();     
                }
                
            }
            
            $oVue->afficheAjoutOeuvre($aArtistes, $aCategories, $aArrondissements, $aSousCategories, $erreurTitre, $message);
            $oVue->afficheFooter();

        }



        private function modifierOeuvre($idOeuvre)
        {   
            $erreurTitre ='';
            $message ='';
            
            $oArtistes = new MArtistes('', '', '' ,'', '', '');
            $aArtistes = $oArtistes::listeArtistes();
            
            $oCategories = new MCategories('', '', '' ,'', '','');
            $aCategories = $oCategories::listeCategories();
            
            $oSousCategories = new MSousCategories('', '', '', '');
            $aSousCategories = $oSousCategories::listeSousCategories();
            
            $oArrondissements = new MArrondissement('', '');
            $aArrondissements = $oArrondissements::listeArrondissement();
            
            $oOeuvre = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
            
            $aOeuvre = $oOeuvre->getOeuvreParId($idOeuvre);
            $aOeuvres = $oOeuvre->listeOeuvres();
            
            $idAdresse = $oOeuvre->recupererIdAdresse($idOeuvre);
            $aAdresse = $oOeuvre->getAdresseParId($idAdresse);
                       
            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();
            
            if($_GET['idOeuvre'] && $_GET['action'] == 'valider') {
                                    
                try
                {
                    $oOeuvre->modifierAdresse($idAdresse, $_POST['adresse'], $_POST['batiment'], $_POST['parc'], $_POST['latitude'], $_POST['longitude']);
                    
                    $oOeuvre->modifierOeuvre($_GET['idOeuvre'], $_POST['titre'], $_POST['titreVariante'],  $_POST['technique'], $_POST['techniqueAng'], $_POST['description'], $_POST['validation'], $_POST['arrondissement'], $idAdresse, $_POST['artiste'], $_POST['categorie'], $_POST['sousCategorie'], $_POST['materiaux'], $_POST['materiauxAng']);
                
                $oVue = new VueDefaut();
                $aOeuvres = $oOeuvre->listeOeuvres();
                $oVue->afficheListeModifierOeuvres($aOeuvres);
                    
                $message = "Oeuvre modifiée.";
                    
                }
                catch (Exception $e)
                {
                    $message = $e->getMessage();     
                }
            } else {
                $oVue->modifierOeuvre($aOeuvre, $aAdresse, $aArrondissements, $aArtistes, $aCategories, $aSousCategories, $erreurTitre, $message);
            }     
            $oVue->afficheFooter();  
        }
    	
    	/*Vue liste pour supprimer oeuvres
        * @author: German Mahecha
        */
        private function supprimerOeuvres($idOeuvre) 
        {   
            $oOeuvre = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
            $oOeuvre->supprimerOeuvre($idOeuvre);
            $aOeuvres = $oOeuvre->listeOeuvres();
            
            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();
            $oVue->afficheListeSupprimerOeuvres($aOeuvres);
            $oVue->afficheFooter();
        }
    

         
        /*ARTISTE*/

          private function artistes()
        {
            $oArtistes = new MArtistes('', '', '' ,'', '', '');
            $oOeuvres = new MOeuvres ('', '', '','', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
              
            $aArtistes = $oArtistes::listeArtistes();
              
            $oVue = new VueDefaut();
            $oVue->afficheHeader();
            $oVue->afficheArtistes($aArtistes, $oOeuvres);
            $oVue->afficheFooter();
    
        }

        private function listeArtistes()
        {
            $oArtistes = new MArtistes('', '', '' ,'', '', '');
            $aArtistes = $oArtistes::listeArtistes();

            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();
            $oVue->listeArtistes($aArtistes);
            $oVue->afficheFooter();
        }

    	/*Vue liste pour modifier artistes
        * @author: German Mahecha
        */
        private function listeModifierArtistes()
        {
            $oArtistes = new MArtistes('', '', '' ,'', '', '');
            $aArtistes = $oArtistes::listeArtistes();
              
            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();
            $oVue->afficheListeModifierArtistes($aArtistes);
            $oVue->afficheFooter();
    
        }
        
        /*Vue liste pour supprimer artistes
        * @author: German Mahecha
        */
        private function listeSupprimerArtistes()
        {
            $oArtistes = new MArtistes('', '', '' ,'', '', '');
            $aArtistes = $oArtistes::listeArtistes();
              
            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();
            $oVue->afficheListeSupprimerArtistes($aArtistes);
            $oVue->afficheFooter();
    
        }

        /* Ajouter  une ARTISTE
        * Auteure: Thuy Tien Vo
        */


       
        private function ajouterUnArtiste()
        {     
            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();

            $erreurTitre ='';
            $message ='';
            if($_GET['action'] == 'ajoutArtiste')

                {   $oArtiste=new MArtistes('', '', '','', '', '');
                    $oArtiste->ajoutArtiste('',$_POST['prenom'], $_POST['nom'], $_POST['collectif'],'' ,'');
                    $message = "Artiste ajoutée.";
                   
                }
       
            $oVue->formulaireAjouterArtiste();
            $oVue->afficheFooter();
        }


        private function modifierArtiste($idArt)
        {   
            $oArtiste = new MArtistes('', '', '', '', '', '');
            $aArtiste = $oArtiste->getArtisteParId($idArt);
            $aArtistes = $oArtiste->listeArtistes();
            
            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();
            
            if($_GET['idArtiste'] && $_GET['action'] == 'valider') {
                
                try
                {
                $oArtiste->modifierArtiste($_GET['idArtiste'], $_POST['prenom'], $_POST['nom'], $_POST['collectif'], $_POST['photoArtiste']);
                
                $oVue = new VueDefaut();
                $aArtistes = $oArtiste->listeArtistes();
                $oVue->afficheListeModifierArtistes($aArtistes); 
                    
                }
                catch (Exception $e)
                {
                    $message = $e->getMessage();     
                } 
                
    
            } else {
                $oVue->modifierUnArtiste($aArtiste);
            }     
            $oVue->afficheFooter();   
        }


        private function supprimerArtistes($idArtiste)
        {   
            $oArtiste = new MArtistes('', '', '', '', '', '');
            $oArtiste->supprimerArtiste($idArtiste);
            $aArtistes = $oArtiste::listeArtistes();
            
            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();
            $oVue->afficheListeSupprimerArtistes($aArtistes);
            $oVue->afficheFooter();
        }


        /*CATÉGORIE*/
	/*Vue liste pour modifier categories
        * @author: German Mahecha
        */
        private function listeModifierCategories()
        {
            $oCategories = new MCategories('','','');
            $aCategories = $oCategories::listeCategories();
              
            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();
            $oVue->afficheListeModifierCategories($aCategories);
            $oVue->afficheFooter();
    
        }
        /*Vue liste pour supprimer categories
        * @author: German Mahecha
        */
        private function listeSupprimerCategories()
        {
            $oCategories = new MCategories('','','');
            $aCategories = $oCategories->listeCategories();
              
            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();
            $oVue->afficheListeSupprimerCategories($aCategories);
            $oVue->afficheFooter();
    
        }


        /* Ajouter une Catégorie
        * Auteure: Thuy Tien Vo
        */
 
         private function ajouterUnCategorie()
         {     
              $oVue = new VueDefaut();
              $oVue->afficheHeaderAdmin();
                $erreurTitre ='';
            $message ='';
            if($_GET['action'] == 'ajoutCategorie')

                {   $oArtiste=new MCategories('', '', '');
                    $oArtiste->ajoutCategorie($_POST['nomCategorie'], $_POST['nomCatAng'],'');
                    $message = "Catégorie ajoutée.";
                    
                }
        
            $oVue->formulaireAjouterCategorie();
            $oVue->afficheFooter();
             
        } 
        
        /* Supprimer  un Catégorie
        * Author: Thuy Tien Vo
        */
        private function supprimerCategories($idCategorie) 
        {   
            $oCategorie = new MCategories('', '', '');
            $oCategorie->supprimerCAtegories($idCategorie);
            $aCategories = $oCategorie->listeCategories();
            
            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();
            $oVue->afficheListeSupprimerCategories($aCategories);
            $oVue->afficheFooter();
        }


        private function modifierCategories($idCat)
        {   
            $oCategorie = new MCategories('', '', '');
            $aCategorie = $oCategorie->getCategorieParId($idCat);
            $aCategories = $oCategorie->listeCategories();
            
            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();
            
            if($_GET['idCategorie'] && $_GET['action'] == 'valider') {
                
                try
                {
                $oCategorie->modifierCategorie($_GET['idCategorie'], $_POST['nomCategorie'], $_POST['nomCatAng']);
                
                $oVue = new VueDefaut();
                $aCategories = $oCategorie->listeCategories();
                $oVue->afficheListeModifierCategories($aCategories); 
                    
                }
                catch (Exception $e)
                {
                    $message = $e->getMessage();     
                } 
                
    
            } else {
                $oVue->modifierUneCategorie($aCategorie);
            }     
            $oVue->afficheFooter();   
        }
    
    


        /*UTILISATEUR*/

        private function unUtilisateur($idGetUtilisateur)
        {
            $oUtilisateur = new MUtilisateurs('','','','','','');
            $outilisateur = $oUtilisateur::listeUnUtilisateur($idGetUtilisateur);
            $oVue = new VueDefaut();
            $oVue->afficheHeader();
            $oVue->afficherUnUtilisateur($outilisateur);
            $oVue->afficheFooter();
        }
		
	/*Vue liste des utilisateurs
        * @author: German Mahecha
        */
        private function listerUtilisateurs()
        {
            $oUtilisateurs = new MUtilisateurs('','','','','','');
            $aUtilisateurs = $oUtilisateurs::listeUtilisateurs();

            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();
            $oVue->listerUtilisateurs($aUtilisateurs);
            $oVue->afficheFooter();
        }

    	/*Vue liste pour modifier utilisateurs
        * @author: German Mahecha
        */
        private function listeModifierUtilisateurs()
		{
            $message='';
            $oUtilisateurs = new MUtilisateurs('','','','','','');
            $aUtilisateurs = $oUtilisateurs::listeUtilisateurs();
              
            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();
			$oVue->afficheListeModifierUtilisateurs($aUtilisateurs, $message);
            $oVue->afficheFooter();
    
		}
	
	/*Vue liste pour supprimer utilisateurs
        * @author: German Mahecha
        */
        private function listeSupprimerUtilisateurs()
		{
            $oUtilisateurs = new MUtilisateurs('', '', '' ,'', '', '');
            $aUtilisateurs = $oUtilisateurs::listeUtilisateurs();
              
            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();
			$oVue->afficheListeSupprimerUtilisateurs($aUtilisateurs);
            $oVue->afficheFooter();
    
		}

        private function inscription()
        {
            $erreurTitre ='';
            $message ='';
          
            $oVue = new VueDefaut();
            $oVue->afficheHeader();

            if($_GET['action'] == 'ajoutUtilisateur') 
            {
                
                $oUtilisateur = new MUtilisateurs('', '', '','', '', '');
                $oUtilisateur->ajoutUtilisateur($_POST['utilisateur'], $mdp=MD5($_POST['motDePasse']),  $_POST['bio'], $_POST['score'], $_POST['photoUtilisateur']);
                $message = "Utilisateur ajoutée.";
            }

            $oVue->afficheInscription();
            $oVue->afficheFooter();    
        } 


        private function profilUtilisateur()
        {

            $oUtilisateurs = new MUtilisateurs('', '', '', '', '', '');
            $aUtilisateurs = $oUtilisateurs->listeUtilisateurs();


            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();
            //$oVue->ajouterUnArtiste();
            $oVue->listerUtilisateurs($aUtilisateurs);
            $oVue->afficheFooter();
        }

          private function modifierUtilisateur($idUtil)
        {   
            
             $erreurTitre ='';
             $message ='';
             $oUtilisateur = new MUtilisateurs('', '', '','', '', '');
             $aUtilisateur = $oUtilisateur->getUtilisateurParId($idUtil);
             $aUtilisateurs = $oUtilisateur->listeUtilisateurs();

            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();

            if($_GET['idUtilisateur'] && $_GET['action'] == 'valider')
            {
               try
                {
                    $oUtilisateur->modifierUtilisateur($_GET['idUtilisateur'], $_POST['utilisateur'], md5($_POST['motDePasse']), $_POST['bio'], $_POST['score'], $_POST['photoUtilisateur']);
                    $oVue = new VueDefaut();
                   $message = 'Utilistaeur modifie';

                    $oVue->afficheListeModifierUtilisateurs($aUtilisateurs, $message);
                   
               }
                catch (Exception $e)
                {
                    $message = $e->getMessage();
                }
            }
            else
            {
                $oVue->modifierUnUtilisateur($aUtilisateur);
            }
           // $oVue = afficheListeModifierUtilisateurs($aUtilisateurs);
            $oVue->afficheFooter();
        }


          private function supprimerUtilisateurs($idUtil)
        {   
            $oUtilisateur = new MUtilisateurs('', '', '','', '', '');
            $oUtilisateur->supprimerUtilisateurs($idUtil);
            $aUtilisateurs=$oUtilisateur->listeUtilisateurs();

            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();
            $oVue->afficheListeSupprimerUtilisateurs($aUtilisateurs);
            $oVue->afficheFooter();
        }


    

    /*ADMIN/MODERATEUR*/

        private function admin()
        {
            $erreurConnexion = '';
            $nombreAleatoire = rand(1, 1000); 
            $oVue = new VueDefaut();
            $oVue->afficheHeaderCnxAdmin();
            $oVue->afficheConnexionAdmin($nombreAleatoire, $erreurConnexion);
            $oVue->afficheFooter();
        }
    
        private function listeModifierAdmin_moderateur()
        {
            $oAdmin_moderateur = new MAdmin_Moderateur('', '', '', '');
            $aAdmin_moderateur = $oAdmin_moderateur::listeAdmin_moderateur();
            
            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();
			$oVue->afficheListeModifierAdmin_moderater($aAdmin_moderateur);
            $oVue->afficheFooter();
        }
    
        private function listeSupprimerAdmin_moderateur()
        {
            $oAdmin_moderateur = new MAdmin_Moderateur('', '', '', '');
            $aAdmin_moderateur = $oAdmin_moderateur::listeAdmin_moderateur();
            
            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();
            $oVue->afficheListeSupprimerAdmin_moderateur($aAdmin_moderateur);
            $oVue->afficheFooter();
        }



        private function afficheInscriptionAdmin()
        {
          
            $erreurTitre ='';
            $message ='';
          
            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();

            if($_GET['action'] == 'ajoutUtilisateur') 
            {
                
                $oUtilisateur = new MUtilisateurs('', '', '','', '', '');
                $oUtilisateur->ajoutUtilisateur($_POST['utilisateur'], $mdp=MD5($_POST['motDePasse']),  $_POST['bio'], $_POST['score'], $_POST['photoUtilisateur']);
                $message = "Utilisateur ajoutée.";
            }

            $oVue->afficheInscriptionAdmin();
            $oVue->afficheFooter();    
        } 
         

        private function ajouterAdmin_moderateur()
        {
            $erreurTitre ='';
            $message ='';
          
            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();
            
            if($_GET['action'] == 'ajoutAdmin_moderateur')
            {
                $oAdmin_moderateur = new MAdmin_Moderateur('', '', '', '');
                $oAdmin_moderateur->ajoutAdmin_moderateur($_POST['role'], $_POST['login'], $mdp=MD5($_POST['pass']));
            }
            
            $oVue->formulaireAjouterAdmin_moderateur();
            $oVue->afficheFooter();
        }
    
     
        private function modifierAdmin_moderateur($idAmin_moderateur)
        {
            $oAdmin_moderateur = new MAdmin_Moderateur('', '', '', '');
            $aAdmin_moderateur = $oAdmin_moderateur->getAdmin_moderateurParId($idAmin_moderateur);
            $aAdmin_moderateurs = $oAdmin_moderateur->listeAdmin_moderateur();
            
            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();
            
            if($_GET['idAdMod'] && $_GET['action'] == 'valider')
            {
                try
                {
                    $oAdmin_moderateur->modifierAdmin_moderateur($_GET['idAdMod'], $_POST['role'], $_POST['login'], $_POST['pass']);
                
                    $oVue = new VueDefaut();
                    $oVue->afficheListeModifierAdmin_moderater($aAdmin_moderateurs);
               }
                catch (Exception $e)
                {
                    $message = $e->getMessage();
                }
            
            }
            else
            {
               $oVue->modifierUnAdmin_moderateur($aAdmin_moderateur);
            }
      
            
            $oVue->afficheFooter();
        }
    
          
        private function supprimerAdmin_moderateur($idAmin_moderateur)
        {
            $oAdmin_moderateur = new MAdmin_Moderateur('', '', '', '');
            $oAdmin_moderateur->supprimerAdmin_moderateur($idAmin_moderateur);
            $aAdmin_moderateurs = $oAdmin_moderateur->listeAdmin_moderateur();
            
            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();
            $oVue->afficheListeSupprimerAdmin_moderateur($aAdmin_moderateurs);
            $oVue->afficheFooter();
        }
    
   
    
       

}

?>
