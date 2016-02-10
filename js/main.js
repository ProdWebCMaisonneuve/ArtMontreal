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
 * Vérifie le formulaire ajout admin
 * @access public
 * @author Jorge Blanco
 */
function validerFormAjoutAdmin()
{
    var form = document.getElementById("FormAjoutAdmin");
    var valide=true;
    for (i=0;i<form.elements.length;i++)
    {
        if(form.elements[i].value == "")
        {
            valide=false;
            document.getElementById('erreurPrenom').innerHTML = 'remplir ce champ';     
        }
    }
    
    if(valide==true)
    {
        document.FormAjoutAdmin.submit();
    }   
}


function validerFormAInscription()
{
    
    var valide=true;
    
    var bio=$("#bio").val().length;

    if( bio < 1){
      $( "#msjBio" ).css("display", "block");
      valide=false;
    }else{
      $( "#msjBio" ).css("display", "none");
    }
    
    
    if(bio > 1){    
      
      valide=true;
    }

    if(valide==true){

      document.formInscription.submit();
    }
}




//    
//    $(document).ready(function() {
//    $("#ok").hide();
//
//    $("#formInscription").validate({
//        rules: {
//            bio: { required: true, minlength: 2},
//            utilisateur: { required: true, minlength: 2},
//            motDePasse : { required: true, minlength: 2},
//
//        },
//        messages: {
//            bio: "Debe introducir su nombre.",
//            utilisateur: "Debe introducir su apellido.",
//            motDePasse : "Debe introducir un email válido.",
//
//        submitHandler: function(form){
//            var dataString = 'bio='+$('#bio').val()+'&utilisateur='+$('#utilisateur').val()+'...';
//            $.ajax({
//                type: "POST",
//                url:"send.php",
//                data: dataString,
//                success: function(data){
//                    $("#ok").html(data);
//                    $("#ok").show();
//                    $("#formid").hide();
//                }
//            });
//        }
//    });
//});
//    


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