<?php
 
// Connect to server and select database.
$con = mysqli_connect("localhost","vineela_vinni","Mom@nddad3010.","vineela_db");
if($con->connect_error)
{
      die("Connection Failed:  ".$con->connect_error);
}
 
$user = $_POST["username"];
$pwd = $_POST["password"];
 
//preparing sql query
$query1 = "select * from register where username='$user' and password='$pwd'";
 
//executing sql query at backend
$result=$con->query($query1);
 
//count number of records for the given query
$no= mysqli_num_rows($result);
 
if($no==1)
 {  
     echo "<Font size='24' color='green'> Valid User.......!</font> <br>";
     echo "<Font size='24' color='orange'> Welcome ".$user ."</font> <br>";
 }
else
      {echo "<Font size='24' color='purple'> ".$user ."</font> <br>";
      echo "<Font size='24' color='red'>  In-Valid User.......!</font> <br>";
}
?>
