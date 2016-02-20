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
     * Fonction pour obtenir les données des tous les commentaires d'une photo
     * @access public static
     * @author German Mahecha
     * @return: array des commentaires
     */
    public static function getAllCommentParIdPhoto($idPhoto)
    {
        $commentaires=array();
        self::$database->query("SELECT commentaire.idCommentaire, commentaire.commentaire, ecrit.dateCommentaire, utilisateur_enregistre.prenomUtil, utilisateur_enregistre.nomUtil
                                FROM commentaire
                                JOIN contient ON commentaire.idCommentaire=contient.idCommentaire
                                JOIN ecrit ON commentaire.idCommentaire=ecrit.idCommentaire
                                JOIN utilisateur_enregistre ON ecrit.idUtilisateur=utilisateur_enregistre.idUtilisateur
                                WHERE contient.idPhoto = :idPhoto AND commentaire.validationCommentaire = 1
                                ORDER BY ecrit.dateCommentaire DESC") ;
        //On lie les paramètres aux valeurs
        self::$database->bind(':idPhoto', $idPhoto);
        $lignes = self::$database->resultset();
        foreach ($lignes as $ligne) 
        {
          $uneCommentaire = array($ligne['idCommentaire'], $ligne['commentaire'], $ligne['dateCommentaire'], $ligne['prenomUtil'], $ligne['nomUtil']);
          $commentaires[] = $uneCommentaire;
        }
        return $commentaires;
        
    }
    
    /* function qui compte les commentaires
	 * @access public static
     * @author Gautier Piatek
	 * @return int
	 */
    public static function nbreCommentairesNonValides() {
        self::$database->query("SELECT COUNT(idCommentaire) FROM commentaire WHERE validationCommentaire = 0;");
        $resultat = self::$database->uneLigne();
        
        return $resultat["COUNT(idCommentaire)"];  
    }
    
    /* function qui liste les commentaires à valider
	 * @access public static
     * @author Gautier Piatek
	 * @return int
	 */
    public static function listeCommentairesAValider() 
    {
         $commentaires=array();
        self::$database->query("SELECT utilisateur_enregistre.loginUtilisateur, ecrit.dateCommentaire, commentaire.idCommentaire, commentaire.commentaire
FROM commentaire
JOIN ecrit ON ecrit.idCommentaire = commentaire.idCommentaire
JOIN utilisateur_enregistre ON ecrit.idUtilisateur= utilisateur_enregistre.idUtilisateur 
WHERE commentaire.validationCommentaire=0");
        $lignes = self::$database->resultset();
		foreach ($lignes as $ligne) {
			$unCommentaire = array($ligne['loginUtilisateur'], $ligne['dateCommentaire'], $ligne['idCommentaire'], $ligne['commentaire']);
			$commentaires[] = $unCommentaire;
		}
		return $commentaires;
    }
    
    /* function qui efface les commentaires en attente de validation
	 * @access public static
     * @author Thuy Tien Vo
     * @author Gautier Piatek
	 * @return none
	 */
    public static function supprimerCommentaire($idCommentaire) 
    {
       
        self::$database->query("DELETE FROM contient WHERE idCommentaire = :idCommentaire");
        self::$database->bind(':idCommentaire', $idCommentaire);
        self::$database->execute();
        self::$database->query("DELETE FROM ecrit WHERE idCommentaire = :idCommentaire");
        self::$database->bind(':idCommentaire', $idCommentaire);
        self::$database->execute();
        self::$database->query("DELETE FROM commentaire WHERE idCommentaire = :idCommentaire");
        self::$database->bind(':idCommentaire', $idCommentaire);
        self::$database->execute();
       
    }
    
    /* function qui valide les commentaires en attente de validation
	 * @access public static
     * @author Gautier Piatek
	 * @return none
	 */
    public static function validerCommentaire($idCommentaire) 
    {
        self::$database->query("UPDATE commentaire SET validationCommentaire = 1 WHERE idCommentaire = :idCommentaire");
        self::$database->bind(':idCommentaire', $idCommentaire);
        self::$database->execute();
        
    }
}
 
?>