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
<?php
echo '
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <h5 class="card-header">Ajouter le Quiz</h5>
                    <div class="card-body">
    ';


if (isset($_GET['number'])) {
    if (empty($_GET['number'])) {
        header("location: addQuiz.php");
    }
    $n = $_GET['number'];
    
    echo'<form action="traitement/insertqst.php?qst='.$n.'" method="post">';
    echo'<div class="form-group row">
                        <label for="inputTitre" class="col-sm-2 col-form-label">Titre Quiz</label>
                        <div class="col-sm-8">
                        <input type="text" name="titre" class="form-control" id="inputtitre">
                        </div>
         </div>';
         /*Question area*/
    echo '<div class="col-lg-12 col-md-12 col-sm-12">
          
          ';

    for ($i=1; $i <=$n ; $i++) { 
        
        echo'<div class="card">
                <div class="card-body">
                    Question '.$i.' :
                </div>
                 <input type="text" style="margin: 10px;" name="question'.$i.'" class="form-control" id="exampleFormControlInput1" placeholder="Question">
                  <input type="text" style="margin: 10px;" name="repcorrques'.$i.'" class="form-control" id="exampleFormControlInput1" placeholder="Reponse correcte">
                  <input type="text" style="margin: 10px;" name="rep2ques'.$i.'" class="form-control" id="exampleFormControlInput1" placeholder="Réponce 2">
                  <input type="text" style="margin: 10px;" name="rep3ques'.$i.'" class="form-control" id="exampleFormControlInput1" placeholder="Réponce 3">
            </div>
        ';

    }
        echo ' 
                </div>';
        /*End Question area*/

     echo '<input type="submit" value="submit" >';
echo '</form>';


}else{
echo '
<form>  
Enter No:<input type="text" id="number" name="number"/><br/>  
<input type="submit" value="submit" onclick="numberquestion()"/>  
</form> 
';


}
echo '              </div>
                </div>
            </div>
        </div>
    </div>

';


?>
<!---------------------------------------------------------------------------------------------------->  

 
<!---------------------------------------------------------------------------------------------------->
 	<script type="text/javascript">  
        function numberquestion(){  

        var number=document.getElementById("number").value; 

        document.location.replace("random.php?"+number);

        }  
    </script> 
    <?php
	  include("traitement/footer.php");
	?> 

</body>
</html>
