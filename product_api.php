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
$sql="INSERT INTO `product`(`id`, `product name`, `type`, `seller id`, `price`, `quantity`) 
VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])";
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