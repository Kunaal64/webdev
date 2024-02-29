<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "projectDB";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$spec=$_POST["spec"];
$name=$_POST["name"];
$phoneno=$_POST["phoneno"];
$add=$_POST["address"];
$sql = "INSERT INTO projdata (Name,Phoneno,Address,Specs) VALUES ('$name','$phoneno','$add','$spec')";

if ($conn->query($sql) === TRUE) {
  echo "Order placed successfully.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="home" style="margin-inline:auto;text-decoration:none;">
    <a href="finalpage1.html">Explore More</a>
  </div>
</body>
</html>