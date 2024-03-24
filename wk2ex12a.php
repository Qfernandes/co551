<?php
$mymarks["year 1"] = 55;
$mymarks["year 2"] = 65;
$mymarks["year 3"] = 75;
?>

<html>
<head>
<title>Data </title>
</head>
<body>

<table border=1 align="center">
<tr><th>Year</th><th>Marks</th></tr> 

<?php
  foreach($mymarks as $year => $marks) {
    echo "<tr><td>$year</td><td>$marks</td></tr>";
}
?>
</table>
</body>
</html>