<?php
session_start();
 include("traitement/navbar.php");
 include("traitement/function.php");
 ?>
  <!--END Nav bar-->
 
  <!-- Département Section -->

  <section class="Departement">
    <div>
      <h4 class="myText" style="margin-top: 70px;">ESTM Départements</h4>
      <br>
      <br>
    </div>
  <?php
    $values = array();
    $result=PDO("SELECT * FROM filiere",$values);

     if($result->rowCount()!=0){
           echo '  <div class="container">
                     <div class="row">
                       <div class="col-lg-3 col-md-6 col-sm-12">
                 ';
        while ($row = $result->fetch()) {
            echo' 
                  <div class="card">
                    <img class="card-img-top" src="static/img/Index/Filiére/communication.png" alt="TCC" height="70">
                    <div class="card-body">

                      <h5 class="card-title">'.$row["filiere"].'&nbsp('.$row["filiere_id"].')</h5>
                      <p class="card-text">Filiére :<br>
                        <ul>
                          <li>'.$row["filiere_description"].'</li>
                          
                        </ul> 
                    </div>
                  </div>
             ';        

        }
                   echo '
                    </div>  
                </div>
            </div>';
      }else{
      echo "<strong font-position=\"center\">Aucune filiere trouvé</stron>!";
    }

    
  ?>
  <style>
    @media (max-width: 768px)
    {
  .card {
    position: relative !important;
    left: -2px !important;
    width: 100% !important;
}}
.card {
    position: relative;
    left: 35px;
    margin-bottom: 20px;
    width: 421%;
}
  </style>

  </section>
  <!-- End Département section -->
  <!--Fotter,script and Contact form-->

  <?php
  include("traitement/footer.php");
  ?>                                                                                      
  </body>
</html>