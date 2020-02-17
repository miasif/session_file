<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
echo $_SESSION["name"]=$_POST["name"];
echo "<br>";
echo $_SESSION["email"]=$_POST["email"];
?>

<?php
 
$gendererror=$degreeerror=$blooderror="";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if(empty($_POST["gender"]))
  {
	  $gendererror="gender required";
  }
  else
  {
      $gendererror=$_POST["gender"];
  }
  
  if(empty($_POST["degree"]))
  {
	  $degreeerror="degree required";
  }
  else
  {
      $degreeerror=$_POST["degree"];
  }
}

?>



<form action="file_show.php" method ="post">
 
 
  <b>GENDER:</b>

  <input type="radio" name="gender" value="male"/>Male
  <input type="radio" name="gender" value="female"/>Female
  <input type="radio" name="gender" value="other"/>Other
  
  <span type="color:blue"><?php echo $gendererror; ?><span/>
  <br><br>
  
  <br> <br>
  
  <b>DEGREE:</b>

  <input type="checkbox" name="degree" value="ssc">SSC
  <input type="checkbox" name="degree" value="hsc">HSC
  <input type="checkbox" name="degree" value="bsc">BSc
  <input type="checkbox" name="degree" value="msc">MSc
  <span type="color:blue"><?php echo $degreeerror; ?><span/>
  <br>
  <br>
  
  <br><br>
  
  <b>BLOOD GROUP: </b>
  <br><br>
  <select name="blood">
   <option value="none">None</option>
   <option value="A+">A+</option>
   <option value="B+">B+</option>
   <option value="A-">A-</option>
   <option value="B-">B-</option>
   <option value="AB+">AB+</option>
   <option value="AB-">AB-</option>
   <option value="O+">O+</option>
   <option value="O-">O-</option>   
   </select>
   <span type="color:blue"><?php echo $blooderror; ?><span/>
   <br><br><br>
  <input type="submit" value="Submit">
  

</body>
</html>
