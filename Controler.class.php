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
                  case 'afficheAdminMods':
                    $this->afficheAdminMods();
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
                    
                case 'supprimerAdminMod':
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
                case 'supprimerPhoto':
                        $this->supprimerPhoto($_GET['idPhoto']);
                    break; 
                case 'supprimerCommentaire':
                        $this->supprimerCommentaire($_GET['idCommentaire']);
                    break; 
                case 'validerPhoto':
                        $this->validerPhoto($_GET['idPhoto']);
                    break; 
                case 'validerCommentaire':
                        $this->validerCommentaire($_GET['idCommentaire']);
                    break; 
                case 'validerOeuvre':
                        $this->validerOeuvre($_GET['idOeuvre']);
                    break; 
                case 'modifierAdminMod':
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

                case 'sousCategories':
                   if($_GET['idSousCategorie'] !=''){
                        $this->oeuvresParCat($_GET['idSousCategorie']);
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
                case 'ajoutAdminMod':
                    $this->ajoutAdminMod();
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
                $this->afficheCategories();
                break;
                
                case 'ajoutCategorie':
                $this->ajoutCategorie();
                break;
 
                case 'profilUtilisateurConnexion':
                    $this->profilUtilisateurConnexion();
                    break;
                case 'propositionPhotoUtilisateur':
                    if($_GET['action'] == 'ajoutPhoto'){
                        $this->ajouterPhoto($_POST['idUtil'],$_POST['idOeuvre']);  
                    }else{
                        $this->propositionPhotoUtilisateur($_GET['idOeuvre']);
                    }
                    break;
                case 'modifierProfilUtilisateur':
                    $this->modifierProfilUtilisateur($_GET['idUtilisateur']);
                    break;

                case 'commentaire':
                    $this->commentaire($_GET['idCommentaire']);
                    break;

                case 'propositionCommentaire':
                    $this->propositionCommentaire();
                    break;

                case 'afficheModCommentaires':
                    $this->afficheModCommentaires();
                    break;
                
                case 'afficheBDD':
                    $this->afficheBDD();
                    break;
                
                case 'afficheModPhotos':
                    $this->afficheModPhotos();
                    break;
                case 'afficheModOeuvres':
                    $this->afficheModOeuvres();
                    break;
                
                case 'detailsPhotoUtilisateur':
                    $this->afficherDetailsPhotoUtilisateur($_GET['idPhoto']);
                    break;

                 case 'voter':
                    $this->voterPourUnPhoto($_GET['idPhoto'],$_GET['idUtilVote']);
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
                $oUtilisateur->ajoutUtilisateur($_POST["loginUtilisateur"], $_POST["passUtilisateur"], $_POST["nom"], $_POST["prenom"], $_POST["courriel"], $_POST["telephone"], $_POST["bio"], 'utilisateurDefaut.jpg');
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
            
            $nbreOeuvres = $oOeuvres->nbreOeuvres();
            if($nbreOeuvres !=0) {
                $aOeuvres = $oOeuvres->listeOeuvres();
            } else {
                $aOeuvres = '';
            }
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            
            $oVueAdmin->afficheHeaderAdmin();
			$oVueAdmin->afficheOeuvres($aOeuvres, $nbreOeuvres);
            $oVueDefaut->afficheFooter(false, true, false, true);
    
		}
    
        private function afficheUtilisateurs()
		{
            $oUtilisateurs = new MUtilisateurs('', '', '', '', '', '', '', '', '');
            $nbreUtilisateurs = $oUtilisateurs->nbreUtilisateurs();
                if($nbreUtilisateurs !=0) {
                    $aUtilisateurs = $oUtilisateurs->listeUtilisateurs();
                } else {
                    $aUtilisateurs = '';
                }
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            
            $oVueAdmin->afficheHeaderAdmin();
			$oVueAdmin->afficheUtilisateurs($aUtilisateurs, $nbreUtilisateurs);
            $oVueDefaut->afficheFooter(false, true, false, true);
    
		}
    
        private function afficheArtistes()
		{
            $oArtistes = new MArtistes('', '', '','', '', '');
            $nbreArtistes = $oArtistes->nbreArtistes();
            if($nbreArtistes !=0) {
                $aArtistes = $oArtistes->listeArtistes();
            } else {
                $aArtistes = '';
            }
            
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            
            $oVueAdmin->afficheHeaderAdmin();
			$oVueAdmin->afficheArtistes($aArtistes, $nbreArtistes);
            $oVueDefaut->afficheFooter(false, true, false, true);
    
		}
       
    
        private function afficheAdminMods()
        {
            $oAdmin_moderateur = new MAdmin_Moderateur('', '', '', '');
        
            $nbreAdminMods = $oAdmin_moderateur::nbreAdminMods();
            if($nbreAdminMods !=0) {
                $aAdmin_moderateur = $oAdmin_moderateur::listeAdmin_moderateur();
            } else {
                $aAdmin_moderateur = '';
            }
            
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            $oVueAdmin->afficheHeaderAdmin();
			$oVueAdmin->afficheAdminMods($aAdmin_moderateur, $nbreAdminMods);
            $oVueDefaut->afficheFooter(false, true, false, true);
        }

        private function modifierArtiste($idArt)
        {   
            $oArtiste = new MArtistes('', '', '', '', '', '');
            $aArtiste = $oArtiste->getArtisteParId($idArt);
            $nbreArtistes = $oArtiste->nbreArtistes();
                if($nbreArtistes !=0) {
                    $aArtistes = $oArtiste->listeArtistes();
                } else {
                    $aArtistes = '';
                }
            
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            $oVueAdmin->afficheHeaderAdmin();
            
            if($_GET['idArtiste'] && $_GET['action'] == 'valider') {
                
                try
                {
                $oArtiste->modifierArtiste($_GET['idArtiste'], $_POST['prenom'], $_POST['nom'], $_POST['collectif'], $_POST['photoArtiste']);
                
                $oVueAdmin = new VueAdmin();
                $nbreArtistes = $oArtiste->nbreArtistes();
                if($nbreArtistes !=0) {
                    $aArtistes = $oArtiste->listeArtistes();
                } else {
                    $aArtistes = '';
                }
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
            $nbreCategories = $oCategorie->nbreCategories();
                if($nbreCategories !=0) {
                    $aCategories = $oCategorie->listeCategories();
                } else {
                    $aCategories = '';
                }
            
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            $oVueAdmin->afficheHeaderAdmin();
            
            if($_GET['idCategorie'] && $_GET['action'] == 'valider') {
                
                try
                {
                $oCategorie->modifierCategorie($_GET['idCategorie'], $_POST['nomCategorie'], $_POST['nomCatAng']);
                
                $oVueAdmin = new VueAdmin();
                $nbreCategories = $oCategorie->nbreCategories();
                if($nbreCategories !=0) {
                    $aCategories = $oCategorie->listeCategories();
                } else {
                    $aCategories = '';
                }
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
            $nbreArtistes = $oArtiste->nbreArtistes();
            if($nbreArtistes !=0) {
                $aArtistes = $oArtiste->listeArtistes();
            } else {
                $aArtistes = '';
            }
            
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
             $oUtilisateurs = new MUtilisateurs('', '', '','', '', '','','','');
             $aUtilisateur = $oUtilisateurs->getUtilisateurParId($idUtil);
            $nbreUtilisateurs = $oUtilisateurs->nbreUtilisateurs();
                if($nbreUtilisateurs !=0) {
                    $aUtilisateurs = $oUtilisateurs->listeUtilisateurs();
                } else {
                    $aUtilisateurs = '';
                }
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            $oVueAdmin->afficheHeaderAdmin();

            if($_GET['idUtilisateur'] && $_GET['action'] == 'valider')
            {
               try
                {
                    $oUtilisateurs->modifierUtilisateur($_GET['idUtilisateur'], $_POST['loginUtilisateur'], md5($_POST['passUtilisateur']), $_POST['prenom'], $_POST['nom'], $_POST['courriel'], $_POST['telephone'], $_POST['bio'], $_POST['photoUtilisateur']);
                    $oVueAdmin = new VueAdmin();
                    $nbreUtilisateurs = $oUtilisateurs->nbreUtilisateurs();
                    if($nbreUtilisateurs !=0) {
                        $aUtilisateurs = $oUtilisateurs->listeUtilisateurs();
                    } else {
                        $aUtilisateurs = '';
                    }
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
            $nbreAdminMods = $oAdmin_moderateur::nbreAdminMods();
            if($nbreAdminMods !=0) {
                $aAdmin_moderateurs = $oAdmin_moderateur::listeAdmin_moderateur();
            } else {
                $aAdmin_moderateurs = '';
            }
            
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            $oVueAdmin->afficheHeaderAdmin();
            
            if($_GET['idAdMod'] && $_GET['action'] == 'valider')
            {
                try
                {
                    $oAdmin_moderateur->modifierAdmin_moderateur($_GET['idAdMod'], $_POST['role'], $_POST['login'], md5($_POST['pass']));
                
                    $oVueAdmin = new VueAdmin();
                    $nbreAdminMods = $oAdmin_moderateur::nbreAdminMods();
                    if($nbreAdminMods !=0) {
                        $aAdmin_moderateur = $oAdmin_moderateur::listeAdmin_moderateur();
                    } else {
                        $aAdmin_moderateur = '';
                    }
                    $oVueAdmin->afficheAdminMods($aAdmin_moderateurs, $nbreAdminMods);
               }
                catch (Exception $e)
                {
                    $message = $e->getMessage();
                }
            
            }
            else
            {
                $message = '';
                $erreurLogin = '';
                $erreurPass = '';
                $erreurRole = '';
               $oVueAdmin->modifierUnAdmin_moderateur($aAdmin_moderateur, $message, $erreurLogin, $erreurPass, $erreurRole);
            }

            
            
            
            $oVueDefaut->afficheFooter(false, true, false, true);
        }
    
        private function supprimerUtilisateurs($idUtil)
        {   
            $oUtilisateurs = new MUtilisateurs('', '', '','', '', '','','','');
            $oUtilisateurs->supprimerUtilisateurs($idUtil);
            $nbreUtilisateurs = $oUtilisateurs->nbreUtilisateurs();
                if($nbreUtilisateurs !=0) {
                    $aUtilisateurs = $oUtilisateurs->listeUtilisateurs();
                } else {
                    $aUtilisateurs = '';
                }
            
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
            $nbreAdminMods = $oAdmin_moderateur::nbreAdminMods();
            if($nbreAdminMods !=0) {
                $aAdmin_moderateurs = $oAdmin_moderateur::listeAdmin_moderateur();
            } else {
                $aAdmin_moderateurs = '';
            }
            
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            $oVueAdmin->afficheHeaderAdmin();
            $oVueAdmin->afficheAdminMods($aAdmin_moderateurs, $nbreAdminMods);
            $oVueDefaut->afficheFooter(false, true, false, true);
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
                $nbreOeuvres = $oOeuvre->nbreOeuvres();
                if($nbreOeuvres !=0) {
                    $aOeuvres = $oOeuvre->listeOeuvres();
                } else {
                    $aOeuvres = '';
                }
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
            $nbreOeuvres = $oOeuvre->nbreOeuvres();
            if($nbreOeuvres !=0) {
                $aOeuvres = $oOeuvre->listeOeuvres();
            } else {
                $aOeuvres = '';
            }
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
                
                $login=$oUtilisateur->verifierUtilisateurs($_POST['utilisateur']);
                var_dump($login);
                if($login==true)
                {
                $oUtilisateur->ajoutUtilisateur($_POST['utilisateur'], $mdp=MD5($_POST['motDePasse']), $_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['telephone'], $_POST['bio'], 'utilisateurDefaut.jpg');
                $message = "Utilisateur ajoutée.";
                echo 'utilisateur ajoute';
                }
                else
                {
                    echo 'utilisateur existe';
                }
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
            
            $oVueAdmin->afficheAjoutOeuvre($aArtistes, $aCategories, $aArrondissements, $aSousCategories, $message, $erreurTitre, $erreurTitreVariante, $erreurTechniqueAng, $erreurTechnique, $erreurTechniqueAng, $erreurDescription, $erreurAdresse, $erreurBatiment, $erreurParc, $erreurLatitude, $erreurLongitude, $erreurArrondissement, $erreurArtiste, $erreurCategorie, $erreurSousCategorie, $erreurMateriaux, $erreurMateriauxAng);
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
                $oUtilisateur->ajoutUtilisateur($_POST['utilisateur'], $mdp=MD5($_POST['motDePasse']),  $_POST['bio'], $_POST['score'], 'utilisateurDefaut.jpg');
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
            $nbreOeuvres = $oOeuvres->nbreOeuvres();
             
            $oArtistes = new MArtistes('', '', '', '', '', '');
            $nbreArtistes = $oArtistes->nbreArtistes();
             
            $oUtilisateurs = new MUtilisateurs('', '', '', '', '', '','','','');
            $nbreUtilisateurs = $oUtilisateurs->nbreUtilisateurs();
                     
            $oPhotos = new MPhotos("", "", "", "");
            $nbrePhotos = $oPhotos->nbrePhotos();
             
            $message = '';
             
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            $oVueAdmin->afficheHeaderAdmin();
            $oVueAdmin->afficheGestion($nbreOeuvres, $nbreArtistes, $nbreUtilisateurs, $nbrePhotos);
            $oVueDefaut->afficheFooter(false, true, true, false);
        }
    
         private function admin()
        {
            $erreurConnexion = '';
            $nombreAleatoire = rand(1, 1000); 
            $oVue = new VueAdmin();
            $oVue->afficheConnexionAdmin($nombreAleatoire, $erreurConnexion);
            
        }
    
        private function ajoutAdminMod()
        {
            $erreurLogin ='';
            $message ='';
            $erreurPass = '';
            $erreurRole = '';
            
            
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            $oVueAdmin->afficheHeaderAdmin();
            
            if($_GET['action'] == 'ajoutAdminMod')
            {
                $oAdmin_moderateur = new MAdmin_Moderateur('', '', '', '');
                $oAdmin_moderateur->ajoutAdmin_moderateur($_POST['role'], $_POST['login'], $mdp=MD5($_POST['pass']));
                $message = "Administrateur ajouté(e)";
            }
            
            $oVueAdmin->AjoutAdminMod($message, $erreurLogin, $erreurPass, $erreurRole);
            $oVueDefaut->afficheFooter(false,true,false,false);
        }


        private function ajoutArtiste()
        {     
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            $oVueAdmin->afficheHeaderAdmin();
            $erreurPrenom = '';
            $erreurNom = '';
            $erreurCollectif = '';
            $erreurPhotoArtiste = '';

            $erreurTitre ='';
            $message ='';
            if($_GET['action'] == 'ajoutArtiste')

            {   $oArtiste=new MArtistes('', '', '', '', '', '');
                $oArtiste->ajoutArtiste($_POST['prenom'], $_POST['nom'], $_POST['collectif'],'' ,'');
                $message = "Artiste ajouté(e).";

                $oVueAdmin->ajoutArtiste($message, $erreurPrenom, $erreurNom, $erreurCollectif, $erreurPhotoArtiste);


            }
            
            
            
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
             $message = "";
            $erreurNomCat = "";
            $erreurNomCatAng = "";
            
            if($_GET['action'] == 'ajoutCategorie')

                {   
                    $oArtiste=new MCategories('', '', '');
                    $oArtiste->ajoutCategorie($_POST['nomCategorie'], $_POST['nomCatAng']);
                    $message = "Catégorie ajoutée.";
                    $oVueAdmin->formulaireAjouterCategorie($message, $erreurNomCat, $erreurNomCatAng);
                    
                }
            
            
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
            $nbreCategories = $oCategorie->nbreCategories();
                if($nbreCategories !=0) {
                    $aCategories = $oCategorie->listeCategories();
                } else {
                    $aCategories = '';
                }
            
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
                
                $oPhotos = new MPhotos("", "", "", "");
                $nbrePhotos = $oPhotos->nbrePhotos();
                
                $message = '';
                $oVueAdmin = new VueAdmin();
                $oVueDefaut = new VueDefaut();
                $oVueAdmin->afficheHeaderAdmin();
                $oVueAdmin->afficheGestion($nbreOeuvres, $nbreArtistes, $nbreUtilisateurs, $nbrePhotos);
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
        
        $oVueDefaut = new VueDefaut();
        $oVueAdmin = new VueAdmin();
        $oOeuvre = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '','','','','','');
        $date = $oOeuvre->afficheMajBdd();

        $oVueAdmin->afficheHeaderAdmin();
        date_default_timezone_set('America/Toronto');
        $date = date('d-m-Y H:i:s (e)');
        $oOeuvre->enregistrerMajBdd($date);
         
        $message = "Base de données mise à jour !";
        $oVueAdmin->afficheGestionBDD($message, $date);
        $oVueDefaut->afficheFooter(false, true, false,false);    
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
           
            $oPhoto=new MPhotos('','','','');
            $aPhotos = $oPhoto->listerPhotosValidesUtilisateur($unUtilisateur['idUtilisateur']);
            $uVue->afficherPhotosUtilisateur($aPhotos);
            $aTousPhotos = $oPhoto->listerMeilleuresPhotos();
            $uVue->afficherMeilleuresPhotos($aTousPhotos); 
            $oVue->afficheFooter(false,false,false,false);
            
        }
    /**
     * function propositionPhotoUtilisateur
     * @access public
     * @auteur: German Mahecha
     */
        private function propositionPhotoUtilisateur($idOeuvre)
        {
           $oUtilisateur = new MUtilisateurs('','','','','','','','','');
           $unUtilisateur = $oUtilisateur->getUtilisateurParLogin($_SESSION['session']);


           $oVue = new VueDefaut();
           $oVue->afficheHeader();
           $uVue = new VueUtilisateur();    
           $uVue->afficherProfilUtilisateur($unUtilisateur);
           //echo "utilisateur: ".$unUtilisateur['idUtilisateur']."<br/>";
           //echo "idOeuvre: ".$idOeuvre;
            
           $oOeuvre = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '','','','','','');
           $unOeuvre = $oOeuvre->getOeuvreParId($idOeuvre);
           $uVue->afficherPropositionPhotosUtilisateur($unUtilisateur['idUtilisateur'],$unOeuvre);
           $oVue->afficheFooter(false,false,false,false);
        }
    
    
    /**
     * function AfficherDetailsPhotoUtilisateur
     * @access public
     * @auteur: German Mahecha
     */
        private function afficherDetailsPhotoUtilisateur($idPhoto)
        {
            $comment=0;
           $oUtilisateur = new MUtilisateurs('','','','','','','','','');
           $unUtilisateur = $oUtilisateur->getUtilisateurParLogin($_SESSION['session']);

           $oVue = new VueDefaut();
           $oVue->afficheHeader();
           $uVue = new VueUtilisateur();    
           $uVue->afficherProfilUtilisateur($unUtilisateur);
           
            $oPhoto=new MPhotos('','','','');
            $aphoto=$oPhoto->getPhotoParId($idPhoto);
             //Get Oeuvre par idPhoto
           $oOeuvre = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '','','','','','');
           $unOeuvre = $oOeuvre->getOeuvreParIdPhoto($idPhoto);   
            
            
            //Utilisateur qui a proposé la photo
            $unUtilisateurProposition = $oUtilisateur->getUtilisateurParIdPhotoPropose($idPhoto);    
                
            //Get commentaires par IdPhoto
            $oComment = new MCommentaires('','','');
            $aComments = $oComment->getAllCommentParIdPhoto($idPhoto);
            
           $uVue->afficherDetailsPhotoUtilisateur($aComments, $unOeuvre, $aphoto, $unUtilisateur, $unUtilisateurProposition);

           $pos=10;
            foreach($aComments as $com){
                $comment++;
            }
            $likes=$oPhoto->getCombienVOtesParPhoto($idPhoto);
            $uVue->afficherAsideUtilisateur($pos,$likes,$comment);
            $oVue->afficheFooter(false,false,false,false);
        }
    
    
    /**
     * function ajouterPhotoProposée
     * @access public
     * @auteur: German Mahecha
     */
        private function  ajouterPhoto($idUtil, $idOeuvre)
        {
            //echo $idOeuvre;
            $message='';
            $file_extension='';$temporary='';
            date_default_timezone_set('America/Montreal');
            $today = getdate();
            //Contruction de la date en chaine 
            $dateCourrant=$today['year'].'-'.$today['mon'].'-'.$today['mday'].'-'.$today['hours'].'-'.$today['minutes'].'-'.$today['seconds'];
            
            if ($_FILES["image"]["error"] > 0){
                 $message= "Erreur dans le procesus";
            } else {
                //verification si le type de fichier est permis
                //et que la taille soit plus petite que 50000kb
                $permis = array("image/png","image/jpg", "image/jpeg", "image/gif");
                $limite_kb = 10000;
                
                if (in_array($_FILES['image']['type'], $permis) && $_FILES['image']['size'] <= $limite_kb * 1024){
                    //Création d'un dossier pour chaque utilisateur
                    $dossierUtil='photos/proposees/'.$idUtil;
                    //echo $dossierUtil;
                    //Si le dossier existe déjà, il ne le crée pas.
                    if(!is_dir($dossierUtil))
                        mkdir($dossierUtil, 0777);
                            
                    $temporary = explode(".", $_FILES["image"]["name"]);
                    $file_extension = end($temporary);
                     
                    $chemin = $dossierUtil."/".$dateCourrant.".".$file_extension;
                    //Verification pour savoir si la photo existe déjà
                    if (!file_exists($chemin)){
                        
                        //Déplacement du ficher tmp au dossier prevu pour cet utilisateur
                        //resultat contient true ou false pour valider si la copie a été reussi
                        $resultat = @move_uploaded_file($_FILES["image"]["tmp_name"], $chemin);
                        if ($resultat){
                            $message= "Le fichier a été televerse correctement";
                            //Si le fichier a été déplacé correctement
                            //Affectation de la BD
                            $photo = new MPhotos('','','','');
                            $ajoutPhoto=$photo->ajouterPhoto($chemin,$idOeuvre);
                            if($ajoutPhoto){
                                //Recuperation de l'id de la derniere photo pour remplir le tableau propose
                                $dernierPhoto=$photo->recupererDernierId();
                               
                                $photo->ajouterPropositionPhoto($idUtil,$dernierPhoto,$dateCourrant);
                            }
                            
                        } else {
                            $message= "Un erreur pendant le televersement du fichier.";
                        }
                    } else {
                        $message= "le fichier ".$_FILES['image']['name'] .", il existe déjà";
                    }
                } else {
                    $message= "Le fichier n'est pas permis, ou est plus grand de $limite_kb Kilobytes";
                }
            }
            header("Location:index.php?requete=propositionPhotoUtilisateur&idOeuvre=$idOeuvre");
            
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
            
           
            if($_GET['idUtilisateur'] && $_GET['action'] == 'valider')
            {
               try
                {
                   $oUtilisateur->modifierProfilUtilisateur($_GET['idUtilisateur'],$_POST['nom'], $_POST['prenom'],$_POST['email'],$_POST['telephone'], $_POST['bio']);
                   $message = 'Utilistaeur modifie';
                   
                         
                   $unUtilisateur = $oUtilisateur->getUtilisateurParId($idUtil);
                   $uVue->afficherProfilUtilisateur($unUtilisateur);
                   $oPhoto=new MPhotos('','','','');
                    $aPhotos = $oPhoto->listerPhotosValidesUtilisateur($unUtilisateur['idUtilisateur']);
                    $uVue->afficherPhotosUtilisateur($aPhotos);
                    $aTousPhotos = $oPhoto->listerMeilleuresPhotos();
                    $uVue->afficherMeilleuresPhotos($aTousPhotos);
                   
               }
               catch (Exception $e)
               {
                   $message = $e->getMessage();
               }
            }else
            {
                $unUtilisateur = $oUtilisateur->getUtilisateurParId($idUtil);
                $uVue->afficherProfilUtilisateur($unUtilisateur);
                $uVue->afficherModifierProfilUtilisateur($unUtilisateur);
            }
            $oVue->afficheFooter(false,false,false,false);
        }



        private function afficheCategories()
        {
            $oCategories = new MCategories('', '', '' ,'', '','');
            $nbreCategories = $oCategories->nbreCategories();
                if($nbreCategories !=0) {
                    $aCategories = $oCategories->listeCategories();
                } else {
                    $aCategories = '';
                }
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            
            $oVueAdmin->afficheHeaderAdmin();
            $oVueAdmin->afficheCategories($aCategories, $nbreCategories);
            $oVueDefaut->afficheFooter(false, true, false,true);
    
        }

        /**
         * function proposition Commentaire
         * @access public
         * @auteur: Thuy Tien Vo
         */
        private function propositionCommentaire()
        {

           $oUtilisateur = new MUtilisateurs('','','','','','','','','');
           $unUtilisateur = $oUtilisateur->getUtilisateurParLogin($_SESSION['session']);

            if($_GET['action'] == 'ajoutCommentaire')

                {   $oCommentaire = new MCommentaires('', '', '');
                    $oCommentaire->ajoutCommentaire($_POST['commentaire']);
                    $message = "Commentaire ajoutée.";
                }

           $oVue = new VueDefaut();
           $oVue->afficheHeader();
           $uVue = new VueUtilisateur();    
           $uVue->afficherProfilUtilisateur($unUtilisateur);
           $uVue->afficherPropositionCommentaire();
           $oVue->afficheFooter(false,false,false,false);
        }

        /**
         * function affiche le commentaire dans le Panel_Admin
         * @access public
         * @auteur: Thuy Tien Vo
         */

        private function afficheModCommentaires()
        {
            
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            $oCommentaire = new MCommentaires('','','');
            $nbreCommentairesNonValides = MCommentaires::nbreCommentairesNonValides();
            if($nbreCommentairesNonValides !=0) {
                $aCommentairesAValider = $oCommentaire->listeCommentairesAValider();
            } else {
                $aCommentairesAValider = '';
            }
            
            $oVueAdmin->afficheHeaderAdmin();
            $oVueAdmin->afficheModCommentaires($aCommentairesAValider, $nbreCommentairesNonValides);
            $oVueDefaut->afficheFooter(false, true, false, true);
    
        }

        private function afficheBDD()
        {
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            $oOeuvre = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '','','','','','');
            $date = $oOeuvre->afficheMajBdd();
            
            $oVueAdmin->afficheHeaderAdmin();
            
            $oOeuvre->afficheMajBdd();
            
            $message = "";
            $oVueAdmin->afficheGestionBDD($message, $date);
            $oVueDefaut->afficheFooter(false, true, false,false);
        }
        
        private function afficheModPhotos()
        {
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            $oPhotos = new MPhotos('','','','');
            $nbrePhotosNonValides = $oPhotos->nbrePhotosNonValides();
            if($nbrePhotosNonValides !=0) {
                $aPhotosAValider = $oPhotos->listePhotosAValider();
            } else {
                $aPhotosAValider = '';
            }
            
            $oVueAdmin->afficheHeaderAdmin();
            $oVueAdmin->afficheModPhotos($aPhotosAValider, $nbrePhotosNonValides);
            $oVueDefaut->afficheFooter(false, true, false, true);
        }
        
        private function afficheModOeuvres()
        {
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            $oOeuvres = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '','','','','','');
            $nbreOeuvresNonValides = $oOeuvres->nbreOeuvresNonValides();
            if($nbreOeuvresNonValides !=0) {
                $aOeuvresAValider = $oOeuvres->listeOeuvresAValider();
            } else {
                $aOeuvresAValider = '';
            }
            
            $oVueAdmin->afficheHeaderAdmin();
            $oVueAdmin->afficheModOeuvres($aOeuvresAValider, $nbreOeuvresNonValides);
            $oVueDefaut->afficheFooter(false, true, false, true);
        }
    
        private function supprimerPhoto($idPhoto) 
        {
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            $oPhotos = new MPhotos('','','','');
            $oPhotos->supprimerPhoto($idPhoto);
            $nbrePhotosNonValides = $oPhotos->nbrePhotosNonValides();
            if($nbrePhotosNonValides !=0) {
                $aPhotosAValider = $oPhotos->listePhotosAValider();
            } else {
                $aPhotosAValider = '';
            }
            $oVueAdmin->afficheHeaderAdmin();
            $oVueAdmin->afficheModPhotos($aPhotosAValider, $nbrePhotosNonValides);
            $oVueDefaut->afficheFooter(false, true, false, true);
            
            
        }
    
        private function supprimerCommentaire($idCommentaire) 
        {
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            $oCommentaires = new MCommentaires('','','','');
            $oCommentaires->supprimerCommentaire($idCommentaire);
            $nbreCommentairesNonValides = $oCommentaires->nbreCommentairesNonValides();
            if($nbreCommentairesNonValides !=0) {
                $aCommentairesAValider = $oCommentaires->listeCommentairesAValider();
            } else {
                $aCommentairesAValider = '';
            }
            $oVueAdmin->afficheHeaderAdmin();
            $oVueAdmin->afficheModCommentaires($aCommentairesAValider, $nbreCommentairesNonValides);
            $oVueDefaut->afficheFooter(false, true, false, true);
            
            
        }
        
        private function validerPhoto($idPhoto) 
        {
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            $oPhotos = new MPhotos('','','','');
            $oPhotos->validerPhoto($idPhoto);
            $nbrePhotosNonValides = $oPhotos->nbrePhotosNonValides();
            if($nbrePhotosNonValides !=0) {
                $aPhotosAValider = $oPhotos->listePhotosAValider();
            } else {
                $aPhotosAValider = '';
            }
            $oVueAdmin->afficheHeaderAdmin();
            $oVueAdmin->afficheModPhotos($aPhotosAValider, $nbrePhotosNonValides);
            $oVueDefaut->afficheFooter(false, true, false, true);
            
            
        } 
    
        private function validerOeuvre($idOeuvre) 
        {
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            $oOeuvres = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '','','','','','');
            $oOeuvres->validerOeuvrePhoto($idOeuvre);
            $nbreOeuvresNonValides = $oOeuvres->nbreOeuvresNonValides();
            if($nbreOeuvresNonValides !=0) {
                $aOeuvresAValider = $oPhotos->listeOeuvresAValider();
            } else {
                $aOeuvresAValider = '';
            }
            $oVueAdmin->afficheHeaderAdmin();
            $oVueAdmin->afficheModOeuvres($aOeuvresAValider, $nbreOeuvresNonValides);
            $oVueDefaut->afficheFooter(false, true, false, true);
            
        } 
    
        private function validerCommentaire($idCommentaire) 
        {
            $oVueDefaut = new VueDefaut();
            $oVueAdmin = new VueAdmin();
            $oCommentaires = new MCommentaires('','','','');
            $oCommentaires->validerCommentaire($idCommentaire);
            $nbreCommentairesNonValides = $oCommentaires->nbreCommentairesNonValides();
            if($nbreCommentairesNonValides !=0) {
                $aCommentairesAValider = $oCommentaires->listeCommentairesAValider();
            } else {
                $aCommentairesAValider = '';
            }
            $oVueAdmin->afficheHeaderAdmin();
            $oVueAdmin->afficheModCommentaires($aCommentairesAValider, $nbreCommentairesNonValides);
            $oVueDefaut->afficheFooter(false, true, false, true);
            
            
        }
    
        private function voterPourUnPhoto($idPhoto,$idUtilisateur)
        {
            
            echo "voter";
        }
    
        
}?>