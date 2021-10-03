<?php


require_once('connection.php');
// $id=$_POST['id'];
$signup= $_POST['loginUser'];
$signpass=$_POST['loginpassword'];
$confirmpass=$_POST['Password'];
$sql="INSERT INTO  register values('','$signup','$signpass','$confirmpass')";
     
if (mysqli_query($conn, $sql)) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>