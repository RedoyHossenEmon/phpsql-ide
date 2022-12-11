

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all user list</title>
   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->

</head>
<body>
    

<table class="container col-md-6 my-4 table table-primary table-striped">
<thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">id</th>
      <th scope="col">Email Address</th>
      <th scope="col">Password</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
   
    <?php

include 'config.php';

if(isset($_REQUEST['deleted'])){
  echo '<div class="alert alert-success" role="alert">
  Successfully deleted !
</div>';
}


$sql = "SELECT * FROM userInfo";
$usrList = mysqli_query($conn, $sql);
$num=  1;
echo "<pre>";
// echo mysqli_fetch_assoc($usrList);
while( $row= mysqli_fetch_assoc($usrList)){
    ?>
   <tr>

   <th scope='row'><?php echo $num; $num++?> </th>
  
    <td> <?php echo $row['fname'];?> </td>
    <td> <?php echo $row['lname'];?> </td>
    <th> <?php echo $row['id'];?> </th>
    <td> <?php echo $row['email'];?> </td>
    <td> <?php echo $row['pwd'];?> </td>
    <td> 
       <a href="edit.php?edid=<?php echo $row['id']?>">Edit</a>    ||   
       <a onclick="return confirm('Are you sure')" href="delete.php?id=<?php echo $row['id']?>">Delete</a>        
</td>



    </tr>
<?php
};
?>
   </tbody>

</table>
<a class="btn btn-primary" href="index.php"> add new user</a>



<!-- 
<script>
 
</script> -->
<script type="text/javascript">  setTimeout(() => {
  document.querySelector(".alert").style.display="none";
}, 3000); </script>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->

</body>
</html>