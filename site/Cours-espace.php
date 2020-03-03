<?php
session_start();
include("traitement/connectedb.php");
  ?>
  <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="static/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/Cours-espace.css">
    <link rel="stylesheet" href="static/css/Index.css">
    <title>Cours Espace</title>
</head>
<body>
   <!--Begin of NavBar-->
 <?php
 include("traitement/navbar.php");
 ?>
  <!--END Nav bar-->
    <!-- Path Section -->
    <section class="sectionpath">
        <p><b><i class="fas fa-home"></i>&nbspAcceuil / Cours Espace / Nom Filiére</b></p>
    </section>
    <!-- Path Section -->
    <!-- Posts Section -->
       
    <?php 
    /*cette partie de code sert a capte les non-user pour ne pas acceder a la page des cours*/
    if (!(isset($_SESSION['code_massar']))){
      echo "
      <script>
     if(window.confirm(\"Connectez-vous pour acceder a cette page !  \")){
        window.location.href = 'index.php';
      }else{
        window.location.href = 'index.php';
      }
      </script>";
    }
    ?>
                              
                                <!--Selection des fichiers a afficher-->
 <section class="Posts">
                                <?php
                                if($_SESSION['type']=='etudiant'){
                                        $query = "SELECT filiere FROM etudiant where code_massar=".$_SESSION['code_massar'].";";
                                }else{
                                    $query = "SELECT filiere FROM professeur where code_massar_prof=".$_SESSION['code_massar'].";";
                                }
                                    $result = mysqli_query($conn,$query);
                                             while($row = mysqli_fetch_assoc($result)) {
                                          $filiere = $row['filiere'];
                                      }
                                      echo "<p class=\"Text\">Cours pour filiere : ".$filiere."</p>";
                                      echo "<a href=\"addcours.php\">Ajouter un cours</a>";
                                   
                                    $devdir = "file/".$filiere;
                                    $dir = opendir($devdir);
                                    echo "<hr>";

                                    while ($file = readdir($dir)){
                                        //traitement pour ne pas afficher le dossier pere et le dossier de racine
                                      if ($file != "." && $file != ".."){ 
                                        /**********************************************/
                                        /*si cest les dossier .. ou . on affiche rien */
                                        /**********************************************/
                                          
                                      echo '
                                    <div class="container">
                                        <div class="row">
                                          <div class="col-lg-12">
                                            <div class="card text-center cardpadding">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <img src="static/img/Cours espace/pdf.png" class="align-self-start mr-3 pdfsize" alt="pdf png image">
                                                        <div class="media-body">      
                                      ';
                                      /*l'affichage ici*/
                                      /*Au lieu de consulter on va selectioner la description du fichier depuis la base de donnes*/
                                      echo "<h4 class=\"mt-0\">".$file."</h4>";
                                      echo "<p class=\"pmedia\">

                                            <ul class=\"pmedia mylist\"><A Href=\"cours-detail.php?file=".$file ."&dir=".$devdir."\">Consulter</A></ul></p>";
                                              /*Telecharger le fichier*/
                                     echo '<form class="formbutton">
                                          <button type="button" class="btn btn-outline-primary btnmarging" onclick="window.location.href = \'traitement/downloadfile.php?file='.$file.'&dir='.$devdir.'\'"> Telecharger</button>

                                                            ';
                            /*Cette partie sert a donner les buttons concerne a chaque utilisateur*/
                            
                            if($_SESSION['type']=="professeur"){
                                echo '<button type="button" class="btn btn-outline-warning btnmarging">Modifier</button>

                                <button type="button" class="btn btn-outline-danger btnmarging">Supprimer</button>';
                                  }
                                  else 
                                  {
                                    echo '<button type="button" class="btn btn-outline-warning btnmarging">
                                    Envoyer une reponse</button>';
                                  }
                                                            echo '
                                              </form>
                            </div>
                          </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>      
    
                                          ' ;
                                    
                                  }
                                }
                                    echo "<hr>";
                                    closedir($dir);
                                 ?>
                              
    <!--Fotter,script and Contact form-->
</section>
  <?php
  include("traitement/footer.php");
  ?> 
</body>
</html>