<?php 
    require "../../config/config.php";
    $sql_get_all_post = "SELECT * FROM post";
    $query = mysqli_query($conn,$sql_get_all_post);
    while($row = mysqli_fetch_assoc($query)){
        ?>
        <div class="post">
            <a href="./post_details.php?id=<?php echo $row['id']?>">
              <div class="post-img">
                <img
                  src="../manager/img-titles/<?php echo $row['img_title']?>"
                  class="img-fluid rounded-start"
                  alt="..."
                />
              </div>
              <div class="post-content">
                <p class="post-title">
                    <?php echo $row['title']?>
                </p>
                <p class="post-date"><?php echo $row['date']?></p>
                <p class="post-detail">xem chi tiết</p>
              </div>
            </a>
          </div>
        <?php
    }
?>