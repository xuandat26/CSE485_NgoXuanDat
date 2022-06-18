<?php
    include 'functions.php';
    if(isset($_GET['post_id']))
    {
        $post_id = $_GET['post_id'];
        deletepost($post_id);
        header('location:postmn.php');
        $_SESSION['deletenoti']= 'Xóa thành công';
    }
    else
    {
        echo 'errror';
    };
?>