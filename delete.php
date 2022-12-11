<?php
include 'config.php';
if($_REQUEST['id']){
$delid = $_REQUEST['id'];

 $sql = "DELETE FROM userInfo WHERE id= $delid";
mysqli_query($conn, $sql);
header('location: usertable.php?deleted');
}else{echo 'Somthing is Wrong !';}
?>