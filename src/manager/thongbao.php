<?php 
  session_start();
  require "./authentication.php";
  require "../../config/config.php";
?>
<?php include "../header/header_admin.php"; ?>
<?php include "../header/navbar_admin.php"; ?>  
<div class="container p-5">
  <h2 class="" class="text-secondary mb-5"><b>Thông báo</b></h2>
    <p class="text-center fw-bold text-secondary">
      <?php 
        if(isset($_SESSION["notif"])){
          echo $_SESSION["notif"];
          unset($_SESSION["notif"]);
        }
      ?>
    </p>
    <a class="btn btn-warning mb-4 text-white fw-medium text-sm-start mt-3" href="themthongbao.php" style="font-size: 12px">Thêm thông báo</a>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Thông báo</th>
          <th scope="col" class="text-center">Chi tiết</th>
          <th scope="col" class="text-center">Thao tác</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $sql = "SELECT * FROM notifications";
          $query = mysqli_query($conn, $sql);
          if(mysqli_num_rows($query) <= 0){
            echo "<p class='text-center fw-bold fs-6 text-secondary'>Không có thông báo nào</p>";
            die();
          }
          $i = 0;
          while($row = mysqli_fetch_assoc($query)){
            $i++;
            ?>
              <tr>
                <th width="5%" scope="row"><?php echo $i; ?></th>
                <td><b class="text-secondary"><?php echo $row['title']; ?></b></td>
                <td width="10%" class="text-center">
                  <a href="chitietthongbao.php?id=<?php echo $row['id']; ?>" title="Chi tiết"><i class="fa-solid fa-circle-info"></i></a>
                </td>
                <td width="12%" class="text-center">
                  <a href="chinhsuathongbao.php?id=<?php echo $row['id']; ?>" title="Chỉnh sửa" class="text-secondary me-3"><i class="fa-solid fa-pen-to-square"></i></a>
                  <a href="xoathongbao.php?id=<?php echo $row['id']; ?>" class="text-danger" title="Xóa"><i class="fa-solid fa-trash"></i></a>
                </td>
              </tr>
            <?php
          }
        ?>
      </tbody>
    </table>
</div>
<?php include "../header/header_admin.php"; ?>