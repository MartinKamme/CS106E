<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Party Planning</title>
</head>
<body>
<h1>RSVPs So Far</h1>

<?php
$db = new PDO("sqlite:party.db");

$result = $db->query("SELECT * FROM party;");

foreach ($result as $row) {
	print $row['name'] . ' is bringing ' . $row['bringing'] . '<br />';
}
?>
</body>
</html>