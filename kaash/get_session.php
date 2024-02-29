<?php
session_start();
echo "Welcome". $_SESSION['USER'];
echo "<br> Your favorite category is ". $_SESSION['favcat'];

echo "<br>";

?>