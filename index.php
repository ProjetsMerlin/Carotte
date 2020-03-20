<?php
require_once('vendor/carotte/function.php');
$csv_url = "csv/carotte.csv";
echo csv_to_variable($csv_url);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Carotte</title>
</head>
<body>
  <h1>Carotte</h1>
<?php
echo $lang["nom"]["nl"];
?>
</body>
</html>