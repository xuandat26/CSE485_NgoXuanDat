<?php
session_start();
$connect = mysqli_connect("localhost","root","","cntt1");
mysqli_set_charset($connect,"utf8");
if(!$connect)
{
    die("Không thể kết nối đến đatabase");
}


if(isset($_POST['gui']) && $_POST["user_name"] != '' && $_POST["user_password"] != '' && $_POST["repassword"] != '' && $_POST["user_email"] !='')
{
    $user_name = $_POST["user_name"];
    $user_password = $_POST["user_password"];
    $repassword = $_POST["repassword"];
    $user_email = $_POST["user_email"];
    if(strlen($user_name)< 6)
    {
        $_SESSION["thongbao"]="kí tự tên đăng nhập phải lớn hơn 6";
        header("location:register.php");
        die();
    }
    if(strlen($user_password)< 6)
    {
        $_SESSION["thongbao"]="kí tự mật khẩu phải lớn hơn 6";
        header("location:register.php");
        die();
    }
    if( $repassword != $user_password )
    { 
        $_SESSION["thongbao"]="Mật khẩu không khớp";
        header("location:register.php");
        die();
    }
    else
    {
        $sql = "select * from users where user_email = '$user_email'";
        $old = mysqli_query($connect,$sql);
        if(mysqli_num_rows($old)>0)
        {
            $_SESSION["thongbao"]="Tài khoản đã tồn tại";
            header("location:register.php");
            die();
        }
        else
        {
            $level = 0 ;
            $sql = "insert into users (username,user_password,user_email) values ('$user_name','$user_password','$user_email')";
            mysqli_query($connect,$sql);
            $_SESSION["thongbao"]="Chức mừng bạn đã đăng ký thành công";
            header("location:login.php");

        }
    
    
    }


}
else {
    $_SESSION["thongbao"]="vui lòng nhập đầy đủ dữ liệu";
    header("location:register.php");
         
    }

?>

