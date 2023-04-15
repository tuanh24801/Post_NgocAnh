<?php include "../header/header_client.php";?>
<?php include "../header/navbar_client.php";?>
<?php 
    require "../../config/config.php";
    if(isset($_POST["submit"])){
        $poster = $_POST["poster"];
        $category = $_POST["category"];
        $title = $_POST["title"];
        $content = $_POST["content"];
        // echo $poster . " " . $category . " " . $title. " " . $content;
        $sql = "INSERT INTO forum_posts(poster, category, title, content) VALUES ('$poster', '$category', '$title', '$content')";
        $query = mysqli_query($conn, $sql);
        if($query > 0){
            header("Location: monstarlab.php");
        }
    }
?>
<div class="container p-5">
    <h2 class="mb-3">Thêm bài viết</h2>
    <form action="" method="post" class="p-5">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"><b>Tên người dùng</b></label>
            <input type="text" class="form-control" name="poster">
            <div id="emailHelp" class="form-text">Vui lòng nhập tên của bạn</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"><b>Chủ đề</b></label>
            <select class="form-select" aria-label="Default select example" name="category"> 
                <option selected>Chọn các chủ đề sau</option>
                <option value="Sản phẩm phần mềm">Sản phẩm phần mềm</option>
                <option value="Chia sẻ kinh nghiệm">Chia sẻ kinh nghiệm</option>
                <option value="Giải đáp">Giải đáp</option>
                <option value="Thư giãn">Thư giãn</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"><b>Tiêu đề</b></label>
            <input type="text" class="form-control" name="title">
            <div id="emailHelp" class="form-text">Tiêu đề của bài viết</div>
        </div>
            <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Leave a comment here" name="content" id="floatingTextarea2" style="height: 200px"></textarea>
            <label for="floatingTextarea2" style="color: #95a5a6;"><b>Nội dung bài viết</b></label>
        </div>
        <button type="submit" class="btn btn-warning text-white fw-medium text-sm-start" name="submit">Lưu</button>
    </form>
</div>
<?php include "../footer/footer_client.php";?>