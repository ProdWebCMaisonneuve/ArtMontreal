<?php
/**
 * Class Modele Oeuvres
 * 
 * @author German Mahecha
 * @version 1.0
 * @update 2015-12-14
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */
class MOeuvres {
	/**
	* @var int Identifiant Artiste
	**/
    
    	public $idOeuvre;
    	public $titreOeuvre;
	public $titreVariante;
	public $technique;
    	public $techniqueAng;
	public $noInternetOeuvre;
	public $description;
	public $validationOeuvre;
	public $nomArrondissement;
	public $adresse;
	public $batiment;
	public $parc;
	public $latitude;
	public $longitude;
	public $prenomArtiste;
	public $nomArtiste;
	public $collectif;
	public $noInterneArtiste;
	public $photoArtiste;
	public $nomCategorie;
	public $nomCategorieAng;
	public $nomSousCat;
	public $nomSousCatAng;
	public $nomMateriaux;
	public $nomMateriauxAng;
	
    
	  /**
	 * @var database Objet base de données qui permet la connexion
	 */
	static $database;
        
	function __construct ($idOeuvre,$titreOeuvre,$titreVariante,$technique,$techniqueAng,$noInternetOeuvre,$description,$validationOeuvre,$nomArrondissement,$adresse,$batiment,$parc, $latitude, $longitude, $prenomArtiste, $nomArtiste, $collectif, $noInterneArtiste, $photoArtiste, $nomCategorie, $nomCategorieAng, $nomSousCat, $nomSousCatAng, $nomMateriaux, $nomMateriauxAng)
	{
		if (!isset(self::$database))
			self::$database = new PdoBDD();

    		$this->idOeuvre = $idOeuvre;
   		$this-> titreOeuvre = $titreOeuvre;
		$this-> titreVariante =  $titreVariante;
		$this-> technique =  $technique;
        	$this-> techniqueAng =  $techniqueAng;
		$this-> noInternetOeuvre =  $noInternetOeuvre;
		$this-> description =  $description;
		$this-> validationOeuvre =  $validationOeuvre;
		$this-> nomArrondissement =  $nomArrondissement;
		$this-> adresse =  $adresse;
		$this-> batiment =  $batiment;
		$this-> parc =  $parc;
		$this-> latitude =  $latitude;
		$this-> longitude =  $longitude;
		$this-> prenomArtiste =  $prenomArtiste;
		$this-> nomArtiste =  $nomArtiste;
		$this-> collectif =  $collectif;
		$this-> noInterneArtiste =  $noInterneArtiste;
		$this-> photoArtiste =  $photoArtiste;
		$this-> nomCategorie =  $nomCategorie;
		$this-> nomCategorieAng =  $nomCategorieAng;
		$this-> nomSousCat =  $nomSousCat;
		$this-> nomSousCatAng =  $nomSousCatAng;
		$this-> nomMateriaux =  $nomMateriaux;
		$this-> nomMateriauxAng =  $nomMateriauxAng;
	}
	
	function __destruct (){}
	
	/** Getters
	 * @access public
	 * @return 
	 */
	
    	public function getIdOeuvre(){
		return $this->idOeuvre;		
	}
    	public function getTitreOeuvre(){
		return $this->titreOeuvre;		
	}
	public function getTitreVariante(){
		return $this->titreVariante;		
	}
	public function getTechnique() {
		return $this->technique;		
	}
    	public function getTechniqueAng() {
		return $this->technique;		
	}
	public function getNoInternetOeuvre(){
		return $this->noInternetOeuvre;		
	}
	public function getDescription() {
		return $this->description;		
	}
	public function getValidationOeuvre(){
		return $this->validationOeuvre;		
	}
	public function getNomArrondissement()	{
		return $this->nomArrondissement;		
	}
	public function getAdresse() {
		return $this->adresse;		
	}
	public function getBatiment(){
		return $this->batiment;		
	}
	public function getParc() {
		return $this->parc;		
	}
	public function getLatitude(){
		return $this->latitude;		
	}
	public function getLongitude(){
		return $this->longitude;		
	}
	public function getPrenomArtiste(){
		return $this->prenomArtiste;		
	}
	public function getNomArtiste() {
		return $this->nomArtiste;		
	}
	public function getCollectif() {
		return $this->collectif;		
	}
	public function getNoInterneArtiste(){
		return $this->noInterneArtiste;		
	}
	public function getPhotoArtiste() {
		return $this->photoArtiste;		
	}
	public function getNomCategorie(){
		return $this->nomCategorie;		
	}
	public function getNomCategorieAng(){
		return $this->nomCategorieAng;		
	}
	public function getNomSousCat(){
		return $this->nomSousCat;		
	}
	public function getNomSousCatAng(){
		return $this->nomSousCatAng;		
	}
	public function getNomMateriaux(){
		return $this->nomMateriaux;		
	}
	public function getNomMateriauxAng(){
		return $this->nomMateriauxAng;		
	}
    
