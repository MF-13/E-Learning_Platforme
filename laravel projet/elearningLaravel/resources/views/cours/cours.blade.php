@extends('layouts.temp')

@section('css')
    <link rel="stylesheet" href={{ asset("css/index.css") }}>
    <link rel="stylesheet" href={{ asset("css/cours-espace.css") }}>
    <link rel="stylesheet" href={{ asset("css/Style_NF.css") }}>
@endsection

@section('title')
    cours
@endsection


@section('content')
    


<?php

// traitement pour capter les non-user 

// capterConnexion($_SESSION['id_user']);

// $typeresult = TypeUser($_SESSION['type']);

?>


  

  <!-- Type Donnes Section (quiz,tp,td,cour)-->

    {{-- <ul class="nav nav-pills nav-fill tab">

        <li class="nav-item">

        <button type="button" class="btn btn-link tablinks" onclick="openCity(event, 'cour')" id="defaultOpen" >Cours</button>

        </li>

        <li class="nav-item">

        <button type="button" class="btn btn-link tablinks" onclick="openCity(event, 'tp')"  >TP</button>

        </li>

        <li class="nav-item">

        <button type="button" class="btn btn-link tablinks" onclick="openCity(event, 'td')" >TD</button>

        </li>

        <li class="nav-item">

        <button type="button" class="btn btn-link tablinks" onclick="openCity(event, 'quiz')" >Quiz</button>

        </li>

    </ul> --}}

  <?php
    // ajouter les boutton d ajouter les cour et le quiz pour le profeesuer seulement
    // if ($typeresult==0) {

    //   echo '<div class="divstyle">

    //           <br>

    //           <a href="addquiz.php" class="btn btn-info" >Ajouter Quiz</a>&nbsp';

    //   echo '  <a href="addcours-1.php" class="btn btn-info">Ajouter cours</a>

    //           <br>

    //         </div>';

    // }


  ?>

  <!-- Type Donnes Section -->

  <!--Selection des fichiers a afficher-->

<section class="Posts">

  <?php
//affichage du cour pour prof et etudiant
// if($typeresult==0 || $typeresult==-1){ 



//         $query1 = "SELECT filiere_user FROM user where id_user=? ;";

//         $values = array($_SESSION['id_user']);

//         $result = PDO($query1,$values);

//         if($result->rowCount()!=0){

//               while ($row = $result->fetch()) {

//                 $filiere = test_input($row['filiere_user']);

//               }}

//        echo "<p class=\"Text\"> Fichiers pour filiere : ".strtoupper($filiere)."</p>";

  

// $type = array('cour','tp','td');

// $index=0;

// foreach($type as $type_c){

    

//     echo "<div id=\"".$type_c."\" class=\"tabcontent\">";

//     $devdir = "file/".$filiere;

//     $dir = opendir($devdir);

//     echo "<hr>";   

//     while ($file = readdir($dir)){

//     //traitement pour ne pas afficher le dossier pere et le dossier de racine

//     $query1 = "SELECT type_cour from file where type_cour=? and nom_pdf=?;";

//     $values1 = array($type_c,$file);

//     $res1 = PDO($query1,$values1);

//     if($res1->rowCount()!=0){

//       while ($row = $res1->fetch()) {

//         $type_cour=test_input($row['type_cour']);

//       }

//     }else{

//         $type_cour="";

//     }



    

//     if ($file != "." && $file != ".." && $type_cour==$type_c){ 

      

//       /**********************************************/

//       /*si cest les dossier .. ou . on affiche rien */

//       /**********************************************/  

//       $query2 = "SELECT commantaire,id_cour,nbr_telechargement,date_ajoute,nom_pdf,titre from file where type_cour=? and nom_pdf=?;";

//       $values2 = array($type_c,$file);

//       $res2 = PDO($query2,$values2);

//       if($res2->rowCount()!=0){

//          while ($row = $res2->fetch()) {

//           $comm = test_input($row['commantaire']);

//           $id_cour = test_input($row['id_cour']);

//           $nbr_telechargement= test_input($row['nbr_telechargement']);

//           $date_ajoute = test_input($row['date_ajoute']);

//           $nom = test_input($row['titre']);

//           }

//       }



//       $query7 = "SELECT nom from cours where  id_cour=?;";

//       $values7 = array($id_cour);

//       $res7 = PDO($query7,$values7);

//       if($res7->rowCount()!=0){

//          while ($row = $res7->fetch()) {

//           $nom_cour = test_input($row['nom']);

//           }

//       }



//       echo '

//         <div class="container">

//           <div class="row">

//             <div class="col-lg-12 col-md-12 col-sm-12">

//               <div class="card text-center cardpadding">

