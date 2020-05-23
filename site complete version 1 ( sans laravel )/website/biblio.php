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

    <link rel="stylesheet" href="static/css/biblio.css">

    <!-- <link rel="stylesheet" href="static/css/index.css"> -->

    <title>Bibliotheque</title>

</head>

<body>

   <!--Begin of NavBar-->



 <?php

include("traitement/navbar.php");

include("traitement/function.php");



if (isset($_SESSION['id_user'])) {



$typeresult = TypeUser($_SESSION['type']);

}



 ?>

 

  <!--END Nav bar-->

   

    <!-- Posts Section -->

   

<!--Selection des fichiers a afficher-->

 <section class="Posts">

   <?php

   if (isset($_SESSION['id_user'])) {

     # code...

   

       

        $query1 = "SELECT filiere_user FROM user where id_user=? ;";

        



        $values = array($_SESSION['id_user']);

        $result = PDO($query1,$values);



        if($result->rowCount()!=0){

              while ($row = $result->fetch()) {

                 $filiere = test_input($row['filiere_user']);

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

                     $comm = test_input($row['commantaire']);

                     $nbr_telechargement= $row['nbr_telechargement'];

                     $date_ajoute = $row['date_ajoute'];

                     $nom = test_input($row['titre']);

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

                          <img src="static/img/cours espace/undraw_files1_9ool.svg" class="align-self-start mr-3 pdfsize" alt="pdf png image">

                            <div class="media-body">      

                            ';

                          /*l'affichage ici*/

                          /*Au lieu de consulter on va selectioner la description du fichier depuis la base de donnes*/

                             echo "<h4 class=\"mt-0\">".$nom."</h4>";

                             echo "<p class=\"pmedia\">

                              <ul class=\"pmedia mylist\">

                              <li><b>Publier le :</b> ".$date_ajoute."</li>

                              <br>
                              <form class=\"formbutton\" method=\"post\" action=\"cours-detail.php\">
                                <input type=\"hidden\" name=\"file\" value=".$file.">
                                <input type=\"hidden\" name=\"dir\" value=".$devdir.">
                                <button type=\"submit\" class=\"btn btn-outline-primary btnmarging\">Consulter...</button>
                              </form>

                              </ul></p>";

                              /*Telecharger le fichier*/

                              echo '
                                      <form class="formbutton" action="traitement/downloadfile.php" method="post">
                                          <input type="hidden" name="file" value="'.$file.'">
                                          <input type="hidden" name="dir" value="'.$devdir.'">
                                          <button type="submit" class="btn btn-outline-primary btnmarging"> Telecharger</button>
                                     </form>

                                    ';

                              

           /*Cette partie sert a donner les buttons concerne a chaque utilisateur*/

        if (isset($_SESSION['id_user'])) {

          

          if($typeresult==0){

            if($code_prof==$_SESSION['id_user']){

            echo '
              <form class="formbutton" action="traitement/dropfile.php" method="post">
                  <input type="hidden" name="file" value="'.$file.'">
                  <input type="hidden" name="dir" value="'.$devdir.'">
                  <button type="submit" class="btn btn-outline-danger btnmarging">Supprimer</button>
              </form>';

             }

          }

        }else{

          echo '<button type="button" class="btn btn-outline-danger btnmarging" onclick="window.location.href = \'sing-up.php\'">

                  s\'inscrire</button>';

        }

            echo ' 

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