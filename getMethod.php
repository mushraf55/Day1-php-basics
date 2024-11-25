<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET method in php</title>
</head>

<body>
  <form action="getMethod.php" method="get">
    <h1>User Authentication using GET method</h1>
    <label for="">Username</label> <br>
    <input type="text" name="username"> <br>
    <label for="">Password</label> <br>
    <input type="password" name="password"> <br>
    <input type="submit">
  </form>
</body>

</html>

<?php
echo $_GET["username"] . "<br>";
echo $_GET["password"] . "<br>";
?>