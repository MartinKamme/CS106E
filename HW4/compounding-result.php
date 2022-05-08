<!DOCTYPE html>
<head>
<meta charset="UTF-8" />
<title>Compound Interest</title>
</head>
<body>
<h1>Compound Interest</h1>

<?php

$amount = $_POST['amount'];
$rate = $_POST['rate'];
$years = $_POST['years'];

$result = $amount * POW((1 + $rate / 100), $years);

print '<p>$' . $amount . ' invested for ' . $years . ' years at ' .$rate . '% interest will result in: $' . number_format($result,2) . '</p>';

?>
</body>
</html>
