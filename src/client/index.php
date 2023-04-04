<?php include "../header/header.php";?>
<div class="container p-5">
      <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top navhead">
        <div class="container p-4 header">
          <a class="navbar-brand header-logo" href="#">
            <img src="./assets/logo.png" alt="" />
          </a>
          <div class="right-menu">
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNavAltMarkup"
              aria-controls="navbarNavAltMarkup"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav header-menu">
                <a class="nav-link me-3" href="#">Dịch vụ</a>
                <a class="nav-link me-3" href="#">Dự án</a>
                <a class="nav-link me-3" href="#">Monstarlab</a>
                <a class="nav-link me-3" href="#">Tuyển dụng</a>
                <a class="nav-link" href="admin.html">Admin</a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <div class="container main">
      <div class="row p-5">
        <div class="col-md-12 mt-4 mb-4 p-3">
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
                <option value="1">2021</option>
                <option value="2">2022</option>
                <option value="3">2023</option>
              </select>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="main-post p-3">

          <div class="post">
            <a href="">
              <div class="post-img">
                <img
                  src="./img-uploads/1680535131.png"
                  class="img-fluid rounded-start"
                  alt="..."
                />
              </div>
              <div class="post-content">
                <p class="post-title">
                  MONSTARLAB HỢP NHẤT VỚI A.C.O., ĐẨY MẠNH DỊCH VỤ TƯ VẤN THIẾT
                  KẾ DỊCH VỤ TƯ VẤN THIẾT KẾ
                </p>
                <p class="post-date">03/02/2023</p>
                <p class="post-detail">xem chi tiết</p>
              </div>
            </a>
          </div>

          <div class="post">
            <a href="">
              <div class="post-img">
                <img
                  src="./img-uploads/1680535178.png"
                  class="img-fluid rounded-start"
                  alt="..."
                />
              </div>
              <div class="post-content">
                <p class="post-title">
                  MONSTARLAB HỢP NHẤT VỚI A.C.O., ĐẨY MẠNH DỊCH VỤ TƯ VẤN THIẾT
                  KẾ DỊCH VỤ TƯ VẤN THIẾT KẾ
                </p>
                <p class="post-date">03/02/2023</p>
                <p class="post-detail">xem chi tiết</p>
              </div>
            </a>
          </div>


        </div>
      </div>
    </div>
    <div class="footer">
      <div class="container row p-5 footer-container">
        <!-- <div class="col-3"></div> -->
        <div class="col-md-3">
          <ul class="footer-list">
            <li>
              <a href=""><img src="./assets/logo_white.png" alt="" /></a>
            </li>
            <li>Dịch vụ</li>
            <li>Dự án</li>
            <li>Monstarlab</li>
            <li>Liên hệ</li>
          </ul>
          <p class="footer-copyright">&copy; 2006-2022 Monstarlab</p>
        </div>
        <div class="col-5"></div>
        <div class="col-md-3 mt-3 footer-contact">
          <h1>Liên hệ</h1>
          Hãy cho chúng tôi biết chúng tôi có thể giúp gì cho bạn. Người phụ trách của chúng tôi sẽ liên hệ lại với bạn trong thời gian sớm nhất.
        </div>
      </div>
    </div>
<?php include "../footer/footer.php";?>