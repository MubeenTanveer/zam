<?php
session_start();
$ROUTE='../../../';
include('../../../config/db_connect.php');
$data=array();
$email=$_POST['email'];
$password=$_POST['password'];

$query=mysqli_query($connect,"SELECT * FROM userdata WHERE email='$email' AND password='$password' AND status='active';");
$row=mysqli_fetch_assoc($query);
if ($query) {
    $data['status']=1;
    $data['username']=$row['username'];
    $_SESSION['username']=$row['username'];
}
else{
    $data['status']=0;
}

echo json_encode($data);
mysqli_close($connect);

?>