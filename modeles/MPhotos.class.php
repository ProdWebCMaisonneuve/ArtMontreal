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
        self::$database->query('SELECT photo.idPhoto, photo.nomPhoto, photo.idOeuvre,
        (SELECT COUNT(contient.idCommentaire) FROM contient WHERE contient.idPhoto=photo.idPhoto) AS nbCommentaires,
        (SELECT COUNT(vote.idUtilisateur) FROM vote WHERE vote.idPhoto=photo.idPhoto) AS nbVotes
        FROM photo
        JOIN propose ON propose.idPhoto = photo.idPhoto 
        JOIN utilisateur_enregistre ON propose.idUtilisateur= utilisateur_enregistre.idUtilisateur 
        WHERE utilisateur_enregistre.idUtilisateur=:idUtil AND photo.validationPhoto=1
        ORDER BY nbVotes DESC');
        
        
        self::$database->bind(':idUtil', $idUtil);
        $lignes = self::$database->resultset();
		foreach ($lignes as $ligne) {
			$unPhoto = array($ligne['idPhoto'], $ligne['nomPhoto'], $ligne['idOeuvre'],$ligne['nbCommentaires'],$ligne['nbVotes']);
			$photos[] = $unPhoto;
		}
		if($photos)
            return $photos;
        else
            return false;
    }
    
    
    /* listerPhotosValidesUtilisateur()
	 * @access public static
     * @author German Mahecha
	 * @return 
	 */
    public static function listerPhotosParOeuvre($idOeuvre)
    {
        self::$database->query('SELECT * FROM photo WHERE idOeuvre = :idOeuvre AND photo.validationPhoto=1');
        self::$database->bind(':idOeuvre', $idOeuvre);
        $lignes = self::$database->resultset();
		foreach ($lignes as $ligne) {
			$unPhoto = array($ligne['idPhoto'], $ligne['nomPhoto'], $ligne['validationPhoto'], $ligne['idOeuvre']);
			$photos[] = $unPhoto;
		}
		if($photos)
            return $photos;
        else
            return false;
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
		if($photos)
            return $photos;
        else
            return false;
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
    
    
      /* function ajouterPhoto()
	 * @access public static
     * @author German Mahecha
	 * @return true ou false
	 */
    public static function ajouterPhoto($chemin,$idOeuvre){
        self::$database->query("INSERT INTO photo VALUES ('',:chemin,0,:idOeuvre)");
        //On lie les paramètres auxvaleurs
        self::$database->bind(':chemin', $chemin);
        self::$database->bind(':idOeuvre', $idOeuvre);
        return(self::$database->execute()); 
    
    }  
    /* function ajouterPhotoPropose()
	 * @access public static
     * @author German Mahecha
	 * @return true ou false
	 */
    public static function ajouterPropositionPhoto($idUtil,$dernierPhoto,$dateIns){
        self::$database->query("INSERT INTO propose VALUES(:idUtil,:dernierPhoto,:datetime)");
        //On lie les paramètres auxvaleurs
        self::$database->bind(':idUtil', $idUtil);
        self::$database->bind(':dernierPhoto', $dernierPhoto);
        self::$database->bind(':datetime', $dateIns);
        return(self::$database->execute()); 
    }
     
    /* function ajouterPhoto()
	 * @access public static
     * @author German Mahecha
	 * @return dernier ID de la photo ajoutée
	 */
    public static function recupererDernierId() {
        return(self::$database->dernierId());
    }
    

    /* listerPhotosValidesUtilisateur()
	 * @access public static
     * @author German Mahecha
	 * @return 
	 */
    public static function listerMeilleuresPhotos()
    {
        self::$database->query('SELECT photo.idPhoto, photo.nomPhoto, photo.idOeuvre, 
        (SELECT COUNT(contient.idCommentaire) FROM contient WHERE contient.idPhoto=photo.idPhoto) AS nbCommentaires, 
        (SELECT COUNT(vote.idUtilisateur) FROM vote WHERE vote.idPhoto=photo.idPhoto) AS nbVotes 
        FROM photo 
        WHERE photo.validationPhoto=1
        ORDER BY nbVotes DESC');
        $lignes = self::$database->resultset();
		foreach ($lignes as $ligne) {
			$unPhoto = array($ligne['idPhoto'], $ligne['nomPhoto'], $ligne['idOeuvre'],$ligne['nbCommentaires'],$ligne['nbVotes']);
			$photos[] = $unPhoto;
		}
		if($photos)
            return $photos;
        else
            return false;
    }


    /* function qui liste les photos non valides
	 * @access public static
     * @author Gautier Piatek
	 * @return array
	 */
    public static function listePhotosNonValides() {
        self::$database->query("SELECT * FROM photo WHERE validationPhoto = 0");
        $lignes = self::$database->resultset();
		foreach ($lignes as $ligne) {
			$unPhoto = new MPhotos($ligne['idPhoto'], $ligne['nomPhoto'], $ligne['validationPhoto'], $ligne['idOeuvre']);
			$photos[] = $unPhoto;
		}
		return $photos;
        
    }
    
    /* function qui compte les photos non valides
	 * @access public static
     * @author Gautier Piatek
	 * @return int
	 */
    public static function nbrePhotosNonValides() {
        self::$database->query("SELECT COUNT(idPhoto) FROM photo WHERE validationPhoto = 0;");
        $resultat = self::$database->uneLigne();
        
        return $resultat["COUNT(idPhoto)"];
        
    }
    
    /* function qui compte les photos
	 * @access public static
     * @author Gautier Piatek
	 * @return int
	 */
    public static function nbrePhotos() {
        self::$database->query("SELECT COUNT(idPhoto) FROM photo");
        $resultat = self::$database->uneLigne();
        
        return $resultat["COUNT(idPhoto)"];
    
    
        
    }
    
    /* function qui liste les photos en attente de validation
	 * @access public static
     * @author Gautier Piatek
     * @author German Mahecha
	 * @return int
	 */
    public static function listePhotosAValider() {
        self::$database->query("SELECT utilisateur_enregistre.loginUtilisateur, propose.dateProposition, photo.idPhoto, photo.nomPhoto, oeuvre.titreOeuvre 
FROM photo
JOIN oeuvre ON photo.idOeuvre = oeuvre.idOeuvre
JOIN propose ON propose.idPhoto = photo.idPhoto 
JOIN utilisateur_enregistre ON propose.idUtilisateur= utilisateur_enregistre.idUtilisateur 
WHERE photo.validationPhoto=0");
        $lignes = self::$database->resultset();
		foreach ($lignes as $ligne) {
			$unPhoto = array($ligne['loginUtilisateur'], $ligne['dateProposition'], $ligne['idPhoto'], $ligne['nomPhoto'], $ligne['titreOeuvre']);
			$photos[] = $unPhoto;
		}
		return $photos;
    }
    
    /* function qui efface les photos en attente de validation
	 * @access public static
     * @author Gautier Piatek
     * @author German Mahecha
	 * @return none
	 */
    public static function supprimerPhoto($idPhoto) 
    {
        self::$database->query("DELETE FROM propose WHERE idPhoto = :idPhoto");
        self::$database->bind(':idPhoto', $idPhoto);
        self::$database->execute();
        self::$database->query("DELETE FROM photo WHERE idPhoto = :idPhoto");
        self::$database->bind(':idPhoto', $idPhoto);
        self::$database->execute();
        
    }
    
    /* function qui valide les photos en attente de validation
	 * @access public static
     * @author Gautier Piatek
     * @author German Mahecha
	 * @return none
	 */
    public static function validerPhoto($idPhoto) 
    {
        self::$database->query("UPDATE photo SET validationPhoto = 1 WHERE idPhoto = :idPhoto");
        self::$database->bind(':idPhoto', $idPhoto);
        self::$database->execute();
        
    }
    
}?>







