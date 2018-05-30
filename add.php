<?php
$dsn = "mysql:host=localhost;dbname=6305048";
$db = new PDO($dsn, "root", "");

$rs = $db->query("SELECT * FROM users WHERE account = 'user'");

$result = $rs->fetch();
$a = $_POST['account'];
$b = $_POST['password'];
$sql ="INSERT INTO users (id, account, password, points) VALUES (NULL,'"//.$_POST['account']."', '".$_POST['password']."', '0')";

$conn->close();
?>