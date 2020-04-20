<?php
include('fun.php');


$email = "       \<script> alert('hello') </script>        ";



$email1 = test_input($email);

echo $email1;


// $res = test_email($email);
// echo $res;
?>