<?php
header("Content-type: image/jpeg");

$db = mysqli_connect("localhost", "root", "", "databaselogbook5");

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT Image FROM monster WHERE id='" . $_GET["id"] ."';";

$result = mysqli_query($db, $sql);
if (!$result) {
    die("Error in SQL query: " . mysqli_error($db));
}

$row = mysqli_fetch_array($result);
$jpg = $row["Image"];

echo $jpg;

mysqli_close($db);
?>
