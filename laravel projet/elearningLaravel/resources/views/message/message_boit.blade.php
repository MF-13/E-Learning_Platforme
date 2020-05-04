@extends('layouts.temp')

@section('css')
    <link rel="stylesheet" href={{ asset("css/index.css") }}>
    <link rel="stylesheet" href={{ asset("css/profile.css") }}>
@endsection

@section('title')
    Boite Message
@endsection


@section('content')
    <div class="container">

        <div class="row">

          <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="card text-center">

                <div class="card-header">

                    <i class="fas fa-envelope-open"> Boite Message</i>   

                </div>

               
                          

             <div class="card-body">
                <div class="card">
                   <div class="card-body textleft">

                        <h5 class="card-title">L\'expéditeur : emetteur nom</h5>
                        <h6 class="card-subtitle mb-2 text-muted"> emetteur email</h6><br>

                        <p class="card-text">Message : le message</p>
                        <form method="post" action="traitement/dropmsg.php">
                            <!-- input hidden pour envoyer l'id du msg en tout securiter et la valeur c'est l'id du message-->

                              <input type="hidden" name="id_msg" value="id msg">

                              <button type="submit" class="btn btn-danger float-right"><i class="fas fa-trash-alt"></i> Supprimer</button>

                        </form>
                        <p class="text-muted">date d envoie</p>

                     </div>
                   </div>
                 </div>


                    <!-- si la boite message et vide on affiche le contenue suivant -->
                     <div class="card-body">

                                <div class="card">

                                   <div class="card-body textleft">

                                      <h5 class="card-title"> Vide</h5>

                                      <p class="card-text">Vous n\'avez aucun message pour le moment !</p>

                              </div>

                          </div>

                      </div>';

                     



                <div class="card-footer text-muted">

                
                   <form method="post" action="traitement/dropallmsg.php">
                  <!-- input hidden pour envoyer l'id du msg en tout securiter et la valeur c'est l'id du message-->

                        <input type="hidden" name="id" value="id msg">
                    <button type="submit" class="btn btn-outline-danger btn-sm float-right"><i class="fas fa-trash-alt"></i>
                     Supprimer les messages</button>
                     
                    </form>

                </div>

                

              </div>

          </div>

        </div>

      </div>

  

    <!-- End Posts Section -->

    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

    <script src="static/js/bootstrap.js"></script>

@endsection