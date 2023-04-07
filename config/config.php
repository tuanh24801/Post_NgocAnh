<?php 
    // host, username, password, dbname, port, socket
    $HOST = 'localhost';
    $USERNAME = 'root';
    $PASSWORD = "";
    $DB = "post_db";
    $conn = mysqli_connect($HOST,$USERNAME,$PASSWORD,$DB);

    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      exit();
    }
?>