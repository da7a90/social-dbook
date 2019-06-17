<?php 
$text = $_POST['id'];
$text = explode(",",$text);
$db = new mysqli('localhost', 'root', '', 'social');

foreach($text as $string)
{
if($string !=""){
echo $sql = "UPDATE `notification` SET `read`='read' WHERE `nid`='$string' "; 
echo "<br>";
$db->query($sql);	
}
}
?>
