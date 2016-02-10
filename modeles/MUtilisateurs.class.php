<?php
/**
 * Class Modele Utilisateurs
 * 
 * @author German Mahecha
 * @version 1.0
 * @update 2016-01-17
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */
class MUtilisateurs {
	
    /**
	 *
	 * @var int Identifiant Utilisateur
	**/
    
    public $idUtilisateur;
    public $loginUtilisateur;
    public $passUtilisateur;
    public $nom;
    public $prenom;
    public $courriel;
    public $telephone;
    public $bio;
    public $photoUtilisateur;
    
    
    /**
	 * @var database Objet base de données qui permet la connexion
	 */
	static $database;
        
	function __construct ($idUtilisateur, $loginUtilisateur, $passUtilisateur,$nom,$prenom, $courriel,$telephone, $bio,$photoUtilisateur)
	{
		if (!isset(self::$database))
			self::$database = new PdoBDD();

        $this->idUtilisateur = $idUtilisateur;
        $this->loginUtilisateur = $loginUtilisateur;
        $this->passUtilisateur = $passUtilisateur;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->courriel = $courriel;
        $this->telephone = $telephone;
        $this->bio = $bio;
        $this->photoUtilisateur = $photoUtilisateur;
	
	}
	function __destruct(){}
	/** Getters
	 * @access public
	 * @return 
	 */
    
    public function getIdUtilisateur(){
		return $this->idUtilisateur;		
	}
    
	public function getLoginUtilisateur(){
		return $this->loginUtilisateur;		
	}
    
    public function getPassUtilisateur(){
		return $this->passUtilisateur;	
	}
    public function getNom(){
		return $this->nom;	
	}
     public function getPrenom(){
		return $this->prenom;	
	}
     public function getCourriel(){
		return $this->courriel;	
	}
     public function getTelephone(){
		return $this->telephone;	
	}
    
    public function getBio(){
		return $this->bio;	
	}
    
    public function getPhotoUtilisateur(){
		return $this->photoUtilisateur;		
	}
    
    /*
	 * @access public static
     * @author German Mahecha
	 * @return Array Tableau contenant la liste de tous les utilisateurs enregistrés
	 */
	public static function listeUtilisateurs() 
	{
		self::$database->query('SELECT * FROM utilisateur_enregistre ORDER BY utilisateur_enregistre.loginUtilisateur ASC');
		$lignes = self::$database->resultset();
		foreach ($lignes as $ligne) {
			$unUtilisateur = new MUtilisateurs($ligne['idUtilisateur'], $ligne['loginUtilisateur'], $ligne['passUtilisateur'], $ligne['nomUtil'], $ligne['prenomUtil'], $ligne['courrielUtil'], $ligne['telUtil'], $ligne['bio'], $ligne['photoUtilisateur']);
			$utilisateurs[] = $unUtilisateur;
		}
		return $utilisateurs;
	}
    
     /**
	 * Fonction pour recuperer l'info d'un utilisateur par son id
	 * @return none
     * @author Jorge Blanco
     * @version 1.0
     * 
     */

     public static function getUtilisateurParId($idUtilisateur)
     {
     	self::$database->query("SELECT * FROM utilisateur_enregistre WHERE idUtilisateur=:idUtilisateur");
        //On lie les paramètres auxvaleurs
        self::$database->bind(':idUtilisateur', $idUtilisateur);
        $ligne = self::$database->uneLigne();
        return $ligne;
     }
    

    /**
	 * Fonction d'ajout d'un utilisateur enregistre
	 * @return none
     * @author Jorge Blanco
     * @version 1.0
     * 
     */

	 public static function ajoutUtilisateur($loginUtilisateur, $passUtilisateur, $nom, $prenom, $courriel, $telephone, $bio, $photoUtilisateur)
     {
    	self::$database->query("INSERT INTO utilisateur_enregistre VALUES ('', :loginUtilisateur, :passUtilisateur, :nom, :prenom, :courriel, :telephone, :bio, :photoUtilisateur)");
    	self:: $database->bind(':loginUtilisateur', $loginUtilisateur);
    	self:: $database->bind(':passUtilisateur', $passUtilisateur);
    	self:: $database->bind(':nom', $nom);
        self:: $database->bind(':prenom', $prenom);
        self:: $database->bind(':courriel', $courriel);
        self:: $database->bind(':telephone', $telephone);
        self:: $database->bind(':bio', $bio);
    	self:: $database->bind(':photoUtilisateur', $photoUtilisateur);
    	return(self::$database->execute());
    }

    
       /**
	 * Fonction modiffier un utilisateur enregistre
	 * @return none
     * @author Jorge Blanco
     * @version 1.0
     * 
     */
    
