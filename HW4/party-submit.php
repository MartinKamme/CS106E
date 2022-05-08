<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Party Planning</title>
</head>
<body>
<h1>Thank You</h1>
<p>We're looking forward to seeing you!</p>

<?php
$name = $_POST['name'];
$bringing = $_POST['bringing'];

$db = new PDO("sqlite:party.db");

$db->exec('INSERT INTO party VALUES("' . $name . '","' . $bringing . '");');
?>
</body>
</html>