	/*****************************************/
	
    	/**
	* @access public static
     	* @author German Mahecha
	* @return Array Tableau contenant la liste de tout les oeuvres
	*/
	public static function listeOeuvres() {
		self::$database->query('
		SELECT oeuvre.idOeuvre, oeuvre.titreOeuvre, arrondissement.nomArrondissement, artiste.prenom,artiste.nom, artiste.collectif, categorie.nomCategorie 
		FROM oeuvre JOIN artiste ON oeuvre.idArtiste = artiste.idArtiste 
		JOIN arrondissement ON oeuvre.idArrondissement = arrondissement.idArrondissement 
		JOIN categorie ON oeuvre.idCategorie = categorie.idCategorie ');
		
        $lignes = self::$database->resultset();
		foreach ($lignes as $ligne) {
			$uneOeuvre = new MOeuvres($ligne['idOeuvre'],$ligne['titreOeuvre'],'','','','','','',$ligne['nomArrondissement'],'','','','','',$ligne['prenom'],$ligne['nom'],$ligne['collectif'],'','',$ligne['nomCategorie'],'','','','','');
			$oeuvres[] = $uneOeuvre;
		}
		return $oeuvres;
	}
    
    
    	/**
	* @access public static
     	* @author German Mahecha
	* @return un oeuvre
	*/
	public static function listeUnOeuvre($idcon) {
		self::$database->query('SELECT oeuvre.idOeuvre, oeuvre.titreOeuvre, oeuvre.titreVariante,oeuvre.technique,oeuvre.techniqueAng,oeuvre.noInterne,oeuvre.description,oeuvre.validationOeuvre, arrondissement.nomArrondissement, artiste.prenom,artiste.nom, artiste.collectif, adresse.adresseCiv, adresse.batiment, adresse.parc, adresse.latitude, adresse.longitude, categorie.nomCategorie, categorie.nomCatAng, souscategorie.nomSousCat, souscategorie.nomSousCatAng, oeuvre.nomMateriaux,oeuvre.nomMateriauxAng  
		FROM oeuvre JOIN artiste ON oeuvre.idArtiste = artiste.idArtiste 
		JOIN arrondissement ON oeuvre.idArrondissement = arrondissement.idArrondissement 
        	JOIN adresse ON oeuvre.idAdresse = adresse.idAdresse
		JOIN categorie ON oeuvre.idCategorie = categorie.idCategorie
        	JOIN souscategorie ON oeuvre.idSousCategorie = souscategorie.idSousCategorie
		WHERE oeuvre.idOeuvre = :idcon');
		self::$database->bind(':idcon', $idcon);
        $ligne = self::$database->uneLigne();
		$oeuvre = new MOeuvres($ligne['idOeuvre'],$ligne['titreOeuvre'],$ligne['titreVariante'],$ligne['technique'],$ligne['techniqueAng'],$ligne['noInterne'],$ligne['description'],$ligne['validationOeuvre'],$ligne['nomArrondissement'],$ligne['adresseCiv'],$ligne['batiment'],$ligne['parc'],$ligne['latitude'],$ligne['longitude'],$ligne['prenom'],$ligne['nom'],$ligne['collectif'],'','',$ligne['nomCategorie'],$ligne['nomCatAng'],$ligne['nomSousCat'],$ligne['nomSousCatAng'],$ligne['nomMateriaux'],$ligne['nomMateriauxAng']);
        	return $oeuvre;
	}
    
 
    /*
     * Fonction qui récupère les infos d'une oeuvre selon son id
	 * @access public static
     * @author Gautier Piatek
	 * @return array
	 */
	public static function getOeuvreParId($idOeuvre) 
	{
		self::$database->query("SELECT * FROM oeuvre WHERE idOeuvre=:idOeuvre");
        //On lie les paramètres auxvaleurs
        self::$database->bind(':idOeuvre', $idOeuvre);
        
        $ligne = self::$database->uneLigne();
        
        return $ligne;
	}
    
    
    /**
	 * @access public static
     * @author Gautier Piatek
	 * @return Array Tableau contenant la liste de tous les objets oeuvres selon un id d'artiste
	 */
	public static function listeOeuvresParArtiste($idArtiste) {
		self::$database->query('SELECT * FROM oeuvre WHERE idArtiste = :idArtiste ORDER BY oeuvre.idOeuvre ASC');
        self::$database->bind(':idArtiste', $idArtiste);
		$lignes = self::$database->resultset();
		foreach ($lignes as $ligne) {
			$uneOeuvre = new MOeuvres($ligne['idOeuvre'], $ligne['titreOeuvre'], '', '','', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
			$oeuvres[] = $uneOeuvre;
		}
		return $oeuvres;
    }

    /**
	 *
	 * @return Array Tableau contenant la liste de toutes les oueuvres par arrondissement
     * @author Jorge Blanco
     * @version 1.1
     * 
     */
	public static function listerOeuvresParArr($idArrondissement) {
		self::$database->query('SELECT oeuvre.idOeuvre, oeuvre.titreOeuvre FROM oeuvre JOIN arrondissement on arrondissement.idArrondissement=oeuvre.idArrondissement WHERE oeuvre.idArrondissement=:idArrondissement');
		self::$database->bind(':idArrondissement', $idArrondissement);

		$lignes = self::$database->resultset();
		foreach ($lignes as $ligne) {
			$unOeuvreParArr = new MOeuvres($ligne['idOeuvre'],$ligne['titreOeuvre'],'','','','','','','','','','','','','','','','','','','','','','','');
			$OuvresParArr[] = $unOeuvreParArr;
		}
		//var_dump($OuvresParArr);
		if(isset($OuvresParArr))
		{
			return $OuvresParArr;
		}
		else
		{
			echo "";
		}

    }//FIN FUNCTION listerOeuvresParArr


     /**
	 *
	 * @return Array Tableau contenant la liste de toutes les oeuvres par CATEGORIE
     * @author Thuy Tien Vo
     * @version 1.1
     * 
     */


	public static function listeOeuvresParCat($idCategorie) 
    {
       
    	 self::$database->query('SELECT oeuvre.idOeuvre, oeuvre.titreOeuvre FROM oeuvre JOIN categorie ON categorie.idCategorie= oeuvre.idCategorie WHERE  categorie.idCategorie = :idCategorie');
    
        self::$database->bind(':idCategorie', $idCategorie);
    
        $lignes = self::$database->resultset();
        foreach ($lignes as $ligne) 
        {   $unOeuvreParCat = new MOeuvres($ligne['idOeuvre'],$ligne['titreOeuvre'],'','','','','','','','','','','','','','','','','','','','','','','');
            $OeuvresParCat[] = $unOeuvreParCat;
        }
        if(isset($OeuvresParCat))
        {
        	return $OeuvresParCat;
        }
        else
        {
        	echo "il n'y a pas d'oeuvres dans ce catégorie";
        }
    }




    
    /**
	 * Fonction d'ajout d'oeuvre
	 * @return none
     * @author Gautier Piatek
     * @version 1.0
     * 
     */
    public static function ajouterOeuvre($titre, $titreVariante, $technique, $techniqueAng, $description, $validationOeuvre, $idArrondissement, $idAdresse, $idArtiste, $idCategorie, $idSousCategorie, $nomMateriaux, $nomMateriauxAng) {
        
        self::$database->query("INSERT INTO oeuvre VALUES ('', :titre, :titreVariante, :technique, :techniqueAng, '', :description, :validationOeuvre, :idArrondissement, :idAdresse, :idArtiste, :nomMateriaux, :nomMateriauxAng, :idCategorie, :idSousCategorie)");
        //On lie les paramètres auxvaleurs
        
        self::$database->bind(':titre', $titre);
        self::$database->bind(':titreVariante', $titreVariante);
        self::$database->bind(':technique', $technique);
        self::$database->bind(':techniqueAng', $techniqueAng);
        self::$database->bind(':description', $description);
        self::$database->bind(':validationOeuvre', $validationOeuvre);
        self::$database->bind(':idArrondissement', $idArrondissement);
        self::$database->bind(':idAdresse', $idAdresse);
        self::$database->bind(':idArtiste', $idArtiste);
        self::$database->bind(':idCategorie', $idCategorie);
        self::$database->bind(':idSousCategorie', $idSousCategorie);
        self::$database->bind(':nomMateriaux', $nomMateriaux);
        self::$database->bind(':nomMateriauxAng', $nomMateriauxAng);
       
        return(self::$database->execute());
        
    }
    
    /**
	 * Fonction de modification d'oeuvre
	 * @return none
     * @author Gautier Piatek
     * @version 1.0
     * 
     */
    public static function modifierOeuvre($idOeuvre, $titre, $titreVariante, $technique, $techniqueAng, $description, $validationOeuvre, $idArrondissement, $idAdresse, $idArtiste, $idCategorie, $idSousCategorie, $nomMateriaux, $nomMateriauxAng) {
        
        self::$database->query("UPDATE oeuvre SET titreOeuvre = :titre, titreVariante = :titreVariante, technique = :technique, techniqueAng = :techniqueAng,  description = :description, validationOeuvre = :validationOeuvre, idArrondissement = :idArrondissement, idAdresse = :idAdresse, idArtiste = :idArtiste, nomMateriaux = :nomMateriaux, nomMateriauxAng = :nomMateriauxAng, idCategorie = :idCategorie, idSousCategorie = :idSousCategorie WHERE idOeuvre = :idOeuvre");
        //On lie les paramètres auxvaleurs
        
        self::$database->bind(':idOeuvre', $idOeuvre);
        self::$database->bind(':titre', $titre);
        self::$database->bind(':titreVariante', $titreVariante);
        self::$database->bind(':technique', $technique);
        self::$database->bind(':techniqueAng', $techniqueAng);
        self::$database->bind(':description', $description);
        self::$database->bind(':validationOeuvre', $validationOeuvre);
        self::$database->bind(':idArrondissement', $idArrondissement);
        self::$database->bind(':idAdresse', $idAdresse);
        self::$database->bind(':idArtiste', $idArtiste);
        self::$database->bind(':idCategorie', $idCategorie);
        self::$database->bind(':idSousCategorie', $idSousCategorie);
        self::$database->bind(':nomMateriaux', $nomMateriaux);
        self::$database->bind(':nomMateriauxAng', $nomMateriauxAng);
       
        return(self::$database->execute());
        
    }
    
    /**
     * Fonction d'ajout d'adresse
	 * @access public static
     * @author Gautier Piatek
	 * @return none
	 */
    public static function ajouterAdresse($adresse, $batiment, $parc, $latitude, $longitude) {
        self::$database->query("INSERT INTO adresse VALUES ('', :adresse, :batiment, :parc, :latitude, :longitude)");
        //On lie les paramètres auxvaleurs
        
        self::$database->bind(':adresse', $adresse);
        self::$database->bind(':batiment', $batiment);
        self::$database->bind(':parc', $parc);
        self::$database->bind(':latitude', $latitude);
        self::$database->bind(':longitude', $longitude);
       
        return(self::$database->execute());
    }
    
    /**
     * Fonction de modification d'adresse
	 * @access public static
     * @author Gautier Piatek
	 * @return none
	 */
    public static function modifierAdresse($idAdresse, $adresse, $batiment, $parc, $latitude, $longitude) {
        self::$database->query("UPDATE adresse SET adresseCiv = :adresse, batiment = :batiment, parc = :parc, latitude = :latitude, longitude = :longitude WHERE idAdresse = :idAdresse");
        //On lie les paramètres auxvaleurs
        
        self::$database->bind(':idAdresse', $idAdresse);
        self::$database->bind(':adresse', $adresse);
        self::$database->bind(':batiment', $batiment);
        self::$database->bind(':parc', $parc);
        self::$database->bind(':latitude', $latitude);
        self::$database->bind(':longitude', $longitude);
       
        return(self::$database->execute());
    }
    
    /*
     * Fonction qui récupère les infos d'une adresse selon son id
	 * @access public static
     * @author Gautier Piatek
	 * @return array
	 */
	public static function getAdresseParId($idAdresse) 
	{
		self::$database->query("SELECT * FROM adresse WHERE idAdresse=:idAdresse");
        //On lie les paramètres auxvaleurs
        self::$database->bind(':idAdresse', $idAdresse);
        
        $ligne = self::$database->uneLigne();
        
        return $ligne;
	}
    
    /*
     * Fonction qui récupère l'id de l'adresse d'une oeuvre selon son id
	 * @access public static
     * @author Gautier Piatek
	 * @return int
	 */
	public static function recupererIdAdresse($idOeuvre) 
	{
		self::$database->query("SELECT adresse.idAdresse FROM adresse JOIN oeuvre ON oeuvre.idAdresse = adresse.idAdresse WHERE oeuvre.idOeuvre = :idOeuvre");
        
        //On lie les paramètres auxvaleurs
        self::$database->bind(':idOeuvre', $idOeuvre);
        
        $ligne = self::$database->uneLigne();
        
        return $ligne['idAdresse'];
	}
    
    
    /**
     * Fonction qui récupère le dernier Id inséré dans la BDD
	 * @access public static
     * @author Gautier Piatek
	 * @return int
	 */
    public static function recupererDernierId() {

        return(self::$database->dernierId());
    }

    /**
     * Fonction qui supprime une oeuvre de la BDD
	 * @access public static
     * @author Gautier Piatek
	 * @return none
	 */
    public static function supprimerOeuvre($idOeuvre) {

        self::$database->query("DELETE FROM oeuvre WHERE idOeuvre=:idOeuvre");
        //On lie les paramètres auxvaleurs
        self::$database->bind(':idOeuvre', $idOeuvre);

        return(self::$database->execute());
    }
    
    
    
    
    
    
    /**
     * Fonction qui récupère la recherche des oeuvres par mot
	 * @access public static
     * @author German Mahecha
	 * @return array
	 */
    
    public static function listeOeuvresparMot($mot) {
		
        
       self::$database->query("
		SELECT oeuvre.idOeuvre, oeuvre.titreOeuvre, arrondissement.nomArrondissement, artiste.prenom,artiste.nom, artiste.collectif, categorie.nomCategorie 
		FROM oeuvre JOIN artiste ON oeuvre.idArtiste = artiste.idArtiste 
		JOIN arrondissement ON oeuvre.idArrondissement = arrondissement.idArrondissement 
		JOIN categorie ON oeuvre.idCategorie = categorie.idCategorie 
        WHERE oeuvre.titreOeuvre LIKE '%$mot%'");
		$lignes = self::$database->resultset();
		foreach ($lignes as $ligne) {
			$uneOeuvre = new MOeuvres($ligne['idOeuvre'],$ligne['titreOeuvre'],'','','','','','',$ligne['nomArrondissement'],'','','','','',$ligne['prenom'],$ligne['nom'],$ligne['collectif'],'','',$ligne['nomCategorie'],'','','','','');
			$oeuvres[] = $uneOeuvre;
		}
        if($oeuvres)
		  return $oeuvres;
        else
            return 'Aucune';
	}
    
    /**
     * Fonction qui compte le nombre d'oeuvres dans la BDD
	 * @access public static
     * @author Gautier Piatek
	 * @return int
	 */
    
    public static function nbreOeuvres() {
        self::$database->query("SELECT COUNT(idOeuvre) FROM oeuvre;");
        $resultat = self::$database->uneLigne();
        
        return $resultat["COUNT(idOeuvre)"];
    }
}




?>
