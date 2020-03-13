<!DOCTYPE html>
<html lang="en">
<head>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item active">
            <a class="nav-link" href="admin_moniter.php">View Product</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="order.php">View Order</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="buyer.php">View Buyer</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="seller.php">View Seller</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="admin_moniter.php">Logout</a>
            </li>
        </ul>
        </nav>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_Moniter</title>

</head>
<body>
<form method="POST">
<center><b>Product</b></center>
<br>
<br>
</form>

    
</body>
</html>
<?php
 $ServerName="localhost";
 $DbUserName="root";
 $DbPassword="";
 $DBName="admindb";
 $connection=new mysqli($ServerName,$DbUserName,$DbPassword,$DBName);
 $sql="SELECT `product name`, `type`, `seller id`, `price`, `quantity` FROM `product`
  WHERE 1";
 $result=$connection->query($sql);
 if($result->num_rows>0)
 {
while($row=$result->fetch_assoc())
{
$name=$row["product name"];
$type=$row["type"];
$seller=$row["seller id"];
$price=$row["price"];
$quantity=$row["quantity"];
echo "<table class='table' border='2'>
<tr ><td class='form-control'>$name</td></tr>
<tr ><td>Type</td><td class='form-control'>$type</td></tr>
<tr ><td>Seller id</td><td class='form-control'>$seller</td></tr>
<tr ><td>Price</td><td class='form-control'>$price</td></tr>
<tr ><td>Quantity</td><td class='form-control'>$quantity</td></tr>

</table>";
}
 }
 else
 {
   echo "no entry";
 }
?>