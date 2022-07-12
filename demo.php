<?php

echo "<h1 style='color:green;text-align: center '> THANKS FOR SUBMITTING 👍</h1>";
$insert = false;
if (isset($_POST['name'])) {
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if (!$con) {
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $id = $_POST['id'];
    $level = $_POST['level'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['issue'];
    $sql = "INSERT INTO `game`.`game` (`name`, `id`, `level`,  `email`, `phone`, `issue`) VALUES ('$name', '$id', '$level',  '$email', '$phone', '$desc');";
    // echo $sql;

    // Execute the query
    if ($con->query($sql) == true) {
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    } else {
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}