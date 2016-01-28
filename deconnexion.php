<?php

    /* déconnexion de la session
     * @author Gautier Piatek
     */
    session_start();
    session_destroy();
    header('Location: index.php');
?>