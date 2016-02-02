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
    public $bio;
    public $score;
    public $photoUtilisateur;
    
    
    /**
	 * @var database Objet base de données qui permet la connexion
	 */
	static $database;
        
	function __construct ($idUtilisateur, $loginUtilisateur, $passUtilisateur, $bio, $score, $photoUtilisateur)
	{
		if (!isset(self::$database))
			self::$database = new PdoBDD();

        $this->idUtilisateur = $idUtilisateur;
        $this->loginUtilisateur = $loginUtilisateur;
        $this->passUtilisateur = $passUtilisateur;
        $this->bio = $bio;
        $this->score = $score;
        $this->photoUtilisateur = $photoUtilisateur;
	
	}
	
	function __destruct ()
	{
		
	}
	
    
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
    
    public function getBio(){
		return $this->bio;	
	}
    
    public function getScore(){
		return $this->score;	
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
			$unUtilisateur = new MUtilisateurs($ligne['idUtilisateur'], $ligne['loginUtilisateur'], $ligne['passUtilisateur'], $ligne['bio'],$ligne['score'], $ligne['photoUtilisateur']);
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
        return (self::$database->uneLigne());
     }
    

    /**
	 * Fonction d'ajout d'un utilisateur enregistre
	 * @return none
     * @author Jorge Blanco
     * @version 1.0
     * 
     */

	 public static function ajoutUtilisateur($loginUtilisateur, $passUtilisateur, $bio, $score, $photoUtilisateur)
     {
    	self::$database->query("INSERT INTO utilisateur_enregistre VALUES ('', :loginUtilisateur, :passUtilisateur, :bio, :score, :photoUtilisateur)");
    	self:: $database->bind(':loginUtilisateur', $loginUtilisateur);
    	self:: $database->bind(':passUtilisateur', $passUtilisateur);
    	self:: $database->bind(':bio', $bio);
    	self:: $database->bind(':score', $score);
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
    
    public static function modifierUtilisateur($idUtilisateur, $loginUtilisateur, $passUtilisateur, $bio, $score, $photoUtilisateur)
    {
    	self::$database->query("UPDATE utilisateur_enregistre SET loginUtilisateur = :loginUtilisateur, passUtilisateur = :passUtilisateur, bio = :bio, score = :score, photoUtilisateur = :photoUtilisateur WHERE idUtilisateur = :idUtilisateur");

    	self::$database->bind('idUtilisateur', $idUtilisateur);
    	self::$database->bind('loginUtilisateur', $loginUtilisateur);
    	self::$database->bind('passUtilisateur', $passUtilisateur);
    	self::$database->bind('bio', $bio);
    	self::$database->bind('score', $score);
    	self::$database->bind('photoUtilisateur', $photoUtilisateur);
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


}?>