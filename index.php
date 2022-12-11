<?php 
include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>final project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<form class=" my-4 container col-6" method="post" action="dbadd.php">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">First Name</label>
        <input name="fName" type="text" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">Last Name</label>
            <input name="lName" type="text" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email" type="text" class="form-control" id="exampleInputEmail1">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="pwd" type="password" class="form-control" id="exampleInputPassword1">
        </div>
 
  <button name="submit" type="submit" class="btn btn-primary col-12">Submit</button>
</form>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>