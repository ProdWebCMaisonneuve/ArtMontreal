<?php
/**
 * Class Modele Artistes
 * 
 * @author Gautier Piatek
 * @version 1.0
 * @update 2015-12-15
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */
class MArtistes {
	
    /**
	 * @var int Identifiant Artiste
	**/
    
    public $idArtiste;
    public $prenom;
    public $nom;
    public $collectif;
    private $noInterne;
    public $photoArtiste;
    
    /**
	 * @var database Objet base de données qui permet la connexion
	 */
	static $database;
        
	function __construct ($idArtiste, $prenom, $nom, $collectif, $noInterne, $photoArtiste)
	{
		if (!isset(self::$database))
			self::$database = new PdoBDD();

        $this->idArtiste = $idArtiste;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->collectif = $collectif;
        $this->noInterne = $noInterne;
        $this->photoArtiste = $photoArtiste;
	
	}
	
	function __destruct () {}
	    
	/** Getters
	 * @access public
	 * @return 
	 */
    
    public function getIdArtiste(){
		return $this->idArtiste;	
	}
    
	public function getPrenom() {
		return $this->prenom;		
	}
    
    public function getNom() {
		return $this->nom;		
	}
    
    public function getCollectif()	{
		return $this->collectif;		
	}
    
    public function getPhoto() {
		return $this->photoArtiste;	
	}
    
    /*
     * Fonction qui liste tous les artistes
	 * @access public static
     * @author Gautier Piatek
	 * @return Array Tableau contenant la liste de tous les artistes
	 */
	public static function listeArtistes() 
	{
		self::$database->query('SELECT * FROM artiste ORDER BY artiste.nom ASC');
		$lignes = self::$database->resultset();
		foreach ($lignes as $ligne) {
			$unArtiste = new MArtistes($ligne['idArtiste'], $ligne['prenom'], $ligne['nom'], $ligne['collectif'],$ligne['noInterne'], $ligne['photoArtiste']);
			$artistes[] = $unArtiste;
		}
		return $artistes;
	}

     /*
     * Fonction qui récupère les infos d'un artiste selon son id
	 * @access public static
     * @author Gautier Piatek
	 * @return array
	 */
	public static function getArtisteParId($idArtiste) 
	{
		self::$database->query("SELECT * FROM artiste WHERE idArtiste=:idArtiste");
        //On lie les paramètres auxvaleurs
        self::$database->bind(':idArtiste', $idArtiste);
        return(self::$database->uneLigne());
	}
    
     /*
     * Fonction qui ajouter une artiste
	 * @access public static
     * @author Thuy Tien Vo
     * @author German Mahecha
	 * @return none
	 */
    public function ajoutArtiste( $prenom, $nom, $collectif, $noInterne, $photoArtiste)

        {
            self::$database->query(" INSERT INTO artiste VALUES ('', :prenom, :nom, :collectif, :noInterne, :photoArtiste)") ;
            //On lie les paramètres aux valeurs
            self::$database->bind(':prenom', $prenom);
            self::$database->bind(':nom', $nom);
            self::$database->bind(':collectif', $collectif);
            self::$database->bind(':noInterne', $noInterne);
            self::$database->bind(':photoArtiste', $photoArtiste);
            return(self::$database->execute());
        }  

    
    /*
     * Fonction qui récupère met à jour un artiste
	 * @access public static
     * @author Gautier Piatek
	 * @return none
	 */
	public static function modifierArtiste($idArtiste, $prenom, $nom, $collectif, $photoArtiste) 
	{
		self::$database->query("UPDATE artiste SET prenom = :prenom, nom = :nom, collectif = :collectif, photoArtiste = :photoArtiste WHERE idArtiste = :idArtiste");
        //On lie les paramètres auxvaleurs
        self::$database->bind(':idArtiste', $idArtiste);
        self::$database->bind(':prenom', $prenom);
        self::$database->bind(':nom', $nom);
        self::$database->bind(':collectif', $collectif);
        self::$database->bind(':photoArtiste', $photoArtiste);
        return(self::$database->execute());
        
	}
    
