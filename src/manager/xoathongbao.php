<?php 
    session_start();
    require "./authentication.php";
    require "../../config/config.php";
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $sql = "DELETE FROM notifications WHERE id = $id";
        $query = mysqli_query($conn,$sql);
        if($query > 0){
            $_SESSION["notif"] = "Xóa thông báo thành công !!!";
        }else{
            $_SESSION["notif"] = "Xóa thông báo gặp lỗi :(((";
        }
        header("Location: thongbao.php");
    }
?>