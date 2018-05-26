<?php
$dsn = "mysql:host=localhost;dbname=6305048";
$db = new PDO($dsn, "root", " ");

$rs = $db->query("SELECT * FROM users WHERE account = 'user'");

$result = $rs->fetch();
print_r($result);
?>