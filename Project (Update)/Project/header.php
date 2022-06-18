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
                    </div>
                </div>
              </nav>