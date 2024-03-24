<?php	

	// Connect to server and select database
    $mysqli = new mysqli("localhost","root","","databaselogbook5");

    //Update Query
    $sql = "DELETE FROM test WHERE ID = '{$_GET["id"]}';";
         echo $sql;


    //Execute Query
    $result = $mysqli -> query($sql);

    if ($result) {
        echo "Deleted Successfully!";
    }


?>
