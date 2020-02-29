<?php
$conn = mysqli_connect('localhost:3308','root','','elearning') or die();
  if (!$conn) {
     $message = "error de la connexion a la base de donnes ! ";
  }
  ?>