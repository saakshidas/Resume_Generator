<?php


require_once('connection.php');

$name= $_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$sql="INSERT INTO  contact values('','$name','$email','$subject')";
     
if (mysqli_query($conn, $sql)) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>