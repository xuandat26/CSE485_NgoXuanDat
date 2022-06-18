<?php
    include 'header.php';

?>
    <div class="mainbody">
    <div class="col pading">
    </div>
    <div class="col-9 bg-white  content pt-2 ps-2 me-2">
        <div class="d-flex">
           <div class="part1 me-2">
                <h4 class="text-primary"> Đăng nhập</h4>
                <div class="spacing mt-3 me-3">
                </div>
                <form class="mt-3" action="login_check.php" method="POST" >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="tentaikhoan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="mkdangnhap" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <div class="mb-3 d-flex justify-content-center">
  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
 
  </div>
  <a href="register.php">Chưa có tài khoản ? đăng ký ngay</a> 
</form>

                <?php
                                if(isset($_SESSION["thongbaodangnhap"]))
                                {
                                    echo $_SESSION["thongbaodangnhap"];
                                    session_destroy();
                                }
                ?>
                    
                    
                

               
            </div>
            <div  class="part2">
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

