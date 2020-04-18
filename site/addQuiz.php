<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="static/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/Index.css">
	<title>Ajouter Quiz</title>
</head>
<body>
	<?php
      include("traitement/navbar.php");
      include("traitement/function.php");
 	?>
<!---------------------------------------------------------------------------------------------------->   
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <h5 class="card-header">Ajouter le Quiz</h5>
                    <div class="card-body">
                    <form>
                    <div class="form-group row">
                        <label for="inputTitre" class="col-sm-2 col-form-label">Titre Quiz</label>
                        <div class="col-sm-8">
                        <input type="password" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <!-- Question area -->
                    <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                    <div class="card-body">
                        Question 1 :
                    </div>
                    <input type="text" style="margin: 10px;" class="form-control" id="exampleFormControlInput1" placeholder="Réponce correcte">
                    <input type="text" style="margin: 10px;" class="form-control" id="exampleFormControlInput1" placeholder="Réponce 2">
                    <input type="text" style="margin: 10px;" class="form-control" id="exampleFormControlInput1" placeholder="Réponce 3">
                    </div>
                    </div>
                    <!-- End Question area -->
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
<!---------------------------------------------------------------------------------------------------->

<!---------------------------------------------------------------------------------------------------->
 	<?php
	  include("traitement/footer.php");
	?> 

</body>
</html>
