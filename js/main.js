/**
 * @file Script contenant les fonctions de base
 * @author Jonathan Martel (jmartel@gmail.com)
 * @version 0.1
 * @update 2013-12-11
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 *
 */


/**
 * Vérifie le formulaire d'inscription utilisateur 
 * @access public
 * @author Jorge Blanco
 */

function validerFormAInscription()
{
    
    var valide=true;
    var valide_valide=false;
    
    $utilisateur= $("#utilisateur");
    $motDePasse1 = $("#motDePasse1");
    $motDePasse2 = $("#motDePasse2");
    $prenom = $("#prenom");
    $nom = $("#nom");
    $email = $("#email");
    $telephone = $("#telephone");
    $bio= $("#bio");
   
    if(valide_valide==false)
    {   
        //doit avoir au moins 4 caracteres 
        if($utilisateur.val().length < 3){
        $( "#msjUtilisateur1" ).css("display", "block");
        valide=false;
        }
//        http://stackoverflow.com/questions/12018245/regular-expression-to-validate-username
        //nom utlisateur : expReg le nom peut contenir lettres et nombres de la A-Z en mayuscule ou minuscule, minmun 4 et maximum 18, puet pas commencer avec un point et peut contenir "." et "_"
        else if(!$utilisateur.val().match(/^[a-zA-Z0-9](_(?!(\.|_))|\.(?!(_|\.))|[a-zA-Z0-9]){0,18}[a-zA-Z0-9]$/)){
            $("#msjUtilisateur2" ).css("display", "block");
            $( "#msjUtilisateur1" ).css("display", "none");
            valide=false;
        }else{
            $("#msjUtilisateur1" ).css("display", "none");
            $("#msjUtilisateur2" ).css("display", "none");
        }
        

        if($motDePasse1.val().length < 1 ){
        $( "#msjMotDePasse1" ).css("display", "block");
        valide=false;
        }else{
            $( "#msjMotDePasse1" ).css("display", "none");
        }

        if($motDePasse2.val() != $motDePasse1.val()){
        $( "#msjMotDePasse2" ).css("display", "block");
        valide=false;
        }else{
            $( "#msjMotDePasse2" ).css("display", "none");
        }

        
        
//        http://www.godsavethegeek.com/autre/regex-caracteres-accentues-prenom-nom
        //nom: peut contenir lettrres de la A-Z mayuscules ou minuscules avec accents minimun 4 et maximum 29
        if(!$prenom.val().match(/^[a-zA-ZÀ-ÿ\s\'-]{4,29}$/)){
        $( "#msjPrenom" ).css("display", "block");
        valide=false;
        }else{
            $( "#msjPrenom" ).css("display", "none");
        }

        
        
        if(!$nom.val().match(/^[a-zA-ZÀ-ÿ\s\'-]{4,29}$/)){
        $( "#msjNom" ).css("display", "block");
        valide=false;
        }else{
            $( "#msjNom" ).css("display", "none");
        }

        
//      http://web.ontuts.com/tutoriales/como-validar-un-formulario-con-php-y-javascript-jquery/        
        if(!$email.val().match(/^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i)){
        $( "#msjEmail" ).css("display", "block");
        valide=false;
        }else{
            $( "#msjEmail" ).css("display", "none");
        }

        
        
//      http://www.regexplanet.com/advanced/javascript/index.html
        if(!$telephone.val().match(/D*([2-9]\d{2})(\D*)([2-9]\d{2})(\D*)(\d{4})/)){
        $( "#msjTelephone" ).css("display", "block");
        valide=false;
        }else{
            $( "#msjTelephone" ).css("display", "none");
        }

        if($bio.val().length < 4){
            $( "#msjBio" ).css("display", "block");
            valide=false;
        }else{
            $( "#msjBio" ).css("display", "none");
        }
        
    }
    else
    {
        valide=true;
        valide_valide=false;
    }
    
    
    
    
    if(valide==true && valide_valide==false){    
      
      document.formInscription.submit();
      
    }


}


/**
 * Vérifie le formulaire ajout d'une oeuvre  
 * @access public
 * @author Jorge Blanco
 */
function validerFormAjoutOeuvre(){
    
    
    var valide=true;
    var valide_valide=false;
    
    
    $titre= $("#titre");
    $titreVariante= $("#titreVariante");
    $technique = $('#technique');
    $techniqueAng = $('#techniqueAng');
    $description = $('#description');
    $adresse = $('#adresse');
    $batiment = $('#batiment');
    $parc = $('#parc');
    $latitude = $('#latitude');
    $longitude = $('#longitude');
    $arrondissement = $('#arrondissements');
    $artiste_Collectif = $('#artiste_Collectif');
    $categorie = $('#categories');
    $sous_categorie = $('#sous_categorie');
    $materiaux = $('#materiaux');
    $materiauxAng = $('#materiauxAng');
    
    
    
    if(valide_valide == false)
    {

       if(!$titre.val().match(/^[a-zA-ZÀ-ÿ\s\'\:\;\.\,\/\(\)\"-]{4,128}$/)){ 
            $("#msjTitre").css("display", "block");
        valide=false;
        }else
        {
            $("#msjTitre").css("display", "none");
        }
        
        
        if(!$titreVariante.val().match(/^[a-zA-ZÀ-ÿ\s\'\:\;\.\,\/\(\)\"-]{4,128}$/)){
            $("#msjTitreVariante").css("display", "block");
        valide=false;
        }else
        {
            $("#msjTitreVariante").css("display", "none");
        }
        
        if(!$technique.val().match(/^[a-zA-ZÀ-ÿ\s\'\:\;\.\,\/\(\)\"-]{4,128}$/)){
        $("#msjTechnique").css("display", "block");
        valide=false;
        }else
        {
            $("#msjTechnique").css("display", "none");
        }
        
        if(!$techniqueAng.val().match(/^[a-zA-ZÀ-ÿ\s\'\:\;\.\,\/\(\)\"-]{4,128}$/)){
        $("#msjTechniqueAng").css("display", "block");
        valide=false;
        }else
        {
            $("#msjTechniqueAng").css("display", "none");
        }
        
        if(!$description.val().match(/^[a-zA-ZÀ-ÿ\s\'\:\;\.\,\/\(\)\"-]{4,500}$/)){
        $("#msjDescription").css("display", "block");
        valide=false;
        }else
        {
            $("#msjDescription").css("display", "none");
        }
        
        //http://www.developpez.net/forums/d984074/java/general-java/debuter/regex-adresse-postale/
        // il faut commencer par le nombre et appres le nom de la rue
        if(!$adresse.val().match(/[0-9]{1,3}(([,. ]?){1}[-a-zA-Zàâäéèêëïîôöùûüç']+)*/)){
        $("#msjAdresse").css("display", "block");
        valide=false;
        }else
        {
            $("#msjAdresse").css("display", "none");
        }
        
        
        if(!$batiment.val().match(/^[a-zA-ZÀ-ÿ\s\'\:\;\.\,\/\(\)\"-]{4,128}$/)){
        $("#msjBatiment").css("display", "block");
        valide=false;
        }else
        {
            $("#msjBatiment").css("display", "none");
        }
        
        if(!$parc.val().match(/^[a-zA-ZÀ-ÿ\s\'\:\;\.\,\/\(\)\"-]{4,128}$/)){
        $("#msjParc").css("display", "block");
        valide=false;
        }else
        {
            $("#msjParc").css("display", "none");
        }
        
        
        //http://stackoverflow.com/questions/22903756/using-regular-expression-to-validate-latitude-and-longitude-coordinates-then-dis
         if(!$latitude.val().match(/^-?([1-8]?[1-9]|[1-9]0)\.{1}\d{1,6}/)){
        $("#msjLatitude").css("display", "block");
        valide=false;
        }else
        {
            $("#msjLatitude").css("display", "none");
        }
        
        
        if(!$longitude.val().match(/^-?([1-8]?[1-9]|[1-9]0)\.{1}\d{1,6}/)){
        $("#msjLongitude").css("display", "block");
        valide=false;
        }else
        {
            $("#msjLongitude").css("display", "none");
        }
        
       
        if($arrondissement.val() == 'nonChoisi'){
        $("#msjArrondissement").css("display", "block");
        valide=false;
        }else
        {
            $("#msjArrondissement").css("display", "none");
        }
        
        if($artiste_Collectif.val() == 'nonChoisi'){
        $("#msjArtiste_Collectif").css("display", "block");
        valide=false;
        }else
        {
            $("#msjArtiste_Collectif").css("display", "none");
        }
        
        if($categorie.val() == 'nonChoisi'){
        $("#msjCategorie").css("display", "block");
        valide=false;
        }else
        {
            $("#msjCategorie").css("display", "none");
        }
        
        if($sous_categorie.val() == 'nonChoisi'){
        $("#msjSous_categorie").css("display", "block");
        valide=false;
        }else
        {
            $("#msjSous_categorie").css("display", "none");
        }
        
        
        if(!$materiaux.val().match(/^[a-zA-ZÀ-ÿ\s\'\:\;\.\,\/\(\)\"-]{4,128}$/)){
        $("#msjMateriaux").css("display", "block");
        valide=false;
        }else
        {
            $("#msjMateriaux").css("display", "none");
        }
        
        
                
        if(!$materiauxAng.val().match(/^[a-zA-ZÀ-ÿ\s\'\:\;\.\,\/\(\)\"-]{4,128}$/)){
        $("#msjMateriauxAng").css("display", "block");
        valide=false;
        }else
        {
            $("#msjMateriauxAng").css("display", "none");
        }

    }
        else
    {
        valide=true;
        valide_valide=false;
    }
    
    
    if(valide==true && valide_valide==false){    
      
      document.formAjoutOeuvre.submit();
      
    }
    
    
    
}


/**
 * Vérifie le formulaire de modification d'une oeuvre  
 * @access public
 * @author Jorge Blanco
 */
function validerFormModifierOeuvre()
{
   
    var valide=true;
    var valide_valide=false;
    
    
    $titre= $("#titre");
    $titreVariante= $("#titreVariante");
    $technique = $('#technique');
    $techniqueAng = $('#techniqueAng');
    $description = $('#description');
    $adresse = $('#adresse');
    $batiment = $('#batiment');
    $parc = $('#parc');
    $latitude = $('#latitude');
    $longitude = $('#longitude');
    $arrondissement = $('#arrondissements');
    $artiste_Collectif = $('#artiste_Collectif');
    $categorie = $('#categories');
    $sous_categorie = $('#sous_categorie');
    $materiaux = $('#materiaux');
    $materiauxAng = $('#materiauxAng');
    
    
    
    if(valide_valide == false)
    {

       if(!$titre.val().match(/^^[a-zA-ZÀ-ÿ\s\'\:\;\.\,\/\(\)\"-]{4,128}$/)){ 
            $("#msjTitre").css("display", "block");
        valide=false;
        }else
        {
            $("#msjTitre").css("display", "none");
        }
        
        
        if(!$titreVariante.val().match(/^[a-zA-ZÀ-ÿ\s\'\:\;\.\,\/\(\)\"-]{2,128}$/)){
            $("#msjTitreVariante").css("display", "block");
        valide=false;
        }else
        {
            $("#msjTitreVariante").css("display", "none");
        }
        
        if(!$technique.val().match(/^[a-zA-ZÀ-ÿ\s\'\:\;\.\,\/\(\)\"-]{4,128}$/)){
        $("#msjTechnique").css("display", "block");
        valide=false;
        }else
        {
            $("#msjTechnique").css("display", "none");
        }
        
        if(!$techniqueAng.val().match(/^[a-zA-ZÀ-ÿ\s\'\:\;\.\,\/\(\)\"-]{4,128}$/)){
        $("#msjTechniqueAng").css("display", "block");
        valide=false;
        }else
        {
            $("#msjTechniqueAng").css("display", "none");
        }
        
        if(!$description.val().match(/^[^[a-zA-ZÀ-ÿ\s\'\:\;\.\,\/\(\)\"-]{4,500}$/)){
        $("#msjDescription").css("display", "block");
        valide=false;
        }else
        {
            $("#msjDescription").css("display", "none");
        }
        
        //http://www.developpez.net/forums/d984074/java/general-java/debuter/regex-adresse-postale/
        // il faut commencer par le nombre et appres le nom de la rue
        if(!$adresse.val().match(/[0-9]{1,3}(([,. ]?){1}[-a-zA-Zàâäéèêëïîôöùûüç']+)*/)){
        $("#msjAdresse").css("display", "block");
        valide=false;
        }else
        {
            $("#msjAdresse").css("display", "none");
        }
        
        
        if(!$batiment.val().match(/^^[a-zA-ZÀ-ÿ\s\'\:\;\.\,\/\(\)\"-]{4,128}$/)){
        $("#msjBatiment").css("display", "block");
        valide=false;
        }else
        {
            $("#msjBatiment").css("display", "none");
        }
        
        if(!$parc.val().match(/^[a-zA-ZÀ-ÿ\s\'\:\;\.\,\/\(\)\"-]{4,128}$/)){
        $("#msjParc").css("display", "block");
        valide=false;
        }else
        {
            $("#msjParc").css("display", "none");
        }
        
        
        //http://stackoverflow.com/questions/22903756/using-regular-expression-to-validate-latitude-and-longitude-coordinates-then-dis
         if(!$latitude.val().match(/^-?([1-8]?[1-9]|[1-9]0)\.{1}\d{1,6}/)){
        $("#msjLatitude").css("display", "block");
        valide=false;
        }else
        {
            $("#msjLatitude").css("display", "none");
        }
        
        
        if(!$longitude.val().match(/^-?([1-8]?[1-9]|[1-9]0)\.{1}\d{1,6}/)){
        $("#msjLongitude").css("display", "block");
        valide=false;
        }else
        {
            $("#msjLongitude").css("display", "none");
        }
        
       
        if($arrondissement.val() == 'nonChoisi'){
        $("#msjArrondissement").css("display", "block");
        valide=false;
        }else
        {
            $("#msjArrondissement").css("display", "none");
        }
        
        if($artiste_Collectif.val() == 'nonChoisi'){
        $("#msjArtiste_Collectif").css("display", "block");
        valide=false;
        }else
        {
            $("#msjArtiste_Collectif").css("display", "none");
        }
        
        if($categorie.val() == 'nonChoisi'){
        $("#msjCategorie").css("display", "block");
        valide=false;
        }else
        {
            $("#msjCategorie").css("display", "none");
        }
        
        if($sous_categorie.val() == 'nonChoisi'){
        $("#msjSous_categorie").css("display", "block");
        valide=false;
        }else
        {
            $("#msjSous_categorie").css("display", "none");
        }
        
        
        if(!$materiaux.val().match(/^[a-zA-ZÀ-ÿ\s\'\:\;\.\,\/\(\)\"-]{4,128}$/)){
        $("#msjMateriaux").css("display", "block");
        valide=false;
        }else
        {
            $("#msjMateriaux").css("display", "none");
        }
        
        
                
        if(!$materiauxAng.val().match(/^[a-zA-ZÀ-ÿ\s\'\:\;\.\,\/\(\)\"-]{4,128}$/)){
        $("#msjMateriauxAng").css("display", "block");
        valide=false;
        }else
        {
            $("#msjMateriauxAng").css("display", "none");
        }

    }
        else
    {
        valide=true;
        valide_valide=false;
    }
    
    
    if(valide==true && valide_valide==false){    
      
    
      document.formModifierOeuvre.submit();
      
    }
}

/**
 * Vérifie le formulaire ajouter un artiste  
 * @access public
 * @author Jorge Blanco
 */
function validerFormAjoutArtiste()
{
    
    var valide=true;
    var valide_valide=false;
    
    $prenom = $('#prenom');
    $nom = $('#nom');
    $collectif = $('#collectif')
    
    if(valide_valide == false)
    {
        if(!$prenom.val().match(/^^[a-zA-ZÀ-ÿ\s\'-]{4,128}$/)){
        $("#msjPrenom").css("display", "block");
        valide=false;
        }else
        {
            $("#msjPrenom").css("display", "none");
        }
        
        if(!$nom.val().match(/^^[a-zA-ZÀ-ÿ\s\'-]{4,128}$/)){
        $("#msjNom").css("display", "block");
        valide=false;
        }else
        {
            $("#msjNom").css("display", "none");
        }
        
        if(!$collectif.val().match(/^^[a-zA-ZÀ-ÿ\s\'-]{4,128}$/)){
        $("#msjCollectif").css("display", "block");
        valide=false;
        }else
        {
            $("#msjCollectif").css("display", "none");
        }
    }
     else
    {
        valide=true;
        valide_valide=false;
    }
    
    
    if(valide==true && valide_valide==false){    
      
    
      document.formAjoutArtiste.submit();
      
    }

        
}



/**
 * Vérifie le formulaire modifier un artiste  
 * @access public
 * @author Jorge Blanco
 */
function validerFormAmodifierArtiste()
{
    var valide=true;
    var valide_valide=false;
    
    $prenom = $('#prenom');
    $nom = $('#nom');
    $collectif = $('#collectif')
    
    if(valide_valide == false)
    {
        if(!$prenom.val().match(/^^[a-zA-ZÀ-ÿ\s\'-]{4,128}$/)){
        $("#msjPrenom").css("display", "block");
        valide=false;
        }else
        {
            $("#msjPrenom").css("display", "none");
        }
        
        if(!$nom.val().match(/^^[a-zA-ZÀ-ÿ\s\'-]{4,128}$/)){
        $("#msjNom").css("display", "block");
        valide=false;
        }else
        {
            $("#msjNom").css("display", "none");
        }
        
        if(!$collectif.val().match(/^^[a-zA-ZÀ-ÿ\s\'-]{4,128}$/)){
        $("#msjCollectif").css("display", "block");
        valide=false;
        }else
        {
            $("#msjCollectif").css("display", "none");
        }
    }
     else
    {
        valide=true;
        valide_valide=false;
    }
    
    
    if(valide==true && valide_valide==false){    
      
    
      document.formModifierArtiste.submit();
      
    }
}



/**
 * Vérifie le formulaire ajouter une categorie 
 * @access public
 * @author Jorge Blanco
 */
function validerFormAjouterCategorie()
{
    var valide=true;
    var valide_valide=false;
    
    $nomCategorie = $('#nomCategorie');
    $nomCatAng = $('#nomCatAng');
    
    if(valide_valide == false)
    {
        if(!$nomCategorie.val().match(/^^[a-zA-ZÀ-ÿ\s\'-]{4,128}$/)){
        $("#msjNomCategorie").css("display", "block");
        valide=false;
        }else
        {
            $("#msjNomCategorie").css("display", "none");
        }
        
        if(!$nomCatAng.val().match(/^^[a-zA-ZÀ-ÿ\s\'-]{4,128}$/)){
        $("#msjNomCatAng").css("display", "block");
        valide=false;
        }else
        {
            $("#msjNomCatAng").css("display", "none");
        }
        
        
    }
     else
    {
        valide=true;
        valide_valide=false;
    }
    
    
    if(valide==true && valide_valide==false){    
        
      document.formAjoutCategorie.submit();
      
    }
}


/**
 * Vérifie le formulaire modifier une categorie 
 * @access public
 * @author Jorge Blanco
 */
function validerFormModifierCategorie()
{
   
    var valide=true;
    var valide_valide=false;
    
    $nomCategorie = $('#nomCategorie');
    $nomCatAng = $('#nomCatAng');
    
    if(valide_valide == false)
    {
        if(!$nomCategorie.val().match(/^^[a-zA-ZÀ-ÿ\s\'-]{4,128}$/)){
        $("#msjNomCategorie").css("display", "block");
        valide=false;
        }else
        {
            $("#msjNomCategorie").css("display", "none");
        }
        
        if(!$nomCatAng.val().match(/^^[a-zA-ZÀ-ÿ\s\'-]{4,128}$/)){
        $("#msjNomCatAng").css("display", "block");
        valide=false;
        }else
        {
            $("#msjNomCatAng").css("display", "none");
        }
        
        
    }
     else
    {
        valide=true;
        valide_valide=false;
    }
    
    
    if(valide==true && valide_valide==false){    
        
      document.formModifierCategorie.submit();
      
    }
}


/**
 * Vérifie le formulaire ajouter une categorie 
 * @access public
 * @author Jorge Blanco
 */
function validerAjoutUtilisateur()
{
    var valide=true;
    var valide_valide=false;
    
    $prenom = $("#prenom");
    $nom = $("#nom");
    
    $utilisateur= $("#loginUtilisateur");
    $motDePasse1 = $("#passUtilisateur");
    $email = $("#courriel");
    $telephone = $("#telephone");
    $bio= $("#bio");    
    
    

   
    if(valide_valide==false)
    {  
        
        
//        http://www.godsavethegeek.com/autre/regex-caracteres-accentues-prenom-nom
        //nom: peut contenir lettrres de la A-Z mayuscules ou minuscules avec accents minimun 4 et maximum 29
        if(!$prenom.val().match(/^[a-zA-ZÀ-ÿ\s\'-]{4,29}$/)){
        $( "#msjPrenom" ).css("display", "block");
        valide=false;
        }else{
            $( "#msjPrenom" ).css("display", "none");
        }

        if(!$nom.val().match(/^[a-zA-ZÀ-ÿ\s\'-]{4,29}$/)){
        $( "#msjNom" ).css("display", "block");
        valide=false;
        }else{
            $( "#msjNom" ).css("display", "none");
        }        
        
                
        //doit avoir au moins 4 caracteres 
        if($utilisateur.val().length < 3){
        $( "#msjUtilisateur1" ).css("display", "block");
        valide=false;
        }
//        http://stackoverflow.com/questions/12018245/regular-expression-to-validate-username
        //nom utlisateur : expReg le nom peut contenir lettres et nombres de la A-Z en mayuscule ou minuscule, minmun 4 et maximum 18, puet pas commencer avec un point et peut contenir "." et "_"
        else if(!$utilisateur.val().match(/^[a-zA-Z0-9](_(?!(\.|_))|\.(?!(_|\.))|[a-zA-Z0-9]){0,18}[a-zA-Z0-9]$/)){
            $("#msjUtilisateur2" ).css("display", "block");
            $( "#msjUtilisateur1" ).css("display", "none");
            valide=false;
        }else{
            $("#msjUtilisateur1" ).css("display", "none");
            $("#msjUtilisateur2" ).css("display", "none");
        }
        

        if($motDePasse1.val().length < 1 ){
        $( "#msjMotDePasse1" ).css("display", "block");
        valide=false;
        }else{
            $( "#msjMotDePasse1" ).css("display", "none");
        }

        
//      http://web.ontuts.com/tutoriales/como-validar-un-formulario-con-php-y-javascript-jquery/        
        if(!$email.val().match(/^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i)){
        $( "#msjEmail" ).css("display", "block");
        valide=false;
        }else{
            $( "#msjEmail" ).css("display", "none");
        }

        
        
//      http://www.regexplanet.com/advanced/javascript/index.html
        if(!$telephone.val().match(/D*([2-9]\d{2})(\D*)([2-9]\d{2})(\D*)(\d{4})/)){
        $( "#msjTelephone" ).css("display", "block");
        valide=false;
        }else{
            $( "#msjTelephone" ).css("display", "none");
        }

        if($bio.val().length < 4){
            $( "#msjBio" ).css("display", "block");
            valide=false;
        }else{
            $( "#msjBio" ).css("display", "none");
        }
        
    }
    else
    {
        valide=true;
        valide_valide=false;
    }
    
    
    
    
    if(valide==true && valide_valide==false){    
      
      document.formAjoutUtilisateur.submit();
      
    }

    
}



function validerModifierUtilisateur()
{
    var valide=true;
    var valide_valide=false;
    
    $prenom = $("#prenom");
    $nom = $("#nom");
    $utilisateur= $("#loginUtilisateur");
    $motDePasse1 = $("#passUtilisateur");
    $email = $("#courriel");
    $telephone = $("#telephone");
    $bio= $("#bio");    
    
    

   
    if(valide_valide==false)
    {  
        
        
//        http://www.godsavethegeek.com/autre/regex-caracteres-accentues-prenom-nom
        //nom: peut contenir lettrres de la A-Z mayuscules ou minuscules avec accents minimun 4 et maximum 29
        if(!$prenom.val().match(/^[a-zA-ZÀ-ÿ\s\'-]{4,29}$/)){
        $( "#msjPrenom" ).css("display", "block");
        valide=false;
        }else{
            $( "#msjPrenom" ).css("display", "none");
        }

        if(!$nom.val().match(/^[a-zA-ZÀ-ÿ\s\'-]{4,29}$/)){
        $( "#msjNom" ).css("display", "block");
        valide=false;
        }else{
            $( "#msjNom" ).css("display", "none");
        }        
        
                
        //doit avoir au moins 4 caracteres 
        if($utilisateur.val().length < 3){
        $( "#msjUtilisateur1" ).css("display", "block");
        valide=false;
        }
//        http://stackoverflow.com/questions/12018245/regular-expression-to-validate-username
        //nom utlisateur : expReg le nom peut contenir lettres et nombres de la A-Z en mayuscule ou minuscule, minmun 4 et maximum 18, puet pas commencer avec un point et peut contenir "." et "_"
        else if(!$utilisateur.val().match(/^[a-zA-Z0-9](_(?!(\.|_))|\.(?!(_|\.))|[a-zA-Z0-9]){0,18}[a-zA-Z0-9]$/)){
            $("#msjUtilisateur2" ).css("display", "block");
            $( "#msjUtilisateur1" ).css("display", "none");
            valide=false;
        }else{
            $("#msjUtilisateur1" ).css("display", "none");
            $("#msjUtilisateur2" ).css("display", "none");
        }
        

        if($motDePasse1.val().length < 1 ){
        $( "#msjMotDePasse1" ).css("display", "block");
        valide=false;
        }else{
            $( "#msjMotDePasse1" ).css("display", "none");
        }

        
//      http://web.ontuts.com/tutoriales/como-validar-un-formulario-con-php-y-javascript-jquery/        
        if(!$email.val().match(/^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i)){
        $( "#msjEmail" ).css("display", "block");
        valide=false;
        }else{
            $( "#msjEmail" ).css("display", "none");
        }

        
        
//      http://www.regexplanet.com/advanced/javascript/index.html
        if(!$telephone.val().match(/D*([2-9]\d{2})(\D*)([2-9]\d{2})(\D*)(\d{4})/)){
        $( "#msjTelephone" ).css("display", "block");
        valide=false;
        }else{
            $( "#msjTelephone" ).css("display", "none");
        }

        if($bio.val().length < 4){
            $( "#msjBio" ).css("display", "block");
            valide=false;
        }else{
            $( "#msjBio" ).css("display", "none");
        }
        
    }
    else
    {
        valide=true;
        valide_valide=false;
    }
    
    
    
    
    if(valide==true && valide_valide==false){    
      
      document.formModifierUtilisateur.submit();
      
    }
}



/**
 * Encrypte le formulaire de connexion
 * @access public
 * @author Gautier Piatek
 */
function encrypte()
{
    //encrypte et envoi le formulaire caché
    var passwordEncrypte = md5(document.loginForm.motDePasse.value);
    var grainSel = document.formEncrypte.grainSel.value;

    //formule: md5(grainSel . md5(password))
    var passwordEncryptePlusGrainSel = md5(grainSel + passwordEncrypte);
    document.formEncrypte.utilisateur.value = document.loginForm.utilisateur.value;
    document.formEncrypte.motDePasse.value = passwordEncryptePlusGrainSel;
    document.formEncrypte.submit();
}

/**
 * Recupere la position de l'utilisateur
 * @access public
 * @author Gautier Piatek
 */
//source : http://www.alsacreations.com/tuto/lire/926-geolocalisation-geolocation-html5.html
function recupererGeolocalisation()
{
    if(navigator.geolocation) {

	// Fonction de callback en cas de succès
	function affichePosition(position) {
	
		lat = position.coords.latitude;
		long = position.coords.longitude;
		document.getElementById("latitude").value = lat;
		document.getElementById("longitude").value = long;
        document.getElementById("msjLocalisation").innerHTML = "Position enregistrée";
	}

	// Fonction de callback en cas d’erreur
	function erreurPosition(error) {
		var info = "Erreur lors de la géolocalisation : ";
		switch(error.code) {
		case error.TIMEOUT:
			info += "Timeout !";
		break;
		case error.PERMISSION_DENIED:
			info += "Vous n’avez pas donné la permission";
		break;
		case error.POSITION_UNAVAILABLE:
			info += "La position n’a pu être déterminée";
		break;
		case error.UNKNOWN_ERROR:
			info += "Erreur inconnue";
		break;
		}
		document.getElementById("msjLocalisation").innerHTML = info;
	}

	navigator.geolocation.getCurrentPosition(affichePosition,erreurPosition);

} else {

	document.getElementById("msjLocalisation").innerHTML = "Ce navigateur ne supporte pas la géolocalisation";

}

    
}