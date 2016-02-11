<?php
/**
 * Class Modele Photos
 * 
 * @author German Mahecha
 * @version 1.0
 * @update 2016-01-17
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */
class MPhotos {
    /**
	 *
	 * @var int Identifiant Photos
	**/
    public $idPhoto;
    public $nomPhoto;
    public $validationPhoto;
    public $idOeuvre;
    
    /**
	 * @var database Objet base de données qui permet la connexion
	 */
	static $database;
        
	function __construct ($idPhoto, $nomPhoto, $validationPhoto,$idOeuvre){
		if (!isset(self::$database))
			self::$database = new PdoBDD();

        $this->idPhoto = $idPhoto;
        $this->nomPhoto = $nomPhoto;
        $this->validationPhoto = $validationPhoto;
        $this->idOeuvre = $idOeuvre;
	}
	function __destruct(){}
    
    public function getIdPhoto(){
		return $this->idPhoto;		
	}
    public function getNomPhoto(){
		return $this->nomPhoto;		
	}
	public function getValidationPhoto(){
		return $this->validationPhoto;		
	}
	public function getidOeuvre(){
		return $this->idOeuvre;		
	}
    
    
    /* listerPhotosValidesUtilisateur()
	 * @access public static
     * @author German Mahecha
	 * @return 
	 */
    public static function listerPhotosValidesUtilisateur($idUtil)
    {
        self::$database->query('SELECT * FROM `photo` 
        JOIN propose ON propose.idPhoto = photo.idPhoto
        JOIN utilisateur_enregistre ON propose.idUtilisateur= utilisateur_enregistre.idUtilisateur
        WHERE utilisateur_enregistre.idUtilisateur=:idUtil AND photo.validationPhoto=1');
        self::$database->bind(':idUtil', $idUtil);
        $lignes = self::$database->resultset();
		foreach ($lignes as $ligne) {
			$unPhoto = new MPhotos($ligne['idPhoto'], $ligne['nomPhoto'], $ligne['validationPhoto'], $ligne['idOeuvre']);
			$photos[] = $unPhoto;
		}
		return $photos;
    }
    
    /* compterPhotosValidesUtilisateur()
	 * @access public static
     * @author German Mahecha
	 * @return 
	 */
    public static function compterPhotosValidesUtilisateur($idUtil)
    {
        self::$database->query('SELECT COUNT(nomPhoto) FROM `photo` 
        JOIN propose ON propose.idPhoto = photo.idPhoto
        JOIN utilisateur_enregistre ON propose.idUtilisateur= utilisateur_enregistre.idUtilisateur
        WHERE utilisateur_enregistre.idUtilisateur=:idUtil AND photo.validationPhoto=1');

        self::$database->bind(':idUtil', $idUtil);
        $ligne = self::$database->uneLigne();
        if($ligne){
            return $ligne["passUtilisateur"];
        }else{
            return false;
        }
    }
    
    /* listeComentairesIdPhoto()
	 * @access public static
     * @author German Mahecha
	 * @return 
	 */
    public static function listeComentairesIdPhoto()
    {
        self::$database->query('SELECT * FROM commentaire 
        JOIN contient ON commentaire.idCommentaire= contient.idCommentaire
        JOIN photo ON contient.idPhoto=photo.idPhoto
        WHERE photo.idPhoto=2 AND commentaire.validationCommentaire=1');
        
        self::$database->bind(':idUtil', $idUtilisateur);
        $lignes = self::$database->resultset();
		foreach ($lignes as $ligne) {
			$unPhoto = new MPhotos($ligne['idPhoto'], $ligne['nomPhoto'], $ligne['validationPhoto'], $ligne['idOeuvre']);
			$photos[] = $unPhoto;
		}
		return $photos;
    }
    
    /* function compterCommentairesPhoto()
	 * @access public static
     * @author German Mahecha
	 * @return 
	 */
    public static function compterCommentairesPhoto()
    {
        self::$database->query('SELECT COUNT(commentaire) FROM commentaire 
        JOIN contient ON commentaire.idCommentaire= contient.idCommentaire
        JOIN photo ON contient.idPhoto=photo.idPhoto
        WHERE photo.idPhoto=4 AND commentaire.validationCommentaire=1');

    }
    
    

    
}?>







