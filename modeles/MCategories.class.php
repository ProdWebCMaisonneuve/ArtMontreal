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
	 * @author Thuy Tien Vo
	 * @return Array Tableau contenant la liste de toutes les categories
	 */

    public function ajoutCategorie($nomCategorie,$nomCatAng)

        {
            self::$database->query("INSERT INTO categorie VALUES ('', :nomCategorie, :nomCatAng)") ;
            //On lie les paramètres aux valeurs
            self::$database->bind(':nomCategorie', $nomCategorie);
            self::$database->bind(':nomCatAng', $nomCatAng);
            self::$database->execute();
            return(self::$database->execute());
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


  
}

/**
 * Class Modele Sous Catégorie
 * 
 * @author Gautier Piatek
 * @version 1.0
 * @update 2016-01-12
 * 
 */
class MSousCategories extends MCategories 

{
    
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
	 * @author Thuy Tien Vo
	 * @return Supprimer un catégorie
	 */

	public static function supprimerCategories($idCategorie)
    {
    	self::$database->query("DELETE FROM categorie WHERE idCategorie=:idCategorie");
    	self::$database->bind(':idCategorie', $idCategorie);

    	return(self::$database->execute());
    }
}
 

?>