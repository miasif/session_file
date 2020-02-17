<!DOCTYPE html>
<html>
<body>

<h2>Registration Formorm</h2>
<?php
 
  $nameerror=$emailerror="";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if(empty($_POST["name"]))
  {
	  $nameerror="name required";
  }
  else
  {
      $nameerror=$POST["name"];
  }
  
  if(empty($_POST["email"]))
  {
	  $emailerror="email required";
  }
  else
  {
      $emailerror=$_POST["email"];
  }
}

?>


<form action="session.php" method ="post">
 
 <b>NAME: </b>
  <input type="text" name="name">
  <span type="color:blue"><?php echo $nameerror; ?><span/>
 
  <br><br>
  
 <b>EMAIL: </b>
  <input type="email" name="email">
  <span type="color:blue"><?php echo $emailerror; ?><span/>
 
   <br><br><br>
  <input type="submit" value="Submit">
  <br>
  
  
 
  
  


</form>




</body>
</html>

