<?php
/**
 * Class Modele Arrondissement
 * 
 * @author Gautier Piatek
 * @version 1.0
 * @update 2015-12-11
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */
class MArrondissement {
	
    /**
	 *
	 * @var int Identifiant Categorie
	**/
    
    public $idArrondissement;
	public $nomArrondissement;

    /**
	 * @var database Objet base de données qui permet la connexion
	 */
	static $database;
    
	function __construct ($idArrondissement, $nomArrondissement)
	{
		if (!isset(self::$database))
			self::$database = new PdoBDD();

        $this->idArrondissement = $idArrondissement;
        $this->nomArrondissement = $nomArrondissement;
	}
	
	function __destruct (){}

    public function getidArrondissement(){
		return $this->idArrondissement;		
	}

    public function getnomArrondissement(){
		return $this->nomArrondissement;				
	}
    
    /**
	 * @access public static
	 * @return Array Tableau contenant la liste de toutes les arrondissements
	 * @author Jorge Blanco
     * @version 1.0
     * 
     */
	public static function listeArrondissement() {
		self::$database->query('SELECT * FROM arrondissement');
		$lignes = self::$database->resultset();
		foreach ($lignes as $ligne) {
			$unArrondissement = new MArrondissement($ligne['idArrondissement'], $ligne['nomArrondissement']);
			$arrondissements[] = $unArrondissement;
		}
		return $arrondissements;
	} //FIN FUNCTION listeArrondissement
    
    /**
	 * @access public static
	 * @return un arrondissement
     * @author Jorge Blanco
	 * @author German Mahecha
     * @version 1.0
     * 
     */
	public static function getArrondissementParId($idArrond) {
		self::$database->query('SELECT * FROM arrondissement WHERE idArrondissement = :idArrondissement');
        self::$database->bind(':idArrondissement', $idArrond);
		return (self::$database->uneLigne());
	}
    
    
    
    
     /**
     * Function qui valide s'il existe un arrondissement dans la table arrondissement
	 * @author German Mahecha
	 * @return true ou false
	 */

    public function validerArrondissement()
    {
        self::$database->query("SELECT * FROM arrondissement WHERE nomArrondissement = :nomArrond");
        //On lie les paramètres aux valeurs
        self::$database->bind(':nomArrond', $this->nomArrondissement);
        $ligne= self::$database->uneLigne();
        return $ligne['idArrondissement'];
    } 
    
    /**
    * Function qui enregistre un arrondissement 
	 * @author German Mahecha
	 * @return 
	 */

    public function enregistrerArrondissement()
    {
        self::$database->query("INSERT INTO arrondissement values ('',:nomArrond)");
        //On lie les paramètres auxvaleurs
        self::$database->bind(':nomArrond', $this->nomArrondissement);
        return(self::$database->execute());
    } 
    
    
    
    
    

    
}?>