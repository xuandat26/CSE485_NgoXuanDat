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
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="width: 100%;">
                <div class="card-header">Sửa bài viết</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="post_id">post_id</label>
                        <input type="text" class="form-control" name="post_id" value="<?php echo $_GET['post_id'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="post_author">post_author</label>
                        <input type="text" class="form-control" name="post_author" value="<?php echo $_GET['post_author'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="post_date">post_date</label>
                        <input type="text" class="form-control" name="post_date" value="<?php echo $_GET['post_date'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="post_image">post_image</label>
                        <input type="text" class="form-control" name="post_image" value="<?php echo $_GET['post_image'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="post_title">post_title</label>
                        <input type="text" class="form-control" name="post_title" value="<?php echo $_GET['post_title'] ?>">
                    </div>
                    <div class="form-content">
                        <label for="post_content">post_content</label>
                        <textarea  class="form-control" cols="8" rows="8" name="post_content"><?php echo $_GET['post_content'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="categories">categories</label>
                        <input type="text" class="form-control" name="categories" value="<?php echo $_GET['categories'] ?>">
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</div>
    </body>
</html>