<?php
$name = "Mushraf";
echo $name . "<br>"; // Output: Mushraf

$age = 19;
echo $age . "<br>"; // Output: 19

$price = 19.99;
echo $price . "<br>"; // Output: 19.99

$isStudent = true;
echo $isStudent . "<br>"; // Output: 1 (true is displayed as 1)

$colors = array("Red", "Green", "Blue");
echo $colors[0] . "<br>"; // Output: Red

//Mini project
$food = "Sandwich";
$foodprice = 3.99;
$quantity = 3;
$totalQuantity = $quantity * $foodprice;
echo "You have ordered $quantity $food <br>";
echo "Your total is: $$totalQuantity";
