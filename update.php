<?php
include 'connect.php';
$id=$_GET['updateid'];
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $sql="update `crud` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id ";
    $result=mysqli_query($con,$sql);

    if($result)
    {
        // echo"Data updated    Sucessfully";
        header('location:display.php');
    }
    else{
        die(mysqli_error($con));  #to show what is the error and where it is 
    }
}
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
    <div class="continer my-5 mx-5" >
    <form method="post" >
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control"  placeholder="Enter Your Name" name="name" autocomplete="Off">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control"  placeholder="Enter Your Email" name="email" autocomplete="Off">
  </div>
  <div class="form-group">
    <label>Mobile</label>
    <input type="number" class="form-control"  placeholder="Enter Your Mobile Number" name="mobile"  autocomplete="Off">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control"  placeholder="Enter Your Password" name="password" autocomplete="Off" >
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>
</html>