//                 <div class="card-body">

//                   <div class="media">

//                     <img src="static/img/cours espace/undraw_files1_9ool.svg" class="align-self-start mr-3 pdfsize" alt="pdf png image">

//                       <div class="media-body">      

//                       ';

//       /*l'affichage ici*/

//       /*Au lieu de consulter on va selectioner la description du fichier depuis la base de donnes*/

//       echo "<h4 class=\"mt-0\">".strtoupper($type_c)." : ".$nom."</h4>";

//       echo "<p class=\"pmedia\">

//               <ul class=\"pmedia mylist\">

//                 <li><b>Nom Cour:</b> ".$nom_cour."</li>

//                 <li><b>commantaire:</b> ".$comm."</li>

//                 <li><b>Publier le :</b> ".$date_ajoute."</li>

//                     <br>
//                     <form class=\"formbutton\" method=\"post\" action=\"cours-detail.php\">
//                       <input type=\"hidden\" name=\"file\" value=".$file.">
//                       <input type=\"hidden\" name=\"dir\" value=".$devdir.">
//                       <button type=\"submit\" class=\"btn btn-outline-primary btnmarging\">Consulter...</button>
                    
//                     </form>
//               </ul></p>";

//              /*Telecharger le fichier*/

//       echo '<form class="formbutton" action="traitement/downloadfile.php" method="post">
//                 <input type="hidden" name="file" value="'.$file.'">
//                 <input type="hidden" name="dir" value="'.$devdir.'">
//                 <button type="submit" class="btn btn-outline-primary btnmarging"> Telecharger</button>
//            </form>

//       ';

//       /*Cette partie sert a donner les buttons concerne a chaque utilisateur*/

//       if($typeresult==0){

//       echo '
//       <form class="formbutton" action="traitement/dropfile.php" method="post">
//           <input type="hidden" name="file" value="'.$file.'">
//           <input type="hidden" name="dir" value="'.$devdir.'">
//       <button type="submit" class="btn btn-outline-danger btnmarging">Supprimer</button>
//       </form>
//       ';

//       }

//       echo ' 

//             </div>

//             </div>

//             </div>

//             </div>

//             </div>

//             </div>

//             </div>' ;      

//         }

//       }             

//       echo "<hr></div>";

//       closedir($dir);

// }

// }



?>   

<?php

/*********************************************************/

/*                traitement pour admin                  */

/*********************************************************/

//   $query1 = "SELECT filiere_id FROM filiere ;";

//         $values = array();

//         $result = PDO($query1,$values);

//         $filiere = array();

//         if($result->rowCount()!=0){

//               while ($row = $result->fetch()) {

//                 array_push($filiere,test_input($row['filiere_id']));

//               }}



        

       

  

// $type = array('cour','tp','td');







// foreach($type as $type_c){



//    echo "<div id=\"".$type_c."\" class=\"tabcontent\">";

  

//   foreach ($filiere as $fil) { 



//      echo "<p class=\"Text\"> Fichiers ".$type_c." pour filiere <strong>".$fil."</strong> :</p>";

//       $devdir = "file/".$fil;

//       $dir = opendir($devdir);

//       echo "<hr>";   

//       while ($file = readdir($dir)){

//       //traitement pour ne pas afficher le dossier pere et le dossier de racine

//           $query1 = "SELECT type_cour from file where type_cour = ? and nom_pdf=?;";

//           $values1 = array($type_c,$file);

//           $res1 = PDO($query1,$values1);



//           if($res1->rowCount()!=0){

//             while ($row = $res1->fetch()) {

//               $type_cour=test_input($row['type_cour']);

//             }

//           }else{

//              $type_cour=" ";

//           }



//           if ($file != "." && $file != ".." && $type_cour==$type_c){ 

//             /**********************************************/

//             /*si cest les dossier .. ou . on affiche rien */

//             /**********************************************/  

//                 $query2 = "SELECT commantaire,id_cour,nbr_telechargement,date_ajoute,nom_pdf,titre from file where  nom_pdf=?;";

//                 $values2 = array($file);

//                 $res2 = PDO($query2,$values2);

//                 if($res2->rowCount()!=0){

//                    while ($row = $res2->fetch()) {

//                     $comm = test_input($row['commantaire']);

//                     $id_cour = test_input($row['id_cour']);

//                     $nbr_telechargement= test_input($row['nbr_telechargement']);

//                     $date_ajoute = test_input($row['date_ajoute']);

//                     $nom = test_input($row['titre']);

//                     }

//                 }



//                 $query7 = "SELECT nom from cours where  id_cour=?;";

//                 $values7 = array($id_cour);

//                 $res7 = PDO($query7,$values7);

