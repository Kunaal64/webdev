<?php
  session_start();
session_unset();
session_destroy();
echo "<h1>You are logout<br> Please login to continue</h1>";

?>