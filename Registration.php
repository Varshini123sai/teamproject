<?php
$regno=$_POST['regno'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phnno=$_POST['phnno'];
$pwd=$_POST['pwd'];
$conn=new mysqli('localhost','root','','harika');
if($conn->connect_error)
{
    die('Conneection failed :'.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("INSERT INTO registration(regno,fname,lname,gender,email,phnno,pwd)values(?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssis",$regno,$fname,$lname,$gender,$email,$phnno,$pwd);
    if ($conn->query($stmt) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $stmt . "<br>" . $conn->error;
      }
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>
