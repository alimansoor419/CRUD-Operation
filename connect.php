<?php
$con= new mysqli('localhost','root','zohan','crud-operation');
if(!$con)
{
    die(mysqli_error($con));
}
