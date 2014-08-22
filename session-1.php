<?php
// Session 0 File
session_start();
function get_average() {
	return ($_SESSION['grades']['prelim']
			+ $_SESSION['grades']['midterm']
			+ $_SESSION['grades']['final']) / 3;
}
$average = round(get_average(), 2);
$_SESSION['grades']['average'] = $average;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color:pink">
<h1>Welcome <?=ucfirst($_SESSION['username'])?></h1>
<table border="1">
	<tr>
		<th>Prelim</th>
		<th>Midterm</th>
		<th>Final</th>
		<th>Average Grade</th>
	</tr>
	<tr>
		<td><?= $_SESSION['grades']['prelim'] ?></td>
		<td><?= $_SESSION['grades']['midterm'] ?></td>
		<td><?= $_SESSION['grades']['final'] ?></td>
		<td><?= $average ?></td>
	</tr>
</table>
</body>
</html>