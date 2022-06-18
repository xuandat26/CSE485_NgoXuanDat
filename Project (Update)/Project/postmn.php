<?php
include 'functions.php';
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

    </head>
    <body>
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="adminmn.php">Trang chủ</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="postmn.php">Quản lí bài viết</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="usermn.php">Quản lí nhân viên</a>
        </li>
       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div>
    <button class="bg-primary text-light" ><i class="bi bi-plus-circle me-1"></i><a href="addpost.php" class="text-decoration-none text-light">Thêm bài viết mới</a></button>
</div>
<div class="d-flex justify-content-center" style="width: 100%;">
  <p class="text-light bg-success"><?php
      if(isset($_SESSION['deletenoti']))
    {
      echo $_SESSION['deletenoti'];
      session_destroy();
    }
   ?>
  </p>

</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Post ID</th>
      <th scope="col">Post author</th>
      <th scope="col">Post Date</th>
      <th scope="col">Post image</th>
      <th scope="col">Post title</th>
      <th scope="col">Post content</th>
      <th scope="col">Categories</th>
      <th scope="col">control</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
        getpost();
    ?>
  </tbody>
</table>
    </body>
</html>