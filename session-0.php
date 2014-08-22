<?php

// Session 0 File
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color:yellow">
<?php

$_SESSION['username'] = 'peter';
$_SESSION['email'] = 'peter@doe.ph';
$_SESSION['id'] = 456;
$_SESSION['grades'] = array('prelim' => 96,
							'midterm' => 95,
							'final' => 98);

echo '<pre>';
print_r($_SESSION);
echo '</pre>';
?>
</body>
</html>