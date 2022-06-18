<?php
session_start();
function Getnews()
{
    $connect = mysqli_connect("localhost","root","","cntt1");
    mysqli_set_charset($connect,"utf8");
    if(!$connect)
    {
        die("Không thể kết nối đến đatabase");
    }
    $sql = "select * from posts";
    $res = mysqli_query($connect,$sql);
    while($row = mysqli_fetch_assoc($res))
    {
        echo '<div class="news-content">
                  <i class="bi bi-caret-right-fill"></i><a href="#">'.$row['post_title'].'</a>
                </div>
                <hr class="padinghr">';
    }
    mysqli_close($connect);

}

function firstnews()
{
    $connect = mysqli_connect("localhost","root","","cntt1");
    mysqli_set_charset($connect,"utf8");
    if(!$connect)
    {
        die("Không thể kết nối đến đatabase");
    }
    $sql = "select * from posts";
    $res = mysqli_query($connect,$sql);
    
    mysqli_close($connect);

}



function Getnewscntt()
{
    $connect = mysqli_connect("localhost","root","","cntt1");
    mysqli_set_charset($connect,"utf8");
    if(!$connect)
    {
        die("Không thể kết nối đến đatabase");
    }
    $sql = "select * from posts where categories = 'Viện hàn lâm'";
    $res = mysqli_query($connect,$sql);
    while($row = mysqli_fetch_assoc($res))
    {
        echo '<div class="news-content-cntt">
                  <i class="bi bi-caret-right-fill"></i><a href="#">'.$row['post_title'].'</a>
                </div>
                <hr class="padinghr">';
    }
    mysqli_close($connect);

}



function login()
{

$connect = mysqli_connect("localhost","root","","cntt1");
mysqli_set_charset($connect,"utf8");
if(!$connect)
{
    die("Không thể kết nối đến đatabase");
}

if(isset($_POST['zo']) && $_POST['tentaikhoan'] != '' && $_POST["mkdangnhap"] != '')
    {
        $tentaikhoan = $_POST["tentaikhoan"];
        $mkdangnhap = $_POST["mkdangnhap"];
        $sql = "select * from users where username='$tentaikhoan' and user_password='$mkdangnhap'";
        $tontaiuser = mysqli_query($connect,$sql);
        if(mysqli_num_rows($tontaiuser)>0)
            {
            $_SESSION["user"]=$tentaikhoan;
            header("location:check.php");
            }
        else
        {
            $_SESSION["thongbaodangnhap"]="Sai tên tài khoản hoặc mật khẩu";
            header("location:dangnhap2.php");
        }

        
        
    }
else
{
    $_SESSION["thongbaodangnhap"]="Vui lòng nhập đầy đủ";
    header("location:dangnhap2.php");
}
mysqli_close($connect);
};



function getpost()
{
    $connect = mysqli_connect("localhost","root","","cntt1");
    mysqli_set_charset($connect,"utf8");
    if(!$connect)
    {
        die("Không thể kết nối đến đatabase");
    }
    $sql = "select * from posts ";
    $res = mysqli_query($connect,$sql);
    while($row = mysqli_fetch_assoc($res))
    {
        echo '<tr>
        <th scope="row"> '. $row['post_id'].'</th>
        <td>'. $row['post_author'].'</td>
        <td>'. $row['post_date'].'</td>
        <td>'. $row['post_image'].'</td>
        <td>'. $row['post_title'].'</td>
        <td>'. $row['post_content'].'</td>
        <td>'. $row['categories'].'</td>
        <td><a href="edit.php?post_id='.$row['post_id'].'&post_author='.$row['post_author'].'&post_date='.$row['post_date'].'&post_image='.$row['post_image'].'&post_title='.$row['post_title'].'&post_content='.$row['post_content'].'&post_content='.$row['post_content'].'&categories='.$row['categories'].'"> <i class="me-2 bi bi-pencil-square"></i></a><a href="delete.php?post_id='.$row['post_id'].'"><i class="bi bi-trash-fill"></i></a>
      </tr>';
    }

    mysqli_close($connect);
}


function deletepost($post_id)
{
    $connect = mysqli_connect("localhost","root","","cntt1");
    mysqli_set_charset($connect,"utf8");
    if(!$connect)
    {
        die("Không thể kết nối đến đatabase");
    }
    $sql = "delete from posts where post_id = ". $post_id ."";
    $res = mysqli_query($connect,$sql);

}


function editpost()
{
    $connect = mysqli_connect("localhost","root","","cntt1");
    mysqli_set_charset($connect,"utf8");
    if(!$connect)
    {
        die("Không thể kết nối đến đatabase");
    }
}

?>
