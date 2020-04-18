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
    <link rel="stylesheet" href="static/css/Index.css">
    <link rel="stylesheet" href="static/css/Cours-espace.css">
    <title>Cours Espace</title>
</head>
<body>
  <!--Begin of NavBar-->
<?php
  include("traitement/navbar.php");
  include("traitement/function.php");
  //
  capterConnexion($_SESSION['id_user']);
  $typeresult = TypeUser($_SESSION['type']);
?>
  <!--END Nav bar-->
   
    
    <!-- Type Donnes Section -->
    <div class="tab">
      <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-secondary tablinks" onclick="openCity(event, 'cour')" id="defaultOpen" style="padding-left: 50px; padding-right: 50px;">Cours</button>
        <button type="button" class="btn btn-secondary tablinks" onclick="openCity(event, 'tp')" style="padding-left: 50px; padding-right: 50px;" >TP</button>
        <button type="button" class="btn btn-secondary tablinks" onclick="openCity(event, 'td')" style="padding-left: 50px; padding-right: 50px;">TD</button>
        <button type="button" class="btn btn-secondary tablinks" onclick="openCity(event, 'td')" style="padding-left: 50px; padding-right: 50px;">Quiz</button>
      </div>
    </div>
<!---------------------------Quiz Post version etudiant---------------------->        
    <div class="container">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card text-center cardpadding">
                  <div class="card-body">
                    <div class="media">
                      <img src="static/img/Cours espace/undraw_files1_9ool.svg" class="align-self-start mr-3 pdfsize" alt="pdf png image">
                        <div class="media-body"> 
                          <h4 class="mt-0">Quiz : Nom de quiz</h4>";
                          <p class="pmedia">
                            <ul class="pmedia mylist">
                              <li><b>Réaliser par :</b> Nom de professeur</li>
                              <li><b>Publier le :</b> 18/04/2020</li>
                              <li><b>Dérniére date a rendre :</b> 18/04/2020</li>
                                  <br>
                                <A Href="#">Consulter</A>
                            </ul>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<!---------------------------Quiz Post version etudiant---------------------->  
<!---------------------------Quiz Post version professeur----------------------> 
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="card text-center cardpadding">
        <div class="card-body">
          <div class="media">
            <img src="static/img/Cours espace/undraw_files1_9ool.svg" class="align-self-start mr-3 pdfsize" alt="pdf png image">
              <div class="media-body"> 
                <button type="button" class="btn btn-danger float-right"><i class="far fa-trash-alt"></i></button>
                <h4 class="mt-0">Quiz : Nom de quiz</h4>
                
                <p class="pmedia">
                  <ul class="pmedia mylist">
                    <li><b>Publier le :</b> 18/04/2020</li>
                    <li><b>Dérniére date a rendre :</b> 18/04/2020</li>
                        <br>
                      <A Href="#">Consulter</A>
                  </ul>
                  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fas fa-sort-down fa-2x" style="padding-bottom: 10px;"></i> Etudiants Résultas
                  </button>
                  <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                      <table class="table">
                        <thead>
                          <tr style="background-color: #393e46; color: white;">
                            <th scope="col" style="text-align: center;">Nom d'etudiant</th>
                            <th scope="col" style="text-align: center;">Nombre des réponce correcte</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>EL KHABBAZ Mohamed</td>
                            <td>10</td>
                          </tr>
                          <tr>
                            <td>Auman Bouadi</td>
                            <td>12</td>
                          </tr>
                          <tr>
                            <td>Rabiee ZAmel</td>
                            <td>7</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
<!---------------------------Quiz Post version professeur---------------------->  
                        
    <!-- Type Donnes Section -->
    <!--Selection des fichiers a afficher-->
  <section class="Posts">
    <?php
