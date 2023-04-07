<?php include "../header/header_client.php";?>
<?php include "../header/navbar_client.php";?>
<div class="container p-5">
    <?php 
        if(!isset($_GET["id"])){
            echo '<h1 class="text-center title_detail">KHÔNG TỒN TẠI</h1>';
            die();
        }
        $id = $_GET["id"];
        include "../../config/config.php";
        $sql_get_one = "SELECT * FROM post WHERE id = '$id'";
        $query = mysqli_query($conn, $sql_get_one);
        $row = mysqli_fetch_assoc($query);

        $sql_get_comments = "SELECT COUNT(name) as sum_comment FROM comment WHERE post_id = '$id'";
        $query_comment = mysqli_query($conn, $sql_get_comments);
        $row_comment = mysqli_fetch_assoc($query_comment);
    ?>
    <div class="post_detail">
        <h1 class="mt-3 mb-4 title_detail"><?php echo $row['title'] ?></h1>
        <p class="mt-3 mb-4 date_detail"><?php echo $row['date'] ?></p>
        <div class="post_interact mb-3">
            <div class="post_i_like">
                <i class="fa-sharp fa-solid fa-heart" id="heart_icon"></i> <?php echo $row['interact'] ?>
            </div>
            <div class="post_i_comment">
                <i class="fa-solid fa-message" id="comment_icon"></i> <?php echo $row_comment['sum_comment']?>
            </div>
        </div>  
        <img src="../manager/img-titles/<?php echo $row['img_title'] ?>" alt="">
        <p class="mt-5 content_detail">
            <?php echo $row['content'] ?></p>  
        </p>
    </div>  
    <div class="black_bg" id="black_bg"></div>
    <div class="post_comment" id="comment_bg">
        <div class="close_comment_icon" id="close_comment_icon"><i class="fa-solid fa-xmark"></i></div>
        <h2 class="post_comment_head">Bình luận</h2>
        <form class="post_comment_post d-flex" action="./handle_comment.php" method="post">
            <input type="text" class="form-control me-3" id="exampleInputPassword1" name="comment">
            <input type="hidden" name="id" value="<?php echo $id;?>" id="post_id">
            <button type="submit" class="btn btn-secondary btn-comment" name="submit">Gửi</button>
        </form>
        <div class="post_comment_list"> 
            <p class="post_sum_comment"><b><?php echo $row_comment['sum_comment']?> Bình luận</b></p>

            <?php   
                $sql_get_comments = "SELECT * FROM comment WHERE post_id = '$id'";
                $query = mysqli_query($conn, $sql_get_comments);
                while($row = mysqli_fetch_assoc($query)){
                    ?>
                        <div class="post_comment_detail mb-3 mt-4">
                            <img src="./img_comment/<?php echo $row["avatar"];?>" alt="">
                            <div class="name_and_content">
                                <p class="comment_username"><b><?php echo $row["name"];?></b></p>
                                <p class="comment_content">
                                    <?php echo $row["content"];?>
                                </p>
                            </div>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>

</div>
<script>
    const open_comment = () => {
        $("#black_bg").css("display", "block");
        $("#comment_bg").css("display", "block");
    }
    const close_comment = () => {
        $("#black_bg").css("display", "none");
        $("#comment_bg").css("display", "none");
    }
    $("#comment_icon").click(() => open_comment());
    $("#black_bg").click(() => close_comment());
    $("#close_comment_icon").click(() => close_comment());

    $(".post_i_like").click( () => {
        var id = $("#post_id").val();
        $.post("handle_heart_post.php",
        {
            interact: "1",
            id:id
        },
        function(data){
            $(".post_i_like").html('<i class="fa-sharp fa-solid fa-heart" id="heart_icon"></i>'+data);
            console.log(data);
        });
    });

</script>
<link rel="stylesheet" href="../../style.css" />
<?php include "../footer/footer_client.php";?>