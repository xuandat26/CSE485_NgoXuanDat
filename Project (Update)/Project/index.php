<?php
include('functions.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <link rel="stylesheet" href="style.css" class="css">
        <title>DailyNews</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <link rel="icon" href="img/_Logo.png" type="img/x-icon"> 
        
    </head>
    <body>
        <header class="row container-fluid" id="header">
            <div class="col-3" id="logo">
                <a href="http://localhost:81/Project/index.php"><img src="img/_Logo.png"></a>
            </div>
            <div class="col d-flex align-items-center">
                <p class="text-uppercase text-primary fw-bold " id="name">Nguyễn Đức Long và Ngô Xuân Đạt</br>Lớp 60HT</p>
                <img id="bghd" src="img/bg1.jpg.opdownload">
                

            </div>
        </header>
        <div>
          <!-- Navigation -->
            <nav class="navbar navbar-expand-lg bg-primary navigation">
                <div class="container-fluid">
                  <div class="collapse navbar-collapse divnav" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item dropdown text-uppercase mydropdown-up">
                        <a class="nav-link dropdown-toggle text-light atag" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Giới thiệu
                        </a>
                        <ul class="dropdown-menu bg-primary text-light " aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item mydropdown-down" href="#">Giới thiệu chung</a></li>
                          <li><a class="dropdown-item mydropdown-down" href="#">Lãnh đạo qua các thời kỳ</a></li>
                          <li><a class="dropdown-item mydropdown-down" href="#">Ban lãnh đạo</a></li>
                          <li><a class="dropdown-item mydropdown-down" href="#">Cơ cấu tổ chức</a></li>
                          <li><a class="dropdown-item mydropdown-down" href="#">Chiến lược , tầm nhìn</a></li>
                     
                        </ul>
                      </li>
                      <li class="nav-item dropdown text-uppercase mydropdown-up">
                        <a class="nav-link dropdown-toggle text-light atag" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Tin tức
                        </a>
                        <ul class="dropdown-menu bg-primary text-light" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item mydropdown-down" href="#">Tin Viện Công Nghệ thông tin</a></li>
                          <li><a class="dropdown-item mydropdown-down" href="#">Tin viện Hàn Lâm KH&CN Việt Nam</a></li>
                          <li><a class="dropdown-item mydropdown-down" href="#">Tin Nghành Công nghệ thông tin</a></li>
                          <li><a class="dropdown-item mydropdown-down" href="#">Công khai nhiệm vụ khoa học công nghệ</a></li>
                          
                        </ul>
                      </li>
                      <li class="nav-item dropdown text-uppercase mydropdown-up">
                        <a class="nav-link dropdown-toggle text-light atag" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Nghiên cứu
                        </a>
                        <ul class="dropdown-menu bg-primary text-light" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item mydropdown-down" href="#">Đào tạo Nghiên cứu sinh</a></li>
                          <li><a class="dropdown-item mydropdown-down" href="#">Tin học</a></li>
                          <li><a class="dropdown-item mydropdown-down" href="#">Công nghệ mạng , truyền thông và đa phương tiện</a></li>
                          <li><a class="dropdown-item mydropdown-down" href="#">Cơ sở toán học của CNTT</a></li>
                          <li><a class="dropdown-item mydropdown-down" href="#">Tự động hóa</a></li>
                          <li><a class="dropdown-item mydropdown-down" href="#">Đè tài</a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown text-uppercase mydropdown-up">
                        <a class="nav-link dropdown-toggle text-light atag" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Ứng dụng
                        </a>
                        <ul class="dropdown-menu bg-primary text-light" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item mydropdown-down" href="#">Sản phẩm ứng dụng</a></li>
                          <li><a class="dropdown-item mydropdown-down" href="#">Các hợp đồng đã triển khai</a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown text-uppercase mydropdown-up">
                        <a class="nav-link dropdown-toggle text-light atag" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Hợp tác-Đào tạo
                        </a>
                        <ul class="dropdown-menu bg-primary text-light" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item mydropdown-down" href="#">Thông tin hợp tác quốc tế</a></li>
                          <li><a class="dropdown-item mydropdown-down" href="#">Các đối tác Hợp tác-Đào tạo</a></li>
                          <li><a class="dropdown-item mydropdown-down" href="#">Định hướng đào tạo</a></li>
                          <li><a class="dropdown-item mydropdown-down" href="#">Cơ sở đào tạo</a></li>
                          <li><a class="dropdown-item mydropdown-down" href="#">Thông tin học bổng</a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown text-uppercase mydropdown-up">
                        <a class="nav-link dropdown-toggle text-light atag" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Tư vấn
                        </a>
                        <ul class="dropdown-menu bg-primary text-light" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item mydropdown-down" href="#">Thông báo</a></li>
                          <li><a class="dropdown-item mydropdown-down" href="#">Văn bản pháp quy</a></li>
                          <li><a class="dropdown-item mydropdown-down" href="#">Tìm kiếm văn bản</a></li>                       
                        </ul>
                      </li>
                      <li class="nav-item dropdown text-uppercase mydropdown-up">
                        <a class="nav-link dropdown-toggle text-light atag" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Văn bản
                        </a>
                        <ul class="dropdown-menu bg-primary text-light" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item mydropdown-down" href="#">Tin tức</a></li>
                          <li><a class="dropdown-item mydropdown-down" href="#">Văn bản</a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown text-uppercase mydropdown-up">
                        <a class="nav-link dropdown-toggle text-light atag" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Thông báo
                        </a>
                        <ul class="dropdown-menu bg-primary text-light" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item mydropdown-down" href="#">Giới thiệu chung</a></li>
                          <li><a class="dropdown-item mydropdown-down" href="#">Giới thiệu chung</a></li>
                          <li><a class="dropdown-item mydropdown-down" href="#">Giới thiệu chung</a></li>
                          <li><a class="dropdown-item mydropdown-down" href="#">Giới thiệu chung</a></li>
                        </ul>
                      </li>
                     
                   
                    </ul>
                    <div class="searchbox">
                      <input class="inputbox" placeholder="Nhập từ cần tìm "><a class="search-btn" href="#"><i class="bi bi-search"></i></a>

                    </div>
                    <button class="login-btn"><i class="bi bi-person-circle"></i><a class="text-decoration-none text-light" href="http://localhost:8086/X/login.php">Đăng nhập</a></button>
                      
                 
                  </div>
                </div>
              </nav>
        </div>

        <!-- Main content-->
        <div class="mainbody">
          <div class="col pading">
          </div>
          <div class="col-9 bg-white  content pt-2 ps-2 me-2">
            <div class="d-flex">
              <div id="carouselExampleIndicators" class="carousel slide slider" data-bs-ride="true">
          
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/slide1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      Lãnh đạo Viện thăm và làm việc với Viện Khoa học và Công nghệ tiên tiến Hàn Quốc
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/slide2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      Lãnh đạo Viện thăm và làm việc với Viện Khoa học và Công nghệ tiên tiến Hàn Quốc
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/slide3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      Lãnh đạo Viện thăm và làm việc với Viện Khoa học và Công nghệ tiên tiến Hàn Quốc
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              <div class=" new-news ms-2">
                <p class="mt-3 ms-2 "><i class="bi bi-megaphone-fill"></i> Tin tức sự kiện</p>
                <div class="spacing-new-news d-flex bg-primary">
                </div>
                <div class="d-block new-news-content">
                
                  <?php
                    Getnews();
                  ?>
                </div>

              </div>
            </div>
            <div class="d-flex">
              <div class="part1">
                <div class="d-flex">
                  <div class="col">
                    <div class="firstnewscntt">
                      <a class="noidea" href="#">Tin viện công nghệ thông tin</a>
                      <img class="mb-2 mt-2" src="img/news1.jpg">
                      <a class="firstnewscntt-title" href="#">Ứng dụng giải pháp chuyển đổi số nhằm nâng cao năng suất, chất lượng sản phẩm trong nuôi trồng thủy sản ở tỉnh Ninh Thuận</a>
                      <p class="firstnewscntt-content">Sáng ngày 08/6/2022, Viện Công nghệ thông tin thuộc Viện Hàn lâm Khoa học và Công nghệ Việt Nam phối hợp với Sở Khoa học và Công nghệ tỉnh Ninh Thuận Sáng ngày 08/6/2022, Viện Công nghệ thông tin thuộc Viện Hàn lâm Khoa học và Công nghệ Việt Nam phối hợp với Sở Khoa học và Công nghệ tỉnh Ninh Thuận</p>
                      <?php
                        Getnewscntt();
                      ?>
                    </div>
                  </div>
                  <div class="myspace">
                    
                  </div>
                  <div class="col">
                  <div class="firstnewscntt">
                      <a class="noidea " href="#">Tin viện hàn lâm KH & CN Việt Nam</a>
                      <img class="mb-2 mt-2" src="img/news2.png">
                      <a class="firstnewscntt-title" href="#">Chủ tịch Viện Hàn lâm Khoa học và Công nghệ Việt Nam họp trực tuyến với Chủ tịch đoàn Chủ tịch Viện Hàn lâm Khoa học Quốc gia Belarus</a>
                      <p class="firstnewscntt-content">Tiếp theo buổi làm việc với Tân Đại sứ Belarus tại Việt Nam và các nhà khoa học Belarus, ngày 20/4/2022, GS. VS. Châu Văn Minh, Chủ tịch Viện Tiếp theo buổi làm việc với Tân Đại sứ Belarus tại Việt Nam và các nhà khoa học Belarus, ngày 20/4/2022, GS. VS. Châu Văn Minh, Chủ tịch Viện...</p>
                      <?php
                        Getnewscntt();
                      ?>
                    </div>
                  </div>
                </div>
            
                <div class="spacing mt-3">
                </div>
                <div class="new-cntt2 d-flex">
                  <div class="col1" >
                    <div class="cntt2-title">
                      <a class="noidea " href="#">Tin nghành công nghệ thông tin</a>
                    
                    </div>
                    <div class="cntt-content">
                      <img class="mb-2 mt-2" src="img/news1.jpg">
                      <a class="firstnewscntt-title" href="#">Ứng dụng giải pháp chuyển đổi số nhằm nâng cao năng suất, chất lượng sản phẩm trong nuôi trồng thủy sản ở tỉnh Ninh Thuận</a>
                      <p class="firstnewscntt-content">Sáng ngày 08/6/2022, Viện Công nghệ thông tin thuộc Viện Hàn lâm Khoa học và Công nghệ Việt Nam phối hợp với Sở Khoa học và Công nghệ tỉnh Ninh Thuận Sáng ngày 08/6/2022, Viện Công nghệ thông tin thuộc Viện Hàn lâm Khoa học và Công nghệ Việt Nam phối hợp với Sở Khoa học và Công nghệ tỉnh Ninh Thuận</p>
                    </div>
                  </div>
                  <div class="myspace">
                    
                    </div>
                  <div class="col2"><?php
                  Getnewscntt() ?>
                  <div class="news-content-cntt">
                  <i class="bi bi-caret-right-fill"></i><a href="#">tin sieu nong hoi</a>
                </div>
                <hr class="padinghr">'</div>

                </div>
                
             
              </div>

              <div class="part2 ms-2">
                <div class="worktime-box">
                  <div class="bg-primary d-flex d-flex align-items-center titletimebox">
                  <i class="d-flex bi bi-clock ms-2 fs-3 "></i>  
                  <p class="mb-0 ms-2 fw-bold text-uppercase fs-6">Lịch làm việc</p>
                  
                  </div>
                  <div class="">
                    <div class="menutime-box d-flex">
                    <i class="bi bi-caret-right-fill"></i><a href="#">Giới thiệu về viện</a>
                    </div>
                   
                    <div class="menutime-box d-flex">
                    <i class="bi bi-caret-right-fill"></i><a href="#">Lịch làm việc Viện Công nghệ thông tin </a>
                    </div>
                  </div>
                   

                </div>
                <div class="imglib mt-3">
                  <div class="d-flex col bg-primary imglib-title ">
                    <i class="bi bi-images  ms-2 fs-3"></i>
                    <p class="mb-0 ms-2 fw-bold text-uppercase fs-6"> THƯ VIỆN ẢNH</p>
                  </div>
                  <div class="col">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="img/libimg1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="img/libimg2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="img/libimg3.jpg" class="d-block w-100" alt="...">
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col govlink">
                <a href="https://chinhphu.vn/"><img src="img/logo_1.png" alt=""></a>
                <a href="https://vast.gov.vn/"><img src="img/logo_2.png" alt=""></a>
                <a href="http://ioit.ac.vn/phong-thi-nghiem-trong-diem"><img src="img/logo_3.png" alt=""></a>
                <a href="https://hoithaoquocgiacntt.ac.vn/"><img src="img/logo_4.png" alt=""></a>
                <a href="https://vjs.ac.vn/index.php/jcc"><img src="img/logo_5.png" alt=""></a>
              </div>
              </div>
            </div>

            </div>

     
      
          <div class="col pading d-block">
      

          </div>


        </div>
        <?php 
          include 'footer.php';
        ?> 
      
    <script src="java.js"></script>
    </body>
</html>