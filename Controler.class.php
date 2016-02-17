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
                    if($_GET['idOeuvre'] != ''){
                        $this->unOeuvre($_GET['idOeuvre']);    
                    }else{
                        $this->artistes();
                    }
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
                case 'afficheArtistes':
                        $this->afficheArtistes();
                    break;
                case 'ajoutArtiste':
                        $this->ajoutArtiste();
                    break;   
                    
                case 'supprimerArtistes':
                        $this->supprimerArtistes($_GET['idArtiste']);
                    break;
                
                case 'afficheUtilisateurs':
                        $this->afficheUtilisateurs();
                    break;
                
                case 'ajoutUtilisateur':
                        $this->ajoutUtilisateur();
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
                    if($_GET['action'] == 'envoyer')                    {
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

                case 'afficheCategories':
                    $this->afficheCategories();
                    break;
                case 'sousCategories':
                   if($_GET['idCategorie'] !=''){
                        $this->oeuvresParCat($_GET['idCategorie']);
                    }else{
                        $this->sousCategories();
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
                
                case 'miseajourjson':
                    $this->miseajourjson();
                    break;

                case 'afficheOeuvres':
                    $this->afficheOeuvres();
                    break;

                case 'afficheCategories':
                $this->afficheSousCategories();
                break;
                
                case 'ajoutCategorie':
                $this->ajoutCategorie();
                break;
 
                 case 'profilUtilisateurConnexion':
                    $this->profilUtilisateurConnexion();
                    break;
                case 'propositionPhotoUtilisateur':
                    $this->propositionPhotoUtilisateur();
                    break;
                case 'modifierProfilUtilisateur':
                    $this->modifierProfilUtilisateur($_GET['idUtilisateur']);
                    break;

                case 'afficheCommentaires':
                    $this->afficheCommentaires();
                    break;
                
                case 'afficheBDD':
                    $this->afficheBDD();
                    break;
                
                
                default:
			    $this->accueil();
				break;
			}
            
		}

        private function afficheContenuAdmin()
        {

            $oVue = new VueDefaut();
            $oVue->afficheHeader();
            $oVue->afficheContenuAdmin();
            $oVue->afficheFooter();
            
        } 
		
        private function accueil()
		{
            $oOeuvres = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '','','','','','');
            $aOeuvres = $oOeuvres::listeOeuvres();
            $oVue = new VueDefaut();
			$oVue->afficheHeader();
            $oVue->afficheSliderAccueil($aOeuvres);
            $oVue->afficheJumbotronAccueil();
			$oVue->afficheOeuvresAccueil($aOeuvres);
			$oVue->afficheFooter(true, false, false, false);
			
		} 

        private function unOeuvre($idget)
		{
            $oOeuvre = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '','','','','','');
            $oeuvre = $oOeuvre::getOeuvreParId($idget);
            
            $oArrondissement = new MArrondissement('','');
            $arrondissement = $oArrondissement::getArrondissementParId($oeuvre['idArrondissement']);
                       
            $oCategorie = new MCategories('','','');
            $categorie = $oCategorie::getCategorieParId($oeuvre['idCategorie']);
            
            $oSousCategorie = new MSousCategories('','','','');
            $sousCategorie = $oSousCategorie::getSousCategorieParId($oeuvre['idSousCategorie']);
            
            $oVue = new VueDefaut();
			$oVue->afficheHeader();
			$oVue->afficheUnOeuvre($oeuvre,$arrondissement,$categorie,$sousCategorie);
			$oVue->afficheFooter(false,false, false, false);
			
		}

        private function unUtilisateur($idGetUtilisateur)
        {
            $oUtilisateur = new MUtilisateurs('','','','','','');
            $outilisateur = $oUtilisateur::listeUnUtilisateur($idGetUtilisateur);
            $oVue = new VueDefaut();
            $oVue->afficheHeader();
            $oVue->afficherUnUtilisateur($outilisateur);
            $oVue->afficheFooter(false,false, false, false);
        }
		
		
         private function artistes()
		{
            $oArtistes = new MArtistes('', '', '' ,'', '', '');
            $oOeuvres = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '','','','','','');
              
            $aArtistes = $oArtistes::listeArtistes();
              
            $oVue = new VueDefaut();
            $oVue->afficheHeader();
			$oVue->afficheArtistes($aArtistes, $oOeuvres);
            $oVue->afficheFooter(false,false, false, false);
    
		}

        private function listerUtilisateurs()
        {
            $oUtilisateurs = new MUtilisateurs('','','','','','','','','');
            $aUtilisateurs = $oUtilisateurs::listeUtilisateurs();

            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();
            $oVue->listerUtilisateurs($aUtilisateurs);
            $oVue->afficheFooter(false,false, false, false);
        }
    
        private function ajoutUtilisateur()
        {
            $oUtilisateur = new MUtilisateurs('', '', '', '', '', '', '', '', '');
            
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            $oVueAdmin->afficheHeaderAdmin();
            
            if($_GET['action'] == "ajoutUtilisateur"){
                $oUtilisateur->ajoutUtilisateur($_POST["loginUtilisateur"], $_POST["passUtilisateur"], $_POST["nom"], $_POST["prenom"], $_POST["courriel"], $_POST["telephone"], $_POST["bio"], $_POST["photoUtilisateur"]);
            }
            
            $message = '';
            $erreurPrenom = '';
            $erreurNom = '';
            $erreurLoginUtilisateur = '';
            $erreurPassUtilisateur = '';
            $erreurCourriel = '';
            $erreurTelephone = '';
            $erreurBio = '';
            $erreurPhotoArtiste = '';
            
            $oVueAdmin->ajoutUtilisateur($message, $erreurPrenom, $erreurNom, $erreurLoginUtilisateur, $erreurPassUtilisateur, $erreurCourriel, $erreurTelephone, $erreurBio, $erreurPhotoArtiste);
            $oVueDefaut->afficheFooter(false, true, false, false);
        }
    
        private function afficheOeuvres()
		{
            $oOeuvres = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '','','','','','');
            $aOeuvres = $oOeuvres->listeOeuvres();
            $nbreOeuvres = $oOeuvres->nbreOeuvres();
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            
            $oVueAdmin->afficheHeaderAdmin();
			$oVueAdmin->afficheOeuvres($aOeuvres, $nbreOeuvres);
            $oVueDefaut->afficheFooter(false, true, false, true);
    
		}
    
        private function afficheUtilisateurs()
		{
            $oUtilisateurs = new MUtilisateurs('', '', '', '', '', '', '', '', '');
            $aUtilisateurs = $oUtilisateurs->listeUtilisateurs();
            $nbreUtilisateurs = $oUtilisateurs->nbreUtilisateurs();
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            
            $oVueAdmin->afficheHeaderAdmin();
			$oVueAdmin->afficheUtilisateurs($aUtilisateurs, $nbreUtilisateurs);
            $oVueDefaut->afficheFooter(false, true, false, true);
    
		}
    
        private function afficheArtistes()
		{
            $oArtistes = new MArtistes('', '', '','', '', '');
            $aArtistes = $oArtistes->listeArtistes();
            $nbreArtistes = $oArtistes->nbreArtistes();
            
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            
            $oVueAdmin->afficheHeaderAdmin();
			$oVueAdmin->afficheArtistes($aArtistes, $nbreArtistes);
            $oVueDefaut->afficheFooter(false, true, false, true);
    
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
    
    
    
        private function modifierArtiste($idArt)
        {   
            $oArtiste = new MArtistes('', '', '', '', '', '');
            $aArtiste = $oArtiste->getArtisteParId($idArt);
            $aArtistes = $oArtiste->listeArtistes();
            $nbreArtistes = $oArtiste->nbreArtistes();
            
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            $oVueAdmin->afficheHeaderAdmin();
            
            if($_GET['idArtiste'] && $_GET['action'] == 'valider') {
                
                try
                {
                $oArtiste->modifierArtiste($_GET['idArtiste'], $_POST['prenom'], $_POST['nom'], $_POST['collectif'], $_POST['photoArtiste']);
                
                $oVue = new VueDefaut();
                $aArtistes = $oArtiste->listeArtistes();
                $oVueAdmin->afficheArtistes($aArtistes, $nbreArtistes); 
                    
                }
                catch (Exception $e)
                {
                    $message = $e->getMessage();     
                } 
                
    
            } else {
            
            $message = '';
            $erreurPrenom = '';
            $erreurNom = '';
            $erreurCollectif = '';
            $erreurPhotoArtiste = '';
                
                $oVueAdmin->modifierUnArtiste($aArtiste, $message, $erreurPrenom, $erreurNom, $erreurCollectif, $erreurPhotoArtiste);
            }     
            $oVueDefaut->afficheFooter(false, true, false, true);   
        }
    
        private function modifierCategories($idCat)
        {   
            $oCategorie = new MCategories('', '', '');
            $aCategorie = $oCategorie->getCategorieParId($idCat);
            $aCategories = $oCategorie->listeCategories();
            
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            $oVueAdmin->afficheHeaderAdmin();
            
            if($_GET['idCategorie'] && $_GET['action'] == 'valider') {
                
                try
                {
                $oCategorie->modifierCategorie($_GET['idCategorie'], $_POST['nomCategorie'], $_POST['nomCatAng']);
                
                $oVueAdmin = new VueAdmin();
                $aCategories = $oCategorie->listeCategories();
                $nbreCategories = $oCategorie->nbreCategories();
                $oVueAdmin->afficheCategories($aCategories, $nbreCategories); 
                    
                }
                catch (Exception $e)
                {
                    $message = $e->getMessage();     
                } 
                
                
    
            } else {
                
                $message = "";
                $erreurNomCat = "";
                $erreurNomCatAng = "";
                
                $oVueAdmin->modifierUneCategorie($aCategorie, $message, $erreurNomCat, $erreurNomCatAng);
            }     
            $oVueDefaut->afficheFooter(false, true, false, true);   
        }
    
        private function supprimerArtistes($idArtiste)
        {   
            $oArtiste = new MArtistes('', '', '', '', '', '');
            $oArtiste->supprimerArtiste($idArtiste);
            $aArtistes = $oArtiste::listeArtistes();
            $nbreArtistes = $oArtiste::nbreArtistes();
            
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            $oVueAdmin->afficheHeaderAdmin();
            $oVueAdmin->afficheArtistes($aArtistes, $nbreArtistes);
            $oVueDefaut->afficheFooter(false, true, false, true);
        }
        
        private function modifierUtilisateur($idUtil)
        {   
            
             $erreurTitre ='';
             $message ='';
             $oUtilisateur = new MUtilisateurs('', '', '','', '', '','','','');
             $aUtilisateur = $oUtilisateur->getUtilisateurParId($idUtil);
             $aUtilisateurs = $oUtilisateur->listeUtilisateurs();
            $nbreUtilisateurs = $oUtilisateur->nbreUtilisateurs();
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            $oVueAdmin->afficheHeaderAdmin();

            if($_GET['idUtilisateur'] && $_GET['action'] == 'valider')
            {
               try
                {
                    $oUtilisateur->modifierUtilisateur($_GET['idUtilisateur'], $_POST['loginUtilisateur'], md5($_POST['passUtilisateur']), $_POST['prenom'], $_POST['nom'], $_POST['courriel'], $_POST['telephone'], $_POST['bio'], $_POST['photoUtilisateur']);
                    $oVueAdmin = new VueAdmin();
                     $aUtilisateurs = $oUtilisateur->listeUtilisateurs();
                    $message = 'Utilisateur modifié';
                    $oVueAdmin->afficheUtilisateurs($aUtilisateurs, $nbreUtilisateurs);
               }
                catch (Exception $e)
                {
                    $message = $e->getMessage();
                }
            }
            else
            {
                $message = '';
                $erreurPrenom = '';
                $erreurNom = '';
                $erreurLoginUtilisateur = '';
                $erreurPassUtilisateur = '';
                $erreurCourriel = '';
                $erreurTelephone = '';
                $erreurBio = '';
                $erreurPhotoArtiste = '';
                
                $oVueAdmin->modifierUtilisateur($aUtilisateur, $message, $erreurPrenom, $erreurNom, $erreurLoginUtilisateur, $erreurPassUtilisateur, $erreurCourriel, $erreurTelephone, $erreurBio, $erreurPhotoArtiste);
            }
        
            $oVueDefaut->afficheFooter(false,true,false,true);


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
    
        private function supprimerUtilisateurs($idUtil)
        {   
            $oUtilisateur = new MUtilisateurs('', '', '','', '', '','','','');
            $oUtilisateur->supprimerUtilisateurs($idUtil);
            $aUtilisateurs=$oUtilisateur->listeUtilisateurs();
            $nbreUtilisateurs = $oUtilisateur->nbreUtilisateurs();
            
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            $oVueAdmin->afficheHeaderAdmin();
            $oVueAdmin->afficheUtilisateurs($aUtilisateurs, $nbreUtilisateurs);
            $oVueDefaut->afficheFooter(false, true, false, true);
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
    
        private function modifierOeuvre($idOeuvre)
        {   
            $erreurTitre ='';
            $message ='';
            
            $oArtistes = new MArtistes('', '', '' ,'', '', '');
            $aArtistes = $oArtistes::listeArtistes();
            $idArtiste = $oArtistes::getIdArtisteParOeuvre($idOeuvre);
            
            $oCategories = new MCategories('', '', '' ,'', '','');
            $aCategories = $oCategories::listeCategories();
            
            $oSousCategories = new MSousCategories('', '', '', '');
            $aSousCategories = $oSousCategories::listeSousCategories();
            
            $oArrondissements = new MArrondissement('', '');
            $aArrondissements = $oArrondissements::listeArrondissement();
            
            $oOeuvre = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '','','','','','');
            
            $aOeuvre = $oOeuvre->getOeuvreParId($idOeuvre);
            $aOeuvres = $oOeuvre->listeOeuvres();
                       
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            $oVueAdmin->afficheHeaderAdmin();
            
            if($_GET['idOeuvre'] && $_GET['action'] == 'valider') {
                                    
                try
                {     
                    
                    $oOeuvre->modifierOeuvre($_GET['idOeuvre'], $_POST['titre'], $_POST['titreVariante'],  $_POST['technique'], $_POST['techniqueAng'], $_POST['description'], $_POST['validation'], $_POST['arrondissement'],  $_POST['categorie'], $_POST['sousCategorie'], $_POST['materiaux'], $_POST['materiauxAng'], $_POST['adresse'], $_POST['batiment'], $_POST['parc'], $_POST['latitude'], $_POST['longitude']);
                
                $oArtistes->modifierArtisteOeuvre($idOeuvre, $_POST['artiste']);               
                  
                $oVueDefaut = new VueDefaut();
                $oVueAdmin = new VueAdmin();
                $aOeuvres = $oOeuvre->listeOeuvres();
                $nbreOeuvres = $oOeuvre->nbreOeuvres();
                $message = "Oeuvre modifiée.";    
                $oVueAdmin->afficheOeuvres($aOeuvres, $nbreOeuvres);
                    
                
                    
                }
                catch (Exception $e)
                {
                    $message = $e->getMessage();     
    
                }
            } else {
                
                $erreurTitre ='';
                $erreurTitreVariante = '';
                $erreurTechnique = '';
                $erreurTechniqueAng = '';
                $erreurDescription = '';
                $erreurAdresse = '';
                $erreurBatiment = '';
                $erreurParc = '';
                $erreurLatitude = '';
                $erreurLongitude = '';
                $erreurArrondissement = '';
                $erreurArtiste = '';
                $erreurCategorie = '';
                $erreurSousCategorie = '';
                $erreurMateriaux = '';
                $erreurMateriauxAng ='';
                
                $oVueAdmin->modifierOeuvre($aOeuvre, $aArrondissements, $idArtiste, $aArtistes, $aCategories, $aSousCategories, $erreurTitre, $message, $erreurTitre, $erreurTitreVariante, $erreurTechniqueAng, $erreurTechnique, $erreurTechniqueAng, $erreurDescription, $erreurAdresse, $erreurBatiment, $erreurParc, $erreurLatitude, $erreurLongitude, $erreurArrondissement, $erreurArtiste, $erreurCategorie, $erreurSousCategorie, $erreurMateriaux, $erreurMateriauxAng);
            }     
            $oVueDefaut->afficheFooter(false, true, false, true);  
        }
    
        private function supprimerOeuvres($idOeuvre) 
        {   
            $oOeuvre = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '','','','','','');
            $oOeuvre->supprimerOeuvre($idOeuvre);
            $aOeuvres = $oOeuvre->listeOeuvres();
            $nbreOeuvres = $oOeuvre->nbreOeuvres();
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();      
            $oVueAdmin->afficheHeaderAdmin();
            $oVueAdmin->afficheOeuvres($aOeuvres, $nbreOeuvres);
            $oVueDefaut->afficheFooter(false, true, false, true);
        }
    
        
		private function arrondissements()
		{

			$oArrondisement = new MArrondissement('', '');
			//$aArrondissements = $oArrondisement::listeArrondissement($id_Arrondissement);
			$aArrondissements = $oArrondisement::listeArrondissement();

            $oVue = new VueDefaut();
            $oVue->afficheHeader();
			$oVue->afficheArrondissements($aArrondissements);
            $oVue->afficheFooter(false, true, false, true);
    
		}

		private function oeuvresParArr($getIdArr)
        {   
            $oOeuvreParArr = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '','','','','','');
            $aOeuvreParArr = $oOeuvreParArr::listerOeuvresParArr($getIdArr);
            
            $oArrondisement = new MArrondissement('', '');
            $aArrondissements = $oArrondisement::getArrondissementParId($getIdArr);

            $oVue = new VueDefaut();
            $oVue->afficheHeader();
            $oVue->afficheOeuvre_Par_Arr($aOeuvreParArr, $aArrondissements);
            $oVue->afficheFooter(false, true, false, true);
        }

        private function categories()
        {
            $oCategories = new MCategories('', '', '' ,'', '','');
            $aCategories = $oCategories::listeCategories();

            $oVue = new VueDefaut();
            $oVue->afficheHeader();
            $oVue->afficheCategories($aCategories);
            $oVue->afficheFooter(false,false,false,false);
    
        }


        private function oeuvresParCat($id_cat)
        {   
         
            $oOeuvreParCat = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '','','','','','');
            $aOeuvreParCat = $oOeuvreParCat::listeOeuvresParCat($id_cat);

            $oVue = new VueDefaut();
            $oVue->afficheHeader();
            $oVue->afficheOeuvre_Par_Cat($aOeuvreParCat);
            $oVue->afficheFooter(false,false,false,false);
    
        }


    
        private function inscription()
        {
            $erreurTitre ='';
            $message ='';
            
            
          
            $oVue = new VueDefaut();
            $oVue->afficheHeader();

            if($_GET['action'] == 'ajoutUtilisateur') 
            {
                
                $oUtilisateur = new MUtilisateurs('', '', '','', '', '','','','');
                $oUtilisateur->ajoutUtilisateur($_POST['utilisateur'], $mdp=MD5($_POST['motDePasse']), $_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['telephone'], $_POST['bio'], $_POST['photo ']);
                $message = "Utilisateur ajoutée.";
            }

            $oVue->afficheInscription();

            $oVue->afficheFooter(false, false, false, false);    
    

        } 

        private function connexion()
        {   
            $nombreAleatoire = rand(1, 1000);
            $erreurConnexion = '';
            
            $oVue = new VueDefaut();
            $oVue->afficheHeader();
            $oVue->afficheConnexion($nombreAleatoire, $erreurConnexion);
            $oVue->afficheFooter(false,false,false,false);
            
        } 

        private function rechercheOeuvresMot()
        {
            $oVue = new VueDefaut();
            $oVue->afficheHeader();
            
            $oOeuvre = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '','','','','','');
            $aOeuvres=$oOeuvre::listeOeuvresparMot($_POST['mot']);
            $oVue->afficheOeuvresMot($aOeuvres);
            $oVue->afficheFooter(false,false,false,false);
                
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
            
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            $oVueAdmin->afficheHeaderAdmin();
            
            if($_GET['action'] == 'ajoutOeuvre') {
                $oOeuvre = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '','','','','','');
                $oArtiste = new MArtistes('', '', '', '', '', '');
                                         
                try
                {
                    $oOeuvre->ajouterOeuvre($_POST['titre'], $_POST['titreVariante'],  $_POST['technique'], $_POST['techniqueAng'], null, $_POST['description'], $_POST['validation'], $_POST['arrondissement'], $_POST['materiaux'], $_POST['materiauxAng'], $_POST['categorie'], $_POST['sousCategorie'], $_POST['adresse'], $_POST['batiment'], $_POST['parc'], $_POST['latitude'], $_POST['longitude']);
                    
                    $idOeuvre = $oOeuvre->recupererDernierId();
                    
                    $oArtiste->enregistrerOeuvreArtiste($idOeuvre,$_POST['artiste']);
                
                $message = "Oeuvre ajoutée.";
                    
                }
                catch (Exception $e)
                {
                    $message = $e->getMessage();     
                }
                
            }
            $erreurTitre ='';
            $erreurTitreVariante = '';
            $erreurTechnique = '';
            $erreurTechniqueAng = '';
            $erreurDescription = '';
            $erreurAdresse = '';
            $erreurBatiment = '';
            $erreurParc = '';
            $erreurLatitude = '';
            $erreurLongitude = '';
            $erreurArrondissement = '';
            $erreurArtiste = '';
            $erreurCategorie = '';
            $erreurSousCategorie = '';
            $erreurMateriaux = '';
            $erreurMateriauxAng ='';
            
            $oVueAdmin->afficheAjoutOeuvre($aArtistes, $aCategories, $aArrondissements, $aSousCategories, $erreurTitre, $message, $erreurTitre, $erreurTitreVariante, $erreurTechniqueAng, $erreurTechnique, $erreurTechniqueAng, $erreurDescription, $erreurAdresse, $erreurBatiment, $erreurParc, $erreurLatitude, $erreurLongitude, $erreurArrondissement, $erreurArtiste, $erreurCategorie, $erreurSousCategorie, $erreurMateriaux, $erreurMateriauxAng);
            $oVueDefaut->afficheFooter(false,true,false,false);

        }

        private function afficheInscriptionAdmin()
        {
          
            $erreurTitre ='';
            $message ='';
          
            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();

            if($_GET['action'] == 'ajoutUtilisateur') 
            {
                
                $oUtilisateur = new MUtilisateurs('', '', '','', '', '','','','');
                $oUtilisateur->ajoutUtilisateur($_POST['utilisateur'], $mdp=MD5($_POST['motDePasse']),  $_POST['bio'], $_POST['score'], $_POST['photoUtilisateur']);
                $message = "Utilisateur ajoutée.";
            }

            $oVue->afficheInscriptionAdmin();
            $oVue->afficheFooter(false,false,false,false);    
        } 
         

        

        private function profilUtilisateur()
        {

            $oUtilisateurs = new MUtilisateurs('', '', '', '', '', '','','','');
            $aUtilisateurs = $oUtilisateurs->listeUtilisateurs();


            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();
            //$oVue->ajouterUnArtiste();
            $oVue->listerUtilisateurs($aUtilisateurs);
            $oVue->afficheFooter(false,false,false,false);
        }

         private function adminPanel()
        {
             
            $oOeuvres = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '','','','','','');
            $aOeuvres = $oOeuvres->listeOeuvres();
            $nbreOeuvres = $oOeuvres->nbreOeuvres();
             
            $oArtistes = new MArtistes('', '', '', '', '', '');
            $aArtistes = $oArtistes->listeArtistes();
            $nbreArtistes = $oArtistes->nbreArtistes();
             
            $oUtilisateurs = new MUtilisateurs('', '', '', '', '', '','','','');
            $aUtilisateurs = $oUtilisateurs->listeUtilisateurs();
            $nbreUtilisateurs = $oUtilisateurs->nbreUtilisateurs();
             
            $oAdmin_moderateurs = new MAdmin_Moderateur('', '', '', '');
            $aAdmin_moderateurs = $oAdmin_moderateurs->listeAdmin_moderateur();
            
            $message = '';
             
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            $oVueAdmin->afficheHeaderAdmin();
            $oVueAdmin->afficheGestion($nbreOeuvres, $nbreArtistes, $nbreUtilisateurs);
            $oVueDefaut->afficheFooter(false, true, true, false);
        }
    
         private function admin()
        {
            $erreurConnexion = '';
            $nombreAleatoire = rand(1, 1000); 
            $oVue = new VueAdmin();
            $oVue->afficheConnexionAdmin($nombreAleatoire, $erreurConnexion);
            
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
            $oVue->afficheFooter(false,false,false,false);
        }


        private function ajoutArtiste()
        {     
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            $oVueAdmin->afficheHeaderAdmin();

            $erreurTitre ='';
            $message ='';
            if($_GET['action'] == 'ajoutArtiste')

            {   $oArtiste=new MArtistes('', '', '', '', '', '');
                $oArtiste->ajoutArtiste($_POST['prenom'], $_POST['nom'], $_POST['collectif'],'' ,'');
                $message = "Artiste ajouté(e).";

                $oVueAdmin->ajoutArtiste($message, $erreurPrenom, $erreurNom, $erreurCollectif, $erreurPhotoArtiste);


            }
            
            $erreurPrenom = '';
            $erreurNom = '';
            $erreurCollectif = '';
            $erreurPhotoArtiste = '';
            
            $oVueAdmin->ajoutArtiste($message, $erreurPrenom, $erreurNom, $erreurCollectif, $erreurPhotoArtiste);
            $oVueDefaut->afficheFooter(false,true,false,false);
        }


        private function afficheAjouterUnArtiste()
        {
          
            $oVue = new VueDefaut();
            $oVue->afficheHeader();
            $oVue->afficheAjouterUnArtiste();
            $oVue->afficheFooter(false,false,false,false);
            
        } 
        
        /* Ajouter une Sous_Catégorie
        * Auteure: Thuy Tien Vo
        */
 

        private function Souscategories()
        {
            $oSousCategories = new MSousCategories('', '', '' ,'', '','');
            $aSousCategories = $oSousCategories::listeSousCategories();

            $oVue = new VueDefaut();
            $oVue->afficheHeader();
            $oVue->afficheSousCategories($aSousCategories);
            $oVue->afficheFooter(false,false,false,false);
    
        }

        /* Ajouter une Catégorie
        * @author Thuy Tien Vo
        * @author Gautier Piatek
        */
 
         private function ajoutCategorie()
         {     
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            $oVueAdmin->afficheHeaderAdmin();
            
            $erreurTitre ='';
            $message ='';
            
            if($_GET['action'] == 'ajoutCategorie')

                {   
                    $oArtiste=new MCategories('', '', '');
                    $oArtiste->ajoutCategorie($_POST['nomCategorie'], $_POST['nomCatAng']);
                    $message = "Catégorie ajoutée.";
                    $oVueAdmin->formulaireAjouterCategorie($message, $erreurNomCat, $erreurNomCatAng);
                    
                }
            
            $message = "";
            $erreurNomCat = "";
            $erreurNomCatAng = "";
            $oVueAdmin->formulaireAjouterCategorie($message, $erreurNomCat, $erreurNomCatAng);
            $oVueDefaut->afficheFooter(false,true,false,false);
             
        } 
        
        /* Supprimer  un Catégorie
        * @author Thuy Tien Vo
        * @author Gautier Piatek
        */
        private function supprimerCategories($idCategorie) 
        {   
            $oCategorie = new MCategories('', '', '');
            $oCategorie->supprimerCategories($idCategorie);
            $aCategories = $oCategorie::listeCategories();
            $nbreCategories = $oCategorie::nbreCategories();
            
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            $oVueAdmin->afficheHeaderAdmin();
            $oVueAdmin->afficheCategories($aCategories, $nbreCategories);
            $oVueDefaut->afficheFooter(false, true, false, true);
        }
    
        /* Vérifie la connexion utilisateur
         * @author: Gautier Piatek
        */

        private function validerConnexion($login, $pass, $grainSel)
        {
            $oUtilisateur = new MUtilisateurs('', '', '', '', '', '','','','');
            $motDePasseMD5 = $oUtilisateur->MotDePasse($login);
		    $motDePassePlusGrainSel = md5($grainSel . $motDePasseMD5);

            if($pass === $motDePassePlusGrainSel)
            {   
                $_SESSION["session"] = $login;
                //rediriger vers la page accueil
                $oOeuvres = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '','','','','','');
                $aOeuvres = $oOeuvres->listeOeuvres();
                
                
                
                $oVue = new VueDefaut();
                $oVue->afficheHeader();
                $oVue->afficheSliderAccueil($aOeuvres);
                $oVue->afficheJumbotronAccueil();
                $oVue->afficheOeuvresAccueil($aOeuvres);
                $oVue->afficheFooter(false,false,false,false);
            }
            else
            {
                $nombreAleatoire = rand(1, 1000);
                $erreurConnexion = "Combinaison nom d'utilisateur et mot de passe invalide.";
                $oVue = new VueDefaut();
                $oVue->afficheHeader();
                $oVue->afficheConnexion($nombreAleatoire, $erreurConnexion);
                $oVue->afficheFooter(false,false,false,false);
                
            }
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
                $oOeuvres = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '','','','','','');
                $aOeuvres = $oOeuvres ->listeOeuvres();
                $nbreOeuvres = $oOeuvres->nbreOeuvres();
                
                $oArtistes = new MArtistes('', '', '', '', '', '');
                $aArtistes = $oArtistes->listeArtistes();
                $nbreArtistes = $oArtistes->nbreArtistes();
                
                $oUtilisateurs = new MUtilisateurs('', '', '', '', '', '', '' , '', '');
                $aUtilisateurs = $oUtilisateurs->listeUtilisateurs();
                $nbreUtilisateurs = $oUtilisateurs->nbreUtilisateurs();
                
                $oAdmin_moderateurs = new MAdmin_Moderateur('', '', '', '');
                $aAdmin_moderateurs = $oAdmin_moderateurs->listeAdmin_moderateur();
                
                $message = '';
                $oVueAdmin = new VueAdmin();
                $oVueDefaut = new VueDefaut();
                $oVueAdmin->afficheHeaderAdmin();
                $oVueAdmin->afficheGestion($nbreOeuvres, $nbreArtistes, $nbreUtilisateurs);
                $oVueDefaut->afficheFooter(false,true,true,false);
               
            }
            else
            {
                $nombreAleatoire = rand(1, 1000);
                $erreurConnexion = "Combinaison nom d'utilisateur et mot de passe invalide.";
                $oVue = new VueAdmin();
                
                $oVue->afficheConnexionAdmin($nombreAleatoire, $erreurConnexion);
                
                
            }
        }
    
    
        private function miseajourjson()
        {
            $contenuJSON = file_get_contents("http://donnees.ville.montreal.qc.ca/dataset/2980db3a-9eb4-4c0e-b7c6-a6584cb769c9/resource/18705524-c8a6-49a0-bca7-92f493e6d329/download/oeuvresdonneesouvertes.json");
            $oeuvres = json_decode($contenuJSON, true);

            //var_dump($oeuvres[0]['CategorieObjet']);
            foreach ($oeuvres as $oeuvre) {
                                
                //Validation et insertion d'une categorie
                $categorie = new MCategories('',$oeuvre["CategorieObjet"],"");
                if (!empty($oeuvre["CategorieObjet"])&&!$categorie->validerCategorie())
                {
                   $categorie->ajoutCategorie($oeuvre["CategorieObjet"],$oeuvre["CategorieObjetAng"]);
                }
                $idcat=$categorie->validerCategorie();
                //echo $idcat."-Cat<br/>";
                
                //Validation et insertion d'une sousCategorie
                $souscategorie = new MSousCategories('',$oeuvre["SousCategorieObjet"],"","");
                if (!empty($oeuvre["SousCategorieObjet"])&&!$souscategorie->validerSousCategorie())
                {
                   $souscategorie->ajoutSousCategorie($oeuvre["SousCategorieObjet"],$oeuvre["SousCategorieObjetAng"],$idcat);
                }
                $idsouscat=$souscategorie->validerSousCategorie();
                //echo $idsouscat."-SousCat<br/>";
                                
                //Validation et insertion d'un arrondissement
                $arrondissement = new MArrondissement('',$oeuvre["Arrondissement"]);
                if (!empty($oeuvre["Arrondissement"])&&!$arrondissement->validerArrondissement())
                {
                   $arrondissement->enregistrerArrondissement();
                }
                
                $idarrond=$arrondissement->validerArrondissement();
               // echo $idarrond."-Arrondissement<br/>";
                
                //Validation et insertion d'un oeuvre
                $unOeuvre =new MOeuvres('','','','','',$oeuvre["NoInterne"],'','','','','','','','','','','','');
                
                if (!empty($oeuvre["NoInterne"])&&!$unOeuvre->validerOeuvre())
                {
                   $unOeuvre->ajouterOeuvre($oeuvre["Titre"],$oeuvre["TitreVariante"],$oeuvre["Technique"],$oeuvre["TechniqueAng"],$oeuvre["NoInterne"],'',1,$idarrond,$oeuvre["Materiaux"],$oeuvre["MateriauxAng"],$idcat,$idsouscat,$oeuvre["AdresseCivique"],$oeuvre["Batiment"],$oeuvre["Parc"],$oeuvre["CoordonneeLatitude"],$oeuvre["CoordonneeLongitude"]);
                }
                
                $idoeuvre=$unOeuvre->validerOeuvre();
                //echo $obra."-Oeuvre<br/>";
                
                
                 //Validation et insertion des artistes
                $artistes = $oeuvre["Artistes"];
                foreach ($artistes as $artiste) {
                   
                                
                    $unArtiste = new MArtistes("","","","",$artiste["NoInterne"],"");
                    //Validation s'il y a deja un artiste
                    if (!$unArtiste->validerArtiste())
                       $unArtiste->ajoutArtiste($artiste["Prenom"],$artiste["Nom"],$artiste["NomCollectif"],$artiste["NoInterne"],'');
                    
                    $idArt=$unArtiste->validerArtiste();
                    
                   
                    // Validation s'il y a une relation entre un oeuvre et un artiste
                    if (!$unArtiste->validerOeuvreArtiste($idoeuvre,$idArt))
                    {
                        $unArtiste->enregistrerOeuvreArtiste($idoeuvre,$idArt);
                    }
                   
                }
                
            
                
                
            
            }
        
        }
        /**
     * function profilUtilisateurConnexion
     * @access public
     * @auteur: German Mahecha
     */
         private function profilUtilisateurConnexion()
        {

           $oUtilisateur = new MUtilisateurs('','','','','','','','','');
           $unUtilisateur = $oUtilisateur->getUtilisateurParLogin($_SESSION['session']);
           $oVue = new VueDefaut();
           $oVue->afficheHeader();
           $uVue = new VueUtilisateur();    
           $uVue->afficherProfilUtilisateur($unUtilisateur);
           $uVue->afficherPhotosUtilisateur();
           $oVue->afficheFooter(false,false,false,false);
            
        }
    /**
     * function propositionPhotoUtilisateur
     * @access public
     * @auteur: German Mahecha
     */
        private function propositionPhotoUtilisateur()
        {

           $oUtilisateur = new MUtilisateurs('','','','','','','','','');
           $unUtilisateur = $oUtilisateur->getUtilisateurParLogin($_SESSION['session']);


           $oVue = new VueDefaut();
           $oVue->afficheHeader();
            $uVue = new VueUtilisateur();    
           $uVue->afficherProfilUtilisateur($unUtilisateur);
           $uVue->afficherPropositionPhotosUtilisateur();
           $oVue->afficheFooter(false,false,false,false);
        }
      /**
     * function  modifierProfilUtilisateur
     * @access public
     * @auteur: German Mahecha
     */  
        private function  modifierProfilUtilisateur($idUtil)
        {
            $oUtilisateur = new MUtilisateurs('', '', '','', '', '','', '', '');
            $unUtilisateur = $oUtilisateur->getUtilisateurParId($idUtil);
             
            $oVue = new VueDefaut();
            $oVue->afficheHeader();
            $uVue = new VueUtilisateur();
            $uVue->afficherProfilUtilisateur($unUtilisateur);
           
            if($_GET['idUtilisateur'] && $_GET['action'] == 'valider')
            {
               try
                {
                   $oUtilisateur->modifierProfilUtilisateur($_GET['idUtilisateur'],$_POST['nom'], $_POST['prenom'],$_POST['email'],$_POST['telephone'], $_POST['bio']);
                   $message = 'Utilistaeur modifie';
                   $uVue->afficherModifierProfilUtilisateur($unUtilisateur/*, $message*/);
                   
               }
               catch (Exception $e)
               {
                   $message = $e->getMessage();
               }
            }else
            {
                $uVue->afficherModifierProfilUtilisateur($unUtilisateur);
            }
            $oVue->afficheFooter(false,false,false,false);
        }

        
        private function  modifierPhotoUtilisateur($idUtil)
        {
            $oUtilisateur = new MUtilisateurs('', '', '','', '', '','', '', '');
            $unUtilisateur = $oUtilisateur->getUtilisateurParId($idUtil);
             
            $oVue = new VueDefaut();
            $oVue->afficheHeader();
            $uVue = new VueUtilisateur();
            $uVue->afficherProfilUtilisateur($unUtilisateur);
           
            if($_GET['idUtilisateur'] && $_GET['action'] == 'valider')
            {
               try
                {
                   $oUtilisateur->modifierProfilUtilisateur($_GET['idUtilisateur'],$_POST['nom'], $_POST['prenom'],$_POST['email'],$_POST['telephone'], $_POST['bio']);
                   $message = 'Utilistaeur modifie';
                   profilUtilisateurConnexion();
                   
               }
               catch (Exception $e)
               {
                   $message = $e->getMessage();
               }
            }else
            {
                $uVue->afficherModifierProfilUtilisateur($unUtilisateur);
            }
            $oVue->afficheFooter(false,false,false,false);
        }


        private function afficheCategories()
        {
            $oCategories = new MCategories('', '', '' ,'', '','');
            $aCategories = $oCategories->listeCategories();
            $nbreCategories = $oCategories->nbreCategories();
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            
            $oVueAdmin->afficheHeaderAdmin();
            $oVueAdmin->afficheCategories($aCategories, $nbreCategories);
            $oVueDefaut->afficheFooter(false, true, false,true);
    
        }

        private function afficheCommentaires()
        {
         
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            
            $oVueAdmin->afficheHeaderAdmin();
            $oVueAdmin->afficheCommentaires();
            $oVueDefaut->afficheFooter(false, false, false,false);
    
        }

        private function afficheBDD()
        {
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            
            $oVueAdmin->afficheHeaderAdmin();
            
            $message = "";
            $oVueAdmin->afficheGestionBDD($message);
            $oVueDefaut->afficheFooter(false, true, false,false);
        }
        

     
            
            
            
            
       





}?>