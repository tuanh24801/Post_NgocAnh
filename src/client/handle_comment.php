<?php 
    require "../../config/config.php";
    session_start();
    if(!isset($_POST["submit"])){
        echo "Lỗi xảy ra khi thêm comment";
        die();
    }
    $user_comment = [
        1 => ["Cáo Ẩn Danh", "cao.png"],
        2 => ["Chim cánh cụt Ẩn Danh", "chimcanhcut.png"],
        3 => ["Gấu Ẩn Danh", "gau.png"],
        4 => ["Ong Vàng Ẩn Danh", "ong.png"],
        5 => ["Tuần Lộc Ẩn Danh", "tuanloc.png"],
        6 => ["Vịt trắng Ẩn Danh", "vit.png"],
    ];
    $rand = rand(1,6);
    $name =  $user_comment[$rand][0];
    $avatar = $user_comment[$rand][1];
    $id = $_POST["id"];
    $content = $_POST["comment"];

    $sql_add_comment = "INSERT INTO comment(name,content, post_id, avatar) VALUES('$name','$content','$id','$avatar')";
    $query = mysqli_query($conn,$sql_add_comment);
    if($query > 0){
        header('location: post_details.php?id='.$id);
    }
?>
