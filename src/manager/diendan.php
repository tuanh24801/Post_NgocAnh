<?php 
  session_start();
  require "./authentication.php";
?>
<?php include "../header/header_admin.php"; ?>
<?php include "../header/navbar_admin.php"; ?>
<div class="container p-5">
    <h2 class="" class="text-secondary mb-4"><b>Thông báo</b></h2>
    <div class="list-group mt-4 mb-5">
    <?php 
      require "../../config/config.php";
      $sql = "SELECT * FROM notifications";
      $query = mysqli_query($conn, $sql);
      if(mysqli_num_rows($query) <= 0){
        echo "<p class='text-center fw-bold fs-6 text-secondary'>Không có thông báo nào</p>";
      }
      while($row = mysqli_fetch_assoc($query)){
        ?>
          <b class="hover_list_tb">
            <a href="chitietthongbao.php?id=<?php echo $row['id']; ?>" 
                class="list-group-item list-group-item-action p-3 text-primary "
                >
              <?php echo $row['title']; ?>
            </a>
          </b>
        <?php
      }
    ?>
    </div>
    <h2 class="" class="text-secondary mb-3"><b>Diễn đàn</b></h2>    
    <table class="table table-hover mt-4">
        <tbody>
            <?php 
                require "../../config/config.php";
                $sql = "SELECT * FROM forum_posts";
                $query = mysqli_query($conn, $sql);
                if(mysqli_num_rows($query) <= 0){
                  echo "<p class='text-center fw-bold fs-6 text-secondary'>Không có bài viết nào</p>";
                }
                while ($row = mysqli_fetch_assoc($query)){
                    ?>
                        <tr>
                            <td class="p-3 ">
                                <a href="chitietbaiviet_forum.php?id=<?php echo $row['id']; ?>" class="text-secondary fw-bold text text-decoration-none">
                                    <?php echo $row["title"]; ?>
                                </a>
                            </td>
                            <td width="20%" class="p-3 text-secondary ">Chủ đề: <?php echo $row["category"]; ?></td>
                            <td width="17%" class="p-3 text-secondary ">
                                <p>Người đăng: <b><?php echo $row["poster"]; ?></b></p>
                                <p style="font-size: 14px;"><?php echo $row["date"]; ?></p>
                            </td>
                        </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
</div>
<?php include "../header/header_admin.php"; ?>