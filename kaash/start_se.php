<?php
  session_start();
$_SESSION['USER']="KUNAL";
$_SESSION['age']=18;

echo "<h1>Hello ".$_SESSION['USER']." you are ".$_SESSION['age']." old</h1>";

?>
