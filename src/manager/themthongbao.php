<?php 
  session_start();
  require "./authentication.php";
?>
<?php include "../header/header_admin.php"; ?>
<?php include "../header/navbar_admin.php"; ?>
<?php 
  require "../../config/config.php";
  if(isset($_POST["submit"])){
    $title = $_POST["title"];
    $content = $_POST["content"];
    $sql = "INSERT INTO notifications(title, content) VALUES ('$title', '$content')";
    $query = mysqli_query($conn, $sql);
    if($query > 0){
      $_SESSION["inf_"] = "Thêm thông báo thành công";
    }else{
      $_SESSION["inf_"] = "Thêm thông báo thất bại";
    }

  }
?>
<div class="container p-5">
    <h2 class="mb-3">Thêm thông báo</h2>
    <p class="text-center fs-6 fw-bold text-secondary">
      <?php 
        if(isset($_SESSION["inf_"])){
          echo $_SESSION["inf_"];
        }
        unset($_SESSION["inf_"]);
      ?>
    </p>
    <form action="" method="post" class="p-5">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"><b>Tiêu đề</b></label>
        <input type="text" class="form-control" name="title">
        <div id="emailHelp" class="form-text">Tiêu đề của thông báo</div>
      </div>
      <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Leave a comment here" name="content" id="floatingTextarea2" style="height: 200px"></textarea>
        <label for="floatingTextarea2" style="color: #95a5a6;"><b>Nội dung thông báo</b></label>
      </div>
      <button type="submit" class="btn btn-warning text-white fw-medium text-sm-start" name="submit">Lưu</button>
    </form>
</div>
<?php include "../header/header_admin.php"; ?>