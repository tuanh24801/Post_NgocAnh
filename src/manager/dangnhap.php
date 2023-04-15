<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="./login.css">
<!------ Include the above in your HEAD tag ---------->
<?php session_start(); ?>
<?php 
    require "../../config/config.php";
    if(isset($_POST["login_auth"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $sql = "SELECT * FROM accounts WHERE username = '$username' AND password = md5('$password')";
        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query) > 0){
            $_SESSION["admin_login"] = "success";
            header("location: index.php");
        }else{
            $_SESSION["inf"] = "Tài khoản hoặc mật khẩu không chính xác";
        }

    }
?>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first mb-5">
      <img src="../../assets/logo.png" id="icon" alt="User Icon" />
    </div>
    <h5 class="mb-3 text-secondary"><b>Admin đăng nhập</b></h5>
    <p class="text-secondary text-sm"> <?php 
        if(isset($_SESSION["inf"])){
            echo $_SESSION["inf"];
            unset($_SESSION["inf"]);
        }else{
            echo " ";
        }
    ?></p>
    <!-- Login Form -->
    <form method="post" action="">
      <input type="text" id="login" class="fadeIn second text-start" name="username" placeholder="tài khoản...">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Mật khẩu...">
      <!-- <button type="submit" class="fadeIn fourth">đăng nhập</button> -->
      <input type="submit" class="fadeIn fourth" value="đăng nhập" name="login_auth">
    </form>
  </div>
</div>
