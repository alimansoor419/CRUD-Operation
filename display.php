<?php
include 'connect.php'
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
  </head>
  <body>
    <button class="btn-primary my-5"><a href="user.php" class="text-light"> Add User</a></button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php

  $sql=" SELECT * FROM  `crud`";
  $result= mysqli_query($con,$sql);
  if($result)
  {
  while($row= mysqli_fetch_assoc($result))
  {
    $id=$row['id'];
    $name=$row['name'];
    $email=$row['email'];
    $mobile=$row['mobile'];

      echo'
      <tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>
        <button class="btn btn-primary" name="update"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
        <button class="btn btn-danger" name="update"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
      </td>
        </tr>

      ';
  }
  }



    ?>

  </tbody>
</table>
  </body>
</html>
