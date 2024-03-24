<?php include("class_lib.php"); ?>
<?php
        $stef= new person();
        $jim = new person();

        $stef->set_name("Stef Mis");
        $jim->set_name("Nick Wadd");

        echo "Stefs full name: " . $stef->get_name() . "<br>";
        echo "Nick full name: " . $jim->get_name(). "<br>";

?>