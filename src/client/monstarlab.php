<?php include "../header/header_client.php";?>
<?php include "../header/navbar_client.php";?>
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
    <div class="search_add_">
        <div>
          <a href="thembaiviet.php" class=" mt-3 btn btn-warning fw-medium text-white add_dd">Thêm bài viết</a>
        </div>
      
        <div>
          <form action="" method="get" class="search__">
            <input class="form-control py-2 border-right-0 border" type="search" name="search" id="example-search-input" 
            value="<?php echo (isset($_GET['search'])) ? $_GET['search'] : '' ?>">
            <span class="input-group-append">
              <button class="btn btn-outline-secondary border-left-0 border" type="submit">
                  <i class="fa fa-search"></i>
              </button>
            </span>
          </form>
        </div>
      
    </div>
    
    <table class="table table-hover mt-4">
        <tbody>
            <?php 
                require "../../config/config.php";
                $WHERE = " ";
                if(isset($_GET['search'])){
                  $_search = $_GET['search'];
                  $WHERE = " WHERE title LIKE '%$_search%'";
                }
                $sql = "SELECT * FROM forum_posts ".$WHERE;
                $query = mysqli_query($conn, $sql);
                if(mysqli_num_rows($query) <= 0){
                  echo "<p class='text-center fw-bold fs-6 text-secondary'>Không có bài viết nào</p>";
                }
                while ($row = mysqli_fetch_assoc($query)){
                    ?>
                        <tr>
                            <td class="p-3 ">
                                <a href="chitietbaiviet.php?id=<?php echo $row['id']; ?>" class="text-secondary fw-bold text text-decoration-none">
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
<?php include "../footer/footer_client.php";?>