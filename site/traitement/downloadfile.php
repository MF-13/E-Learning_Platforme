<?php
include("function.php");
/*Construire le path du fichier */
$dir = $_GET['dir'];
$file = "../".$dir."/".$_GET['file'];

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    echo $file;
/*
    $query1 = "UPDATE file set nbr_telechargement=nbr_telechargement+1 where nom_pdf=?;";
    $values1 = array($_GET['file']);
    
    PDO($query1,$values1);*/
    exit;
}

?>

