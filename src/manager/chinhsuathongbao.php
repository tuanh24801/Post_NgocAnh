<?php 
  session_start();
  require "./authentication.php";
?>
<?php include "../header/header_admin.php"; ?>
<?php include "../header/navbar_admin.php"; ?>
<?php 
  require "../../config/config.php";

  if(isset($_POST["submit"])){
    $id = $_GET["id"];
    $title = $_POST["title"];
    $content = $_POST["content"];
    $sql = "UPDATE notifications SET title = '$title', content = '$content' WHERE id = '$id'";
    $query = mysqli_query($conn, $sql);
    if($query > 0){
      $_SESSION["inf_"] = "Sửa thông báo thành công !!!";
    }else{
      $_SESSION["inf_"] = "Sửa thông báo thất bại :((";
    }
  }

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
    <h2 class="mb-3">Chỉnh sửa thông báo</h2>
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
        <label for="exampleInputEmail1" class="form-label">Tiêu đề</label>
        <input type="text" class="form-control" name="title" value="<?php echo $row['title']; ?>">
        <div id="emailHelp" class="form-text">Tiêu đề của thông báo</div>
      </div>
      <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Leave a comment here" name="content" id="floatingTextarea2" style="height: 200px" ><?php echo $row['content']; ?></textarea>
        <label for="floatingTextarea2" style="color: #95a5a6;">Nội dung thông báo</label>
      </div>
      <button type="submit" class="btn btn-warning text-white fw-medium text-sm-start" name="submit">Sửa</button>
    </form>
</div>
<?php include "../header/header_admin.php"; ?>