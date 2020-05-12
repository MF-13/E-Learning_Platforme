@extends('layouts.temp')

@section('css')
    <link rel="stylesheet" href={{ asset("css/site/quiz.css") }}>
@endsection

@section('title')
    Quiz
@endsection


@section('content')

  <div class="container">

    <div class="row">

      <div class="col-lg-12 col-md-12 col-sm-12">

        <div class="card">

          <div class="card-body">






<form action="traitement/quiztrait.php" method="post">

  
  <input type="hidden"  name="id" value="id du quiz" >
  

  

<!-- ajouter dans le php $q=1 pour parcourir les questions de la base de donnes --> 

<h5 class="card-title">Nom quiz : test </h5>

          <p class="card-text">Question $q : question : </p>
            <!-- $r c'est la reponse qu'on a extraite de la base de donnes  -->
      <input type="radio" value="'.$r.'"  name="'.$q.'" style="margin-left: 20px; margin-bottom: 8px;"  >$r<br>
      <input type="radio" value="'.$r.'"  name="'.$q.'" style="margin-left: 20px; margin-bottom: 8px;"  >$r<br>
      <input type="radio" value="'.$r.'"  name="'.$q.'" style="margin-left: 20px; margin-bottom: 8px;"  >$r<br>
      
    <br>

    <input type="submit" name="submit" class="btn btn-success float-right">

</form>



</div>

</div>

</div>

</div>

</div>


@endsection

