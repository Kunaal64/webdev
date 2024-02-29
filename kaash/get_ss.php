<?php
  session_start();
if(isset($_SESSION['USER'])){
echo "<h1>Hello ".$_SESSION['USER']." you are ".$_SESSION['age']." years old</h1>";
}
else{
echo "<h1>you are logout</h1>";
}


?>