<?php

// Session 0 File
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color:red">
<?php
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
?>
</body>
</html>