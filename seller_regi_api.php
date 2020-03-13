<?php

$name=$_POST["name"];
$address=$_POST["address"];
$contact=$_POST["contact"];
$username=$_POST["user"];
$password=$_POST["user"];
$ServerName="localhost";
$DbUserName="root";
$DbPassword="";
$DBName="admin";
$connection=new mysqli($ServerName,$DbUserName,$DbPassword,$DBName);
$sql="INSERT INTO `seller`( `name`, `address`, `contact number`, `username`, `password`) 
VALUES ('$name','$address','$contact','$username','$password')";
$result=$connection->query($sql);
    if($result===TRUE)
    {
         
        $r["status"]="Registration success";
    }
    else
    {
        $r["status"]="error";
    }
    echo json_encode($r);
}

?>