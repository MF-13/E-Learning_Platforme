<?php
include("PDO2.php");
/*
$nom = $_POST['nom'];
$filiere = $_POST['filiere'];


$query = "SELECT * from etudiant where code_massar=? and filiere=?";
		$values = array($nom,$filiere);
		$stm=PDO($query,$values);


if($stm->rowCount()!=0){
while ($row = $stm->fetch()) {
		echo "<br>".$row['nom']."<br>";
	}
}else{
	echo "Nothing";
}

echo "<br><a href=\"FORM.php\">Form</a>";
*/		
?>
<!DOCTYPE html>
<html>
<head>
	<title>test</title>
	<style type="text/css">
		body {font-family: Arial;

  background-color: rgba(219 , 175, 118, 0.986)
}
/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: rgb(88, 84, 84)
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 5px 16px;
  transition: 0.3s;
  font-size: 20px;
  text-align: center;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 6px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc; 
}

	</style>
</head>
<body>
	<div class="tab">
			  <button class="tablinks" onclick="openCity(event, 'livre1')"><p>DISPOSITIONS PRELIMINAIRES</p></button>
			  <button class="tablinks" onclick="openCity(event, 'livre2')"><p>LIVRE I</p></button>
			  <button class="tablinks" onclick="openCity(event, 'livre3default')" id="defaultOpen"><p>TABLE DES MATIERES</p></button>
			</div>
<div id="livre1" class="tabcontent">
	<button class="accordion">
		<h3 class="titre">TITRE I DES PEINES (Articles 14 à 60)</h3>
	</button>
					<div class="panel">
								<details>
							<summary>ARTICLE 14</summary>
							<p> 
							  Les peines sont principales ou accessoires.<br>
								lles sont principales lorsqu'elles peuvent être prononcées sans être adjointes à aucune autre peine.<br>
								Elles sont accessoires quand elles ne peuvent être infligées séparément ou qu'elles sont les conséquences d'une peine principale.
							</p>
						</details>
					</div>


</div>
<div id="livre2" class="tabcontent">
	<p>
		livre 2 test azbi
	</p>
</div>
<div id="livre3default" class="tabcontent">
	<p>
		livre 3 test azbi w defalut
	</p>
</div>

			<script>
					var acc = document.getElementsByClassName("accordion");
					var i;

					for (i = 0; i < acc.length; i++) {
					  acc[i].addEventListener("click", function() {
					    this.classList.toggle("active");
					    var panel = this.nextElementSibling;
					    if (panel.style.display === "block") {
					      panel.style.display = "none";
					    } else {
					      panel.style.display = "block";
					    }
					  });
					}
					</script>

	<script>
			function openCity(evt, cityName) {
			  var i, tabcontent, tablinks;
			  tabcontent = document.getElementsByClassName("tabcontent");
			  for (i = 0; i < tabcontent.length; i++) {
			    tabcontent[i].style.display = "none";
			  }
			  tablinks = document.getElementsByClassName("tablinks");
			  for (i = 0; i < tablinks.length; i++) {
			    tablinks[i].className = tablinks[i].className.replace(" active", "");
			  }
			  document.getElementById(cityName).style.display = "block";
			  evt.currentTarget.className += " active";
			}
			// Get the element with id="defaultOpen" and click on it
			document.getElementById("defaultOpen").click();
			</script>
</body>
</html>