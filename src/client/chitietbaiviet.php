<?php include "../header/header_client.php";?>
<?php include "../header/navbar_client.php";?>
<?php 
    require "../../config/config.php";
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $sql_get = "SELECT * FROM forum_posts WHERE id = $id";
        $query_get = mysqli_query($conn, $sql_get);
        if(mysqli_num_rows($query_get) <= 0){
            echo "<p class='text-center fw-bold fs-6 text-secondary'>Không tìm thấy bài viết</p>";
            die();
        }
        $row = mysqli_fetch_assoc($query_get);
    }

    if(isset($_POST["submit"])){
        $commentator = $_POST["commentator"];
        $content = $_POST["content"];
        $forum_posts_id = $id;
        $sql = "INSERT INTO forum_comment(content, commentator, forum_posts_id) VALUES ('$content', '$commentator', '$id')";
        $query = mysqli_query($conn, $sql);
    }
?>
<div class="container p-5">
    <h2 class="mb-3">Chi tiết bài viết</h2>
    <div class="p-5">
        <div class="content">
            <h3 class="text-secondary fw-bold mb-3"><?php echo $row['title']; ?></h3>
            <p class="p-1 "><?php echo $row['content']; ?></p>
            <p class="text-secondary p-1 mt-5">Tác giả: <?php echo $row['poster']; ?></p>
            <p class="text-secondary p-1">Chủ đề: <?php echo $row['category']; ?></p>
        </div>
        <div class="comments mt-5 border-top border-2 p-3">
            <h4 class="text-secondary fw-bold mb-5">Bình luận</h4>
            <?php 
                 $sql_cmt = "SELECT * FROM forum_comment WHERE forum_posts_id = $id";
                 $query_cmt = mysqli_query($conn, $sql_cmt);
                 if(mysqli_num_rows($query_cmt) <= 0){
                    ?>
                        <div class="comment_detail ps-4 mb-5">
                            <p>Hãy là người bình luận đầu tiên</p>
                        </div>
                    <?php
                 }
                 while($row_cmt = mysqli_fetch_assoc($query_cmt)){
                    ?>
                        <div class="comment_detail ps-4 mb-5">
                            <p style="margin-bottom: 0px;"><b><?php echo $row_cmt["commentator"]; ?></b></p>
                            <p class="ps-1"><?php echo $row_cmt["content"]; ?></p>
                        </div>
                    <?php 
                 }
            ?>
        </div>
        <div class="comments mt-2 border-top border-2 p-3">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"><b>Tên người dùng</b></label>
                    <input type="text" class="form-control" name="commentator">
                    <div id="emailHelp" class="form-text">Vui lòng nhập tên của bạn</div>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" name="content" id="floatingTextarea2" style="height: 200px"></textarea>
                    <label for="floatingTextarea2" style="color: #95a5a6;"><b>Bình luận</b></label>
                </div>
                <button type="submit" class="btn btn-warning text-white fw-medium text-sm-start" name="submit">Bình luận</button>
            </form>
        </div>
    </div>
</div>
<?php include "../footer/footer_client.php";?>