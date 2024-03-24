<?php	

	// Connect to server and select database
    $mysqli = new mysqli("localhost","root","","databaselogbook5");

    //Update Query
    $sql = "UPDATE test SET name ='{$_POST["txtname"]}',
     email = '{$_POST["txtemail"]}',
     phone_number = '{$_POST["txttelno"]}'
     WHERE ID = '{$_GET["id"]}';";
         echo $sql;


    //Execute Query
    $result = $mysqli -> query($sql); 

    if ($result) {
        echo "Saved Successfully!";
    }
?>

