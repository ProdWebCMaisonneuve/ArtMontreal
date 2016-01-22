<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

	<head>

		<title>Test unitaire</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link href="../css/global.css" rel="stylesheet" type="text/css" />
	</head>

	<body>
		<div id="header">
			<h1>Test - Modèles</h1>
		</div>
		<div id="contenu">
		    <?php 
            /*include("../lib/PdoBDD.class.php");
            include("../lib/config/mesParametresBD.php");
            include("../modeles/MOeuvres.class.php");
            include ("../modeles/MArrondissement.class.php");
            include ("../modeles/MArtistes.class.php");
            include ("../modeles/MUtilisateurs.class.php");
            include ("../modeles/MCategories.class.php");*/
            
                
            /**
            * Test Unitaire pour lister un oeuvre. Il affiche l'oeuvre passé en paramettre. 
            * @author German Mahecha
            * @version 1.0
            * @update 2015-12-27
            * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
            * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
            * 
            */         
            $oOeuvre = new MOeuvres('','','','','','','','','','','','','','','','','','','','','','','','','');
            echo "<details>";
            echo "<summary>MOeuvres::listeUnOeuvre()</summary>";
            var_dump($oOeuvre->listeUnOeuvre(4));
            echo "</details>"; 
            
            
            /**
            * Test Unitaire pour la funtion recherche des oeuvres par mot clé                 
            * @author German Mahecha
            * @version 1.0
            * @update 2015-12-27
            * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
            * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
            * 
            */         
            $oOeuvre = new MOeuvres('','','','','','','','','','','','','','','','','','','','','','','','','');
            echo "<details>";
            echo "<summary>MOeuvres::listeOeuvresparMot()</summary>";
            var_dump($oOeuvre->listeOeuvresparMot('a'));
            echo "</details>"; 
            
            
            
            /**
            * Test Unitaire pour ajouter un artiste. 
            * @author German Mahecha
            * @version 1.0
            * @update 2015-12-27
            * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
            * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
            * 
            */         
            $oArtiste=new MArtistes('','','','','','');
            echo "<details>";
            echo "<summary>MArtistes::ajoutArtiste()</summary>";
            var_dump($oArtiste->ajoutArtiste('testUnitaire','testUnitaire','testUnitaire','testUnitaire'));
            echo "</details>";
            
                       
            /**
            * Test Unitaire pour ajouter un utilisateur. 
            * @author German Mahecha
            * @version 1.0
            * @update 2016-01-21
            * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
            * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
            * 
            */   
                        
            $oUtilisateur = new MUtilisateurs('', '', '','', '', '');
            echo "<details>";
            echo "<summary>MUtilisateurs::ajoutUtilisateur()</summary>";
            var_dump($oUtilisateur->ajoutUtilisateur("testUtilisateur", 'testUtilisateur',  'testUtilisateur', 2, 'photo.jpg'));
            echo "</details>";
            
            /**
            * Test Unitaire pour supprimer un utilisateur. 
            * @author German Mahecha
            * @version 1.0
            * @update 2016-01-21
            * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
            * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
            * 
            */   
                        
            $oUtilisateur = new MUtilisateurs('', '', '','', '', '');
            echo "<details>";
            echo "<summary>MUtilisateurs::supprimerUtilisateurs()</summary>";
            var_dump($oUtilisateur->supprimerUtilisateurs(2));
            echo "</details>";
            
            
            
            /**
            * Test Unitaire pour modifier un utilisateur. 
            * @author German Mahecha
            * @version 1.0
            * @update 2016-01-21
            * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
            * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
            * 
            */   
                        
            $oUtilisateur = new MUtilisateurs('', '', '','', '', '');
            echo "<details>";
            echo "<summary>MUtilisateurs::modifierUtilisateur()</summary>";
            var_dump($oUtilisateur->modifierUtilisateur(3,'TestUni','TestUni','TestUni',20,'photo2.jpg'));
            echo "</details>";
            
            
            
            /**
            * Test Unitaire pour ajouter une Categorie. 
            * @author German Mahecha
            * @version 1.0
            * @update 2016-01-21
            * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
            * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
            * 
            */   
                        
            $oCategorie = new MCategories('','','');
            echo "<details>";
            echo "<summary>MUtilisateurs::ajoutCategorie()</summary>";
            var_dump($oCategorie->ajoutCategorie('TestUni','TestUni'));
            echo "</details>";
            
             
            //$oArrondisement = new MArrondissement('', '');
			//$aArrondissements = $oArrondisement::listeArrondissement();
			//var_dump($oArrondisement);
            
            
			?>
		</div>
		<div id="footer">

		</div>
	</body>
</html>








