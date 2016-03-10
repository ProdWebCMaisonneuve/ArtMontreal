<?php
/**
 * Class Modele Catégorie
 * 
 * @author Thuy Tien Vo
 * @version 1.0
 * @update 2015-12-11
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */
class MSousCategories 

{
    /**
	 *
	 * @var int Identifiant Categorie
	**/
    
    public $idSousCategorie;
	public $nomSousCategorie;
    public $nomSousCatAng;
    public $idCategorie;
    
    /**
	 * @var database Objet base de données qui permet la connexion
	 */
	static $database;
    
	function __construct ($idSousCategorie, $nomSousCategorie, $nomSousCatAng,$idCategorie)
	{
		if (!isset(self::$database))
			self::$database = new PdoBDD();

        $this->idSousCategorie = $idSousCategorie;
        $this->nomSousCategorie = $nomSousCategorie;
        $this->nomSousCatAng = $nomSousCatAng;
        $this->idCategorie = $idCategorie;
    }
	
	function __destruct (){}
			
	/**
	 * @access public
	 * @return Int
	 */
	public function getIdSousCategorie() {
		return $this->idSousCategorie;		
	}
    
    public function getNomSousCategorie() {
		return $this->nomSousCategorie;				
	}
    
    public function getNomSousCatAng() {
		return $this->nomSousCatAng;				
    }
    
     public function getIdCategorie() {
		return $this->idCategorie;				
    }
    
     /**
	 * @author Gautier Piatek
	 * @return Array Tableau contenant la liste de toutes les categories
	 */
	public static function listeSousCategories() 
    {
        self::$database->query('SELECT * FROM souscategorie ORDER BY nomSousCat ASC');
        $lignes = self::$database->resultset();
		foreach ($lignes as $ligne) 
		{
		  $uneSousCategorie = new MSousCategories($ligne['idSousCategorie'], $ligne['nomSousCat'], $ligne['nomSousCatAng'], $ligne['idCategorie']);
		  $sousCategories[] = $uneSousCategorie;
        }
		return $sousCategories;
	}

     /*
     * Fonction qui récupère les infos d'une catégorie selon son id
	 * @access public static
     * @author Gautier Piatek
	 * @return array
	 */
	public static function getSousCategorieParId($idSousCat) 
	{
		self::$database->query("SELECT * FROM souscategorie WHERE idSousCategorie=:idSousCat");
        //On lie les paramètres auxvaleurs
        self::$database->bind(':idSousCat', $idSousCat);
        return (self::$database->uneLigne());
	}
    
    public function ajoutSousCategorie($nomSousCat,$nomSousCatAng,$idCategorie)

        {
            self::$database->query("INSERT INTO souscategorie VALUES ('', :nomSousCat, :nomSousCatAng, :idCategorie)") ;
            //On lie les paramètres aux valeurs
            self::$database->bind(':nomSousCat', $nomSousCat);
            self::$database->bind(':nomSousCatAng', $nomSousCatAng);
            self::$database->bind(':idCategorie', $idCategorie); 
            return(self::$database->execute());
        } 
    
    
    /*
     * Fonction qui récupère met à jour une categorie
	 * @access public static
     * @author Gautier Piatek
	 * @return none
	 */
	public static function modifierSousCategorie($idSousCat, $nomSousCat, $nomSousCatAng) 
	{
		self::$database->query("UPDATE categorie SET nomSousCat = :nomSousCat, nomCatAng = :nomSousCatAng WHERE idSousCategorie = :idSousCat");
        //On lie les paramètres auxvaleurs
        self::$database->bind(':idSousCat', $idSousCat);
        self::$database->bind(':nomSousCat', $nomSousCat);
        self::$database->bind(':nomSousCatAng', $nomSousCatAng);
        return(self::$database->execute());
        
	}
    
    
    /**
 	 * @author Thuy Tien Vo
 	 * @return none Supprimer un catégorie
 	 */
 
 	public static function supprimerSousCategories($idSousCat)
     {
     	self::$database->query("DELETE FROM souscategorie WHERE idSousCategorie=:idSousCat");
     	self::$database->bind(':idSousCat', $idSousCat);
      	return(self::$database->execute());
     }
    
     /**
	 * @author German Mahecha
	 * @return true ou false
	 */

    public function validerSousCategorie()
    {
        self::$database->query("SELECT idSousCategorie FROM souscategorie WHERE nomSousCat = :nomSousCat");
        //On lie les paramètres aux valeurs
        self::$database->bind(':nomSousCat', $this->nomSousCategorie);
        $ligne =self::$database->uneLigne();
        return $ligne['idSousCategorie'];
        
    } 
    
    
    
}


    
    
    
?>