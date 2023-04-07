<?php 
    session_start();
    require "../../config/config.php";
    if(!isset($_POST['submit'])){
        die();
    }
    $title = $_POST['title'];
    $img_title = explode(".", $_FILES["img_title"]["name"]);
    $img_title_new = round(microtime(true)) . '.' . end($img_title);
    $content = $_POST['content'];
    $content = trim($content);
    $interact = 0;
    $target_dir = "./img-titles/";
    $target_file = $target_dir.$img_title_new;
    if(!move_uploaded_file($_FILES["img_title"]["tmp_name"], $target_file)){
        $_SESSION["notif"] = "Không thêm được ảnh";
    }
    $sql_add_post = "INSERT INTO post(title, img_title, content, interact) VALUES('$title', '$img_title_new', '$content', '$interact')";
    $result = mysqli_query($conn,$sql_add_post);
    if($result > 0){
        $_SESSION["notif"] = "Đăng bài thành công";
        header('location: index.php');
    }


?>