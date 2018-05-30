<?php
$dsn = "mysql:host=localhost;dbname=6305048";
$db = new PDO($dsn, "root", "");

$rs = $db->query("SELECT * FROM users WHERE account = 'user'");

$result = $rs->fetch();
$a = $_POST['account'];
$b = $_POST['password'];
if($a === $result['account']&& $b === $result['password'])
	echo "輸入正確";
else
	echo "輸入錯誤";
?>