if($typeresult==0 || $typeresult==-1){ 

          $query1 = "SELECT filiere_user FROM user where id_user=? ;";
          $values = array($_SESSION['id_user']);
          $result = PDO($query1,$values);
          if($result->rowCount()!=0){
                while ($row = $result->fetch()) {
                  $filiere = $row['filiere_user'];
                }}
         echo "<p class=\"Text\"> Fichiers pour filiere : ".strtoupper($filiere)."</p>";
    
$type = array('cour','tp','td');
$index=0;
foreach($type as $type_c){
      
      echo "<div id=\"".$type_c."\" class=\"tabcontent\">";
      $devdir = "file/".$filiere;
      $dir = opendir($devdir);
      echo "<hr>";   
      while ($file = readdir($dir)){
      //traitement pour ne pas afficher le dossier pere et le dossier de racine
      $query1 = "SELECT type_cour from file where type_cour=? and nom_pdf=?;";
      $values1 = array($type_c,$file);
      $res1 = PDO($query1,$values1);
      if($res1->rowCount()!=0){
        while ($row = $res1->fetch()) {
          $type_cour=$row['type_cour'];
        }
      }else{
          $type_cour="";
      }

      
      if ($file != "." && $file != ".." && $type_cour==$type_c){ 
        
        /**********************************************/
        /*si cest les dossier .. ou . on affiche rien */
        /**********************************************/  
        $query2 = "SELECT commantaire,id_cour,nbr_telechargement,date_ajoute,nom_pdf,titre from file where type_cour=? and nom_pdf=?;";
        $values2 = array($type_c,$file);
        $res2 = PDO($query2,$values2);
        if($res2->rowCount()!=0){
           while ($row = $res2->fetch()) {
            $comm = $row['commantaire'];
            $id_cour = $row['id_cour'];
            $nbr_telechargement= $row['nbr_telechargement'];
            $date_ajoute = $row['date_ajoute'];
            $nom = $row['titre'];
            }
        }

        $query7 = "SELECT nom from cours where  id_cour=?;";
        $values7 = array($id_cour);
        $res7 = PDO($query7,$values7);
        if($res7->rowCount()!=0){
           while ($row = $res7->fetch()) {
            $nom_cour = $row['nom'];
            }
        }

        echo '
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card text-center cardpadding">
                  <div class="card-body">
                    <div class="media">
                      <img src="static/img/Cours espace/undraw_files1_9ool.svg" class="align-self-start mr-3 pdfsize" alt="pdf png image">
                        <div class="media-body">      
                        ';
        /*l'affichage ici*/
        /*Au lieu de consulter on va selectioner la description du fichier depuis la base de donnes*/
        echo "<h4 class=\"mt-0\">".$nom."</h4>";
        echo "<p class=\"pmedia\">
                <ul class=\"pmedia mylist\">
                  <li><b>Nom Cour:</b> ".$nom_cour."</li>
                  <li><b>commantaire:</b> ".$comm."</li>
                  <li><b>Publier le :</b> ".$date_ajoute."</li>
                      <br>
                      <A Href=\"cours-detail.php?file=".$file ."&dir=".$devdir."\">Consulter</A>
                </ul></p>";
               /*Telecharger le fichier*/
        echo '<form class="formbutton">
        <button type="button" class="btn btn-outline-primary btnmarging" onclick="window.location.href = \'traitement/downloadfile.php?file='.$file.'&dir='.$devdir.'\'"> Telecharger</button>
        ';
        /*Cette partie sert a donner les buttons concerne a chaque utilisateur*/
        if($typeresult==0){
        echo '
        <button type="button" class="btn btn-outline-danger btnmarging" 
        onclick="window.location.href = \'traitement/dropfile.php?file='.$file.'&dir='.$devdir.'\'">Supprimer</button>';
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
}
}

  ?>   
  <?php
  /*********************************************************/
  /*                traitement pour admin                  */
  /*********************************************************/
    $query1 = "SELECT filiere_id FROM filiere ;";
          $values = array();
          $result = PDO($query1,$values);
          $filiere = array();
          if($result->rowCount()!=0){
                while ($row = $result->fetch()) {
                  array_push($filiere,$row['filiere_id']);
                }}

          
         
    
$type = array('cour','tp','td');


  
foreach($type as $type_c){

     echo "<div id=\"".$type_c."\" class=\"tabcontent\">";
    
    foreach ($filiere as $fil) { 

       echo "<p class=\"Text\"> Fichiers ".$type_c." pour filiere <strong>".$fil."</strong> :</p>";
        $devdir = "file/".$fil;
        $dir = opendir($devdir);
        echo "<hr>";   
        while ($file = readdir($dir)){
        //traitement pour ne pas afficher le dossier pere et le dossier de racine
            $query1 = "SELECT type_cour from file where type_cour = ? and nom_pdf=?;";
            $values1 = array($type_c,$file);
            $res1 = PDO($query1,$values1);

            if($res1->rowCount()!=0){
              while ($row = $res1->fetch()) {
                $type_cour=$row['type_cour'];
              }
            }else{
               $type_cour=" ";
            }

            if ($file != "." && $file != ".." && $type_cour==$type_c){ 
              /**********************************************/
              /*si cest les dossier .. ou . on affiche rien */
              /**********************************************/  
                  $query2 = "SELECT commantaire,id_cour,nbr_telechargement,date_ajoute,nom_pdf,titre from file where  nom_pdf=?;";
                  $values2 = array($file);
                  $res2 = PDO($query2,$values2);
                  if($res2->rowCount()!=0){
                     while ($row = $res2->fetch()) {
                      $comm = $row['commantaire'];
                      $id_cour = $row['id_cour'];
                      $nbr_telechargement= $row['nbr_telechargement'];
                      $date_ajoute = $row['date_ajoute'];
                      $nom = $row['titre'];
                      }
                  }

                  $query7 = "SELECT nom from cours where  id_cour=?;";
                  $values7 = array($id_cour);
                  $res7 = PDO($query7,$values7);
                  if($res7->rowCount()!=0){
                     while ($row = $res7->fetch()) {
                      $nom_cour = $row['nom'];
                      }
                  }

                  echo '
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <div class="card text-center cardpadding">
                            <div class="card-body">
                              <div class="media">
                                <img src="static/img/Cours espace/undraw_files1_9ool.svg" class="align-self-start mr-3 pdfsize" alt="pdf png image">
                                  <div class="media-body">      
                                  ';
                  /*l'affichage ici*/
                  /*Au lieu de consulter on va selectioner la description du fichier depuis la base de donnes*/
                  echo "<h4 class=\"mt-0\">".$nom."</h4>";
                  echo "<p class=\"pmedia\">
                          <ul class=\"pmedia mylist\">
                            <li><b>Nom Cour:</b> ".$nom_cour."</li>
                            <li><b>commantaire:</b> ".$comm."</li>
                            <li><b>Publier le :</b> ".$date_ajoute."</li>
                                <br>
                                <A Href=\"cours-detail.php?file=".$file ."&dir=".$devdir."\">Consulter</A>
                          </ul></p>";
                         /*Telecharger le fichier*/
                  echo '<form class="formbutton">
                  <button type="button" class="btn btn-outline-primary btnmarging" onclick="window.location.href = \'traitement/downloadfile.php?file='.$file.'&dir='.$devdir.'\'"> Telecharger</button>
                  ';
                  
                  echo '
                  <button type="button" class="btn btn-outline-danger btnmarging" 
                  onclick="window.location.href = \'traitement/dropfile.php?file='.$file.'&dir='.$devdir.'\'">Supprimer</button>';
                  
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
          echo "<hr>";
          closedir($dir);
  }
  echo "</div>";
}

  ?> 

  <!--Fotter,script and Contact form-->
  </section>
    <?php
    include("traitement/footer.php");
    ?> 
    <style type="text/css">
                  .tab {
                  overflow: hidden;
                  background-color: #222831;
                  }
                /* Style the buttons inside the tab */
                .tab button {
                  background-color: inherit;
                  float: left;
                  border: none;
                  outline: none;
                  cursor: pointer;
                  padding: 5px 16px;
                  transition: 0.3s;
                  font-size: 20px;
                  text-align: center;
                }

                /* Change background color of buttons on hover */
                .tab button:hover {
                  background-color: #57585a;
                }

                /* Create an active/current tablink class */
                .tab button.active {
                  background-color: #57585a;
                }
    </style>
    <script>
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
              acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                  panel.style.display = "none";
                } else {
                  panel.style.display = "block";
                }
              });
            }
    </script>
    <script>
              function openCity(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                  tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                  tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
              }
              // Get the element with id="defaultOpen" and click on it
              document.getElementById("defaultOpen").click();
    </script>
</body>
</html>