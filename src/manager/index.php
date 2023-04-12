<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />    
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="./style-upload.css" />
    <link rel="icon" type="image/ico" href="../../assets/favicon.ico" />
    <title>Manager</title>
  </head>
  <body>
  <div class="p-5 mt-5">
      <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top navhead">
        <div class=" p-4 header">
          <a class="navbar-brand header-logo" href="index.php">
            <img src="../../assets/logo.png" alt="" />
          </a>
          <div class="right-menu">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav header-menu">
                  <a class="nav-link me-3" href="../client/index.php">Trang chủ</a>
                  <a class="nav-link me-3" href="post_manager.php">Bài viết</a>
                  <a class="nav-link me-3" href="index.php">Thêm bài viết</a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>

    <div class="container">
        <h1 class="title-page">Đăng bài viết</h1>
        <p class="text-center textnotif"><?php session_start(); echo isset($_SESSION["notif"]) ? $_SESSION["notif"] : ""; unset($_SESSION["notif"]); ?></p>
        <form method="post" action="handlePostAdd.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Tiêu đề</label>
                <input type="text" class="form-control" placeholder="Nhập tiêu đề" name="title">
            </div>
            <div class="form-group">
                <label for="category">Danh mục</label><br>
                <select class="form-select" aria-label="Default select example" name="category">
                  <option value="Careers" selected>Careers</option>
                  <option value="Announcemer">Announcemer</option>
                  <option value="Press Release">Press Release</option>
                </select>
            </div>
            <div class="form-group">
                <label for="image-title">Ảnh chủ đề</label>
                <input type="file" class="form-control" name="img_title">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nội dung</label>
                <textarea id="summernote" name="content"></textarea>
            </div>
            <input type="submit" value="Đăng bài" class="btn btn-primary" name="submit" />
        </form>
    </div>

    <script>
        $(document).ready(function() {
        $("#summernote").summernote({
        placeholder: 'Nội dung bài viết...',
                height: 300,
                callbacks: {
                onImageUpload : function(files, editor, welEditable) {

                    for(var i = files.length - 1; i >= 0; i--) {
                            sendFile(files[i], this);
                    }
                }
            }
            });
        });

        function sendFile(file, el) {
        var form_data = new FormData();
        form_data.append('file', file);
            $.ajax({
                data: form_data,
                type: "POST",
                url: 'editor-upload.php',
                cache: false,
                contentType: false,
                processData: false,
                success: function(url) {
                    $(el).summernote('editor.insertImage', url);
                }
            });
        }
    </script>
</body>
</html>