<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<FOrm method="POST">
<center><b>ADMIN</b></center>
    <Table class="table">
    
    <TR>
    <td>
Username
    </td>
    <td>
    <input type="text" class="form-control" name="username">
    </td>
    </TR>
    <br>
    <tr>
    <td>
    Password
    </td>
    <td>
    <input type="text" class="form-control" name="password" type="password">
    </td>
    </tr>
    <tr>
    <td>
    </td>
    <td><button class="btn btn-danger" name="getSubmit">LOGIN</button></td>
    </tr>
    </Table>
    </FOrm>
</body>
</html>
<?php
if(isset($_POST["getSubmit"]))
{
    $username=$_POST["username"];
    $password=$_POST["password"];
    $ServerName="localhost";
    $DbUserName="root";
    $DbPassword="";
    $DBName="admindb";
    $connection=new mysqli($ServerName,$DbUserName,$DbPassword,$DBName);
    $sql="SELECT `id`, `username`, `password` FROM `admin` WHERE `username`='$username' AND
     `password`='$password'";
    $result=$connection->query($sql);
    if($result->num_rows>0)
    {
        header('Location:admin_moniter.php');
    }
    else
    {
        echo "Incorrect Password";
    }
}
?>