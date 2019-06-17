<?php

$name=$_FILES['video']['name'];
$temp=$_FILES['video']['tmp_name'];
$name= rand(158757363,4574463569683).rand(573948544,56888768766).'_like'.".jpg";

$destino =  $name;
move_uploaded_file($_FILES['file']['tmp_name'],'./'.$_FILES['file']['name']);
echo 'success'
?>