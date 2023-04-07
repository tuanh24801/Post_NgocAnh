<?php 
    require "../../config/config.php";
    $num = $_POST['interact'];
    $id = $_POST['id'];
    $sql_update_interact = "UPDATE post SET interact=interact+1 WHERE id=$id";
    $query = mysqli_query($conn,$sql_update_interact);
    if($query >= 0){
        $sql_get_interact = "SELECT * FROM post WHERE id=$id";
        $query = mysqli_query($conn,$sql_get_interact);
        $row = mysqli_fetch_assoc($query);
        echo $row["interact"];
    }
?>