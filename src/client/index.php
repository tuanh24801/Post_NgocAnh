<?php include "../header/header_client.php";?>
<?php include "../header/navbar_client.php";?>
    <div class="container main">

      <div class="row p-5">
        <div class="col-md-12 mt-4 p-3">
          <h1>Tin tức</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="d-flex main-filter">
            <div class="nav-item dropdown main-btn-filter p-3">
              <select
                class="form-select form-select-md mb-3"
                aria-label=".form-select-lg example"
              >
                <option selected>Danh mục</option>
                <!-- <option value="1">2021</option>
                <option value="2">2022</option>
                <option value="3">2023</option> -->
              </select>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="main-post p-3">
          <?php include "./post_list.php"; ?>

        </div>
      </div>
    </div>
<?php include "../footer/footer_client.php";?>