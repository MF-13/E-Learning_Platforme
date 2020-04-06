<?php
session_start();
include("../connecteDB.php");

if (isset($_POST['message']) AND isset($_POST['email'])
 AND isset($_POST['type']) AND isset($_POST['message']) AND isset($_POST['code_user']))
      {
    

    $query = "INSERT into replyMessage(id_admin,message,id_recepteur,type_recepteur,id_msg_recepteur) 
                VALUES(".$_SESSION['code_massar'].",'".$_POST['message']."',".$_POST['code_user'].",'".$_POST['type']."',
                    ".$_GET['id'].");";
    $result = mysqli_query($conn,$query);

    if ($result) {
        echo '      
            <div class="alert alert-success" src="../">
                <strong>Success!</strong> Message envoyer!
            </div>
            <script>
         setTimeout(function(){
            window.location.href = \'../message.php\';
         }, 2000);
      </script>';
    }
    else{
        echo "error hors de l insertion a la base de donnes";
    }



}
else
{
echo "error dans les information ! ";
    
    
}






?>