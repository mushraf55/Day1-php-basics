<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POST method in php</title>
</head>

<body>
  <form action="postMethod.php" method="post">
    <h1>Summary</h1>
    <label for="">Enter the quantity</label> <br>
    <input type="text" name="quantity"> <br>
    <input type="submit">
  </form>
</body>

</html>

<?php
$food = "Burger";
$price = 2.99;
$total = null;

$subtotal =  $_POST["quantity"];
echo "You ordered $subtotal  $food <br>";
$total = $subtotal * $price;
echo "Your total is $$total";
?>