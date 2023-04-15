<?php 
  session_start();
  require "./authentication.php";
  require "../../config/config.php";
?>
<?php include "../header/header_admin.php"; ?>
<?php include "../header/navbar_admin.php"; ?>  
<?php 
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $sql_get = "SELECT * FROM notifications WHERE id = $id";
        $query_get = mysqli_query($conn, $sql_get);
        if(mysqli_num_rows($query_get) <= 0){
            echo "<p class='text-center fw-bold fs-6 text-secondary'>Không tìm thấy thông báo</p>";
            die();
        }
        $row = mysqli_fetch_assoc($query_get);
    }
?>
<div class="container p-5">
    <h2 class="mb-3">Chi tiết thông báo</h2>
    <div class="p-5">
        <h3 class="text-secondary fw-bold mb-3"><?php echo $row['title']; ?></h3>
        <p class="p-1"><?php echo $row['content']; ?></p>
    </div>
</div>
<?php include "../header/header_admin.php"; ?>