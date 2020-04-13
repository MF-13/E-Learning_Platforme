<?php
session_start();
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
    <title>Bibliotheque</title>
</head>
<body>
   <!--Begin of NavBar-->

 <?php
include("traitement/navbar.php");
include("traitement/function.php");

if (isset($_SESSION['code_massar'])) {
  $typeresult = TypeUser($_SESSION['type']);
}

 ?>
 
  <!--END Nav bar-->
    <!-- Path Section -->
    <section class="sectionpath" style="padding-top: 5.5%;">
        <p><b><i class="fas fa-home"></i>&nbspAcceuil / Bibliotheque</b></p>
    </section>
    <!-- Path Section -->
    <!-- Posts Section -->
   
<!--Selection des fichiers a afficher-->
 <section class="Posts">
   <?php
   if (isset($_SESSION['code_massar'])) {
     # code...
   
       if($typeresult==-1){
        $query1 = "SELECT filiere FROM etudiant where code_massar=? ;";
        }elseif($typeresult==0){
          $query1 = "SELECT filiere FROM professeur where code_massar_prof=? ;";
        }elseif($typeresult==1){
          header("location: ../dash/index.php");
        }

        $values = array($_SESSION['code_massar']);
        $result = PDO($query1,$values);

        if($result->rowCount()!=0){
              while ($row = $result->fetch()) {
                 $filiere = $row['filiere'];
              }
            }
      }

    echo "<p class=\"Text\">Bibliotheque</p>";

    
    ?>
    
<?php
echo "<div id=\"td\" class=\"tabcontent\">";
  $devdir = "file/bibliotheque";
      $dir = opendir($devdir);
      echo "<hr>";
   
    
      
                  
        while ($file = readdir($dir)){
        //traitement pour ne pas afficher le dossier pere et le dossier de racine
            
          if ($file != "." && $file != ".."){ 
          /**********************************************/
          /*si cest les dossier .. ou . on affiche rien */
          /**********************************************/  
            


           $query6 = "SELECT code_prof,commantaire,nbr_telechargement,date_ajoute,nom_pdf,titre from file where  nom_pdf=?;";
            $values6 = array($file);
            $res6 = PDO($query6,$values6);

            if($res6->rowCount()!=0){
                  while ($row = $res6->fetch()) {
                     $comm = $row['commantaire'];
                     $nbr_telechargement= $row['nbr_telechargement'];
                     $date_ajoute = $row['date_ajoute'];
                     $nom = $row['titre'];
                     $code_prof = $row['code_prof'];
                  }
              }
              
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
                             echo "<h4 class=\"mt-0\">".$nom."</h4>";
                             echo "<p class=\"pmedia\">
                              <ul class=\"pmedia mylist\">
                              <li><b>Publier le :</b> ".$date_ajoute."</li>
                              <li><b>Nbr de telechargement :</b>".$nbr_telechargement."</li>
                              <li><b>Commentaire : </b>".$comm."</li>
                              <br>
                              <A Href=\"cours-detail.php?file=".$file ."&dir=".$devdir."\">Consulter</A>
                              </ul></p>";
                              /*Telecharger le fichier*/
                              echo '<form class="formbutton">
                                    <button type="button" class="btn btn-outline-primary btnmarging" onclick="window.location.href = \'traitement/downloadfile.php?file='.$file.'&dir='.$devdir.'\'"> Telecharger</button>
                                    ';
                              
           /*Cette partie sert a donner les buttons concerne a chaque utilisateur*/
        if (isset($_SESSION['code_massar'])) {
          
          if($typeresult==0){
            if($code_prof==$_SESSION['code_massar']){
            echo '
                  <button type="button" class="btn btn-outline-danger btnmarging" 
                  onclick="window.location.href = \'traitement/dropfile.php?file='.$file.'&dir='.$devdir.'\'">Supprimer</button>';
             }
          }
        }else{
          echo '<button type="button" class="btn btn-outline-danger btnmarging" onclick="window.location.href = \'Sing-up.php\'">
                  s\'inscrire</button>';
        }
            echo ' </form>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>' ;  
               
        }
      }  


                   
      echo "<hr></div>";
      closedir($dir);
?>     

<!--Fotter,script and Contact form-->
</section>
  <?php
  include("traitement/footer.php");
  ?> 
  

       
</body>
</html>