<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
echo $_SESSION["gender"]=$_POST["gender"];
echo "<br>";
echo $_SESSION["degree"]=$_POST["degree"];
?>

<?php

$file = fopen("User Info.txt", "w") or die("Unable to open file!");

$data = $_SESSION["name"];


fwrite($file, $data."\n");
 
 $data = $_SESSION["email"];

fwrite($file, $data."\n");

$data = $_SESSION["gender"];

fwrite($file, $data."\n");

$data =$_SESSION["degree"];





fclose($file);



?>










</body>
</html>