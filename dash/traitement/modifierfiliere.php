<!--*************************************************************************************-->
        <!-- Begin Page Content -->
        <div class="container-fluid">

         

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Etudiant</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Filiere ID</th>
                      <th>Filiere</th>
                      <th>Description</th>
                      <th>Valider</th>
                    </tr>
                  </thead>
                
             <tbody>
                    <?php
                    /*echo $id;*/
                      $sql = mysqli_query($conn,"SELECT * FROM `filiere` WHERE filiere_id=\"$id\"");

                      $result = mysqli_num_rows($sql);

          if($result)  {
            while($row = mysqli_fetch_array($sql))
            {
            echo '
      <tr>
        <td>filiere ID
        <input type="text" name="filiere_id" required="required" disabled="disabled" value="'.$row['filiere_id'].'"></td>
        <td>filiere<input type="text" name="nom" required="required" value="'.$row['filiere'].'"></td>
        <td>description<input type="text" name="description" required="required" value="'.$row['filiere_description'].'"
        </td>
        <td><input type="submit" value="Valider" class="btn btn-danger"></td>
              
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