    /*
     * Fonction qui supprime un artiste
	 * @access public static
     * @author Gautier Piatek
	 * @return none
	 */
	public static function supprimerArtiste($idArtiste) 
	{
		self::$database->query("DELETE FROM artiste WHERE idArtiste=:idArtiste");
        //On lie les paramètres auxvaleurs
        self::$database->bind(':idArtiste', $idArtiste);
        return(self::$database->execute());
	}
    

    /**
     * Fonction qui compte le nombre d'artistes dans la BDD
	 * @access public static
     * @author Gautier Piatek
	 * @return int
	 */
    
    public static function nbreArtistes() {
        self::$database->query("SELECT COUNT(idArtiste) FROM artiste;");
        $resultat = self::$database->uneLigne();
        
        return $resultat["COUNT(idArtiste)"];
    }

    
     /**
     * Fonction qui valide s'il existe un artiste dans la table artiste
	 * @author German Mahecha
	 * @return idArtiste ou false
	 */


    public function validerArtiste()
    {
        self::$database->query("SELECT * FROM artiste WHERE noInterne = :noInterne");
        //On lie les paramètres aux valeurs
        self::$database->bind(':noInterne', $this->noInterne);
        $ligne = self::$database->uneLigne();
        return $ligne['idArtiste'];
    } 
    
    
     /**
     * Fonction qui valide s'il existe une relation entre un oeuvre et un artiste dans la table oeuvre_artiste
	 * @author German Mahecha
	 * @return idOeuvre ou false
	 */
    
    public function validerOeuvreArtiste($idO,$idA)
    {
        self::$database->query("SELECT * FROM oeuvre_artiste WHERE idOeuvre = :idOeuvre AND idArtiste = :idArtiste");
        //On lie les paramètres aux valeurs
        self::$database->bind(':idOeuvre', $idO);
        self::$database->bind(':idArtiste', $idA);
        $ligne = self::$database->uneLigne();
        return $ligne['idOeuvre'];
    } 
    
     /**
     * Fonction pour enregistrer la relation entre un oeuvre et un artiste dans la table artiste
	 * @author German Mahecha
	 * @return true ou false
	 */
    public function enregistrerOeuvreArtiste($idO,$idA)
    {
        self::$database->query(" INSERT INTO oeuvre_artiste VALUES (:idOeuvre,:idArtiste)") ;
        //On lie les paramètres aux valeurs
        self::$database->bind(':idOeuvre', $idO);
        self::$database->bind(':idArtiste', $idA);
        return(self::$database->execute());
    } 
    
     /**
     * Fonction qui retourne l'id d'un artiste selon l'oeuvre
	 * @author Gautier Piatek
	 * @return int
	 */
    public static function getIdArtisteParOeuvre($idOeuvre)
    {
        self::$database->query("SELECT idArtiste FROM oeuvre_artiste WHERE idOeuvre = :idOeuvre") ;
        //On lie les paramètres aux valeurs
        self::$database->bind(':idOeuvre', $idOeuvre);
        $ligne = self::$database->uneLigne();
        
        return $ligne['idArtiste'];
    } 
    
    /*
     * Fonction qui met à jour le lien artiste oeuvre
	 * @access public static
     * @author Gautier Piatek
	 * @return none
	 */
	public static function modifierArtisteOeuvre($idOeuvre, $idArtiste) 
	{
		self::$database->query("UPDATE oeuvre_artiste SET idArtiste = :idArtiste WHERE idOeuvre = :idOeuvre");
        //On lie les paramètres auxvaleurs
        self::$database->bind(':idArtiste', $idArtiste);
        self::$database->bind(':idOeuvre', $idOeuvre);
        
        return(self::$database->execute());
        
	}

        /*
     * Fonction qui liste artiste par lettre
     * @access public static
     * @author Thuy Tien Vo
     * @return 
     */


    public static function artisteParLettre($lettre) 
    {
        $lettre = "'" . $lettre . "%'";
        self::$database->query("SELECT * FROM artiste WHERE nom LIKE " . $lettre);
     
        $lignes = self::$database->resultset();

        foreach ($lignes as $ligne) 
        {
            $unArtiste = new MArtistes($ligne['idArtiste'], $ligne['prenom'], $ligne['nom'], $ligne['collectif'],$ligne['noInterne'], $ligne['photoArtiste']);
            $artistes[] = $unArtiste;
        }
    
        return $artistes;
    }











}

?>