//                 if($res7->rowCount()!=0){

//                    while ($row = $res7->fetch()) {

//                     $nom_cour = test_input($row['nom']);

//                     }

//                 }



//                 echo '

//                   <div class="container">

//                     <div class="row">

//                       <div class="col-lg-12 col-md-12 col-sm-12">

//                         <div class="card text-center cardpadding">

//                           <div class="card-body">

//                             <div class="media">

//                               <img src="static/img/cours espace/undraw_files1_9ool.svg" class="align-self-start mr-3 pdfsize" alt="pdf png image">

//                                 <div class="media-body">      

//                                 ';

//                 /*l'affichage ici*/

//                 /*Au lieu de consulter on va selectioner la description du fichier depuis la base de donnes*/

//                 echo "<h4 class=\"mt-0\">".$nom."</h4>";

//                 echo "<p class=\"pmedia\">

//                         <ul class=\"pmedia mylist\">

//                           <li><b>Nom Cour:</b> ".$nom_cour."</li>

//                           <li><b>commantaire:</b> ".$comm."</li>

//                           <li><b>Publier le :</b> ".$date_ajoute."</li>

//                               <br>
//                               <form class=\"formbutton\" method=\"post\" action=\"cours-detail.php\">
//                                 <input type=\"hidden\" name=\"file\" value=".$file.">
//                                 <input type=\"hidden\" name=\"dir\" value=".$devdir.">
//                                 <button type=\"submit\" class=\"btn btn-outline-primary btnmarging\">Consulter...</button>
                              
//                               </form>

//                         </ul></p>";

//                        /*Telecharger le fichier*/

//                 echo '<form class="formbutton" action="traitement/downloadfile.php" method="post">
//                           <input type="hidden" name="file" value="'.$file.'">
//                           <input type="hidden" name="dir" value="'.$devdir.'">
//                           <button type="submit" class="btn btn-outline-primary btnmarging"> Telecharger</button>
//                      </form>

//                 ';

                

//                 echo '
//                 <form class="formbutton" action="traitement/dropfile.php" method="post">
//                     <input type="hidden" name="file" value="'.$file.'">
//                     <input type="hidden" name="dir" value="'.$devdir.'">
//                     <button type="submit" class="btn btn-outline-danger btnmarging">Supprimer</button>
//                 </form>
//                 ';

//                 echo ' 

//                       </div>

//                       </div>

//                       </div>

//                       </div>

//                       </div>

//                       </div>

//                       </div>' ;      

//               }

//         }             

//         echo "<hr>";

//         closedir($dir);

// }

// echo "</div>";

// }



?> 



<?php



/***********************************************************/

/*                traitement pour QUIZ                    */

/*********************************************************/

//     echo "<div id=\"quiz\" class=\"tabcontent\">";

      

//       /* si c'est un etudiant*/

// if ($typeresult==-1) {



//         $query = "select filiere_user from user where id_user = ?";

//         $values = array($_SESSION['id_user']);

//         $stm = PDO($query,$values);

//         if($stm->rowCount()!=0){

//           while($row = $stm->fetch()){

//             $filiere_user = test_input($row['filiere_user']);

//           }

//         }



//         $query8 = "select * from quiz where id_filiere= ? order by id_quiz desc";

//         $values8 = array($filiere_user);

//         $stm8 = PDO($query8,$values8);

//         if ($stm8->rowCount()!=0) {

//           while ($row = $stm8->fetch()) {

//             $dateserveur = new DateTimeImmutable('', new DateTimeZone('Africa/Casablanca'));

//             $date_delai = $row['dernier_delai'];



//             if ($dateserveur < $date_delai || $date_delai==null) {



//             echo'

//               <div class="container">

//                 <div class="row">

//                   <div class="col-lg-12 col-md-12 col-sm-12">

//                     <div class="card text-center cardpadding">

//                       <div class="card-body">

//                         <div class="media">

//                           <img src="static/img/cours espace/undraw_files1_9ool.svg" class="align-self-start mr-3 pdfsize" alt="pdf png image">

//                             <div class="media-body"> 

//                               <h4 class="mt-0">Quiz : '.test_input($row['nom_quiz']).'</h4>

//                               <p class="pmedia">

//                                 <ul class="pmedia mylist">';

//                                 $q = "SELECT concat(nom_user,' ',prenom_user) as nom_prof from user where id_user = ?";

//                                 $v = array($row['id_prof']);

//                                 $r = PDO($q,$v);

//                                 if ($r->rowCount()!=0) {

//                                   while($rw = $r->fetch()){

//                                     $nom_prof = test_input($rw['nom_prof']);

//                                   }

//                                 }

