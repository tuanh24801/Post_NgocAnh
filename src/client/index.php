<?php include "../header/header_client.php";?>
<?php include "../header/navbar_client.php";?>
    <div class="container main">


      <div class="row p-5">
        <div class="col-md-12 mt-4 p-3">
          <h1>Tin tức</h1>
        </div>
      </div>

      <div class="row search_category mb-3">
        <div class="col_"> 
              <div class="input-group col-md-4">
                <form action="" method="get" class="search_">
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

        <div class="col_">
          <div class="d-flex main-filter">
            <div class="nav-item dropdown">
              <select
                class="form-select form-select-md p-3"
                aria-label=".form-select-lg example"
                id="category"
              >
                <option value="null" <?php echo (!isset($_GET["filter"])) ? "selected" : ""?>>Danh mục</option>
                <option value="Careers" <?php echo (isset($_GET["filter"]) && $_GET["filter"] == "Careers") ? "selected" : ""?>>Careers</option>
                <option value="Announcemer" <?php echo (isset($_GET["filter"]) && $_GET["filter"] == "Announcemer") ? "selected" : ""?>>Announcemer</option>
                <option value="Press Release" <?php echo (isset($_GET["filter"]) && $_GET["filter"] == "Press Release") ? "selected" : ""?>>Press Release</option>
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
    <script>
      $("#category").change((e) => {
        let str = "";
        $( "select option:selected" ).each(function() {
          str += $( this ).text() + " ";
        });
        window.location.href = "?filter="+str;
      })
    </script>
<?php include "../footer/footer_client.php";?>