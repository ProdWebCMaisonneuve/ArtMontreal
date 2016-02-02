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
class MCategories 

{
	
    /**
	 *
	 * @var int Identifiant Categorie
	**/
    
    public $idCategorie;
	public $nomCategorie;
    public $nomCatAng;
    
    /**
	 * @var database Objet base de données qui permet la connexion
	 */
	static $database;
    
	function __construct ($idCategorie, $nomCategorie, $nomCatAng)
	{
		if (!isset(self::$database))
			self::$database = new PdoBDD();

        $this->idCategorie = $idCategorie;
        $this->nomCategorie = $nomCategorie;
        $this->nomCatAng = $nomCatAng;
    }
	
	function __destruct ()
	{
		
	}
	
		
	/**
	 * @access public
	 * @return Int
	 */
	public function getIdCategorie() 
	{
		return $this->idCategorie;		
			
	}
    
    public function getNomCategorie() 
	{
		return $this->nomCategorie;				
	}
    
    public function getNomCatAng() 
	{
		return $this->nomCatAng;				
    }
    
     /**
	 * @author Gautier Piatek
	 * @return Array Tableau contenant la liste de toutes les categories
	 */
	public static function listeCategories() 
		{
			self::$database->query('SELECT * FROM categorie ORDER BY nomCategorie ASC');
			$lignes = self::$database->resultset();
			foreach ($lignes as $ligne) 
			{
				$uneCategorie = new MCategories($ligne['idCategorie'], $ligne['nomCategorie'], $ligne['nomCatAng']);
				$categories[] = $uneCategorie;
			}
			return $categories;
		}
    
    /**
	 * @author Thuy Tien Vo
	 * @return aJOUTER UN CATÉGORIE
	 */

    public function ajoutCategorie($nomCategorie,$nomCatAng)

        {
            self::$database->query("INSERT INTO categorie VALUES ('', :nomCategorie, :nomCatAng)") ;
            //On lie les paramètres aux valeurs
            self::$database->bind(':nomCategorie', $nomCategorie);
            self::$database->bind(':nomCatAng', $nomCatAng);
            //self::$database->execute();
            return(self::$database->execute());
        } 
    
    /**
 	 * @author Thuy Tien Vo
 	 * @return  Supprimer un catégorie
 	 */
 
 	public static function supprimerCategories($idCategorie)
     {  self::$database->query("DELETE FROM oeuvre WHERE idCategorie=:idCategorie");
     	self::$database->query("DELETE FROM souscategorie WHERE idCategorie=:idCategorie");
     	self::$database->query("DELETE FROM categorie WHERE idCategorie=:idCategorie");
     	self::$database->bind(':idCategorie', $idCategorie);
 
     	return(self::$database->execute());
     }
    
    /*
     * Fonction qui récupère les infos d'une catégorie selon son id
	 * @access public static
     * @author Gautier Piatek
	 * @return array
	 */
	public static function getCategorieParId($idCategorie) 
	{
		self::$database->query("SELECT * FROM categorie WHERE idCategorie=:idCategorie");
        //On lie les paramètres auxvaleurs
        self::$database->bind(':idCategorie', $idCategorie);
        
        $ligne = self::$database->uneLigne();
        
        return $ligne;
	}
    
    /*
     * Fonction qui récupère met à jour une categorie
	 * @access public static
     * @author Gautier Piatek
	 * @return none
	 */
	public static function modifierCategorie($idCategorie, $nomCategorie, $nomCatAng) 
	{
		self::$database->query("UPDATE categorie SET nomCategorie = :nomCategorie, nomCatAng = :nomCatAng WHERE idCategorie = :idCategorie");
        //On lie les paramètres auxvaleurs
        self::$database->bind(':idCategorie', $idCategorie);
        self::$database->bind(':nomCategorie', $nomCategorie);
        self::$database->bind(':nomCatAng', $nomCatAng);
        
        return(self::$database->execute());
        
	}
    
    /**
     * Fonction qui compte le nombre de catégories dans la BDD
	 * @access public static
     * @author Gautier Piatek
	 * @return int
	 */
    
    public static function nbreCategories() {
        self::$database->query("SELECT COUNT(idCategorie) FROM categorie;");
        $resultat = self::$database->uneLigne();
        
        return $resultat["COUNT(idCategorie)"];
    }
}

/**
 * Class Modele Sous Catégorie
 * 
 * @author Gautier Piatek
 * @version 1.0
 * @update 2016-01-12
 * 
 */
class MSousCategories extends MCategories {
    
    public $idSousCategorie;
	public $nomSousCategorie;
    public $nomSousCatAng;
    public $idCat;
    
    /**
	 * @var database Objet base de données qui permet la connexion
	 */
	static $database;
    
	function __construct ($idSousCategorie, $nomSousCategorie, $nomSousCatAng, $idCat)
	{
		if (!isset(self::$database))
			self::$database = new PdoBDD();

        $this->idSousCategorie = $idSousCategorie;
        $this->nomSousCategorie = $nomSousCategorie;
        $this->nomSousCatAng = $nomSousCatAng;
        $this->idCat = $idCat;
    }
	
	function __destruct ()
	{
		
	}
	
	/**
	 * @access public
	 * @return Int
	 */
	public function getidSousCategorie() 
	{
		return $this->idSousCategorie;		
			
	}
    
    public function getnomSousCategorie() 
	{
		return $this->nomSousCategorie;				
	}
    
    public function getnomSousCatAng() 
	{
		return $this->nomSousCatAng;				
	}
    
    public function getidCat() 
	{
		return $this->idCat;		
			
	}
    /**
	 * @author Gautier Piatek
	 * @return Array Tableau contenant la liste de toutes les sous categories
	 */
	public static function listeSousCategories() 
		{
			self::$database->query('SELECT * FROM souscategorie ORDER BY nomSousCat ASC');
        
            //self::$database->bind(':idCategorie', $idCategorie);    
        
			$lignes = self::$database->resultset();
			foreach ($lignes as $ligne) 
			{
				$uneSousCategorie = new MSousCategories($ligne['idSousCategorie'], $ligne['nomSousCat'], $ligne['nomSousCatAng'], $ligne['idCategorie']);
				$SousCategories[] = $uneSousCategorie;
			}
			return $SousCategories;
		}
    
    /**
     * Fonction qui compte le nombre de sous-catégories dans la BDD
	 * @access public static
     * @author Gautier Piatek
	 * @return int
	 */
    
    public static function nbreSousCat() {
        self::$database->query("SELECT COUNT(idSousCat) FROM souscategorie;");
        $resultat = self::$database->uneLigne();
        
        return $resultat["COUNT(idSousCat)"];
    }
}
 

?>