    public static function modifierUtilisateur($idUtilisateur, $loginUtilisateur, $passUtilisateur, $nom, $prenom, $courriel, $telephone, $bio,$photoUtilisateur)
    {
    	self::$database->query("UPDATE utilisateur_enregistre SET loginUtilisateur = :loginUtilisateur, passUtilisateur = :passUtilisateur, nomUtil = :nom, prenomUtil = :prenom, courrielUtil = :courriel, telUtil = :telephone, bio = :bio, photoUtilisateur = :photoUtilisateur WHERE idUtilisateur = :idUtilisateur");

    	self::$database->bind(':idUtilisateur', $idUtilisateur);
    	self::$database->bind(':loginUtilisateur', $loginUtilisateur);
    	self::$database->bind(':passUtilisateur', $passUtilisateur);
        self:: $database->bind(':nom', $nom);
        self:: $database->bind(':prenom', $prenom);
        self:: $database->bind(':courriel', $courriel);
        self:: $database->bind(':telephone', $telephone);
    	self::$database->bind(':bio', $bio);
    	self::$database->bind(':photoUtilisateur', $photoUtilisateur);
    	return(self::$database->execute());
    }
    
    /**
	* Fonction pour supprimer un utilisateur 
	* @return none
    * @author Jorge Blanco
    * @version 1.0
    * 
    */
    public static function supprimerUtilisateurs($idUtilisateur)
    {
    	self::$database->query("DELETE FROM utilisateur_enregistre WHERE idUtilisateur=:idUtilisateur");
    	self::$database->bind(':idUtilisateur', $idUtilisateur);
    	return(self::$database->execute());
    }

  
    /**
	 * Fonction Verification password 
	 * @return md5 boolean
     * @author Gautier Piatek
     * @version 1.0
     */
    public static function MotDePasse($login)
    {
        self::$database->query('SELECT passUtilisateur FROM utilisateur_enregistre WHERE loginUtilisateur = :loginUtil');
        self::$database->bind(':loginUtil', $login);
        $ligne = self::$database->uneLigne();
        if($ligne){
            return $ligne["passUtilisateur"];
        }else{
            return false;
        }
    }

     /**
	 * Fonction pour recuperer l'info d'un utilisateur par son id
	 * @return none
     * @author Jorge Blanco
     * @version 1.0
     * 
     */

     public static function getUtilisateurParLogin($loginUtilisateur)
     {
     	self::$database->query("SELECT * FROM utilisateur_enregistre WHERE loginUtilisateur=:loginUtilisateur");
        //On lie les paramètres auxvaleurs
        self::$database->bind(':loginUtilisateur', $loginUtilisateur);
        $ligne = self::$database->uneLigne();
        return $ligne;
     }
    
    
      /**
	 * Fonction modiffier Profil d'un utilisateur enregistre
	 * @return none
     * @author German Mahecha
     * @version 1.0
     * 
     */
    
    public static function modifierProfilUtilisateur($idUtil,$nomUtil,$prenomUtil,$courrielUtil,$telUtil,$bioUtil)
    {
    	self::$database->query("UPDATE utilisateur_enregistre SET nomUtil = :nom, prenomUtil = :prenom, courrielUtil = :courriel, telUtil = :telephone, bio = :bio WHERE idUtilisateur = :idUtilisateur");

    	self::$database->bind(':idUtilisateur', $idUtil);
    	self:: $database->bind(':nom', $nomUtil);
        self:: $database->bind(':prenom', $prenomUtil);
        self:: $database->bind(':courriel', $courrielUtil);
        self:: $database->bind(':telephone', $telUtil);
    	self::$database->bind(':bio',$bioUtil);
    	return(self::$database->execute());
    }
    
      /**
	 * Fonction modiffier Mot de Passe d'un utilisateur enregistre
	 * @return none
     * @author German Mahecha
     * @version 1.0
     * 
     */
    
    public static function modifierMotDePasseUtilisateur($idUtil,$pass)
    {
    	self::$database->query("UPDATE utilisateur_enregistre SET passUtilisateur = :passUtilisateur WHERE idUtilisateur = :idUtilisateur");

    	self::$database->bind('idUtilisateur', $idUtilisateur);
    	self::$database->bind('passUtilisateur', $pass);
        return(self::$database->execute());
    }
    
      /**
	 * Fonction modiffier la photo de profil d'un utilisateur enregistre
	 * @return none
     * @author German Mahecha
     * @version 1.0
     * 
     */
    
    public static function modifierPhotoUtilisateur($idUtil,$photoUtil)
    {
    	self::$database->query("UPDATE utilisateur_enregistre SET photoUtilisateur = :photoUtilisateur WHERE idUtilisateur = :idUtilisateur");

    	self::$database->bind('idUtilisateur', $idUtil);
    	self::$database->bind('photoUtilisateur', $photoUtil);
    	return(self::$database->execute());
    }
     

}?>