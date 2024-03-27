<?php
  
  // Connected to the database

  $db = mysqli_connect("localhost", "root", "", "databaselogbook5");


// The monster image and audio files
$image = $_FILES['monsterimage']['tmp_name']; 
$audio = $_FILES['monsteraudio']['tmp_name'];

  // The image and audio binary data
  $imagedata = addslashes(fread(fopen($image, "r"), filesize($image)));
  $audiodata = addslashes(fread(fopen($audio, "r"), filesize($audio)));
   
 //Insert in the monster table
  $sql = "INSERT INTO monster";
  $sql .= "(name, image, audio) ";
  $sql .= "VALUES ('$_POST[txtname]', '$imagedata','$audiodata');";

  $result = mysqli_query($db,$sql);

?>
