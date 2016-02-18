<?php
/**
 * Class Modele Commentaire
 * 
 * @author Thuy Tien Vo
 * @version 1.0
 * @update 2015-12-11
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */
class MCommentaires

{
    /**
	 *
	 * @var int Identifiant Commentaire
	**/
    
    public $idCommentaire;
	public $commentaire;
    public $validationCommentaire;
    
    /**
	 * @var database Objet base de données qui permet la connexion
	 */
	static $database;
    
	function __construct ($idCommentaire, $commentaire, $validationCommentaire)
	{
		if (!isset(self::$database))
			self::$database = new PdoBDD();

        $this->idCommentaire = $idCommentaire;
        $this->commentaire = $commentaire;
        $this->validationCommentaire = $validationCommentaire;
    }
	
	function __destruct (){}
			
	/**
	 * @access public
	 * @return Int
	 */
	public function getIdCommentaire() 
    {
		return $this->idCommentaire;		
	}
    
    public function getCommentaire() 
    {
		return $this->commentaire;				
	}
    
    public function getValidationCommentaire() 
    {
		return $this->validationCommentaire;				
    }
    
    
     /*
     * Fonction qui récupère les infos d'une commentaire selon son id
	 * @access public static
     * @author Thuy Tien Vo
	 * @return array
	 */
	public static function getCommentaireParId($idCommentaire) 
	{
		self::$database->query("SELECT * FROM commentaire WHERE idCommentaire=:idCommentaire");
        //On lie les paramètres auxvaleurs
        self::$database->bind(':idCommentaire', $idCommentaire);
        return (self::$database->uneLigne());
	}

       /**
     * @author Thuy Tien Vo
     * @return Array Tableau contenant la liste de toutes les categories
     */
    public static function listeCommentaires() 
    {
        self::$database->query('SELECT * FROM commentaire ORDER BY commentaire ASC');
        $lignes = self::$database->resultset();
        foreach ($lignes as $ligne) 
        {
          $uneCommentaire = new MCommentaires($ligne['idCommentaire'], $ligne['commentaire'], $ligne['validationCommentaire']);
          $commentaires[] = $uneCommentaire;
        }
        return $commentaires;
    }
    
    
    
    
    /*
     * Fonction qui ajoute une commentaire
	 * @access public static
     * @author Thuy Tien Vo
	 * @return array
	 */
    public function ajoutCommentaire($commentaire)
    {
        self::$database->query("INSERT INTO commentaire VALUES ('', :commentaire,'')") ;
        //On lie les paramètres aux valeurs
        self::$database->bind(':commentaire', $commentaire);
        return(self::$database->execute());
    } 
  
   /*
     * Fonction qui supprimer une commentaire
     * @access public static
     * @author Thuy Tien Vo
     * @return: supprimer une commentaire dans le BDD
     */
 	public static function supprimerCommentaire($idCommentaire)

    {
     	self::$database->query("DELETE FROM commentaire WHERE idCommentaire=:idCommentaire");
     	self::$database->bind(':idCommentaire', $idCommentaire);
      	return(self::$database->execute());
    }
    

      
}
 
?>