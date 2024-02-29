<html>
<body>
<?php
if(isset($_COOKIE["user1"])) {
echo "Hello you are old client ".$_COOKIE["user1"];
}
else {
echo "Hello you are new client ".$_COOKIE["user1"];
}
?>
</body>
</html>