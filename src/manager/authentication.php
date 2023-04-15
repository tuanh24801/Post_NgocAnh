<?php 
    // session_start();
    if(!isset($_SESSION["admin_login"])){
        $_SESSION["inf"] = "Bạn chưa đăng nhập";
        header("location: ./dangnhap.php");
    }
    // echo "có à";
?>