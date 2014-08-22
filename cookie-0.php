<?php
$expiration = time()+60*60*60*24*30;
setcookie('username', 'john', $expiration);
setcookie('email', 'john@doe.ph', $expiration);

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
?>