<?php
$dsn = "mysql:host=192.168.32.90;dbname=dbname01";
$db = new PDO($dsn, "dbname01", "dbname@pwd");

$rs = $db->query("SELECT * FROM users WHERE account = 'user'");

$result = $rs->fetch();
$a = $_POST['account'];
$b = $_POST['password'];
if($a === $result['account']&& $b === $result['password'])
	echo "輸入正確";
else
	echo "輸入錯誤";
?>