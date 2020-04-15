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
    <!-- Path Section -->
    <section class="sectionpath" style="padding-top: 5.5%;">
        <p><b><i class="fas fa-home"></i>&nbspAcceuil / Cours Espace</b></p>
    </section>
    <!-- Path Section -->
    <!-- Type Donnes Section -->
    <div class="tab">
      <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-secondary tablinks" onclick="openCity(event, 'cours')" id="defaultOpen" >Cours</button>
        <button type="button" class="btn btn-secondary tablinks" onclick="openCity(event, 'tp')" >TP</button>
        <button type="button" class="btn btn-secondary tablinks" onclick="openCity(event, 'td')" >TD</button>
      </div>
    </div>    
    <!-- Type Donnes Section -->
    <!--Selection des fichiers a afficher-->
  <section class="Posts">
    <?php
        
          $query1 = "SELECT filiere_user FROM user where id_user=? ;";
          $values = array($_SESSION['id_user']);
          $result = PDO($query1,$values);
          if($result->rowCount()!=0){
                while ($row = $result->fetch()) {
                  $filiere = $row['filiere_user'];
                }}
         echo "<p class=\"Text\"> Données pour filiere : ".$filiere."</p>";
    ?>   
    <?php
$type = array('cours','tp','td');
$index=0;
foreach($type as $type_c){
      
      echo "<div id=\"".$type_c."\" class=\"tabcontent\">";
      $devdir = "file/".$filiere;
      $dir = opendir($devdir);
      echo "<hr>";   
      while ($file = readdir($dir)){
      //traitement pour ne pas afficher le dossier pere et le dossier de racine
      $query1 = "SELECT type_cour from file where nom_pdf=?;";
      $values1 = array($file);
      $res1 = PDO($query1,$values1);
      if($res1->rowCount()!=0){
        while ($row = $res1->fetch()) {
          $type_cour=$row['type_cour'];
        }
      }
      if ($file != "." && $file != ".." && $type_cour==$type_c){ 
        /**********************************************/
        /*si cest les dossier .. ou . on affiche rien */
        /**********************************************/  
        $query2 = "SELECT commantaire,nbr_telechargement,date_ajoute,nom_pdf,titre from file where  nom_pdf=?;";
        $values2 = array($file);
        $res2 = PDO($query2,$values2);
        if($res2->rowCount()!=0){
           while ($row = $res2->fetch()) {
            $comm = $row['commantaire'];
            $nbr_telechargement= $row['nbr_telechargement'];
            $date_ajoute = $row['date_ajoute'];
            $nom = $row['titre'];
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