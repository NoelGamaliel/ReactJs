<?php
    // creation the variable for data based ;
    $servername = "localhost";
    $mybdd = "vote";
    $username = "root";
    $password= "";

    try {
        $conn =  new PDO("mysql:host=$servername;dbname=vote", $username, $password); // code for confirm the connection of data based ;
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // echo "Connected successfully";

    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();                              // if no conneted to daba based ;
    }
?>