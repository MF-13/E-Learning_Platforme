<?php
//la deconexxion du compte pour fermer la connexion a la session :

session_start();
session_unset();
session_destroy();
header("location: ../index.php");
?>