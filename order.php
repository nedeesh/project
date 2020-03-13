<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>

</head>
<body>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <ul class="navbar-nav">
           
            <li class="nav-item">
            <a class="nav-link" href="admin_moniter.php">View Product</a>
            </li>
            <li class="nav-item active">
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
<form method="POST">
<center><b>Order</b></center>
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
 $sql="SELECT `id`, `product id`, `buyer id`, `amount`, `date`, `transaction id` FROM
  `order` WHERE 1";
 $result=$connection->query($sql);
 if($result->num_rows>0)
 {
while($row=$result->fetch_assoc())
{
$Product=$row["product id"];
$buyer=$row["buyer id"];
$amount=$row["amount"];
$date=$row["date"];
$transaction=$row["transaction id"];
echo "<table class='table' border='2'>
<tr ><td>Product ID</td><td class='form-control'>$Product</td></tr>
<tr ><td>Buyer ID</td><td class='form-control'>$buyer</td></tr>
<tr ><td>Amount</td><td class='form-control'>$amount</td></tr>
<tr ><td>Date</td><td class='form-control'>$date</td></tr>
<tr ><td>Transaction ID</td><td class='form-control'>$transaction</td></tr>

</table>";
}
 }
 else
 {
   echo "no entry";
 }
?>