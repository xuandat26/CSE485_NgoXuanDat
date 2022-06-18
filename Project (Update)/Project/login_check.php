<?php
session_start();

$connect = mysqli_connect("localhost","root","","cntt1");
mysqli_set_charset($connect,"utf8");
if(!$connect)
{
    die("Không thể kết nối đến đatabase");
}

if(isset($_POST['submit']) && $_POST['tentaikhoan'] != '' && $_POST["mkdangnhap"] != '')
    {
        $tentaikhoan = $_POST["tentaikhoan"];
        $mkdangnhap = $_POST["mkdangnhap"];
        $sql = "select * from users where user_email='$tentaikhoan' and user_password='$mkdangnhap'";
        $tontaiuser = mysqli_query($connect,$sql);
        if(mysqli_num_rows($tontaiuser)>0)
            {
            $_SESSION["user"]=$tentaikhoan;
            header("location:adminmn.php");
            }
        else
        {
            $_SESSION["thongbaodangnhap"]="Sai tên tài khoản hoặc mật khẩu";
            header("location:login.php");
        }

        
        
    }
else
{
    $_SESSION["thongbaodangnhap"]="Vui lòng nhập đầy đủ";
    header("location:login.php");
}
?>