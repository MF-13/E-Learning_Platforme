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
	<title>Quiz</title>
</head>
<body>
	<?php
      include("traitement/navbar.php");
      include("traitement/function.php");
 	?>
 	<br>
 	<br>
 	<br>
 	<br>
 	<br>
 	<br>
 	<br>
 	<br>
 	<br>
<!---------------------------------------------------------------------------------------------------->

<form>
    <a href="">Tester les réponses</a>

    <div class="question">
      <div class="texte">
        <h2>Question 1</h2>
          Le code jQuery s'exécute :<br>
          <input type="radio" id="r1" name="q1">Dans le navigateur<br>
          <input type="radio" id="r2" name="q1">Sur le serveur où est stocké le code<br>
        <input type="radio" id="r3" name="q1">Tantôt dans le navigateur, tantôt sur le serveur<br>
        <br><span class="reponse" id="reponse1">Le code jQuery n'est autre que du JavaScript. À ce titre, il s'exécute toujours sur les clients (ordinateurs, tablettes et téléphones) qui font référence à ce code via une page HTML. La bonne réponse est donc la première.</span>
      </div>  
      <img id="img0" src="static/img/quiz/question.png" />
    </div>

    <div class="question">
      <div class="texte">
        <h2>Question 2</h2>
        Lorsque l'on veut exécuter du code jQuery, attendre la disponibilité du DOM est :<br>
        <input type="radio" id="r4" name="q2">Vital<br>
        <input type="radio" id="r5" name="q2">Inutile<br>
        <input type="radio" id="r6" name="q2">Parfois important, parfois sans importance<br>
        <br><span class="reponse" id="reponse2">Il est impératif d'attendre la disponibilité du DOM avant d'exécuter du code jQuery. Sans quoi, ce code pourrait s'appliquer à un élément indisponible et provoquer un comportement inattendu, voire même un plantage du navigateur.</span>
      </div>
      <img id="img2" src="static/img/quiz/question.png" />
    </div>

    <div class="question">
      <div class="texte">
        <h2>Question 3</h2>
        Pour chaîner deux méthodes jQuery :<br>
        <input type="radio" id="r7" name="q3">Il faut les mettre l'une à la suite de l'autre en les séparant par une virgule<br>
        <input type="radio" id="r8" name="q3">Il faut les mettre l'une à la suite de l'autre en les séparant par un point décimal<br>
        <input type="radio" id="r9" name="q3">Il est impossible de chaîner deux méthodes jQuery<br>
        <br><span class="reponse" id="reponse3">L'exécution d'un sélecteur jQuery produit un objet jQuery sur lequel il est possible d'appliquer une méthode jQuery. Cette méthode produit elle-même un objet jQuery. Il est donc possible de lui appliquer une autre méthode en utilisant le caractère de liaison habituel : le point décimal.</span>
      </div>  
      <img id="img3" src="static/img/quiz/question.png" />
    </div>
    </form>
    
    <script src="static/js/jquery.js"></script>
    <script>
      $(function() {
        // Dissimulation des réponses
        $('.reponse').hide();
        
        // Mise en forme des div du QCM
        var q = $('.question');
        q.css('background', '#9EEAE0');
        q.css('border-style', 'groove');
        q.css('border-width', '4px');
        q.css('width', '900px');
        q.css('height', '250px');
        q.css('margin', '20px');

        $('.texte').css('float', 'left');
        $('.texte').css('width', '90%');
        $('img').css('float', 'right');
        
        // Action au survol du lien « Tester les réponses »
        $('a').hover(
          function() { 
            $('.reponse').show();
            if ($(':radio[id="r1"]:checked').val()) {
              $('#img0').attr('src', 'static/img/quiz/bon.png'); 
              $('#reponse1').css('color', 'green');
            }  
            else {
              $('#img0').attr('src', 'static/img/quiz/mauvais.png');
              $('#reponse1').css('color', 'red');
            } 

            if ($(':radio[id="r4"]:checked').val()) {
              $('#img2').attr('src', 'bon.png');
              $('#reponse2').css('color', 'green');
            }
            else {
              $('#img2').attr('src', 'static/img/quiz/mauvais.png');
              $('#reponse2').css('color', 'red');
            } 
            
            if ($(':radio[id="r8"]:checked').val()) {
              $('#img3').attr('src', 'static/img/quiz/bon.png'); 
              $('#reponse3').css('color', 'green');
            }
            else {
              $('#img3').attr('src', 'static/img/quiz/mauvais.png');
              $('#reponse3').css('color', 'red');
            }
          },
          function() { 
            $('.reponse').hide(); 
            $('img').each(function() {
              $(this).attr('src', 'static/img/quiz/question.png');
          });
}

        );  
      }); 
    </script>    








<!---------------------------------------------------------------------------------------------------->
 	<?php
	  include("traitement/footer.php");
	?> 

</body>
</html>