//                          echo '<li><b>Réaliser par :</b> '.$nom_prof.'</li>

//                                   <li><b>Publier le :</b>'.$row['date_pub'].'</li>

//                               ';

//                           if(empty($row['dernier_delai'])){

//                             echo '<li><b>Dérniére date a faire :</b> Pas definie par le Proffeseur</li>';

//                             }else{

//                               echo '<li><b>Dérniére date a faire :</b> '.$row['dernier_delai'].'</li>';

//                             }





//                             echo '  <br>
//                                   <form method="post" action="quiz.php">
//                                     <input type="hidden" name="id" value="'.test_input($row['id_quiz']).'">
//                                     <button type="submit" class="btn btn-outline-danger btnmarging">Realiser le Quiz</button>
//                                   </form>
//                                 </ul>

//                               </p>

//                             </div>

//                           </div>

//                         </div>

//                       </div>

//                     </div>

//                   </div>

//             </div>

//             ';

//             }

//           }

//         }



      

// }

// /*si c'est un professeur*/

// if ($typeresult==0) {

//         $query8 = "select * from quiz where id_prof = ?  order by id_quiz desc";

//         $values8 = array($_SESSION['id_user']);

//         $stm8 = PDO($query8,$values8);

//         if ($stm8->rowCount()!=0) {

//           while ($row = $stm8->fetch()) {

// echo'

// <div class="container">

// <div class="row">

//   <div class="col-lg-12 col-md-12 col-sm-12">

//     <div class="card text-center cardpadding">

//       <div class="card-body">

//         <div class="media">

//           <img src="static/img/cours espace/undraw_files1_9ool.svg" class="align-self-start mr-3 pdfsize" alt="pdf png image">

//             <div class="media-body"> 
             
//               <h4 class="mt-0">Quiz : '.test_input($row['nom_quiz']).'</h4>

              

//               <p class="pmedia">

//                 <ul class="pmedia mylist">

//                   <li><b>Publier le :</b>'.$row['date_pub'].'</li>

//                   <li><b>Dérniére date a rendre :</b>'.$row['dernier_delai'].'</li>

//                       <br>
//                   <form method="post" action="quiz.php">
              
//                     <input type="hidden" name="id" value="'.test_input($row['id_quiz']).'">
//                     <button type="submit" class="btn btn-outline-danger btnmarging">Consulter</button>
                                
//                  </form>
                    

//                 </ul>


//                 <form method="post" action="traitement/dropquiz.php">
              
//                     <input type="hidden" name="id" value="'.test_input($row['id_quiz']).'">
//                     <button type="submit" class="btn btn-outline-danger btnmarging">Supprimer</button>
                                
//                  </form>


//                 <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#'.$row['id_quiz'].'"

//                  aria-expanded="false" aria-controls="collapseExample">

//                   <i class="fas fa-sort-down fa-2x" class="padding-bottom"></i> Etudiants Résultas

//                 </button>';

//                   /*result start : */

//                echo  '<div class="collapse" id="'.$row['id_quiz'].'">

//                           <div class="card card-body">

//                           <table class="table">

//                                 <thead>

//                                   <tr class="trst">

//                                     <th scope="col" class="center">Nom d\'etudiant</th>

//                                     <th scope="col" class="center">Nombre des reponses correcte</th>

//                                   </tr>

//                                 </thead>

//                                 <tbody>

                                

//                 ';

//                 $qr = "SELECT * from resultat_quiz where id_quiz=?";

//                 $val = array($row['id_quiz']);

//                 $stm = PDO($qr,$val);

//                 if ($stm->rowCount()!=0) {

//                   while($row = $stm->fetch()){

//                                 $id_etd = $row['id_etudiant'];

//                                 $q = "SELECT concat(nom_user,' ',prenom_user) as nom_etd from user where id_user = ?";

//                                 $v = array($id_etd);

//                                 $r = PDO($q,$v);

//                                 if ($r->rowCount()!=0) {

//                                   while($rw = $r->fetch()){

//                                     $nom_etd = test_input($rw['nom_etd']);

//                                   }

//                                 }



//                             echo '<tr>

//                                   <td>'.$nom_etd.'</td>

//                                   <td>'.$row['resultat'].'</td>

//                                   ';

//                   }

//                 }else{

//                   echo "<td>acune resultat est disponible pour le moment</td>";

//                 }



                

//               echo '

//                     </tbody>

//                     </table>

//                     </div>

//                     </div>

//               </p>

//             </div>

//           </div>

//         </div>

//       </div>

//     </div>

//   </div>

// </div>



// ';

//    }

//   }

// }

//     echo "</div>";

?>



<!--Fotter,script and Contact form-->

</section>






@endsection