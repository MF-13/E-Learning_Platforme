<!--*************************************************************************************-->
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
         

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Proffeseur</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                       <th>code massar professeur</th>
                      <th>Nom</th>
                      <th>Prenom</th>
                      <th>Mot de passe</th>
                      <th>Date de naissance</th>   
                      <th>Filiere</th>
                      <th>Telephone</th>
                      <th>Email</th>
                      <th>Valider</th>
                    </tr>
                  </thead>
                
             <tbody>
                    <?php
                      $sql = mysqli_query($conn,"SELECT * FROM `professeur` WHERE code_massar_prof=$id");

          $result = mysqli_num_rows($sql);

          if($result)  {
            while($row = mysqli_fetch_array($sql))
            {

              

            echo '
      <tr>
      <form method="post"action="traitement/modifyprof.php?code_massar='.$_GET['id'].'">
        <td>Code Massar professeur<input type="number" name="code_massar" required="required" disabled="disabled" value='.$id.'></td>
        <td>Nom<input type="text" name="nom" required="required" value="'.$row['nom'].'"></td>
        <td>Prenom<input type="text" name="prenom" required="required" value="'.$row['prenom'].'"></td>
        <td>mot de passe<input type="text" name="mdps" required="required" value="'.$row['mdps'].'"></td>
        <td>date de naissance<input type="date" name="date_naiss" required="required" value="'.$row['date_naiss'].'"></td>
        <td>filierer<input type="text" name="filiere" required="required" value="'.$row['filiere'].'"></td>
        <td>telephone<input type="number" name="telephone" required="required" value="'.$row['num_tele'].'"></td>
        <td>email<input type="email" name="email" required="required" value="'.$row['email'].'"></td>
        <td><input type="submit" value="Valider" class="btn btn-danger"></td>
              </form>
      </tr> ';
            }
           
            }


            ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->