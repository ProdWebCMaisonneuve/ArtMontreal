<?php

/**
 * Class Modele Utilisateurs
 * 
 * @author Jorge Blanco
 * @version 1.0
 * @update 2016-01-17
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */
class MAdmin_Moderateur {
    
    /**
	 *
	 * @var int Identifiant Admin_Moderateur
	**/
    
    public $idAdMod;
    public $role;
    public $login;
    public $pass;
    
    
      /**
	 * @var database Objet base de données qui permet la connexion
	 */
	static $database;
    
    function __construct ($idAdMod, $role, $login, $pass)
    {
        if (!isset(self::$database))
			self::$database = new PdoBDD();

        $this->idAdMod = $idAdMod;
        $this->role = $role;
        $this->login = $login;
        $this->pass = $pass;

    }
    
    function __destruct ()
	{
		
	}
    
    	/** Getters
	 * @access public
	 * @return 
	 */
    
        public function getIdAdMod() 
	{
		return $this->idAdMod;		
			
	}
    
        public function getRole() 
	{
		return $this->role;		
			
	}
    
        public function getLogin() 
	{
		return $this->login;		
			
	}
    
        public function getPass() 
	{
		return $this->pass;		
			
	}
    
    
     /*
	 * @access public static
     * @author Jorge Blanco
	 * @return Array Tableau contenant la liste de tous les Administrateur et moderateurs
	 */
    
    public static function listeAdmin_moderateur()
    {
        self::$database->query('SELECT * FROM adminmod ORDER BY adminmod.login ASC');
        $lignes = self::$database->resultset();
        foreach ($lignes as $ligne){
            $unAdmin_moderateur = new MAdmin_Moderateur($ligne['idAdMod'], $ligne['role'], $ligne['login'], $ligne['pass']);
            $admin_moderateur[] = $unAdmin_moderateur;
        }
        return $admin_moderateur;
    }
    
    /*
	 * @access public static
     * Fonction pour recuperer l'info d'un admin/moderateur par son id
     * @author Jorge Blanco
	 * @return none
	 */
    public static function getAdmin_moderateurParId($idAdMod)
    {
        self::$database->query('SELECT * FROM adminmod WHERE idAdMod=:idAdMod');
        self::$database->bind(':idAdMod', $idAdMod);
        
        $ligne = self::$database->uneLigne();
        
        return $ligne;
    }
    
    
    /*
	 * @access public static
     * fonction supprimer un admin/moderateur
     * @author Jorge Blanco
	 * @return none 
	 */
    
    public static function modifierAdmin_moderateur($idAdMod, $role, $login, $pass)
    {
        self::$database->query('UPDATE adminmod SET role = :role, login = :login, pass = :pass WHERE idAdMod = :idAdMod');
        
        self::$database->bind(':idAdMod', $idAdMod);
        self::$database->bind(':role', $role);
        self::$database->bind(':login', $login);
        self::$database->bind(':pass', $pass);
        
        return(self::$database->execute());
        
    }
    
    
    /*
	 * @access public static
     * fonction ajout un admin/moderateur
     * @author Jorge Blanco
	 * @return none
	 */
    
    public static function ajoutAdmin_moderateur($role, $login, $pass)
    {
        self::$database->query("INSERT INTO adminmod VALUES ('', :role, :login, :pass)");
        
        self::$database->bind(':role', $role);
        self::$database->bind(':login', $login);
        self::$database->bind(':pass', $pass);
        
        return(self::$database->execute());
    }
    
    /*
	 * @access public static
     * fonction supprimer un admin/moderateur
     * @author Jorge Blanco
	 * @return none
	 */
    public static function supprimerAdmin_moderateur($idAdMod)
    {
        self::$database->query('DELETE FROM adminmod WHERE idAdMod=:idAdMod');
        self::$database->bind(':idAdMod', $idAdMod);
        
        return(self::$database->execute());
    }
    
    
    
    
    
    
}
    
?>