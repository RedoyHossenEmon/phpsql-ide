<?php
include 'config.php';


if($_REQUEST['fName'] && $_REQUEST['lName'] && $_REQUEST['email'] &&$_REQUEST['pwd']){
$fname = $_REQUEST['fName'];
$lname = $_REQUEST['lName'];
$email = $_REQUEST['email'];
$pwd = $_REQUEST['pwd'];

echo $fname." $lname";
$sql = "INSERT INTO userInfo (fname,lname,email,pwd) VALUES ('$fname', '$lname', '$email', '$pwd')";
mysqli_query($conn, $sql);
header('location: usertable.php');

}else{ echo "data not found";
}

?>