<?php


$username=$_POST["user"];
$password=$_POST["pass"];
$ServerName="localhost";
$DbUserName="root";
$DbPassword="";
$DBName="admin";
$connection=new mysqli($ServerName,$DbUserName,$DbPassword,$DBName);
$sql="SELECT `id`, `name`, `address`, `contact number`, `username`, `password`
 FROM `buyer` WHERE `username`='$username' AND `password`='$password'";
  $result=$connection->query($sql);
  if($result->num_rows>0)
  {

  }
  else
  {

  }
?>